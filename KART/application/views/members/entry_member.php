<head>
    <title><?= $title;?></title>
</head>
    <form id="form" class="kart" method="post" action="entrymb">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input id="nimdftr" type="text" name="nim" class="form-control" placeholder="NIM (8 angka)" maxlength="8" pattern="\d{8}" required="required" title="8 Digit Angka NIM, NUMBERS and CHARACTERS not allowed" />
                            <p id="warning_nim"></p>
                        </div>
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" class="form-control" maxlength="50" placeholder="Nama Lengkap (5 - 40 karakter)" pattern="^[a-zA-Z\s]{5,40}$" required="required" title="Info: MIN 5, MAX 40 Characters, NUMBERS and OPERATORS not allowed" />
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" value="S1 - Sistem Informasi" name="studi" required="required">S1 - Sistem Informasi
                            </div>
                            <div class="radio">
                                <input type="radio" value="S1 - Teknik Informatika" name="studi" required="required">S1 - Teknik Informatika
                            </div>
                            <div class="radio">
                                <input type="radio" value="D3 - Sistem Informasi" name="studi" required="required">D3 - Sistem Informasi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input type="text" name="angkatan" class="form-control" required="required" placeholder="Tahun Angkatan" maxlength="4" pattern="\d{4}">
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" value="Aktif" name="status" required="required">Aktif
                            </div>
                            <div class="radio">
                                <input type="radio" value="Tidak Aktif" name="status" required="required">Tidak Aktif
                            </div>
                        </div>                 
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </div>
                </div>
    </form>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Help Info</h2><hr>
                        <li><p>NIM terdiri atas 8 digit angka.</p></li>
                        <li><p>Ini adalah sistem input manual data anggota.</p></li>
                        <li><p>Hasilnya adalah penambahan data pada tabel dibawah ini.</p></li>
                    </div>
                </div>
                <?php if($this->session->flashdata('msg')) : ?>
                  <div class="alert alert-success" role="alert" align="center">
                     <?=$this->session->flashdata('msg')?>
                  </div>
                <?php endif; ?>
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>


         <!-- /Gambar Tampilan Template DASHBOARD -->
    <div class="col-sm-10 col-sm-offset-6 col-md-10 col-md-offset-1 main">
    <section id="members" class="pengurus">
          <h1 class="page-header">PENGURUS DAN ANGGOTA UKM</h1>

          <div class="teks_pengurus row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Ketua</h4>
              <p>
              <span class="text-muted">Ilfan Diago</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Sekertaris</h4>
              <p>
              <span class="text-muted">Abed Nego Thendean</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 1</h4> 
              <p>
              <span class="text-muted">Jesslyn Chandra</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 2</h4>
              <p>
              <span class="text-muted">???</span>
              </p>
            </div>
          </div><hr>


          
        <h2 class="sub-header">Total Anggota UKM = <?= $total->num_rows();?> </h2>        
        <form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
              </thead>

              <tbody>
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Nama Lengkap</b></th>
                  <th><b>Program Studi</b></th>
                  <th><b>Angkatan</b></th>
                  <th><b>Status</b></th>
                  <th><b>Delete</b></th>
                </tr>
                <tr>
                <?php foreach($anggota as $pengurus){
                ?>
                </tr>
                <tr>
                  <td><?= $pengurus->nim;?></td>
                  <td><?= $pengurus->namalengkap;?></td>
                  <td><?= $pengurus->programstudi;?></td>
                  <td><?= $pengurus->angkatan;?></td>
                  <td><?= $pengurus->status;?></td>
                  <td>
                    <a href="<?= base_url('member/hapus_anggota/'.$pengurus->nim)?>">
                      <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                
              </tbody>
              <?php }?>
            </table>
            <hr>
          </div> <!--END DIV TABLE RESPONSIVE-->
        </form>
          
       
      <button onclick="myFunction()" class="btn btn-primary btn-block">Click Here To Show Table For Update Data Member</button>

<!-- BAGIAN EDIT ANGGOTA -->
<div id="myDIV">
  <h2 class="sub-header">EDIT ANGGOTA</h2><hr>
        <div class="table-responsive">
            <table class="table table-bordered edit">
              <thead><!-- SOMETHING? --></thead>
              <tbody><!-- START TABLE BODY -->
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Nama Lengkap</b></th>
                  <th><b>Program Studi</b></th>
                  <th><b>Angkatan</b></th>
                  <th><b>Status</b></th>
                  <th><b>Update</b></th>
                </tr>
                <tr>
                  <?php foreach($anggota as $edit){ ?>
                </tr>
              <form id="ADMIN" action="<?= base_url('member/submit');?>" method="post" novalidate>
              <tr>
                <td>
                  <input name="nim" type="hidden" value="<?= $edit->nim ?>"><?= $edit->nim ?></input>
                </td>   
                 <td>
                  <input name="nama" value="<?= $edit->namalengkap ?>"></input>
                </td>
                <td>
                  <input name="studi" value="S1 - Sistem Informasi"  type="checkbox"> S1 - SI<br>
                  <input name="studi" value="S1 - Teknik Informatika"  type="checkbox"> S1 - TI<br>
                  <input name="studi" value="D3 - Sistem Informasi"  type="checkbox"> D3 - SI
                </td>           
                <td>
                   <input name="angkatan" value="<?= $edit->angkatan ?>"></input>
                </td>
                <td>
                  <input name="status" value="Aktif"  type="checkbox"> Aktif<br>
                  <input name="status" value="Tidak Aktif"  type="checkbox">Tidak
                </td>
                <td>
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-warning" name="sbm" value="update">
                    <i class="fa fa-plus fa-1x" aria-hidden="true"></i>
                    </button>
                  </div>
                </td>
             </tr>
            </form>   <!-- END FORM -->
           </tbody>   <!-- END TABLE BODY -->
          <?php }?>   <!-- END OF PHP -->
        </table>      <!-- END TABLE -->
        <hr>
     </div>
  </div>
                

  <!-- BAGIAN LIST PENDAFTARAN -->
  <h2 class="sub-header">Pendaftaran Waiting List</h2><hr>
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead><!-- SOMETHING? --></thead>
              <tbody><!-- START TABLE BODY -->
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Nama</b></th>
                  <th><b>Angkatan</b></th>
                  <th><b>Program Studi</th>
                  <th><b>Status</th>
                  <th><b>Confirm</b></th>
                  <th><b>Reject</b></th>
                </tr>
                <tr>
                  <?php foreach($daftar as $pendaftaran){ ?>
                </tr>
              <form id="ADMIN" action="entrymb" method="post" novalidate>
              <tr>
                <td>
                  <input id="txtHiddenUname" name="nim" value="<?= $pendaftaran->nim ?>" type="hidden"><?= $pendaftaran->nim ?></input>
                </td>   
                 <td>
                   <input id="nama" name="nama" value="<?= $pendaftaran->namalengkap ?>" type="hidden"><?= $pendaftaran->namalengkap ?></input>
                </td>           
                <td>
                   <input name="angkatan" value="<?= $pendaftaran->angkatan ?>" type="hidden"><?= $pendaftaran->angkatan ?></input>
                </td>
                <td>
                   <input name="studi" value="<?= $pendaftaran->programstudi ?>" type="hidden"><?= $pendaftaran->programstudi ?></input>
                </td>
                <td>
                   <input type="hidden" name="status" value="<?= $pendaftaran->status ?>" type="hidden"><?= $pendaftaran->status ?></input>
                </td>
                <td>
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-success" name="sbm" value="input">
                    <i class="fa fa-plus fa-1x" aria-hidden="true"></i>
                    </button>
                  </div>
                </td>
                <td>
                    <a href="<?= base_url('member/hapusdftr/'.$pendaftaran->nim)?>">
                      <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                  </td>
             </tr>
            </form>   <!-- END FORM -->
           </tbody>   <!-- END TABLE BODY -->
          <?php }?>   <!-- END OF PHP -->
        </table>      <!-- END TABLE -->
        <hr>
     </div>

  


      <!-- BAGIAN LIST PEMBATALAN -->
    <h2 class="sub-header">Anggota Yang Membatalkan UKM</h2>
    <label>
      If there are members' name listed here, please delete them from members list immediately
    </label><hr>
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead><!-- SOMETHING? --></thead>
              <tbody><!-- START TABLE BODY -->
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Nama Lengkap</b></th>
                  <th><b>Angkatan</b></th>
                  <th><b>Alasan</th>
                  <th><b>Pesan dan Saran</b></th>
                  <th><b>Hapus</b></th>
                </tr>
              <tr>
                  <?php foreach($batal as $pembatalan){ ?>
              </tr>
              <tr>
                <td><?= $pembatalan->nim;?></td>
                <td><?= $pembatalan->namalengkap;?></td>
                <td><?= $pembatalan->angkatan;?></td>
                <td><?= $pembatalan->alasan;?></td>
                <td><?= $pembatalan->pe_saran;?></td>
                <td>
                    <a href="<?= base_url('member/hapusbtl/'.$pembatalan->nim)?>">
                      <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                  </td>
             </tr>
            </form>   <!-- END FORM -->
           </tbody>   <!-- END TABLE BODY -->
          <?php }?>   <!-- END OF PHP -->
        </table>      <!-- END TABLE -->
        <hr>
     </div>
    </div>   <!-- END DIV CONTROL GROUP -->
  </form>    <!-- END FORM -->

  </section> <!-- END SECTION PENGURUS -->
</div>       <!-- END DIV -->
