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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Barang</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama UMKM</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="umkm" value="<?= $umkm; ?>">
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
                           <br  />
                          <input type="file" class="form-control col-md-7 col-xs-12" name="foto">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Barang</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="<?= $harga; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Satuan Barang</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="text" name="satuan" value="<?= $satuan; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Jenis Produk</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="jenis" class="form-control">
                            <option value="">--Pilih Jenis Produk--</option>
                            <option value="1" <?php if($jenis == 1 ) {echo "selected";} ?>>Dapur</option>
                            <option value="2" <?php if($jenis == 2 ) {echo "selected";} ?>>Makanan</option>
                            <option value="3" <?php if($jenis == 3 ) {echo "selected";} ?>>Minuman</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Stock</label>
                        <div class="col-md-4 col-sm-6">
                          <input class="form-control col-md-7" type="number" name="stock" value="<?= $stock; ?>">
                        </div>
                      </div>
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
