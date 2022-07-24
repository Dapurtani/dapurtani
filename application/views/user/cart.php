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
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/style.css?ts=<?=time ()?>" rel="stylesheet">
</head>

<body id="header">


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
						<a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/resep">Resep Dapur</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Keranjang Belanja</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cara Pengunaan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
				</ul>

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
	</nav>

	<!-- untuk menu bottom bawah -->
	<nav class="navbar fixed-bottom navbar-bottom">
		<div class="container-fluid">

			<div class="beranda">
				<p class="harga"><?php
          if ($this->cart->total_items() > 0) {
            echo 'Rp. '.number_format($this->cart->total(), 0, ',', '.');
          } else {
            echo 'Rp. 0';
          }
           ?>
				</p>
			</div>

			<div class="garis-vertical"></div>

			<div class="keranjang">
				<a class="btn btn-success keranjang-icon" href="<?= base_url(); ?>cart"><img
						src="<?= base_url(); ?>assets/img/keranjang.png"
						alt="">&nbsp;&nbsp;<?php echo $this->cart->total_items(); ?></a>
			</div>

		</div>
	</nav>
	<!-- untuk menu bottom bawah -->


	<section class="box-sayur text-center" id="belisayur">
		<h2> Keranjang Anda</h2>

		<!-- daftar barang marketplace -->
		<div class="row isi-box-sayur justify-content-center">

			<div class="col-sm-4 col-sm-8">
				<div class="work-keranjang">

					<div class="work-header">
						<table align="center">
							<tr>
								<td align="left">Pengiriman</td>
								<td>:</td>
								<td align="left"> <span id="getharipengiriman"></span> </td>
							</tr>
							<tr>
								<td align="left">Pukul</td>
								<td>:</td>
								<td>06.00 WITA - 09.00 WITA</td>
							</tr>
						</table>
					</div>
					<?php foreach($this->cart->contents() as $key) : ?>


					<div class="box-pesan">
						<img src="<?= base_url(); ?>assets/upload/<?= $key['picture']; ?>">
						<h3><?= $key['name']; ?></h3>
						<p>Rp. <?= number_format($key['price'], 0, ',', '.'); ?></p>
					</diV>

					<div class="box-pesan">
						<label align="center" class="label-satuan col-form-label col-form-label-sm" for="">Satuan</label>
						<input style="text-align: center;" class="input-satuan form-control form-control-sm" id="" readonly
							type="text" name="" value="<?= $key['weight']; ?>">
					</div>

					<div class="box-pesan">
						<label class="label-jumlah col-form-label col-form-label-sm">Jumlah</label>
						<form action="<?= base_url(); ?>cart/update/<?= $key['rowid']; ?>" method="post">
							<button type="submit" name="submit" value="Submit" class="btn btn-primary icon-kurang"><i
									class="fa fa-edit"></i></button>
							<input style="text-align: center;" class="input-jumlah form-control form-control-sm" type="number" min="1"
								name="qty" value="<?= $key['qty']; ?>">
						</form>
						<a href="<?= base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn btn-danger icon-tambah"
							onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i
								class="fa fa-trash"></i></a>

					</div>
					<?php endforeach;  ?>

					<!-- list blanjaas -->


					<div class="work-bottom">



						<hr class="garis-bawah">
						<div class="row">
							<div class="col-lg-6">
								<p class="harga">Subtotal</p>
							</div>
							<div class="col-lg-6">
								<b>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></b>
							</div>
						</div>

						<hr class="garis-bawah">
						<?php if ($this->session->userdata('promo')) { ?>
						<div class="row">
							<div class="col-lg-6">
								<p class="harga">Ongkos Kirim</p>
							</div>
							<div class="col-lg-6">
								<b>Rp.</b> 0
							</div>
						</div>

						<hr class="garis-bawah">
						<div class="row">
							<div class="col-lg-6">
								<p class="harga">Total</p>
							</div>
							<div class="col-lg-6">
								<b>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></b>
							</div>
						</div>
						<?php } else { ?>
						<div class="row">
							<div class="col-lg-6">
								<p class="harga">Ongkos Kirim</p>
							</div>
							<div class="col-lg-6">
								<b>Rp.</b> 12.000
							</div>
						</div>

						<hr class="garis-bawah">
						<div class="row">
							<div class="col-lg-6">
								<p class="harga">Total</p>
							</div>
							<div class="col-lg-6">
								<b>Rp. <?= number_format($this->cart->total() + 12000, 0, ',', '.'); ?></b>
							</div>
						</div>
						<?php } ?>
						<hr class="garis-bawah">

						<div class="btn-masukkan">
							<a href="<?= base_url(); ?>home/list_sayur" class="btn btn-beli btn-success">Tambah Belanjaan</a>
							<a href="<?= base_url(); ?>checkout" class="btn btn-beli btn-success">Lanjut Pembayaran</a>
						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- daftar barang marketplace -->

	</section>

	<div class="jarak"></div>

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
					</ul>
				</div>
			</div>
		</div>
		</div>

		<a id="keatas" href="#header" class="btn js-scroll-trigger">
			<i class="fa fa-chevron-up fa-fw fa-1x"></i>
		</a>
	</footer>

	<div class="container text-center copyright">
		<p class="text-muted large mb-4 mb-lg-0">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
	</div>

	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

	<!-- popper js cdn -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>

	<!-- bootstrap js cdn -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>

	<!-- Pemanggilan Tanpa Scroll -->
	<script src="<?= base_url(); ?>assets/vendor/js/dinamis.js?ts=<?=time ()?>"></script>

	<script src="<?= base_url(); ?>assets/vendor/js/tanggal.js?ts=<?=time ()?>"></script>



	<script type="text/javascript">
		$(".button-collapse").sideNav();
		$(".modal").modal();
		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 80) {
					$('.back-top').fadeOut();
				}
			});
			$('.back-top').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});
		});

	</script>

	<script type="text/javascript">
		function masukkan() {
			alert('Mohon Maaf fitur ini dalam tahap pengembangan !');
		}

	</script>

</body>

</html>
