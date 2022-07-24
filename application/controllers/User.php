<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library(['template', 'form_validation','email','session']);
    $this->load->model('admin');
    $this->load->helper(['form','security']);
  }

	public function index()
	{
    $this->cek_login();
    $data['data'] = $this->admin->get_all('t_users');
    $this->template->admin('admin/manage_user', $data);
	}

  public function promo()
  {
    $this->cek_login();
    $data['data'] = $this->admin->komentar('t_s_pemesanan');
    $this->template->admin('admin/manage_promo', $data);
  }


  public function status()
  {
    $this->cek_login();

    if (!is_numeric($this->uri->segment(3)) || !is_numeric($this->uri->segment(4)))
    {
      redirect('user');
    }

    $this->admin->update('t_users', ['status' => $this->uri->segment(3)], ['id_user' =>$this->uri->segment(4)]);

    redirect('user');
  }

  public function detail()
  {
    $this->cek_login();

    if (!is_numeric($this->uri->segment(3)))
    {
      redirect('user');
    }

    $data['data'] = $this->admin->get_where('t_users', ['id_user' =>$this->uri->segment(3)]);

    $this->template->admin('admin/detail_user', $data);
  }

  public function update_user()
  {
    $id_user = $this->uri->segment(3);
    if ($this->input->post('submit', TRUE) == 'Submit') {
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
      $this->form_validation->set_rules('pass', 'Pass');
      $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('telp', 'Telp', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required');
      $this->form_validation->set_rules('nama', 'Nama Kantor');
      $this->form_validation->set_rules('kantor', 'Alamat Kantor');
      $this->form_validation->set_rules('promo', 'Promo');
      $this->form_validation->set_rules('s_pemesanan', 'S_Pemesanan');
      $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai');
      $this->form_validation->set_rules('tgl_akhir', 'Tanggal Berakhir');

      if ($this->form_validation->run() == TRUE) {
        $user = array(
          'username' => $this->input->post('username', TRUE),
          'pass' => $this->input->post('pass', TRUE),
          'password' => password_hash($this->input->post('pass', TRUE), PASSWORD_DEFAULT, ['cost' => 10]),
          'fullname' => $this->input->post('fullname', TRUE),
          'email' => $this->input->post('email', TRUE),
          'telp' => $this->input->post('telp', TRUE),
          'alamat' => $this->input->post('alamat', TRUE),
          'nama' => $this->input->post('nama', TRUE),
          'kantor' => $this->input->post('kantor', TRUE),
          'promo' => $this->input->post('promo', TRUE),
          's_pemesanan' => $this->input->post('s_pemesanan', TRUE),
          'tgl_mulai' => $this->input->post('tgl_mulai', TRUE),
          'tgl_akhir' => $this->input->post('tgl_akhir', TRUE),
        );
        $this->admin->update('t_users', $user, array('id_user' => $id_user));
        echo '<script type="text/javascript">alert("Berhasil di ubah");window.location.replace("'.base_url('user').'")</script>';
      }
    }
    
    $data['data'] = $this->admin->get_where('t_users', ['id_user' =>$this->uri->segment(3)]);
    $this->template->admin('admin/user_form', $data);
  }

  public function hapus($id_user)
  {
    $where = array('id_user' => $id_user);
    $this->admin->hapus_data($where,'t_users');
    redirect('user');
  }

  public function hapus_komentar($id_s_pemesanan)
  {
    $where = array('id_s_pemesanan' => $id_s_pemesanan);
    $this->admin->hapus_data($where,'t_s_pemesanan');
    redirect('user/promo');
  }

  function cek_login()
  {
    if(!$this->session->userdata('admin'))
    {
      redirect('login');
    }
  }
}
