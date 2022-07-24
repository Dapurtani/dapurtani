<div class="x_panel">
<div class="x_title">
  <h2>Managemen Dapur Kebutuhan</h2>
  <div style="float:right">
    <a href="<?= base_url(); ?>d_kebutuhan/add_d_kebutuhan" class="btn btn-primary">Tambah Barang</a>
  </div>
  <div class="clearfix"></div>
</div>

<div class="x_content">
  <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Barang</th>
        <th>Nama Umkm</th>
        <th>Harga</th>
        <th>Satuan</th>
        <th>Jenis Produk</th>
        <th>Stock</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach($data->result() as $kebutuhan) :
      ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $kebutuhan->nm_barang; ?></td>
        <td><?= $kebutuhan->nama; ?></td>
        <td><?= 'Rp. '.number_format($kebutuhan->harga,0,',','.'); ?></td>
          <td><?= $kebutuhan->satuan; ?></td>
          <td><?php
            if ($kebutuhan->jenis == 1) {
              echo '<label class="label-success" style="color:white; padding:3px 5px;">Dapur</label>';
            } if ($kebutuhan->jenis == 2) {
              echo '<label class="label-primary" style="color:white; padding:3px 5px;">Makanan</label>';
            } if ($kebutuhan->jenis == 3) {
              echo '<label class="label-default" style="color:white; padding:3px 5px;">Minuman</label>';
            }
             ?></td>
          <td><?= $kebutuhan->stock; ?></td>
        <td>
          <a href="<?= base_url(); ?>d_kebutuhan/detail/<?= $kebutuhan->id_d_kebutuhan; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
          <a href="<?= base_url(); ?>d_kebutuhan/update_d_kebutuhan/<?= $kebutuhan->id_d_kebutuhan; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
          <a href="<?= base_url(); ?>d_kebutuhan/hapus/<?= $kebutuhan->id_d_kebutuhan; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
