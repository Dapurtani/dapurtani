<!DOCTYPE html>
<html lang="en">
    
<!-- google analitic -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151682228-1"></script>
<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-151682228-1');
</script>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dapurtani</title>

	<!-- icon Dapurtani -->
	<link href="<?= base_url(); ?>assets/img/logoicon.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/style.css?ts=<?=time ()?>" rel="stylesheet">

</head>

<body id="header">


	<!-- Navigation atas -->
	<nav class="navbar navbar-custom navbar-expand-lg sticky-top navbar-light bg-light">
		<div class="container-fluid">
			<!-- navbar brand -->
			<a class="navbar-brand" href="<?= base_url(); ?>home">
				<img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
			</a>
			<!-- navbar toggle -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- navbar menu -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/list_sayur">Beli Sayur</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="lauk.html"> Beli Lauk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#pengguna"> Cara Pemasanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hubungi-kami.html"> Hubungi Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tentang-kami.html"> Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/logout">Keluar</a>
					</li>
				</ul>
			</div>

			<form class="form-inline my-2 my-lg-0">
				<div class="input-group">
					<input type="text" class="form-control form-control-sm pencarian" type="search" placeholder="Cari..."
						aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-success btn-sm my-sm-0" type="submit">
							<i class="fa fa-search fa-fw"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
		</div>
	</nav>


	<!-- bagian beli sayur -->
	<section class="pb-4">
		<div class="container">

			<div class="row justify-content-md-center pt-4 pb-4">
				<div class="col-lg-6 col-sm-6 col-md-6">

					<div class="card">
						<div class="card-header text-center">
							<i class="fa fa-user fa-2x fa-fw"></i>
							<h3 class="card-title">Data Anda</h3>
						</div>
						<div class="card-body">

              <?= validation_errors('<p style="color:red">', '</p>'); ?>
							<form class="" action="<?= base_url(); ?>checkout/tambah_aksi" method="post">
								<input class="form-control" type="hidden" id="inputtanggal" name="inputtanggal" value="inputtanggal" readonly>
								<div class="work-form">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Tanggal Pengiriman</label>
										<div class="col-sm-12">
											<input class="form-control" type="text" id="inputtanggal_p" name="tgl_pengiriman"
												value="inputtanggal_p" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Nama Lengkap *</label>
										<div class="col-sm-12">
											<input class="form-control" type="text" name="nama"
												value="<?= $this->session->userdata('name');  ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Email *</label>
										<div class="col-sm-12">
											<input class="form-control" type="text" name="email"
												value="<?= $this->session->userdata('email'); ?>" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">No. Telepon / HP *</label>
										<div class="col-sm-12">
											<input class="form-control" type="number" name="no_hp"
												value="<?= $this->session->userdata('telp'); ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Kota Anda</label>
										<div class="col-sm-12">
											<input class="form-control" type="text" name="" value="Sementara hanya berlaku di Kota Makassar"
												readonly>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Alamat Lengkap *</label>
										<div class="col-sm-12">
											<textarea class="form-control" name="alamat" rows="5" cols="5"
												required><?= $this->session->userdata('alamat'); ?></textarea>
										</div>
									</div>

								</div>
								<?php $i = 1; foreach($this->cart->contents() as $key) : ?>
								<input class="form-control" type="text" name="sub" value="Rp. normal <?= number_format($key['price'] * $key['qty'], 0, ',', '.'); ?>  Rp. promo <?= number_format($key['promo'] * $key['qty'], 0, ',', '.'); ?>">
								<input class="form-control" type="text" name="total" value="Rp. <?= number_format($key['price'] * $key['qty'] + 9000 - ($key['price'] * $key['qty'] - $key['promo'] * $key['qty']), 0, ',', '.'); ?>">
						</div>
					</div>
				</div>

			</div>
		</div>

		</div>


		<hr class="garis-bawah">
		<p class="text-center judul-order">Pesanan Anda</p>
		<div class="isi-box-beli justify-content-center">

			<div class="col-sm-5">

				<table class="table table-striped table-bordered table-sm">
					<thead class="thead-light">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Produk</th>
							<th scope="col">Item</th>
							<th scope="col">Harga Normal</th>
							<th scope="col">Harga Promo</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td><?= $i++; ?></td>
							<td><?= $key['name']; ?></td>
							<td><?= $key['qty']; ?></td>
							<td>Rp. <?= number_format($key['price'] * $key['qty'], 0, ',', '.'); ?></td>
							<td>Rp. <?= number_format($key['promo'] * $key['qty'], 0, ',', '.'); ?></td>
						<tr>

						</tr>

						<?php endforeach; ?>
						<td colspan="3">Subtotal</td>
						<td colspan="3">Rp.<?= number_format($key['price'] * $key['qty'], 0, ',', '.'); ?></td>
						<tr>
							<td colspan="3">Ongkir</td>
							<td colspan="3">RP. 9.000</td>
						<tr>
							<td colspan="3">Potongan</td>
							<td colspan="3">Rp.
								<?= number_format($key['price'] * $key['qty'] - $key['promo'] * $key['qty'], 0, ',', '.'); ?></td>
						<tr>
							<td colspan="3">Total</td>
							<td colspan="3">Rp.
								<?= number_format($key['price'] * $key['qty'] + 9000 - ($key['price'] * $key['qty'] - $key['promo'] * $key['qty']), 0, ',', '.'); ?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>

		<p class="text-center judul-order">Pilih Metode Pembayaran</p>

		<div class="row isi-box-beli justify-content-center">

			<div class="col-sm-5">

				<div class="form-check">
					<input class="form-check-input detail" type="radio" name="inppembayaran" id="exampleRadios3" value="bank">
					<label class="form-check-label" for="exampleRadios1">
						Transfer Bank
					</label>
					<p>
						Pembelian dapat melakukan pembayaran melalui transfer dana ke rekening Dapurtani.
						<br>
						Kontak CS : 082191946787
					</p>
				</div>
				<!-- form untuk pembayaran melalui bank -->
				<div id="form-input1" class="form-input-bank">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="card form-transfer">
								<h6 class="card-title">Transfer Bank</h6>
								<div class="card-body">

									<hr class="garis-bawah">
									<table align="center">
										<tr>
											<td>Bank BRI</td>
											<td></td>
											<td align="right"> <img src="<?= base_url(); ?>assets/img/bri.png" class="bank-bri"> </td>
										</tr>
										<tr>
											<td>Nomor Rekening</td>
											<td>:</td>
											<td>3419-01-042126-53-5</td>
										</tr>
										<tr>
											<td>Atas Nama</td>
											<td>:</td>
											<td>Muh.dzulfadly</td>
										</tr>
									</table>
									<hr class="garis-bawah">
									<table align="center">
										<tr>
											<td>Bank BNI</td>
											<td></td>
											<td align="right"> <img src="<?= base_url(); ?>assets/img/bni.png" class="bank-bni"> </td>
										</tr>
										<tr>
											<td>Nomor Rekening</td>
											<td>:</td>
											<td>3419-01-042126-53-5</td>
										</tr>
										<tr>
											<td>Atas Nama</td>
											<td>:</td>
											<td>Muh.dzulfadly</td>
										</tr>
									</table>
									<hr class="garis-bawah">
									<p style="text-align: center; font-size: 15px;">
										Total pembayaran :
										<br />
										<span style="color: #73C089">Rp.
											<?= number_format($key['price'] * $key['qty'] + 9000 - ($key['price'] * $key['qty'] - $key['promo'] * $key['qty']), 0, ',', '.'); ?>
										</span>
										<br />
										<i>Transfer tepat hingga 2 digit terakhir untuk mempercepat verifikasi.</i>
									</p>
									<hr class="garis-bawah">
									<div class="batas-pembayaran">
										<p class="pembayaran">Batas Pembayaran : </p>
										<p class="waktu-pembayaran"><span id="getwaktupembayaran"></span>, Pukul 21.00 WITA</p>
									</div>
									<div class="btn-masukkan text-center">
										<input class="btn btn-beli btn-success" type="submit" value="Bayar dengan transfer bank">
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- form untuk pembayaran melalui bank -->
				<div class="form-check">
					<input class="form-check-input detail" type="radio" name="inppembayaran" id="exampleRadios2" value="cod"
						required>
					<label class="form-check-label" for="exampleRadios2">
						Cash on delivery
					</label>
					<p>
						Pembayaran dilakukan dilokasi atau ditempat Anda.
					</p>
				</div>
				<div id="form-input2">
					<div class="btn-masukkan text-center">
						<input class="btn btn-beli btn-success" type="submit" value="Order">
					</div>
				</div>
				</form>
			</div>

		</div>

	</section>

	<!-- Footer -->
	<footer class="footer bg-light">
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<ul class="list-menu">
						<li class="list-menu-item">
							<a href="#">Tentang Kami</a>
						</li>
						<li class="list-menu-item">
							<a href="#">Kontak</a>
						</li>
						<li class="list-menu-item">
							<a href="#">Blog</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-6 text-center">
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-3">
							<a href="https://www.facebook.com/Dapurtani-326912511430162/?modal=admin_todo_tour" target="_blank">
								<i class="fab fa-facebook fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.instagram.com/dapurtani_/?hl=id" target="_blank">
								<i class="fab fa-instagram fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item mr-3">
							<a href="https://wa.me/6281244065453" target="_blank">
								<i class="fab fa-whatsapp fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.youtube.com/channel/UCF9KrxrttHN6i4b-xFkcyBA" target="_blank">
								<i class="fab fa-youtube fa-2x fa-fw"></i>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<a id="keatas" href="#header" class="btn js-scroll-trigger">
			<i class="fa fa-chevron-up fa-fw fa-1x"></i>
		</a>
	</footer>

	<div class="container text-center copyright">
		<p class="text-muted text-copyright">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/dinamis.js?ts=<?=time ()?>"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/tanggal.js?ts=<?=time ()?>"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/tglpemesanan.js?ts=<?=time ()?>"></script>

	<script type="text/javascript">
		function masukkan() {
			alert('Mohon Maaf fitur ini dalam tahap pengembangan !');
		}
	</script>
</body>

</html>
