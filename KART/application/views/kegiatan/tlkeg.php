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
    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase"><?= $berita['tanggal'] ?></a>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="<?= base_url();?>assets/images/blog/timeline/1.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <div class="panel <?=$panel?>">
                                        <div class="panel-heading">
                                            <h2 class="post-title bold"><?= $berita['judul'] ?></h2>
                                            Written By: <?= $berita['penulis'] ?><br>
                                            Username: <?= $berita['username'] ?>
                                        </div>
                                        <div class="panel-body">
                                            <?= $this->kegiatan_model->foreword($berita['kegiatan'])?><br />
                                            <a href="<?=base_url()."timeline_keg/".$berita['id_keg']?>" class="read-more">Baca selengkapnya</a>
                                        </div>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left"><?= $berita['tanggal'] ?></span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="<?= base_url();?>assets/images/blog/timeline/4.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left"><?= $berita['tanggal'] ?></span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="timeline-blog overflow">
                    <div class="timeline-date text-center">
                        <a href="" class="btn btn-common uppercase"><?= $berita['tanggal'] ?></a>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="<?= base_url();?>assets/images/blog/timeline/3.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left"><?= $berita['tanggal'] ?></span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
<?php
    }
?>
