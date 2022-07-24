<div class="x_panel">
	<div class="x_title">
		<h2>Status Pengiriman</h2>
		<div class="clearfix"></div>
	</div>

	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="tabelPemesanan">
			<thead>
				<tr>
					<th>#</th>
					<th>id_order</th>
					<th>Nama Pemesan</th>
					<th>Pesan</th>
					<th>pengiriman</th>
					<th>Kecamatan</th>
					<th>No Hp :</th>
					<th>Email :</th>
                    <th>Nama Sayur</th>
				</tr>
			</thead>
			<tbody>
                <?php $no = 1; 
                foreach($tampil_data as $pengiriman) : ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $pengiriman->id_order; ?></td>
					<td><?= $pengiriman->nama; ?></td>
					<td><?= $pengiriman->tgl_pesan; ?></td>
					<td><?= $pengiriman->tgl_pengiriman; ?></td>
					<td><?= $pengiriman->kecamatan; ?></td>
					<td><?= $pengiriman->no_hp; ?></td>
					<td><?= $pengiriman->email; ?></td>
                    <td><?= $pengiriman->nama_sayur; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
