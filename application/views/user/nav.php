
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
      <?php if ($this->session->userdata('s_pemesanan') == 'diantar') { ?>
        <li class="nav-item">
          <a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalDiantar"> Status Pemesanan</a>
        </li>
      <?php } else if ($this->session->userdata('s_pemesanan') == 'proses') { ?>
        <li class="nav-item">
          <a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalStatusPemesananDiproses"> Status Pemesanan</a>
        </li>
      <?php } if ($this->session->userdata('user_login')) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>home/index2"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pengguna"> Cara Pemesanan</a>
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
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/logout">Keluar</a>
        </li>

            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="javascript::" data-toggle="modal" data-target="#modalMasuk"><i class="fa fa-sign-in"></i> Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/registrasi"><i class="fa fa-briefcase"></i> Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>home/tentang">Tentang Kami</a>
              </li >
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>home/hubungi">Hubungi Kami</a>
              </li>
    <?php } ?>

      </ul>
    </div>
    </div>
</nav>
