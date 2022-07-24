<div class="x_panel">
  <h2>Detail Dapur Kebutuhan</h2>
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
            <td>Nama Barang</td>
            <td>: <?= $nm_barang; ?></td>
          </tr>
          <tr>
            <td>Harga Barang</td>
            <td>: <?= 'Rp. '.number_format($harga, 0, ',','.'); ?></td>
          </tr>
          <tr>
            <td>Satuan</td>
            <td>: <?= $satuan; ?></td>
          </tr>
          <tr>
            <td>Stock</td>
            <td>: <?= $stock; ?></td>
          </tr>
        </table>
        <a href="#" class="btn btn-warning">Edit</a>
        <a href="#" class="btn btn-primary" onclick="window.history.go(-1)">Kembali</a>
      </div>
    </div>
  </div>
</div>
