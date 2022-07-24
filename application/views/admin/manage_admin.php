<div class="x_panel">
	<div class="x_title">
		<h2>Managemen User</h2>
		<div class="clearfix"></div>
	</div>

	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="tabelUser">
			<thead>
				<tr>
					<th width="8%">#</th>
					<th width="40%">fullname</th>
					<th width="40%">Username</th>
					<th>Password</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; foreach($data->result() as $admin) : ?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $admin->fullname; ?></td>
					<td><?= $admin->username; ?></td>
					<td><?= $admin->password; ?></td>
					<td>
            <a href="<?= base_url(); ?>login/update/<?= $admin->id_admin; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
			<a href="<?= base_url(); ?>login/hapus/<?= $admin->id_admin; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
          </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>