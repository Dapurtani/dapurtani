<?php foreach($data as $key) : ?>
<div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3 my-col">

	<div class="work">
		<img class="sayur" src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" alt="">
		<div class="work-bottom">
			<h3><?= $key->nama_sayur; ?></h3>
			<div class="row">
				<div class="col-sm-12">
					<div class="box-detail-sayur">

					<?php if ($key->promo  < 1) { ?>
						<?php } else { ?>
						<p class="detail-sayur"><s>Rp. <?= number_format($key->promo, 0, ',', '.'); ?> / <?= $key->satuan; ?></s></p>
						<?php } ?>
						<p class="detail-sayur">Rp. <?= number_format($key->harga, 0, ',', '.'); ?> / <?= $key->satuan; ?>
						</p>
						<?= (empty($key->nama_petani)) ? '' : '<p class="detail-sayur"><i style="color: #979797; font-size: 12px;">'.$key->nama_petani.'</i></p>' ?>
						<?php if ($key->k_sayur == 1) { ?>
						<p class="detail-sayur"><i style="color: #979797; font-size: 12px">Organik</i></p>
						<?php } if ($key->k_sayur == 2) { ?>
						<p class="detail-sayur"><i style="color: #979797; font-size: 12px">Hidroponik</i></p>
						<?php } if ($key->k_sayur == 3) { ?>
						<p class="detail-sayur"><i style="color: #979797; font-size: 12px">Bebas Pestisida</i></p>
						<?php } if ($key->k_sayur == 4) { ?>
						<p class="detail-sayur"><i style="color: #979797; font-size: 12px">Pertanian Lokal</i></p>
						<?php } if ($key->k_sayur == 5) { ?>
						<p class="detail-sayur"><i style="color: #979797; font-size: 12px">Import</i></p>
						<?php } if ($key->stock  < 1) { ?>
							<?php } else { ?>
						<p class="detail-sayur">Sisa Stok : <?= $key->stock; ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php if ($key->stock  < 1) { ?>
				<b class="mt-2">Stock Kosong</b>
			<?php } else { ?>
				<a class="btn btn-beli btn-success mt-2" href="<?= base_url(); ?>cart/add/<?= $key->id_sayur; ?>">Masukkan ke Keranjang</a>
			<?php } ?>
		</div>
	</div>

</div>
<?php endforeach; ?>
