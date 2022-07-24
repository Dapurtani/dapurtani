<div class="x_panel">
                  <div class="x_title">
                    <h2>Status Pengiriman</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php
                  foreach ($t_order->result() as $t) {
                  ?>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="<?= base_url(); ?>s_pengiriman/update_diterima" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="id_order" value="<?= $t->id_order; ?>">

                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $t->nama; ?>">

                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="email" value="<?= $t->email; ?>">

                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="alamat" value="<?= $t->alamat; ?>">

                          <input type="hidden" class="form-control col-md-7 col-xs-12" name="no_hp" value="<?= $t->no_hp; ?>">
              
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Status Pengiriman</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="status" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="1" <?php if($t->status == 1) {echo "selected";} ?>>Diantar</option>
                            <option value="2" <?php if($t->status == 2 ) {echo "selected";} ?>>Diterima</option>
                            <option value="3" <?php if($t->status == 3 ) {echo "selected";} ?>>Batal</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" class="btn btn-success"  value="Simpan">
                          <button type="button" onclick="window.history.go(-1)" class="btn btn-primary">kembali</button>
                        </div>
                      </div>
                    </form>
                      </div>

                  <?php  } ?>
