<div class="x_panel">
  <h2>Detail User</h2>
  <div class="x_title">
  <div class="clearfix"></div>
</div>
<?php
$user = $data->row();
 ?>
  <div class="x_content">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <table class="table table-striped">
          <tr>
            <td>Nama Lengkap</td>
            <td>: <?= $user->fullname; ?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>: <?= $user->username; ?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>: <?= $user->pass; ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>: <?= $user->alamat; ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php if($user->jk == 'L') {echo "Laki - laki"; } else { echo "Perempuan"; } ?></td>
          </tr>
          <tr>
            <td>Kecamatan</td>
            <td>: <?= $user->kecamatan; ?></td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>: <?= $user->email; ?></td>
          </tr>
          <tr>
            <td>Telp</td>
            <td>: <?= $user->telp; ?></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>: <?php if($user->status == '1') {echo "Active"; } else { echo "Non Active"; } ?></td>
          </tr>
          <tr>
            <td>Tanggal Mulai</td>
            <td>: <?= $user->tgl_mulai; ?></td>
          </tr>
          <tr>
            <td>Tanggal Berakhir</td>
            <td>: <?= $user->tgl_akhir; ?></td>
          </tr>
        </table>
        <a href="#" class="btn btn-warning">Edit</a>
        <a href="#" class="btn btn-primary" onclick="window.history.go(-1)">Kembali</a>
      </div>
    </div>
  </div>
</div>
