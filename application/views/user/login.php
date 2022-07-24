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

    <!-- Bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- font family cdn -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">

    <!-- scroll reveal cdn -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

  </head>

  <body id="header" onload="setInterval('reloadwaktu()');">

    <!-- Navigation atas -->
    <nav class="navbar navbar-custom navbar-expand-lg sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <!-- navbar brand -->
        <a class="navbar-brand" href="<?= base_url(); ?>home">
          <img class="logo" src="<?= base_url(); ?>assets/img/logo.png" alt="logo">
        </a>

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
              <a class="nav-link" href="#">Cara Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="masuk.html">Masuk</a>
            </li>
          </ul>
        </div>

          <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
            <input type="text" class="form-control form-control-sm pencarian" type="search" placeholder="Cari..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
            <button class="btn btn-outline-success btn-sm my-sm-0" type="submit">
              <i class="fa fa-search fa-fw"></i>
            </button>
          </div>
        </div>
          </form>

      </div>
      </nav>

      <!-- untuk waktu -->
      <div class="container-fluid" style="margin: 20px 0 0 0;">

        <div class="row text-center justify-content-center">
          <div class="col-lg-12">
            <!-- alert -->
            <div class="alert alert-warning pemberitahuan" role="alert">
              <i class="fa fa-exclamation-triangle" style="color: red;"></i> Pesan sebelum jam <span class="alert-link">18.00 WITA</span> untuk pengiriman besok hari.
            </div>
            <!-- alert -->
          </div>
          <div class="col-lg-6">
            <!-- tanggal pengiriman -->
            <div class="alert alert-success pemberitahuan" role="alert">
              <b><span id="getwaktu"></span></b>
              <table align="center">
                <tr>
                  <td> <b>Tanggal Pemesanan</b> </td>
                  <td>: <span id="gethari"></span> </td>
                </tr>
              </table>
            </div>
            <!-- tanggal pengiriman -->
          </div>
        </div>
      </div>

      <!-- untuk waktu -->

    <section>

      <div class="container">

        <div class="row justify-content-md-center pb-4">
          <div class="col-lg-6 col-sm-6 col-md-6">

                <div class="card">
                  <div class="card-header text-center">
                    <h6>Login</h6>
                  </div>
                  <div class="card-body">
                <?php
                if($this->session->flashdata('alert')) {
                  echo '<div class="alert alert-warning alert-message">';
                  echo $this->session->flashdata('alert');
                  echo '</div>';
                }
                 ?>
              <form class="" action="<?= base_url(); ?>home/login" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Ingat Saya!</label>
                </div>
                <button type="submit" name="submit" value="Masuk" class="btn btn-success">Masuk</button>
                </form>

            </div>
            <div class="card-footer text-center">
              <p>Belum punya akun? <a href="<?= base_url(); ?>home/registrasi">Daftar</a> </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="call-to-action text-white text-center" id="berlangganan">
    <div class="container">

      <!-- form submit -->
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-4">Dapatkan Informasi terbaru dari kami.</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <?php echo form_open('home/add_email'); ?>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input value="<?= set_value('email') ?>" type="email" name="email" id="email" class="form-control form-control-lg" aria-describedby="email" placeholder="Masukkan Email Anda" required>
              </div>
              <div class="col-12 col-md-3">
                <input class="btn btn-block btn-lg btn-success" type="submit" value="Submit">
              </div>
              <?php echo form_close(); ?>
            </div>
        </div>
      </div>
      <!-- form submit -->

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
                <a href="https://wa.me/6282191946787" target="_blank">
                  <i class="fab fa-whatsapp fa-2x fa-fw"></i>
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
      <p class="text-muted large mb-4 mb-lg-0">&copy; Dapurtani 2018 - <span id="gettahun"></span>.</p>
    </div>

    <!-- jquery -->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- popper js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- bootstrap js cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Pemanggilan Tanpa Scroll -->
    <script src="<?= base_url(); ?>assets/vendor/js/dinamis.js?ts=<?=time ()?>"></script>

    <!-- Pemanggilan Animasi -->
    <script src="<?= base_url(); ?>assets/vendor/js/animasi.js?ts=<?=time ()?>"></script>

    <!-- Pemanggilan Tanggal -->
    <script src="<?= base_url(); ?>assets/vendor/js/tanggal.js?ts=<?=time ()?>"></script>
    <script type="text/javascript">

      function masukkan() {
        alert('Mohon Maaf fitur ini dalam tahap pengembangan !');
      }

    </script>
  </body>
</html>
