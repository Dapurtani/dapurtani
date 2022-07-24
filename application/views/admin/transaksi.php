<div class="x_panel">
   <div class="x_title">
      <h2>Managemen Order</h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
         <thead>
            <tr>
               <th>#</th>
               <th>Id Order</th>
               <th>Nama Pemesan</th>
               <th>Tanggal Pesan</th>
               <th>Tanggal Pengiriman</th>
               <th>Email</th>
               <th>Kecamatan</th>
               <th>Alamat Rumah</th>
               <th>Alamat Kantor</th>
               <th>No HP</th>
               <th>Nama Sayur</th>
               <th>Jumlah</th>
               <th>Total Harga</th>
               <th>Metode Pembayaran=></th>
              <th>Status Pengantaran</th>
               <th>Opsi</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $no=1;
            foreach($data as $key) :
            ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $key->id_order; ?></td>
               <td><?= $key->nama; ?></td>
                <td><?= $key->tgl_pesan; ?></td>
               <td><?= $key->tgl_pengiriman; ?></td>
               <td><?= $key->email; ?></td>
               <td><?= $key->kecamatan; ?></td>
               <td><?= $key->alamat; ?></td>
               <td><?= $key->kantor; ?></td>
               <td><?= $key->no_hp; ?></td>
               <td><?= $key->nama_sayur; ?></td>
               <td><?= $key->qty; ?></td>
               <td><?= $key->total; ?></td>
               <td><?= $key->pembayaran; ?></td>
               <td><?php
               if ($key->status == 1) {
                 echo '<label class="label-success" style="color:white; padding:3px 5px;">Diantar</label>';
               } if ($key->status == 2) {
                 echo '<label class="label-primary" style="color:white; padding:3px 5px;">Diterima</label>';
               } if ($key->status == 3) {
                 echo '<label class="label-default" style="color:white; padding:3px 5px;">Batal</label>';
               }
                ?></td>
                     <td><a href="<?=base_url();?>transaksi/hapus/<?=$key->id_order;?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')"><i class="fa fa-trash"></i></a>
                       <a href="<?=base_url();?>transaksi/detail/<?=$key->id_order;?>" class="btn btn-danger"></a>
               </td>

            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>
