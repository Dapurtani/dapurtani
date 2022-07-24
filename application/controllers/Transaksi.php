<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
      $this->load->model('admin');
	}

   public function index()
   {
		   $this->cek_login();
		 //passing data controller ke view
		 // query memanggil function duatable di model
    $data['data'] = $this->admin->duatable();
    $this->template->admin('admin/transaksi', $data);
	}

	public function report()
	{
    $this->load->library('form_validation');  
    $this->cek_login(); 
    
    if ($this->input->post('submit', TRUE) == 'Submit')
    {
        $this->form_validation->set_rules('bln', 'Bulan', 'required|numeric');
        $this->form_validation->set_rules('thn', 'Tahun', 'required|numeric');

        if ($this->form_validation->run() == TRUE)
        {
            $bln = $this->input->post('bln', TRUE);
            $thn = $this->input->post('thn', TRUE);
        }

    } else {
        $bln = date('m');
        $thn = date('Y'); 
    }    

    $awal   = $thn. '-' .$bln. '-01';
    $akhir  = $thn. '-' .$bln. '-31';
    $where  = ['tgl_pesan >=' => $awal, 'tgl_pesan <=' => $akhir, 'o.status' => 'proses'];
    
    $data['data'] = $this->admin->report($where);
    $data['bln']  = $bln;
    $data['thn']  = $thn;

    $this->template->admin('admin/report', $data);
	}
	
	public function detail()
	{
		//passing data controller ke view
		// query memanggil function duatable di model
		$id_order = $this->uri->segment(3);
	  $order = $this->admin->get_where('t_detail_order', array('id_order' => $id_order));
		foreach ($order->result() as $key) {
	    $data['nama_sayur'] = $key->nama_sayur;
	    $data['qty'] = $key->qty;
	    $data['biaya'] = $key->biaya;
	   }
	 $this->template->admin('admin/detail_transaksi', $data);
	}
	public function hapus($id_order)
	{
	  $where = array('id_order' => $id_order);
	  $this->admin->hapus_data($where,'t_order');
		$this->admin->hapus_data($where,'t_detail_order');
	  redirect('transaksi/index');
	}

	function cek_login()
	{
	  if (!$this->session->userdata('admin'))
	  {
	    redirect('login');
	  }
	}
}
