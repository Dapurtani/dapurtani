<div>
<?php if ($this->session->userdata('fullname') == 'Wilayah A') { ?>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-comments-o"></i></div>
       <div class="count">2</div>
       <a href="<?= base_url(); ?>sayur"> <h3>Sayur</h3></a>
     </div>
   </div>

   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
       <div class="count">3</div>
       <a href="<?= base_url(); ?>administrator/pesanan"> <h3>Pesanan</h3></a>
     </div>
   </div>
  <?php } else { ?>
 <div class="row top_tiles">
   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
       <div class="count">1</div>
      <a href="<?=base_url(); ?>transaksi"> <h3>Transaksi</h3></a>

     </div>
   </div>
   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-comments-o"></i></div>
       <div class="count">2</div>
       <a href="<?=base_url(); ?>sayur"> <h3>Sayur</h3></a>
     </div>
   </div>
   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
       <div class="count">3</div>
       <a href="<?=base_url(); ?>s_pengiriman"> <h3>Status Pengiriman</h3></a>
     </div>
   </div>
   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-check-square-o"></i></div>
       <div class="count">4</div>
       <a href="<?=base_url(); ?>administrator/list_email"> <h3>Email</h3></a>
     </div>
   </div>
   <?php } ?>
 </div>

 <div class="row">
   <div class="col-md-12">
     <div class="x_panel">

     </div>
   </div>
 </div>
</div>
