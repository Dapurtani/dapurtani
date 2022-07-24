<div class="x_panel">
<div class="x_title">
  <h2>Managemen Sayur</h2>
  <div style="float:right">
    <a href="<?= base_url(); ?>sayur/add_sayur" class="btn btn-primary">Tambah Sayur</a>
  </div>
  <div class="clearfix"></div>
</div>

<div class="x_content">
  <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Sayur</th>
        <th>Nama Petani</th>
        <th>Kelompok Sayur</th>
        <th>Harga</th>
        <th>Promo</th>
        <th>Jenis Sayur</th>
        <th>Stock</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach($data->result() as $sayur) :
      ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $sayur->nama_sayur; ?></td>
        <td><?= $sayur->nama_petani; ?></td>
        <td>
        <?php
          if ($sayur->k_sayur == 1) {
            echo '<label class="label-success" style="color:white; padding:3px 5px;">Organik</label>';
          } if ($sayur->k_sayur == 2) {
            echo '<label class="label-primary" style="color:white; padding:3px 5px;">Hidroponik</label>';
          } if ($sayur->k_sayur == 3) {
            echo '<label class="label-default" style="color:white; padding:3px 5px;">Bebas Pestisida</label>';
          } if ($sayur->k_sayur == 4)  {
            echo '<label class="label-warning" style="color:white; padding:3px 5px;">Pertanian Lokal</label>';
          } if ($sayur->k_sayur == 5)  {
            echo '<label class="label-info" style="color:white; padding:3px 5px;">Import</label>';
          }
           ?>
        </td>
        <td><?= 'Rp. '.number_format($sayur->harga,0,',','.'); ?></td>
          <td><?= 'Rp. '.number_format($sayur->promo,0,',','.'); ?></td>
        <td>
          <?php
          if ($sayur->status == 1) {
            echo '<label class="label-success" style="color:white; padding:3px 5px;">Sayur Daun</label>';
          } if ($sayur->status == 2) {
            echo '<label class="label-primary" style="color:white; padding:3px 5px;">Sayur Buah</label>';
          } if ($sayur->status == 3) {
            echo '<label class="label-default" style="color:white; padding:3px 5px;">Umbi-umbian</label>';
          } if ($sayur->status == 4)  {
            echo '<label class="label-warning" style="color:white; padding:3px 5px;">Buah</label>';
          } if ($sayur->status == 5)  {
            echo '<label class="label-info" style="color:white; padding:3px 5px;">Bumbu Dapur</label>';
          }
           ?>
        </td>
        <td><?= $sayur->stock; ?></td>
        <td>
        <?php if ($this->session->userdata('level') == '2') { ?>
          <a href="<?= base_url(); ?>sayur/detail/<?= $sayur->id_sayur; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
          <a href="<?= base_url(); ?>sayur/update_sayur/<?= $sayur->id_sayur; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
          <?php } else { ?>
          <a href="<?= base_url(); ?>sayur/detail/<?= $sayur->id_sayur; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
          <a href="<?= base_url(); ?>sayur/update_sayur/<?= $sayur->id_sayur; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
          <a href="<?= base_url(); ?>sayur/hapus/<?= $sayur->id_sayur; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
        <?php } ?>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
