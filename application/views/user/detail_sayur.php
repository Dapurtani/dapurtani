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
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/style.css?ts=<?=time ()?>" rel="stylesheet">

</head>

<body id="header">

	<nav class="navbar navbar-custom navbar-expand-lg sticky-top navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= base_url(); ?>home/index2">
				<img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
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
											<th scope="col">Nama Sayur</th>
											<th scope="col">Harga Sayur</th>
											<th scope="col">Jumlah</th>
											<th scope="col">Total</th>
										</tr>
									</thead>
									<?php $i = 1; foreach ($data->result() as $key) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $key->nama_sayur; ?></td>
                      <td><?= $key->biaya; ?></td>
                      <td><?= $key->qty; ?></td>
                      <td><?= $key->biaya * $key->qty; ?></td>
                    </tr>
									<?php endforeach; ?>
									<tr>
										<td colspan="8">
                      Subtotal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $key->sub; ?>
                    </td>
									<tr></tr>
									<td colspan="8">
                    Ongkir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 2.000
                  </td>
									<tr></tr>
									<td colspan="8">
                    Total Pembayaran : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $key->total; ?>
                  </td>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/js/tahun.js"></script>

</body>

</html>
