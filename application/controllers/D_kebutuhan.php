<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_kebutuhan extends CI_Controller {

  function __construct()
{
    parent::__construct();
    $this->load->library(array('template', 'cart', 'form_validation', 'email', 'session'));
    $this->load->model(array('app', 'admin'));
    $this->load->helper(['form','security','string']);
}

public function index()
{
    $this->cek_login();
  $data['data'] = $this->admin->get_all('t_d_kebutuhan');

  $this->template->admin('admin/manage_d_kebutuhan', $data);
}

public function add_d_kebutuhan()
{
  if ($this->input->post('submit', TRUE) == 'Submit') {
    //validasi
    $this->form_validation->set_rules('nama', 'Nama Barang', 'required|min_length[3]');
    $this->form_validation->set_rules('umkm', 'Nama UMKM');
    $this->form_validation->set_rules('harga', 'Harga Barang', 'required|numeric');
    $this->form_validation->set_rules('satuan', 'Satuan Barang', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis Produk');
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
        $kebutuhan = array(
          'nm_barang' => $this->input->post('nama', TRUE),
          'nama' => $this->input->post('umkm', TRUE),
          'harga' => $this->input->post('harga', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'jenis' => $this->input->post('jenis', TRUE),
          'stock' => $this->input->post('stock', TRUE),
          'gambar' => $gbr['file_name'],
        );
        $this->admin->insert('t_d_kebutuhan', $kebutuhan);
      }  else {
          $this->session->set_flashdata('alert', 'anda belum memilih foto');
      }
    }
    redirect('d_kebutuhan/index');
  }
  $data['nama'] = $this->input->post('nama', TRUE);
  $data['umkm'] = $this->input->post('umkm', TRUE);
  $data['satuan'] = $this->input->post('satuan', TRUE);
  $data['harga'] = $this->input->post('harga', TRUE);
  $data['jenis'] = $this->input->post('jenis', TRUE);
  $data['stock'] = $this->input->post('stock', TRUE);

  $data['header'] = "Add Dapur Kebutuhan";

  $this->template->admin('admin/d_kebutuhan_form', $data);

}

public function detail()
{
  $id_d_kebutuhan = $this->uri->segment(3);
  $kebutuhan = $this->admin->get_where('t_d_kebutuhan', array('id_d_kebutuhan' => $id_d_kebutuhan));

  foreach ($kebutuhan->result() as $key) {
    $data['nm_barang'] = $key->nm_barang;
    $data['umkm'] = $key->nama;
    $data['harga'] = $key->harga;
    $data['satuan'] = $key->satuan;
    $data['jenis'] = $key->jenis;
    $data['stock'] = $key->stock;
    $data['gambar'] = $key->gambar;
   }

  $this->template->admin('admin/detail_d_kebutuhan', $data);
}

public function update_d_kebutuhan()
{
  $id_d_kebutuhan = $this->uri->segment(3);

  if ($this->input->post('submit', TRUE) == 'Submit') {
    //validasi
    $this->form_validation->set_rules('nama', 'Nama Barang', 'required|min_length[3]');
    $this->form_validation->set_rules('umkm', 'Nama UMKM');
    $this->form_validation->set_rules('harga', 'Harga Barang', 'required|numeric');
    $this->form_validation->set_rules('satuan', 'Satuan Barang', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis Produk');
    $this->form_validation->set_rules('stock', 'Stock', 'required|numeric');

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path'] = './assets/upload/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'gambar'.time();

      $this->load->library('upload', $config);

      $kebutuhan = array(
        'nm_barang' => $this->input->post('nama', TRUE),
        'nama' => $this->input->post('umkm', TRUE),
        'harga' => $this->input->post('harga', TRUE),
        'satuan' => $this->input->post('satuan', TRUE),
        'jenis' => $this->input->post('jenis', TRUE),
        'stock' => $this->input->post('stock', TRUE),
      );

      if ($this->upload->do_upload('foto'))
      {
        $gbr = $this->upload->data();
        //proses insert
        unlink('assets/upload/'.$this->input->post('old_pict', TRUE));
        $kebutuhan['gambar'] = $gbr['file_name'];
        $this->admin->update('t_d_kebutuhan', $kebutuhan, array('id_d_kebutuhan' => $id_d_kebutuhan));
      }  else {
        $this->admin->update('t_d_kebutuhan', $kebutuhan, array('id_d_kebutuhan' => $id_d_kebutuhan));
      }
    }

    redirect('d_kebutuhan');
  }

  $kebutuhan = $this->admin->get_where('t_d_kebutuhan', array('id_d_kebutuhan' => $id_d_kebutuhan));

  foreach($kebutuhan->result() as $key) {
  $data['nama'] = $key->nm_barang;
  $data['umkm'] = $key->nama;
  $data['satuan'] = $key->satuan;
  $data['harga'] = $key->harga;
  $data['jenis'] = $key->jenis;
  $data['stock'] = $key->stock;
  $data['gambar'] = $key->gambar;
}

  $data['header'] = "Update Dapur Kebutuhan";

  $this->template->admin('admin/d_kebutuhan_form', $data);
}

public function hapus($id_d_kebutuhan)
{
  $where = array('id_d_kebutuhan' => $id_d_kebutuhan);
  $this->admin->hapus_data($where,'t_d_kebutuhan');
  redirect('d_kebutuhan/index');
}

function cek_login()
{
  if (!$this->session->userdata('admin'))
  {
    redirect('login');
  }
}

}
