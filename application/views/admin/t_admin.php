<div class="x_panel">
                  <div class="x_content">
                    <br />
                    <?= validation_errors('<p style="color:red">', '</p>'); ?>
                    <form class="form-horizontal form-label-left" action="<?= base_url(); ?>administrator/t_admin" enctype="multipart/form-data" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Username</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="username" value="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Pass</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="password" value="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Wilayah</label>
                      <div class="col-md-7 col-sm-6 col-xs-12">
									<select class="form-control" name="fullname" id="exampleFormControlSelect1" required>
										<option value="" required>-- Pilih wilayah --</option>
										<option value="Wilayah A" <?php if($fullname == 'Wilayah A') {echo "selected";} ?>>Wilayah A</option>
                                        <option value="Wilayah B" <?php if($fullname == 'Wilayah B') {echo "selected";} ?>>Wilayah B</option>
                                        <option value="Wilayah C" <?php if($fullname == 'Wilayah C') {echo "selected";} ?>>Wilayah C</option>
									</select>
								</div>
                                </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Level Admin</label>
                      <div class="col-md-7 col-sm-6 col-xs-12">
									<select class="form-control" name="level" id="exampleFormControlSelect1" required>
										<option value="" required>-- Pilih level --</option>
										<option value="2" <?php if($level == '2') {echo "selected";} ?>>2</option>
									</select>
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
