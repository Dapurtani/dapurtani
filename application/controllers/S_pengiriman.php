<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_pengiriman extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library(array('template', 'form_validation'));
    $this->load->model('admin');
  }

  public function index()
  {
    $data['data'] = $this->admin->get_all_status('t_order');
    $this->template->admin('admin/status', $data);
  }

  public function edit()
  {
     $id_order = $this->uri->segment(3);
		$data['t_order'] = $this->admin->get_where('t_order', array('id_order' => $id_order));
		 $this->template->admin('admin/diantar',$data);
  }

  public function detail()
  {
    $id_order = $this->uri->segment(3);
    $data['t_detail_order'] = $this->admin->get_where('t_detail_order', array('id_order' => $id_order));

     $this->template->admin('admin/detail_transaksi', $data);
  }

  public function edit_diterima()
  {
    $id_order = $this->uri->segment(3);
   $data['t_order'] = $this->admin->get_where('t_order', array('id_order' => $id_order));
    $this->template->admin('admin/diterima',$data);
  }

  public function edit_batal()
  {
    $id_order = $this->uri->segment(3);
   $data['t_order'] = $this->admin->get_where('t_order', array('id_order' => $id_order));
    $this->template->admin('admin/diantar',$data);
  }

  public function update()
  {
    $id_order = $this->input->post('id_order');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('no_hp');
    $status = $this->input->post('status');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'no_hp' => $no_hp,
      'status' => $status
    );

    $where = array(
      'id_order' => $id_order
    );

    $this->admin->update_data($where,$data,'t_order');

    $this->load->library('email');
  $config = array();
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
  //konfigurasi pengiriman

  $this->email->from($config['smtp_user']);
  $this->email->to($email);
  $this->email->subject("Dapurtani");
  $this->email->message(
   'Pesanan anda sedang diantar'
  );

  if($this->email->send())
  {
     echo '<script type="text/javascript">alert("Silahkan cek email anda untuk detail pembayaran...");window.location.replace("'.base_url('s_pengiriman/index').'")</script>';
  }else
  {
   echo '<script type="text/javascript">alert("Email gagal terkirim")</script>';
  }
  }

  public function update_diterima()
  {
    $id_order = $this->input->post('id_order');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('no_hp');
    $status = $this->input->post('status');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'no_hp' => $no_hp,
      'status' => $status
    );

    $where = array(
      'id_order' => $id_order
    );

    $this->admin->update_data($where,$data,'t_order');

    $this->load->library('email');
  $config = array();
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
  //konfigurasi pengiriman

  $this->email->from($config['smtp_user']);
  $this->email->to($email);
  $this->email->subject("Dapurtani");
  $this->email->message(
   'Pesanan telah diterima, dan selamat menikmati pesanan anda, di tunggu orderan selanjutnya'
  );

  if($this->email->send())
  {
     echo '<script type="text/javascript">alert("Silahkan cek email anda untuk detail pembayaran...");window.location.replace("'.base_url('s_pengiriman/index').'")</script>';
  }else
  {
   echo '<script type="text/javascript">alert("Email gagal terkirim")</script>';
  }
  }

  public function update_batal()
  {
    $id_order = $this->input->post('id_order');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('no_hp');
    $status = $this->input->post('status');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'no_hp' => $no_hp,
      'status' => $status
    );

    $where = array(
      'id_order' => $id_order
    );

    $this->admin->update_data($where,$data,'t_order');

    $this->load->library('email');
  $config = array();
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
  //konfigurasi pengiriman

  $this->email->from($config['smtp_user']);
  $this->email->to($email);
  $this->email->subject("Dapurtani");
  $this->email->message(
   'Pesanan anda di batalkan'
  );

  if($this->email->send())
  {
     echo '<script type="text/javascript">alert("Silahkan cek email anda untuk detail pembayaran...");window.location.replace("'.base_url('s_pengiriman/index').'")</script>';
  }else
  {
   echo '<script type="text/javascript">alert("Email gagal terkirim")</script>';
  }
  }

public function hapus($id_order)
{
  $where = array('id_order' => $id_order);
  $this->admin->hapus_data($where,'t_order');
  $this->admin->hapus_data($where,'t_detail_order');
  redirect('s_pengiriman/index');
}



}
