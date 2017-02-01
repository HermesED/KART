<head>
    <title><?= $title;?></title>
</head>
<section id="edit-profile">
    <form id="form" class="kart" action="<?= base_url();?>usr/upd_user" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="common-form bottom">
                        <?php
                            $ff = './assets/images/users/'.$_SESSION['username'].'.jpg';
                            if( file_exists( $ff ) ) {
                        ?>
                                <a href="<?= base_url();?>usr/profile"><img src="<?= base_url()?>assets/images/users/<?=$_SESSION['username']?>.jpg" /></a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="common-form bottom">
                        <div class="form-group">
                        <label>Username</label>
                            <input type="text" name="username" value="<?= $user['username']?>" class="form-control" maxlength="30" placeholder="Username" required="required" />
                        </div>
                        <div class="form-group">
                        <label>Change Profile Picture</label>
                            <input id="nama" type="file" name="foto" class="form-control" />
                        </div>                
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Update Profile">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2><span class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"> Info</span></h2><hr>
                        <li><p>Anda akan otomatis ter-logout saat meng-update profil</p></li>
                        <li><p>Berhati-hatilah saat mengganti nama. Remember your username!</p></li>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>