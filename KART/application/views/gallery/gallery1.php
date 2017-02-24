<head>
    <title><?= $title;?></title>
    <link href="<?= base_url()?>assets/css/lightbox.css" rel="stylesheet">  
    <link href="<?= base_url()?>assets/css/animate.min.css" rel="stylesheet">
</head><!--/head-->

<body>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".branded">Branded</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".design">Kegiatan</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".folio">Folio</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos">Gallery</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mobile">Users</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mockup">Mockup</a></li>
                </ul><!--/#portfolio-filter-->
    
    <?php if($_SESSION['admin']==1):?>
        <form id="uploadform" class="kart" action="<?= base_url();?>gallery/upload" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="common-form bottom">
                            <h2>Upload File To Gallery</h2>
                            <div class="form-group">
                                <i class="upload fa fa-camera"></i><span> No File Selected</span>
                                <input id="input-file" type="file" name="foto">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-common" value="Update"><i class="fa fa-upload fa-2x"> Upload</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                    <div id="info-gallery">
                        <h1><span class="fa fa-exclamation-triangle fa-1x" aria-hidden="true"> Attention Admin!</span></h1><hr>
                            <li>Gallery disini menampilkan seluruh gambar yang ada pada website.</li>
                            <li>Tombol Upload pada Gallery ini hanya untuk bagian Gallery, sisanya ada tempat uploadnya tersendiri.</li>
                            <li>Memilih kategori tidak merubah fungsi upload Gallery, tetap untuk bagian Gallery.</li>
                            <li>Kategori hanya untuk melihat gambar-gambar yang ada</li>
                            <li>Klik kamera untuk memilih gambar yang akan di-upload.</li><br>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>

    <div class="portfolio-items">
    <?php
            //FOLDER GALLERY-PART
                $dirname = "./assets/images/gallery/";
                $images = glob($dirname."*.jpg");

                array_multisort(array_map('filemtime', $images), SORT_NUMERIC, SORT_DESC, $images);

                foreach($images as $image) {
                    echo //'<img src="'.$image.'" /><br />'; -- Ini cth untuk tampilkan semua gambar (dlm Garis lurus)

            "<div class='col-xs-6 col-sm-4 col-md-3 portfolio-item logos'>
                <div class='portfolio-wrapper'>
                    <div class='portfolio-single'>
                        <div class='portfolio-thumb'>
                        <img src='".base_url()."/".$image."' class='img-responsive' alt=''>
                        </div>
                        <form id='imgtitle' class='kart' action='" . base_url() . "gallery/delete' method='post'>
                        <div class='portfolio-view'>
                            <ul class='nav nav-pills'>
                                <li><a href='#'><i class='fa fa-link'></i></a></li>
                                <li><a href='".base_url()."/".$image."' data-lightbox='example-set'><i class='fa fa-eye'></i></a></li>
                                <li><a href='#'><i class='fa fa-heart'></i></a></li>
                            </ul>
                        </div>
                        </form>
                    </div>
                    <div class='portfolio-info'>
                        <form id='imgtitle' class='kart' action='" . base_url() . "gallery/delete' method='post'>
                            <input type = 'hidden' name='delete_file' value='$image' />";?>
                            <?php if($_SESSION['admin']==1):?>  
                                <button type = 'submit' class='btn btn-danger'><i class='delete fa fa-trash fa-3x'></i></button>
                            <?php endif; ?>
                    <?="</form>
                    </div>
                </div>
            </div>";
                }
            ?>
            <?php
             //FOLDER USERS-PART
                $dirname = "./assets/images/users/";
                $images = glob($dirname."*.jpg");

                foreach($images as $image) {
                    echo //'<img src="'.$image.'" /><br />'; -- Ini cth untuk tampilkan semua gambar (dlm Garis lurus)

            "<div class='col-xs-6 col-sm-4 col-md-3 portfolio-item mobile'>
                <div class='portfolio-wrapper'>
                    <div class='portfolio-single'>
                        <div class='portfolio-thumb'>
                        <img src='".base_url()."/".$image."' class='img-responsive' alt=''>
                        </div>
                        <div class='portfolio-view'>
                            <ul class='nav nav-pills'>
                                <li><a href='gallerydetail'><i class='fa fa-link'></i></a></li>
                                <li><a href='".base_url()."/".$image."' data-lightbox='example-set'><i class='fa fa-eye'></i></a></li>
                                <li><a href='#'><i class='fa fa-heart'></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='portfolio-info'>
                    </div>
                </div>
            </div>";
                }
            ?>
            <?php
            //FOLDER KEGIATAN-PART
                $dirname = "./assets/images/kegiatan/";
                $images = glob($dirname."*.jpg");

                foreach($images as $image) {
                    echo //'<img src="'.$image.'" /><br />'; -- Ini cth untuk tampilkan semua gambar (dlm Garis lurus)

            "<div class='col-xs-6 col-sm-4 col-md-3 portfolio-item design'>
                <div class='portfolio-wrapper'>
                    <div class='portfolio-single'>
                        <div class='portfolio-thumb'>
                        <img src='".base_url()."/".$image."' class='img-responsive' alt=''>
                        </div>
                        <div class='portfolio-view'>
                            <ul class='nav nav-pills'>
                                <li><a href='gallerydetail'><i class='fa fa-link'></i></a></li>
                                <li><a href='".base_url()."/".$image."' data-lightbox='example-set'><i class='fa fa-eye'></i></a></li>
                                <li><a href='#'><i class='fa fa-heart'></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='portfolio-info'>
                    </div>
                </div>
            </div>";
                }
            ?>       
                <!--<div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="< ?= base_url()?>./gallery/1">1</a></li>
                      <li><a href="< ?= base_url()?>./gallery/2">2</a></li>
                      <li><a href="< ?= base_url()?>./gallery/3">3</a></li>
                      <li><a href="< ?= base_url()?>./gallery/4">4</a></li>
                      <li><a href="< ?= base_url()?>./gallery/5">5</a></li>
                      <li><a href="< ?= base_url()?>./gallery/6">6</a></li>
                      <li><a href="< ?= base_url()?>./gallery/7">7</a></li>
                      <li><a href="< ?= base_url()?>./gallery/8">8</a></li>
                      <li><a href="< ?= base_url()?>./gallery/9">9</a></li>
                      <li><a href="< ?= base_url()?>./gallery/10">right</a></li>
                    </ul>
                </div>-->            
            </div>
        </div>
    </section>
    <!--/#portfolio-->

<script>
    $(document).ready(function(){
        $('.upload').click(function(){
        $('input[type=file]').trigger('click');
    });

    $('input[type=file]').change(function() {
        var val = $(this).val();
        $(this).siblings('span').text(val);
        });
    });
</script>
