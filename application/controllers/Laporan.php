<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->library(array('template', 'cart', 'form_validation', 'email', 'session'));
      $this->load->model(array('app', 'admin'));
      $this->load->helper(['form','security','string']);
  }

  public function index()
	{ 
        $this->load->library('form_validation');

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
		//YYYY-mm-dd
		//2017-04-31
		$awal = $thn.'-'.$bln.'-01';
		$akhir = $thn.'-'.$bln.'-31';

		$where = ['tgl_pesan >=' => $awal, 'tgl_pesan <=' => $akhir, 'status' => ''];

		$data['data'] = $this->admin->report($where);
		$data['bln'] = $bln;
		$data['thn'] = $thn;

	$this->template->admin('admin/report', $data);
	}
}