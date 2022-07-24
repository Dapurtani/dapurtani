<div class="x_panel">
	<div class="x_title">
		<h2>List Email</h2>
		<div class="clearfix"></div>
	</div>

	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
			<thead>
				<tr>
					<th>#</th>
					<th>id_email</th>
					<th>Email</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($data->result() as $email) :?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $email->id_email; ?></td>
					<td><?= $email->email; ?></td>
					<td>
						<a href="<?= base_url(); ?>administrator/hapus/<?= $email->id_email; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
