<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
{
    parent::__construct();
    $this->load->library(array('template', 'cart', 'form_validation', 'email', 'session'));
    $this->load->model('admin');
    $this->load->helper(['form','security','string']);
}

	public function index()
	{
    //echo password_hash('admin', PASSWORD_DEFAULT, ['cost' => 10]);
    if ($this->input->post('submit') == 'Submit')
    {
      $user = $this->input->post('username', TRUE);
      $pass = $this->input->post('password', TRUE);

      $cek  = $this->admin->get_where('t_admin', array('username' => $user));

      if ($cek->num_rows() > 0) {
        $data = $cek->row();

        if (password_verify($pass, $data->password))
        {
          $datuser = array(
            'admin'     => $data->id_admin,
            'user'      => $data->username,
            'fullname'  => $data->fullname,
            'level'     => $data->level,
            'login'     => TRUE
          );

          $this->session->set_userdata($datuser);

          redirect('administrator');
      } else {

        $this->session->set_flashdata('alert', "Password yang anda masukkan salah..");

      }

    } else {
      $this->session->set_flashdata('alert', "Username ditolak..");
    }

  }

    if ($this->session->userdata('login') == TRUE)
    {
      redirect('administrator');
    }
    $this->load->view('admin/login_form');
  }

  public function t_admin()
	{
    $data['data'] = $this->admin->get_all('t_admin');
    $this->template->admin('admin/manage_admin', $data);
	}
  
  public function update()
  {
    $id_admin = $this->uri->segment(3);
    if ($this->input->post('submit', TRUE) == 'Submit') {
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
      $this->form_validation->set_rules('password', 'Pass');
      $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
      
      if ($this->form_validation->run() == TRUE) {
        $admin = array(
          'username' => $this->input->post('username', TRUE),
          'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT, ['cost' => 10]),
          'fullname' => $this->input->post('fullname', TRUE),
        );
        $this->admin->update('t_admin', $admin, array('id_admin' => $id_admin));
        echo '<script type="text/javascript">alert("Berhasil di ubah");window.location.replace("'.base_url('administrator').'")</script>';
      }
    }
    
    $data['data'] = $this->admin->get_where('t_admin', ['id_admin' =>$this->uri->segment(3)]);
    $this->template->admin('admin/admin_form', $data);
  }

  public function logout()
  {
    $this->session->sess_destroy();

    redirect('login');

  }

  public function hapus($id_admin)
  {
    $where = array('id_admin' => $id_admin);
    $this->admin->hapus_data($where,'t_admin');
    redirect('login/t_admin');
  }

}
