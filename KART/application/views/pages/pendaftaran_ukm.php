<head>
    <title><?= $title;?></title>
</head>
    <form id="form" class="kart" method="post" action="<?= base_url();?>daftar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input id="dftrnim" type="text" name="nim" class="form-control" placeholder="NIM (8 angka)" maxlength="8" pattern="\d{8}" required="required" title="8 Digit Angka NIM, NUMBERS and CHARACTERS not allowed" />
                        </div>
                        <div class="form-group">
                            <input id="dftrnama" type="text" name="nama" class="form-control" maxlength="50" placeholder="Nama Lengkap (5 - 40 karakter)" pattern="^[a-zA-Z\s]{5,40}$" required="required" title="Info: MIN 5, MAX 40 Characters, NUMBERS and OPERATORS not allowed" />
                        </div>
                        <div class="form-group">
                            <input id="dftremail" type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                          <select id="dftrprodi" name="studi">
                            <option select value="1">--Program Studi--</option>
                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                            <option value="D3 - Sistem Informasi">D3 - Sistem Informasi</option>
                            <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input id="dftrthn" type="text" name="angkatan" class="form-control" required="required" placeholder="Tahun Angkatan" maxlength="4" pattern="\d{4}">
                        </div>
                        <div class="form-group">
                            <textarea id="software" minlength="5" maxlength="100" name="experience" id="message" required="required" class="form-control" rows="8" placeholder="Software Graphic Design Yang Anda Ketahui?" title="MIN 5 CHARACTERS, MAX 100."></textarea>
                        </div>
                        <div class="form-group">
                            <input id="dftrhp" type="text" name="nomorhp" class="form-control" required="required" placeholder="Phone Number" maxlength="12" pattern="\d{12}" title="12 Digit Nomor HP" />
                        </div>                 
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Help Info</h2><hr>
                        <li><p>NIM terdiri atas 8 digit angka.</p></li>
                        <li><p>NIM adalah milik mahasiswa/i STMIK Kharisma.</p></li>
                        <li><p>Email Bebas. Tidak harus Email STMIK Kharisma</p></li>
                        <li><p>Software Design yang anda ketahui, sekurang-kurangnya satu.</p></li>
                    </div>
                </div>
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>
    </form>

<script src="<?= base_url()?>assets/js/ajax.js"></script>
