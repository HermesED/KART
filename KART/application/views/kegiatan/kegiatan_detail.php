<head>
    <title><?= $title;?></title>
    <link href="<?= base_url();?>assets/css/lightbox.css" rel="stylesheet"> 
    <link href="<?= base_url();?>assets/css/animate.min.css" rel="stylesheet">
    <script>var switchTo5x=true;</script>
    <script src="http://w.sharethis.com/button/buttons.js"></script>
    <script src="<?= base_url();?>assets/js/ajax.js"></script>
    <script>stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head><!--/head-->

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
    $_SESSION['idkeg'] = $news['id_keg'];
?>
    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <?php
                                        $ff = './assets/images/kegiatan/'.$_SESSION['idkeg'].'.jpg';
                                        if( file_exists( $ff ) ) {
                                    ?>
                                            <img src="<?= base_url()?>assets/images/kegiatan/<?=$_SESSION['idkeg']?>.jpg" />
                                    <?php
                                        }
                                    ?>
                            <?php if($_SESSION['admin']==1):?>
                                <form id="form" class="kart" action="<?= base_url()?>kegiatan/update" method="post" enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="common-form bottom">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="nama" value="<?= $news['id_keg']?>" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="foto">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-common" value="Update"><i class="fa fa-image-o fa-2x"> Change Picture</i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-8">
                                                <h2><span class="fa fa-exclamation-triangle fa-1x" aria-hidden="true"> INFO</span></h2><hr>
                                                    <li>
                                                        <p>
                                                            For a better look and view of the picture, it is recommended to upload at least only horizontal images.
                                                        </p>
                                                    </li>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php endif; ?>                                  
                                </div>
                                <div class="post-content overflow">
                                    <h1 class="post-title bold"><?= $news['judul'] ?></h1>
                                    <h2>Berita Kegiatan Ini Telah Dibaca <?= $news['view'] ?> Kali</h2>
                                    <h3 class="post-author">Diposting oleh 
                                    <?php if( $_SESSION['admin']==1||$_SESSION['admin']==0 ){
                                        $rank = "admin ";}
                                    ?>
                                <?= $rank;?> <a href="#"><?= $news['username'] ?></a></h3><hr>
                                    <p>
                                    <?php
                                        $isi = str_replace( array("\r\n", "\n", "\r"), '<br />' , $news['kegiatan'] ) ;
                                            echo $isi;
                                    ?>
                                    </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                        <i class="fa fa-fw fa-thumbs-o-up" id="likenews"></i>
                                        <span id="jumlahlike"><?= $news['like'] ?></span>
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-share">
                                        <div class="fb-share-button" 
                                            data-href="https://www.facebook.com/KharismaArt-1727661744229335/" 
                                            data-layout="button_count">
                                        </div>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="response-area"><br>
                                    <h2 class="bold">Comments</h2>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="post-comment">
                                            <div class="fb-comments" data-width="650" data-href="https://www.facebook.com/KharismaArt-1727661744229335/" data-numposts="5">
                                            </div>
                                        </li>
                                    </ul>                   
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                        <a href="<?= base_url();?>kegiatan"><i class="fa fa-arrow-circle-left fa-4x"> BACK</i></a>
                            <h3>Comments</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="<?= base_url();?>assets/images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="<?= base_url();?>assets/images/portfolio/project2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="<?= base_url();?>assets/images/portfolio/project3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Adipisicing elit<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Sed do<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Eiusmod<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Product</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url();?>assets/images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
