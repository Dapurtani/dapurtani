<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayur extends CI_Controller {

  function __construct()
{
    parent::__construct();
    $this->load->library(array('template', 'form_validation'));
    $this->load->model('admin');
}

public function index()
{
    $this->cek_login();
  $data['data'] = $this->admin->get_all('t_sayur');

  $this->template->admin('admin/manage_sayur', $data);
}

public function add_sayur()
{
  if ($this->input->post('submit', TRUE) == 'Submit') {
    //validasi
    $this->form_validation->set_rules('nama', 'Nama Sayur', 'required|min_length[3]');
    $this->form_validation->set_rules('n_petani', 'Nama Petani');
    $this->form_validation->set_rules('k_sayur', 'Kelompok Sayur');
    $this->form_validation->set_rules('harga', 'Harga Sayur', 'required|numeric');
    $this->form_validation->set_rules('promo', 'Promo Sayur', 'required|numeric');
    $this->form_validation->set_rules('satuan', 'Satuan Sayur', 'required');
    $this->form_validation->set_rules('status', 'Jenis Sayur', 'required|numeric');
    $this->form_validation->set_rules('stock', 'Stock', 'required|numeric');

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path'] = './assets/upload/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'gambar'.time();

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto'))
      {
        $gbr = $this->upload->data();
        //proses insert
        $sayur = array(
          'nama_sayur' => $this->input->post('nama', TRUE),
          'nama_petani' => $this->input->post('n_petani', TRUE),
          'k_sayur' => $this->input->post('k_sayur', TRUE),
          'harga' => $this->input->post('harga', TRUE),
          'promo' => $this->input->post('promo', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'status' => $this->input->post('status', TRUE),
          'stock' => $this->input->post('stock', TRUE),
          'gambar' => $gbr['file_name'],
        );
        $this->admin->insert('t_sayur', $sayur);
      }  else {
          $this->session->set_flashdata('alert', 'anda belum memilih foto');
      }
    }
    redirect('sayur/index');
  }
  $data['nama'] = $this->input->post('nama', TRUE);
  $data['n_petani'] = $this->input->post('n_petani', TRUE);
  $data['k_sayur'] = $this->input->post('k_sayur', TRUE);
  $data['satuan'] = $this->input->post('satuan', TRUE);
  $data['harga'] = $this->input->post('harga', TRUE);
  $data['promo'] = $this->input->post('promo', TRUE);
  $data['status'] = $this->input->post('status', TRUE);
  $data['stock'] = $this->input->post('stock', TRUE);

  $data['header'] = "Add Sayur";

  $this->template->admin('admin/sayur_form', $data);

}

public function detail()
{
  $id_sayur = $this->uri->segment(3);
  $sayur = $this->admin->get_where('t_sayur', array('id_sayur' => $id_sayur));

  foreach ($sayur->result() as $key) {
    $data['nama_sayur'] = $key->nama_sayur;
    $data['n_petani'] = $key->nama_petani;
    $data['k_sayur'] = $key->k_sayur;
    $data['harga'] = $key->harga;
    $data['promo'] = $key->promo;
    $data['satuan'] = $key->satuan;
    $data['status'] = $key->status;
    $data['stock'] = $key->stock;
    $data['gambar'] = $key->gambar;
   }

  $this->template->admin('admin/detail_sayur', $data);
}

public function update_sayur($id_sayur)
{
  $id_sayur = $this->uri->segment(3);

  if ($this->input->post('submit', TRUE) == 'Submit') {
    //validasi
    $this->form_validation->set_rules('nama', 'Nama Sayur', 'required|min_length[3]');
    $this->form_validation->set_rules('n_petani', 'Nama Petani');
    $this->form_validation->set_rules('k_sayur', 'Kelompok Sayur');
    $this->form_validation->set_rules('harga', 'Harga Sayur', 'required|numeric');
    $this->form_validation->set_rules('promo', 'Promo Sayur', 'required|numeric');
    $this->form_validation->set_rules('satuan', 'Satuan Sayur', 'required');
    $this->form_validation->set_rules('status', 'Jenis Sayur', 'required|numeric');
    $this->form_validation->set_rules('stock', 'Stock', 'required|numeric');

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path'] = './assets/upload/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'gambar'.time();

      $this->load->library('upload', $config);

      $sayur = array(
        'nama_sayur' => $this->input->post('nama', TRUE),
        'nama_petani' => $this->input->post('n_petani', TRUE),
        'k_sayur' => $this->input->post('k_sayur', TRUE),
        'harga' => $this->input->post('harga', TRUE),
        'promo' => $this->input->post('promo', TRUE),
        'satuan' => $this->input->post('satuan', TRUE),
        'status' => $this->input->post('status', TRUE),
        'stock' => $this->input->post('stock', TRUE),
      );

      if ($this->upload->do_upload('foto'))
      {
        $gbr = $this->upload->data();
        //proses insert
        unlink('assets/upload/'.$this->input->post('old_pict', TRUE));
        $sayur['gambar'] = $gbr['file_name'];
        $this->admin->update('t_sayur', $sayur, array('id_sayur' => $id_sayur));
      }  else {
        $this->admin->update('t_sayur', $sayur, array('id_sayur' => $id_sayur));
      }
    }

    redirect('sayur');
  }

  $sayur = $this->admin->get_where('t_sayur', array('id_sayur' => $id_sayur));

  foreach($sayur->result() as $key) {
  $data['nama'] = $key->nama_sayur;
  $data['n_petani'] = $key->nama_petani;
  $data['k_sayur'] = $key->k_sayur;
  $data['satuan'] = $key->satuan;
  $data['harga'] = $key->harga;
  $data['promo'] = $key->promo;
  $data['status'] = $key->status;
  $data['stock'] = $key->stock;
  $data['gambar'] = $key->gambar;
}

  $data['header'] = "Update Data Sayur";

  $this->template->admin('admin/sayur_form', $data);
}

public function hapus($id_sayur)
{
  $where = array('id_sayur' => $id_sayur);
  $this->admin->hapus_data($where,'t_sayur');
  redirect('sayur/index');
}

function cek_login()
{
  if (!$this->session->userdata('admin'))
  {
    redirect('login');
  }
}

}
