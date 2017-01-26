<head>
    <title><?= $title;?></title>
</head>
    

    <?php if($this->session->flashdata('msg')) : ?>
      <div class="alert alert-success" role="alert" align="center">
         <?=$this->session->flashdata('msg')?>
      </div>
    <?php endif; ?>
    <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-1 main">
    <section id="members" class="pengurus">
        <h2 class="sub-header">Total User = <?= $tuser->num_rows();?> </h2>        
        <form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
              </thead>

              <tbody>
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Username</b></th>
                  <th><b>Status</b></th>
                  <th><b>Edit Status</b></th>
                  <th><b>Change</b></th>
                  <th><b>Delete</b></th>
                </tr>
                <tr>
                <?php foreach($users as $user){
                ?>
                </tr>
              <form action="<?= base_url('member/submit');?>" method="post" novalidate>
                <tr>
                  <td>
                  <input name="nim" value="<?= $user->nim ?>" type="hidden"><?= $user->nim ?></input>
                  </td>
                  <td>
                    <input name="username" value="<?= $user->username ?>" type="hidden"><?= $user->username;?></input>
                  </td>
                  <td>
                    <?= $user->admin;?>
                  </td>
                  <td>
                    <input name="admin" value="0" type="checkbox"> USERS<br>
                    <input name="admin" value="1" type="checkbox"> ADMIN<br>
                  </td>
                  <td>
                    <div class="form-group col-xs-12">
                      <button type="submit" class="btn btn-primary" name="sbm" value="upd_user">
                        <i class="fa fa-refresh fa-1x" aria-hidden="true"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <a href="<?= base_url('member/deluser/'.$user->nim)?>">
                      <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
              </form>
              </tbody>
              <?php }?>
            </table>
            <hr>
          </div> <!--END DIV TABLE RESPONSIVE-->
        </form>
    </div>   <!-- END DIV CONTROL GROUP -->
  </form>    <!-- END FORM -->

  </section> <!-- END SECTION PENGURUS -->
</div>       <!-- END DIV -->

    <form id="form" class="kart" method="post" action="daftar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="common-form bottom">
                        <div class="contact-info bottom">
                        <h2><span class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"> Rules</span></h2><hr>
                        <li><p>Seorang Admin harus professional dalam menjalankan website ini.</p></li>
                        <li><p>Jangan menghapus atau mengganti status tanpa alasan, konfirmasi, dan persetujuan sesama admin.</p></li>
                        <li><p>Jangan memilih anggota yang tidak dapat dipercayai sebagai admin.</p></li>
                        <li><p>Kolom [Status] menunjukkan status anggota. Sebagai ADMIN atau USER.<br>[1] ADMIN<br>[0] USER</p></li>
                        <li><p>Klik tanda 'check' untuk mengganti status. Kemudian klik tombol change pada kolom Change.</p></li>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>
     </form>