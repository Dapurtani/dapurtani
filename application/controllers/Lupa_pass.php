<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_Pass extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
      $this->load->model('app');
	}

   public function index()
   {
      if ($this->input->post('submit', TRUE) == 'Submit')
      {
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

         if ($this->form_validation->run() == TRUE)
         {
            $get = $this->app->get_where('t_users', array('email' => $this->input->post('email', TRUE)));

            if ($get->num_rows() > 0)
            {
               //proses
               $this->load->library('email');

		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Dapurtani';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "400";
		$config['smtp_user']= "infodapurtani@gmail.com"; // isi dengan email kamu
		$config['smtp_pass']= "dapurtani.com2018"; // isi dengan password kamu
		$config['crlf']="\r\n";
		$config['newline']="\r\n";
		$config['wordwrap'] = TRUE;
		//memanggil library email dan set konfigurasi untuk pengiriman email

        $this->email->initialize($config);
        
        $key = md5(md5(time()));
		//konfigurasi pengiriman
		$this->email->from($config['smtp_user']);
		$this->email->to($this->input->post('email', TRUE));
		$this->email->subject("Dapurtani");
		$this->email->message(
                  'Apakah anda lupa dengan password anda ? silahkan klik <a href="'.base_url().'lupa_pass/reset/'.$key.'">disini</a> . Jika anda tidak merasa request fitur ini, silahkan abaikan pesan ini'
               );

               if ($this->email->send())
               {
                  $data['reset'] = $key;
                  $cond['email'] = $this->input->post('email', TRUE);
                  $this->app->update('t_users', $data, $cond);

                  $this->session->set_flashdata('success', "Email berhasil dikirim.. silahkan cek email anda");
               } else {
                  $this->session->set_flashdata('alert', "Email gagal dikirim... silahkan coba lagi..");
               }

            } else {
               //pesan
               $this->session->set_flashdata('alert', "email yang anda masukkan tidak terdaftar");
            }
         }
      }
		$this->load->view('user/lost_pass');
   }

	public function reset()
	{
		if ($this->uri->segment(3))
		{
			$this->load->view('user/form_reset');

			if ($this->input->post('submit', TRUE) == 'Submit')
			{
				$this->form_validation->set_rules('pass1', 'Password Baru', 'required|min_length[5]');
				$this->form_validation->set_rules('pass2', 'Ketik Ulang Password', 'required|matches[pass1]');

				if ($this->form_validation->run() == TRUE)
				{
					$pass = $this->input->post('pass1', TRUE);
                    $data['password'] = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
                    $data['pass'] = ($pass);
					$data['reset'] = '';

					$cond['reset'] = $this->uri->segment(3);

					$this->app->update('t_users', $data, $cond);

					$this->session->set_flashdata('success', "Password berhasil diperbarui");

					redirect('home');
				}
			}
		} else {
			redirect('lupa_pass');
		}
	}
}
