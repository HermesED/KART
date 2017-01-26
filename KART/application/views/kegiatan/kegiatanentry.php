<head>
    <title><?= $title;?></title>
</head>
    <form id="form" class="kart" method="post" action="submitkeg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Judul Kegiatan" name="judul" required="required" minlength="10" maxlength="40" title="MIN 10 CHARACTERS, MAX 40.">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="username" value="<?= $_SESSION['username']?>" type="hidden" />
                        </div>
                        <div class="form-group">
                            <input id="tanggal" type="text" name="tanggal" class="form-control" maxlength="30" placeholder="Tanggal Kegiatan" required="required" />
                        </div>
                        <div class="form-group">
                            <input id="penulis" type="text" name="penulis" class="form-control" maxlength="50" placeholder="Nama Penulis (5 - 40 karakter)" pattern="^[a-zA-Z\s]{5,40}$" required="required" title="Info: MIN 5, MAX 40 Characters, NUMBERS and OPERATORS not allowed" />
                        </div>
                        <div class="form-group">
                            <textarea minlength="100" maxlength="1000" name="kegiatan" id="kegiatan" required="required" class="form-control" rows="15" placeholder="-- INFO TENTANG KEGIATAN --" title="MIN 100 CHARACTERS, MAX 1000."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Help Info</h2><hr>
                        <li><p>Judul Kegiatan Wajib diisi.</p></li>
                        <li><p>Judul Kegiatan sekurang-kurangnya 10 kata, maksimal 40 kata.</p></li>
                        <li><p>Nama Penulis Kegiatan Wajib Diisi.</p></li>
                        <li><p>Informasi tentang kegiatan sekurang-kurangnya 100 kata. Maksimal 1000 kata</p></li>
                        <li><p>ADMIN yang menulis tentang suatu kegiatan akan bertanggung jawab penuh atas hasil tulisannya.</p></li>
                    </div>
                </div>
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>
    </form>
