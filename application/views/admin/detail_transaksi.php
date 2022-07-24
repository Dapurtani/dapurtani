<div class="x_panel">
   <div class="x_title">
      <h2>Managemen Order</h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
         <thead>
            <tr>
              <th>No</th>
               <th>Nama Sayur</th>
               <th>Harga Sayur</th>
               <th>Satuan</th>
               <th>Petani</th>
               <th>Kelompok Sayur</th>
               <th>Jumlah</th>
               <th>Total</th>

            </tr>
         </thead>
         <tbody>
            <tr>
<?php
$i = 1;
    foreach ($t_detail_order->result() as $key) :

 ?>
 <tr>
                <td><?= $i++; ?></td>
               <td><?= $key->nama_sayur; ?></td>
                <td><?= $key->biaya; ?></td>
                <td><?= $key->umkm; ?></td>
                <td><?= $key->petani; ?></td>
                <td>
                <?php
          if ($key->kelompok == 1) {
            echo 'Organik';
          } if ($key->kelompok == 2) {
            echo 'Hidroponik';
          } if ($key->kelompok == 3) {
            echo 'Bebas Pestisida';
          } if ($key->kelompok == 4)  {
            echo 'Pertanian Lokal';
          } if ($key->kelompok == 5)  {
            echo 'Import';
          }
           ?>
                </td>
               <td><?= $key->qty; ?></td>
               <td>Rp. <?= number_format(($key->biaya * $key->qty),0,',','.'); ?></td>

            </tr>
            <?php endforeach; ?>
            <tr> </tr>
              <td colspan="8">Total Harga Sayur :
               <?= $key->sub; ?></td>
           <tr></tr>
           <td colspan="8"> Ongkir : Rp 2.000</td>
           <tr></tr>
           <td colspan="8"> Total Pembayaran Rp. <?= $key->total; ?></td>
         </tbody>

      </table>
   </div>
</div>
