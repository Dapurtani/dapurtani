<div class="x_panel">
                  <div class="x_title">
                    <h2>Voucher</h2>
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
                    <form class="form-horizontal form-label-left" action="<?= base_url(); ?>administrator/add_voucher" enctype="multipart/form-data" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Voucher</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="voucher" name="voucher" value="">
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
