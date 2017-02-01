<head>
    <title><?= $title;?></title>
</head>
<section id="edit-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="common-form bottom">
                        <?php
                            $ff = './assets/images/users/'.$_SESSION['username'].'.jpg';
                            if( file_exists( $ff ) ) {
                        ?>
                                <img src="<?= base_url()?>assets/images/users/<?=$_SESSION['username']?>.jpg" />
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="common-form bottom">
                        <div class="form-group">
                        <label>NIM</label>
                            <input disabled="disabled" name="nim" value="<?= $user['nim']?>" class="form-control" maxlength="30" placeholder="Username" required="required" />
                        </div>
                        <div class="form-group">
                        <label>Username</label>
                            <input disabled="disabled" name="username" value="<?= $user['username']?>" class="form-control" maxlength="30" placeholder="Username" required="required" />
                        </div> 
                        <div class="form-group">
                            <a href="<?= base_url();?>usr/edit_profile"><button class="btn btn-primary">EDIT PROFILE</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2><span class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"> Info</span></h2><hr>
                        <li><p>Ini adalah halaman profil anda</p></li>
                        <li><p>Klik tombol update profile untuk pindah ke halaman edit!</p></li>
                    </div>
                </div>
            </div>
        </div>
</section>