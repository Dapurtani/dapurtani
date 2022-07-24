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
					<th width="40%">Alamat</th>
					<th>Email</th>
					<th>Telp</th>
					<th>Promo</th>
					<th>Status_P</th>
					<th>Status</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; foreach($data->result() as $user) : ?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $user->fullname; ?><?= $user->blkg; ?></td>
					<td><?= $user->alamat; ?></td>
					<td><?= $user->email; ?></td>
					<td><?= $user->telp; ?></td>
					<td>
						<?php
            if ($user->promo == 'perbulan') {
              echo '<label class="label-success" style="color:white; padding:3px 5px;">Perbulan</label>';
            } if ($user->promo == 'perminggu') {
              echo '<label class="label-primary" style="color:white; padding:3px 5px;">Perminggu</label>';
            }
            ?>
					</td>
					<td>
						<?php  if ($user->s_pemesanan == 'proses') {
              echo '<label class="label-default" style="color:white; padding:3px 5px;">Diproses</label>';
            } if ($user->s_pemesanan == 'diantar') {
              echo '<label class="label-success" style="color:white; padding:3px 5px;">Diantar</label>';
            } if ($user->s_pemesanan == 'diterima') {
              echo '<label class="label-primary" style="color:white; padding:3px 5px;">Diterima</label>';
            }
            ?>
					</td>
					<td>
            <?php if($user->status == 1) { ?>
              <a href="<?=base_url();?>user/status/2/<?=$user->id_user;?>" class="btn btn-success">Active</a>
						<?php } else { ?>
              <a href="<?=base_url();?>user/status/1/<?=$user->id_user;?>" class="btn btn-danger">Non Active</a>
						<?php } ?>
					</td>
					<td>
            <a href="<?= base_url(); ?>user/update_user/<?= $user->id_user; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
						<a href="<?=base_url();?>user/detail/<?=$user->id_user;?>" class="btn btn-primary"><i class="fa fa-search-plus"></i></a>
						<a href="<?= base_url(); ?>user/hapus/<?= $user->id_user; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
          </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>