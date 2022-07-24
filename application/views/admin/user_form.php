<div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
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
                  <?php
                  $user = $data->row();
                   ?>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Username</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="username" value="<?= $user->username; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Pass</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="pass" value="<?= $user->pass; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Lengkap</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="fullname" value="<?= $user->fullname; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Email</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="email" class="form-control col-md-7 col-xs-12" name="email" value="<?= $user->email; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Telp</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="telp" value="<?= $user->telp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat Rumah</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="alamat" value="<?= $user->alamat; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Kantor</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $user->nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat Kantor</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="kantor" value="<?= $user->kantor; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Promo</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="promo" class="form-control">
                            <option value="">--Pilih Promo--</option>
                            <option value="perbulan" <?php if($user->promo == 'perbulan') {echo "selected";} ?>>Perbulan</option>
                            <option value="Perminggu" <?php if($user->promo == 'perminggu' ) {echo "selected";} ?>>Perminggu</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">S_Pemesanan</label>
                        <div class="col-md-4 col-sm-6">
                          <select name="s_pemesanan" class="form-control">
                            <option value="">--Pilih S_Pemesanan--</option>
                            <option value="proses" <?php if($user->s_pemesanan == 'proses' ) {echo "selected";} ?>>Diproses</option>
                            <option value="selesai" <?php if($user->s_pemesanan == 'selesai' ) {echo "selected";} ?>>Selesai</option>
                            <option value="diantar" <?php if($user->s_pemesanan == 'diantar') {echo "selected";} ?>>Diantar</option>
                            <option value="diterima" <?php if($user->s_pemesanan == 'diterima' ) {echo "selected";} ?>>Diterima</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tanggal Mulai</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                             <input type="text" name="tgl_mulai" id="datepicker" class="form-control col-md-7 col-xs-12" value="<?= $user->tgl_mulai; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Tanggal Berakhir</label>
                      <div class="col-md-7 col-sm-6 col-xs-12">
                           <input type="text" name="tgl_akhir" id="datepicker1" class="form-control col-md-7 col-xs-12" value="<?= $user->tgl_akhir; ?>">
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
