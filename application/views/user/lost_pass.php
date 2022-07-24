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
			<!-- navbar toggle -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- navbar menu -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/index2"> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/hubungi"> Hubungi Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>home/tentang"> Tentang Kami</a>
					</li>
				</ul>
			</div>
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
							<h3 class="card-title">Reset Password</h3>
						</div>
						<div class="card-body">
                        <?php
                        if($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success alert-message">';
                        echo $this->session->flashdata('success');
                        echo '</div>';
                        }
                        if($this->session->flashdata('alert')) {
                        echo '<div class="alert alert-warning alert-message">';
                        echo $this->session->flashdata('alert');
                        echo '</div>';
                        }
                        ?>
							<form class="form" action="" method="post">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label form-input" for="">Email *</label>
										<div class="col-sm-12">
											<input class="form-control" type="email" name="email" placeholder="Email" required>
										</div>
									</div>
                                    <div class="btn-masukkan text-center">
										<input class="btn btn-beli btn-success" type="submit" name="submit"
											value="Submit">
                                            <a href="#" onclick="window.history.go(-1)" class="btn btn-beli btn-danger">Kembali</a>
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
							<a href="https://www.facebook.com/Dapurtani-326912511430162/?modal=admin_todo_tour"
								target="_blank">
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

	<!-- jquery -->
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
	 <script type="text/javascript">
         $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>
</body>

</html>
