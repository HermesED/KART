<head>
    <title><?= $title;?></title>
    <link href="<?= base_url();?>assets/css/animate.min.css" rel="stylesheet"> 
    <link href="<?= base_url();?>assets/css/lightbox.css" rel="stylesheet">
</head><!--/head-->

<body>
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Welcome to K-ART</h1>
                        <p>Ini adalah website resmi UKM-Menggambar <a href="http://kharisma.ac.id" target="_blank">STMIK KHARISMA Makassar</a>. Jelajahi hasil karya dan kegiatan kami!</p><br>
                        <?php if($_SESSION['admin'] == 1||$_SESSION['admin']== 0){
                                    echo "<a class='btn-common' href='" . base_url() . "usr/signup'>SIGN UP</a>";
                                    echo "<a class='btn-common' href='" . base_url() . "usr/logout'>LOGOUT</a>";
                                }
                                else{
                                    echo "<a class='btn-common' href='" . base_url() . "usr/signup'>SIGN UP</a>";
                                    echo "<a class='btn-common' href='" . base_url() . "usr/login'>LOGIN</a>";
                                }
                        ?>
                    </div>
                    <img src="<?= base_url();?>assets/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<?= base_url();?>assets/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<?= base_url();?>assets/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<?= base_url();?>assets/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<?= base_url();?>assets/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <?php
    $img = count(glob("./assets/images/*.*"));
    $about = count(glob("./assets/images/aboutus/*.*"));
    $blog1 = count(glob("./assets/images/blog/*.*"));
    $mason = count(glob("./assets/images/blog/masonary/*.*"));
    $tl = count(glob("./assets/images/blog/timeline/*.*"));
    $blog2 = count(glob("./assets/images/blogdetails/*.*"));
    $gallery = count(glob("./assets/images/gallery/*.*"));
    $home = count(glob("./assets/images/home/*.*"));
    $home2 = count(glob("./assets/images/home/slider/*.*"));
    $ico = count(glob("./assets/images/ico/*.*"));
    $lb = count(glob("./assets/images/lightbox/*.*"));
    $keg = count(glob("./assets/images/kegiatan/*.*"));
    $port1 = count(glob("./assets/images/portfolio/*.*"));
    $port2 = count(glob("./assets/images/portfolio-details/*.*"));
    $leader = count(glob("./assets/images/leaders/*.*"));
    $srv = count(glob("./assets/images/services/*.*"));
    $usr = count(glob("./assets/images/users/*.*"));
    $count = $img+$about+$blog1+$mason+$tl+$blog2+$gallery+$home+$home2+$ico+$lb+$keg+$port1+$port2+$leader+$srv+$usr;
    ?>

    <!--/#home-slider-->
    <section id="action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action count">
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="<?= $total->num_rows();?>" data-speed="3000" data-from="0"></h1>   
                            <h3>Members</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="<?= $tuser->num_rows();?>" data-speed="3000" data-from="0"></h1>   
                            <h3>Users</h3> 
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="<?= $count;?>" data-speed="3000" data-from="0"></h1> 
                            <h3>Total Images</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="<?= $gallery;?>" data-speed="3000" data-from="0"></h1> 
                            <h3>Weekly Drawing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <i class="icon icon1 fa fa-pencil fa-5x" aria-hidden="true"></i>
                        </div>
                        <h2>Be Creative</h2>
                        <p>Never stop to expand your creativity. Be creative is not hard. You just need a pencil.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <i class="icon icon2 fa fa-image fa-5x" aria-hidden="true"></i>
                        </div>
                        <h2>Art, Design, Images</h2>
                        <p>With creativity and a pencil, you can make an art and images.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <i class="icon icon3 fa fa-star fa-5x" aria-hidden="true"></i>
                        </div>
                        <h2>Best Result</h2>
                        <p>With hard-work and years of experience, your creativity are unstopabble.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Triangle Corporate Template</h1>
                            <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?= base_url();?>assets/images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Built for the Responsive Web</h2>
                        <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?= base_url();?>assets/images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?= base_url();?>assets/images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="<?= base_url();?>assets/images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?= base_url();?>assets/images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
