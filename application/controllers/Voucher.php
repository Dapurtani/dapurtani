<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

  function __construct()
{
    parent::__construct();
    $this->load->library(array('template', 'cart', 'form_validation', 'email', 'session'));
    $this->load->model(array('app', 'admin'));
    $this->load->helper(['form','security']);
}

	public function index()
	{
    if (!$this->session->userdata('user_id'))
    {
      redirect('home');
    }
    //echo password_hash('admin', PASSWORD_DEFAULT, ['cost' => 10]);
    if ($this->input->post('submit') == 'Oke')
    {
      $user = $this->input->post('kd_voucher', FALSE);

      $cek =  $this->admin->get_where('t_voucher', array('kd_voucher' => $user));



        $this->load->view('user/voucher');
        } else {
        echo '<script type="text/javascript">alert("Kode Voucher tidak dikenali");window.location.replace("'.base_url('home').'")</script>';

      }

	}

  public function logout()
  {
    $this->session->sess_destroy();

    redirect('login');

  }

}
