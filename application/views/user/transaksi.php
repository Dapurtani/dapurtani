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

	<link href="<?= base_url(); ?>assets/img/logoicon.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" rel="stylesheet">
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
			<a class="navbar-brand" href="<?= base_url(); ?>home/index2">
				<img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
			</a>
			<!-- navbar toggle -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- navbar menu -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<?php if ($this->session->userdata('user_login')) { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/index2"> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/transaksi">History</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/hubungi"> Hubungi Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/tentang"> Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/logout">Keluar</a>
					</li>
					<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalMasuk"><i
								class="fa fa-sign-in"></i> Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/registrasi"><i
								class="fa fa-briefcase"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tentang">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hubungi-kami.html">Hubungi Kami</a>
					</li>
					<?php } ?>

				</ul>
			</div>
	</nav>

	<section class="box-tentang-kami">
		<div class="container">
			<h2 class="title text-center">History Belanja</h2>
			<div class="row justify-content-center">
				<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
					<div class="card">
						<div class="card-body">

							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Kode Belanja</th>
											<th scope="col">Tanggal Pemesanan</th>
											<th scope="col">Tanggal Pengiriman</th>
											<th scope="col">Pembayaran</th>
											<th scope="col">Status</th>
											<th scope="col">Opsi</th>
										</tr>
									</thead>
                  <tbody>
                    <?php $i = 1; foreach ($data->result() as $key) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $key->id_order; ?></td>
                      <td><?= $key->tgl_pesan; ?></td>
                      <td><?= $key->tgl_pengiriman; ?></td>
                      <td><?= $key->pembayaran; ?></td>
                      <td>
                        <?php
                          if ($key->status == 1) {
                            echo 'Diantar';
                          } if ($key->status == 2) {
                            echo 'Diterima';
                          } if ($key->status == 3) {
                            echo 'Batal';
                          }
                        ?>
                      </td>
                      <td>
                        <a href="<?=base_url();?>home/detail/<?=$key->id_order;?>" class="btn btn-success">Detail Sayur</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="text-center copyright">
		<p class="text-muted text-copyright">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<script type="text/javascript">
		var getwaktu = new Date();
		var tahun = getwaktu.getFullYear();

		// untuk menampilkan tahun
		document.getElementById('gettahun').innerHTML = tahun;

		$(document).ready(function () {
			$('#example').DataTable();
		});

	</script>

</body>

</html>
