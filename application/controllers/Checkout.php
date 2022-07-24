<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'cart', 'form_validation', 'session'));
		$this->load->model('app');
		$this->load->helper(['form','security','string']);
	}
	function index()
	{
		if (!$this->session->userdata('user_id') || !$this->cart->contents()) {
			redirect('home');
		}
		$this->load->view('user/checkout');
	}

	function tambah_aksi()
	{
		if (!$this->session->userdata('user_id') || !$this->cart->contents()) {
			redirect('home');
		}

		$get = $this->app->get_where('t_users', array('id_user' => $this->session->userdata('user_id')))->row();
		$id_order     = time();
		$id_user      = $this->session->userdata('user_id', TRUE);
		$tgl_pengirim = $this->input->post('tgl_pengiriman', TRUE);
		$nama         = $this->input->post('nama', TRUE);
		$email        = $this->input->post('email', TRUE);
		$no_hp        = $this->input->post('no_hp', TRUE);
		$t_pengirim   = $this->input->post('t_pengirim', TRUE);
		$kecamatan    = $this->input->post('kecamatan', TRUE);
		$alamat       = $this->input->post('alamat', TRUE);
		$kantor       = $this->input->post('kantor', TRUE);
		$tgl_pesan    = date('Y-m-d H:i:s');
		$bts          = date("Y-m-d", mktime(0,0,0, date("m"), date("d") + 3, date("Y")));
		$sub          = $this->input->post('sub');
		$total        = $this->input->post('total');
		$pembayaran   = $this->input->post('inppembayaran');

		$table = '';
		$no = 1;
		foreach ($this->cart->contents() as $carts) {
			$table .= '<tr><td>'.$no++.'</td><td>'.$carts['name'].'</td><td>'.$carts['qty'].'</td><td>'.$carts['weight'].'</td><td style="text-align:right">'.number_format($carts['subtotal'], 0, ',', '.').'</td></tr>';
		}

		$data = array(
			'id_order'       => $id_order,
			'id_user'        => $id_user,
			'tgl_pengiriman' => $tgl_pengirim,
			'nama'           => $nama,
			'email'          => $email,
			'no_hp'          => $no_hp,
			't_pengirim'     => $t_pengirim,
			'kecamatan'      => $kecamatan,
			'alamat'         => $alamat,
			'alamat_kantor'  => $kantor,
			'tgl_pesan'      => $tgl_pesan,
			'tgl_bayar'      => $bts,
			'pembayaran'     => $pembayaran,
			'status'         => ''
		);

		if ($this->app->insert('t_order', $data)){
			foreach ($this->cart->contents() as $key) {
				$detail = [
					'id_order'   => $id_order,
					'id_sayur'   => $key['id'],
					'nama_sayur' => $key['name'],
					'umkm'       => $key['weight'],
					'qty'        => $key['qty'],
					'petani'     => $key['n_petani'],
					'kelompok'   => $key['k_sayur'],
					'biaya'      => $key['price'],
					'sub'        => $sub,
					'total'      => $total
				];
				$this->app->insert('t_detail_order', $detail);
			}

			$this->cart->destroy();
		}
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
			'Pesanan anda telah kami terima dan sedang kami proses<br>
			 Pengantaran mulai jam 09.00 sampai 14.00.<br> Detail pemesanan sebagai berikut :<br/><br/>
			<table border="1" style="width: 80%">
			<tr><th>#</th><th>Nama Barang</th><th>Jumlah</th><th>Satuan</th><th>Harga</th></tr>
			'.$table.' 
			<tr><td colspan="4">Subtotal</td><td style="text-align:right">'.$sub.'</td></tr>
			<tr><td colspan="4">Total</td><td style="text-align:right">'.$total.'</td></tr>
			</table>
			<br>
			Transfer tepat hingga 2 digit terakhir untuk mempercepat verifikasi.
			<p>Total Transfer :'.$pembayaran.'</p>
			Note: Untuk Pembayaran Bank Silahkan Transfer Melalui Rekening Di bawah:
			<p>Bank BRI : 1229-01-004136-53-7
			   Atas Nama : Zul Jalali Wal Ikram</p>
			<p>Bank BNI : 0724697600
			   Atas Nama : Zul Jalali Wal Ikram</p>
			'
		);

		if($this->email->send())
		{
			echo '<script type="text/javascript">alert("Silahkan cek email anda untuk detail pemesanan...");window.location.replace("'.base_url('home/index2').'")</script>';
		}else
		{
			echo '<script type="text/javascript">alert("Pemesanan Berhasil");window.location.replace("'.base_url('home/index2').'")</script>';
		}

	}
}
