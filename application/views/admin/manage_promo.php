<div class="x_panel">
	<div class="x_title">
		<h2>Komentar</h2>
		<div class="clearfix"></div>
	</div>

	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
			<thead>
				<tr>
					<th width="8%">#</th>
					<th width="20%">fullname</th>
					<th>Bintang</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Kecamatan</th>
					<th>Telp</th>
					<th>Tanggal</th>
					<th width="40%">Komentar</th>
					<th>opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; foreach ($data->result() as $promo) : ?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $promo->nama; ?></td>
					<td><?= $promo->bintang; ?></td>
					<td><?= $promo->email; ?></td>
					<td><?= $promo->alamat; ?></td>
					<td><?= $promo->kecamatan; ?></td>
					<td><?= $promo->telp; ?></td>
					<td><?= $promo->tgl; ?></td>
					<td><?= $promo->komentar; ?></td>
					<td>
						<a href="<?= base_url(); ?>user/hapus_komentar/<?= $promo->id_s_pemesanan; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
