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
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body id="header">

	<!-- Navigation atas -->
	<nav class="navbar navbar-custom navbar-expand-lg sticky-top navbar-light bg-light">
		<div class="container-fluid">
			<!-- navbar brand -->
			<a class="navbar-brand" href="<?= base_url(); ?>home">
				<img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="javascript::" data-toggle="modal" data-target="#modalMasuk"><i
								class="fa fa-sign-in"></i> Masuk</a>
					</li>
          <li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/hubungi">Hubungi Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/tentang">Tentang Kami</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>

	<section>

		<div class="container">

			<div class="row justify-content-md-center pb-4 pt-4">
				<div class="col-lg-6 col-sm-6 col-md-6">

					<div class="card">
						<div class="card-header text-center">
							<i class="fa fa-user fa-2x fa-fw"></i>
							<h3 class="card-title">Buat Akun</h3>
						</div>
						<div class="card-body">
							<?= validation_errors('<p style="color:red">', '</p>'); ?>
							<form class="" action="<?= base_url(); ?>home/registrasi" method="post">
								<div class="form-group form-row">
									<div class="col">
										<input type="text" class="form-control" name="nama1" placeholder="Nama Depan" value="<?= $nama1; ?>"
											required>
									</div>
									<div class="col">
										<input type="text" class="form-control" name="nama2" placeholder="Nama Belakang"
											value="<?= $nama2; ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label>Kategori Pelanggan</label>
									<br />
									<div class="form-check form-check-inline">
										<input class="form-check-input detail" type="radio" name="ktg_pelanggan" id="ind" value="individu"
											<?php if ($ktg_pelanggan == 'individu') { echo 'checked'; } ?> required>
										<label class="form-check-label" for="ind">Individu</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input detail" type="radio" name="ktg_pelanggan" id="bis" value="bisnis"
											<?php if ($ktg_pelanggan == 'bisnis') { echo 'checked'; } ?> disabled>
										<label class="form-check-label" for="bis">Bisnis</label>
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" id="username" name="user" placeholder="Username"
										value="<?= $user; ?>" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?= $email; ?>"
										required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass1" placeholder="Kata Sandi" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass2" placeholder="Konfirmasi Kata Sandi" required>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="jk" id="lk" value="L"
											<?php if ($jk == 'L') { echo 'checked'; } ?> required>
										<label class="form-check-label" for="lk">Laki-laki</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="jk" id="pr" value="P"
											<?php if ($jk == 'P') { echo 'checked'; } ?> required>
										<label class="form-check-label" for="pr">Perempuan</label>
									</div>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon"
										value="<?= $telp; ?>" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" value="Kota Makassar" readonly="readonly">
								</div>
								<div class="form-group">
									<select class="form-control" name="kecamatan" id="exampleFormControlSelect1" required>
										<option value="" required>-- Pilih Kecamatan --</option>
										<option value="Mariso" <?php if($kecamatan == 'Mariso') {echo "selected";} ?>>Mariso</option>
										<option value="Mamajang" <?php if($kecamatan == 'Mamajang') {echo "selected";} ?>>Mamajang</option>
										<option value="Tamalate" <?php if($kecamatan == 'Tamalate') {echo "selected";} ?>>Tamalate</option>
										<option value="Rappocini" <?php if($kecamatan == 'Rappocini') {echo "selected";} ?>>Rappocini
										</option>
										<option value="Makassar" <?php if($kecamatan == 'Makassar') {echo "selected";} ?>>Makassar</option>
										<option value="Ujung Pandang" <?php if($kecamatan == 'Ujung Pandang') {echo "selected";} ?>>Ujung
											Pandang</option>
										<option value="Wajo" <?php if($kecamatan == 'Wajo') {echo "selected";} ?>>Wajo</option>
										<option value="Bontoala" <?php if($kecamatan == 'Bontoala') {echo "selected";} ?>>Bontoala
										<option value="Ujung Tanah" <?php if($kecamatan == 'Ujung Tanah') {echo "selected";} ?>>Ujung Tanah
										</option>
										<option value="Tallo" <?php if($kecamatan == 'Tallo') {echo "selected";} ?>>Tallo</option>
										<option value="Panakkukang" <?php if($kecamatan == 'Panakkukang') {echo "selected";} ?>>Panakkukang
										</option>
										<option value="Manggala" <?php if($kecamatan == 'Manggala') {echo "selected";} ?>>Manggala</option>
										<option value="Biring Kanaya" <?php if($kecamatan == 'Biring Kanaya') {echo "selected";} ?>>Biring
											Kanaya</option>
										<option value="Tamalanrea" <?php if($kecamatan == 'Tamalanrea') {echo "selected";} ?>>Tamalanrea
										</option>
										</option>
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="alamat" id="alamat" rows="5" cols="5"
										placeholder="Alamat Lengkap Rumah" required><?= $alamat; ?></textarea>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kantor(Kosongkan apabila tidak di butuhkan)"
										value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="kantor" id="kantor" rows="5" cols="5"
										placeholder="Alamat Kantor(Kosongkan apabila tidak di butuhkan)"><?= $kantor; ?></textarea>
								</div>

								<button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
							</form>

						</div>
						<div class="card-footer text-center">
							<p>Sudah punya akun? <a href="masuk.html">Masuk</a> </p>
						</div>
					</div>

				</div>
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

		<a id="keatas" href="#header" class="btn js-scroll-trigger">
			<i class="fa fa-chevron-up fa-fw fa-1x"></i>
		</a>
	</footer>

	<div class="container text-center copyright">
		<p class="text-muted text-copyright">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
	</div>

	<!-- Modal masuk -->
	<div class="modal fade" id="modalMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6>Login</h6>
				</div>
				<div class="modal-body">
					<form action="<?= base_url(); ?>home/login" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Ingat Saya!</label>
						</div>
						<button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<input type="submit" name="masuk" value="Masuk" class="btn btn-success">
					</form>
				</div>
				<div class="modal-footer">
					<p>Belum punya akun? <a href="daftar.html">Daftar</a> </p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal masuk -->

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/dinamis.js?ts=<?=time ()?>"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/tahun.js?ts=<?=time ()?>"></script>

	<script type="text/javascript">
		function masukkan() {
			alert('Mohon Maaf fitur ini dalam tahap pengembangan !');
		}

	</script>
</body>

</html>
