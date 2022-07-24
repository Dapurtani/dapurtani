<div class="x_panel">
<div class="x_title">
  <h2>Managemen Sayur</h2>
  <div style="float:right">
    <a href="<?= base_url(); ?>administrator/add_voucher" class="btn btn-primary">Tambah Voucher</a>
  </div>
  <div class="clearfix"></div>
</div>

<div class="x_content">
  <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode Voucher</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach($data->result() as $voucher) :
      ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $voucher->kd_voucher; ?></td>
        <td>
          <a href="" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
          <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
          <a href="<?= base_url(); ?>administrator/hapus_voucher/<?= $voucher->id_voucher; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
