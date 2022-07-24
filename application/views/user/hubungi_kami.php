<!DOCTYPE html>
<html lang="en">

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
			<a class="navbar-brand" href="<?= base_url(); ?>home/index2">
				<img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<?php if ($this->session->userdata('s_pemesanan') == 'diantar') { ?>
					<li class="nav-item">
						<a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalDiantar"> Status
							Pemesanan</a>
					</li>
					<?php } else if ($this->session->userdata('s_pemesanan') == 'proses') { ?>
					<li class="nav-item">
						<a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalStatusPemesananDiproses">
							Status Pemesanan</a>
					</li>
					<?php } if ($this->session->userdata('user_login')) { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/index2">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/transaksi">History</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/tentang"> Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/logout">Keluar</a>
					</li>

					<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalMasuk"><i
								class="fa fa-sign-in"></i> Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/registrasi"><i
								class="fa fa-briefcase"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/tentang">Tentang Kami</a>
					</li>
					<?php } ?>
			</div>
		</div>
	</nav>

	<!-- bagian beli sayur -->
	<section class="box-hubungi-kami text-center">
		<div class="container">

			<h2 class="title">Hubungi Kami</h2>

			<!-- untuk hubungi kami -->
			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-body">
							<p>
								<b>Email :</b>
								<br />
								<a href="mailto:infodapurtani@gmail.com" title="Aku ada keluhan!">infodapurtani@gmail.com</a>
							</p>
							<p>
								<b>Sosial Media :</b>
							</p>
							<ul class="list-inline">
								<li class="list-inline-item">
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
                  <a href="https://wa.me/6282343962420" target="_blank">
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
			</div>
			<!-- untuk hubungi kami -->
		</div>
	</section>

	<div class="container text-center copyright">
		<p class="text-muted text-copyright">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
	</div>
  
	<!-- Modal masuk -->
	<div class="modal fade" id="modalMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<form action="<?= base_url(); ?>home/login" method="post">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6>Login</h6>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
								placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Ingat Saya!</label>
						</div>
						<button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<input type="submit" class="btn btn-success" name="submit" value="Masuk">
					</div>
					<div class="modal-footer">
						<p>Belum punya akun? <a href="<?= base_url(); ?>home/registrasi">Daftar</a> </p>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- Modal masuk -->

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/tahun.js"></script>

	<script type="text/javascript">
		function masukkan() {
			alert('Mohon Maaf fitur ini dalam tahap pengembangan !');
		}
	</script>

</body>

</html>
