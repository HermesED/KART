    <div id="wrapper_utama"></div>
    <div id="bg_utama"></div>
    <div id="main_utama"></div>
    <?php
    if($_SESSION['username']==FALSE){
            redirect(base_url("usr/login"));
    }
    ?>
    <header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li>
                                <?php if($_SESSION['admin'] == 1||$_SESSION['admin']== 0){
                                    echo "<a class='btn-common' href='logout'>LOGOUT</a>";
                                }
                                else{
                                    echo "<a class='btn-common2'></a>";
                                }


                            ?>
                            </li>
                            <li><p>
                            <?php if( $_SESSION['admin'] == 1 ){
                                    $rank = "ADMIN ";
                                    $adm = $_SESSION['username'];}
                                else if ( $_SESSION['admin'] == 0 ){
                                    $rank = "USER ";
                                    $adm = $_SESSION['username'];}
                                else{
                                    $rank = "VISITOR";
                                    $adm  = "";
                                }
                            ?>
                                <?= $rank;?><?= $adm;?>    
                            </p>
                            </li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="home">
                        <h1 class="logo"><img src="assets/images/kart.jpg" alt="logo">K-ART</h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($page == "Home") echo "class='active'";?>><a href="home">Home</a></li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li <?php if($page == "Abt") echo "class='active'";?>><a href="about">About</a></li>
                                <li <?php if($page == "Srv") echo "class='active'";?>><a href="service">Services</a></li>
                                <li <?php if($page == "Prc") echo "class='active'";?>><a href="pricing">Pricing</a></li>
                                <li <?php if($page == "Cnt") echo "class='active'";?>><a href="contact">Contact Us</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="#">Activity <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li <?php if($page == "Keg") echo "class='active'";?>><a href="kegiatan">Kegiatan</a></li>
                                <li <?php if($page == "Keg2") echo "class='active'";?>><a href="kegiatan2">Kegiatan V2</a></li>
                                <li <?php if($page == "Kegde") echo "class='active'";?>><a href="kegiatandetail">Kegiatan Detail</a></li>
                                <li <?php if($page == "Tikeg") echo "class='active'";?>><a href="timeline_keg">Timeline Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Gallery <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li <?php if($page == "Gal1") echo "class='active'";?>><a href="gallery">Gallery</a></li>
                                <li <?php if($page == "Gal2") echo "class='active'";?>><a href="gallery2">Gallery V2</a></li>
                                <li <?php if($page == "Gade") echo "class='active'";?>><a href="gallerydetail">Gallery Detail</a></li>
                            </ul>
                        </li>
                    <?php if($_SESSION['admin']!=1):?>
                        <li class="dropdown"><a href="#">Other Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li <?php if($page == "Dftr") echo "class='active'";?>><a href="pendaftaran">Pendaftaran</a></li>
                                <li <?php if($page == "Btl") echo "class='active'";?>><a href="pembatalan">Pembatalan</a></li>
                                <li <?php if($page == "Mbm") echo "class='active'";?>><a href="members">Members</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                         <li class="dropdown"><a href="#">Super Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li <?php if($page == "EK") echo "class='active'";?>><a href="entrykeg">Entry Kegiatan</a></li>
                                <li <?php if($page == "EM") echo "class='active'";?>><a href="member_admin">Members</a></li>
                                <li <?php if($page == "USR") echo "class='active'";?>><a href="users">Users</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
                <div class="search">
                    <form role="form" action="<?= base_url();?>search" method="get" title="eurobytes search">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section <?php if($page != "Home") echo "id='page-breadcrumb'";?>>
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?= $judul;?></h1>
                            <p><?= $quotes;?></p>
                                <?php if($this->session->flashdata('msg')) : ?>
                                    <div class="alert alert-success" role="alert" align="center">
                                       <?=$this->session->flashdata('msg')?>
                                    </div>
                                 <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <br>
    <!--/#page-breadcrumb-->
