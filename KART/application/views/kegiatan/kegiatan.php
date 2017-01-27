<head>
    <title><?= $title;?></title>
    <link href="<?= base_url();?>assets/css/lightbox.css" rel="stylesheet"> 
    <link href="<?= base_url();?>assets/css/animate.min.css" rel="stylesheet">
</head><!--/head-->

<body>
<?php
    foreach ( $news as $berita ) {
        if( substr( $berita['tanggal'], 0, 3 ) == date('Y-m-d') ){
            $panel = 'panel-danger';
        } else {
            $panel = 'panel-info';
        }
?>
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="kegiatandetail"><img src="<?= base_url();?>assets/images/blog/7.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <div class="panel <?=$panel?>">
                                        <div class="panel-heading">
                                            <h2 class="post-title bold"><?= $berita['judul'] ?></h2>
                                            <?= $berita['penulis'] ." - ". $berita['tanggal']  ?>
                                        </div>
                                        <div class="panel-body">
                                            <?= $this->kegiatan_model->foreword($berita['kegiatan'])?><br />
                                            <a href="<?=base_url()."kegiatan/".$berita['id_keg']?>" class="read-more">Baca selengkapnya</a>
                                        </div>
                                        <div class="post-bottom overflow">
                                            <ul class="nav navbar-nav post-nav">
                                                <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
    <?php
    }
?>
