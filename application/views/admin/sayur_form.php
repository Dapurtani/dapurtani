<div class="x_panel">
                  <div class="x_title">
                    <h2><?= $header; ?></h2>
                    <div class="clearfix"></div>
                    <?= validation_errors('<p style="color:red">','</p>'); ?>
                     <?php
                     if ($this->session->flashdata('alert'))
                     {
                       echo '<div class="alert alert-danger alert-message">';
                       echo $this->session->flashdata('alert');
                       echo '</div>';
                     }
                      ?>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">

                      <div class="form-group">
                      <?php if ($this->session->userdata('level') == '2') { ?>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Sayur</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $nama; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Petani</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="n_petani" value="<?= $n_petani; ?>" readonly>
                        </div>
                      </div>

                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="k_sayur" value="<?= $k_sayur; ?>" readonly>
                        
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar Sayur</label>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                          <?php
                           if (isset($gambar)) {
                             echo '<input type="hidden" name="old_pict" value="'.$gambar.'">';
                             echo '<img src="'.base_url().'assets/upload/'.$gambar.'" width="30%">';
                           }
                           ?>
                           <div class="clear-fix"></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="<?= $harga; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Promo Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7 col-xs-12" type="number" name="promo" value="<?= $promo; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Satuan Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="text" name="satuan" value="<?= $satuan; ?>" readonly>
                        </div>
                      </div>

                 
                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="status" value="<?= $status; ?>" readonly>
                     


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Stock</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="number" name="stock" value="<?= $stock; ?>">
                        </div>
                      </div>

                        <?php } else { ?>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Sayur</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Petani</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="n_petani" value="<?= $n_petani; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Kelompok Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="k_sayur" class="form-control">
                            <option value="">--Pilih Kelompok Sayur--</option>
                            <option value="1" <?php if($k_sayur == 1 ) {echo "selected";} ?>>Organik</option>
                            <option value="2" <?php if($k_sayur == 2 ) {echo "selected";} ?>>Hidroponik</option>
                            <option value="3" <?php if($k_sayur == 3 ) {echo "selected";} ?>>Bebas Pestisida</option>
                            <option value="4" <?php if($k_sayur == 4 ) {echo "selected";} ?>>Pertanian Lokal</option>
                            <option value="5" <?php if($k_sayur == 5 ) {echo "selected";} ?>>Import</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar Sayur</label>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                          <?php
                           if (isset($gambar)) {
                             echo '<input type="hidden" name="old_pict" value="'.$gambar.'">';
                             echo '<img src="'.base_url().'assets/upload/'.$gambar.'" width="30%">';
                           }
                           ?>
                           <div class="clear-fix"></div>
                       
                          <input type="file" class="form-control col-md-7 col-xs-12" name="foto">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="<?= $harga; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Promo Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7 col-xs-12" type="number" name="promo" value="<?= $promo; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Satuan Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="text" name="satuan" value="<?= $satuan; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Jenis Sayur</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="status" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="1" <?php if($status == 1) {echo "selected";} ?>>Daun</option>
                            <option value="2" <?php if($status == 2 ) {echo "selected";} ?>>Sayur Buah</option>
                            <option value="3" <?php if($status == 3 ) {echo "selected";} ?>>Umbi-umbian</option>
                            <option value="4" <?php if($status == 4 ) {echo "selected";} ?>>Buah</option>
                            <option value="5" <?php if($status == 5 ) {echo "selected";} ?>>Bumbu Dapur</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Stock</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="number" name="stock" value="<?= $stock; ?>">
                        </div>
                      </div>
                      <?php } ?>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                          <button type="button" onclick="window.history.go(-1)" class="btn btn-primary">kembali</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
