<div class="x_panel">
  <h2>Detail Item</h2>
  <div class="x_title"></div>
  <div class="clearfix"></div>

  <div class="x_content">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <img src="<?= base_url(); ?>assets/upload/<?= $gambar; ?>" style="width:100%">
      </div>
      <div class="col-md-6 col-sm-6">
        <table class="table table-striped">
          <tr>
            <td>Nama Sayur</td>
            <td>: <?= $nama_sayur; ?></td>
          </tr>
          <tr>
            <td>Harga Petani</td>
            <td>: <?= $n_petani; ?></td>
          </tr>
          <tr>
            <td>Harga Sayur</td>
            <td>: <?= 'Rp. '.number_format($harga, 0, ',','.'); ?></td>
          </tr>
          <tr>
            <td>Satuan</td>
            <td>: <?= $satuan; ?></td>
          </tr>
          <tr>
            <td>Jenis Sayur</td>
            <td>: <?php
            if ($status == 1) {
              echo '<label class="label-success" style="color:white; padding:3px 5px;">Sayur Daun</label>';
            } if ($status == 2) {
              echo '<label class="label-primary" style="color:white; padding:3px 5px;">Sayur Buah</label>';
            } if ($status == 3) {
              echo '<label class="label-default" style="color:white; padding:3px 5px;">Umbi-umbian</label>';
            } if ($status == 4)  {
              echo '<label class="label-warning" style="color:white; padding:3px 5px;">Buah</label>';
            } if ($status == 5)  {
              echo '<label class="label-info" style="color:white; padding:3px 5px;">Bumbu Dapur</label>';
            }
             ?></td>
          </tr>
        </table>
        <a href="#" class="btn btn-warning">Edit</a>
        <a href="#" class="btn btn-primary" onclick="window.history.go(-1)">Kembali</a>
      </div>
    </div>
  </div>
</div>
