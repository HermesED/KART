<head>
    <title><?= $title;?></title>
</head>
    <form id="form" class="kart" method="post" action="batal">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <input id="nimdftr" type="text" name="nim" class="form-control" placeholder="NIM (8 angka)" maxlength="8" pattern="\d{8}" required="required" title="8 Digit Angka NIM, NUMBERS and CHARACTERS not allowed" />
                            <p id="warning_nim"></p>
                        </div>
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" class="form-control" maxlength="50" placeholder="Nama Lengkap (5 - 40 karakter)" pattern="^[a-zA-Z\s]{5,40}$" required="required" title="Info: MIN 5, MAX 40 Characters, NUMBERS and OPERATORS not allowed" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="angkatan" class="form-control" required="required" placeholder="Tahun Angkatan" maxlength="4" pattern="\d{4}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="common-form bottom">
                        <div class="form-group">
                            <textarea minlength="5" maxlength="100" name="alasan" id="alasan" required="required" class="form-control" rows="3" placeholder="Alasan Meninggalkan UKM?" title="MIN 5 CHARACTERS, MAX 100."></textarea>
                        </div> 
                        <div class="form-group">
                            <textarea minlength="5" maxlength="100" name="pe_saran" id="pe_saran" required="required" class="form-control" rows="3" placeholder="Pesan & Saran" title="MIN 5 CHARACTERS, MAX 100."></textarea>
                        </div>          
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </div>
                </div>
    </form>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Help Info</h2><hr>
                        <li><p>NIM terdiri atas 8 digit angka.</p></li>
                        <li><p>Semua inputan wajib di-isi.</p></li>
                    </div>
                </div>
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>