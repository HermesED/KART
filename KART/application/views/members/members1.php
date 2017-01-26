<head>
    <title><?= $title;?></title>
</head>

    <!-- /Gambar Tampilan Template DASHBOARD -->
    <div class="col-sm-10 col-sm-offset-6 col-md-10 col-md-offset-1 main">
    <section id="members" class="pengurus">
          <h1 class="page-header">PENGURUS DAN ANGGOTA UKM</h1>

          <div class="teks_pengurus row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Ketua</h4>
              <p>
              <span class="text-muted">Ilfan Diago</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Sekertaris</h4>
              <p>
              <span class="text-muted">Abed Nego Thendean</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 1</h4>
              <p>
              <span class="text-muted">Jesslyn Chandra</span>
              </p>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 2</h4>
              <p>
              <span class="text-muted">???</span>
              </p>
            </div>
          </div><hr>

          <h2 class="sub-header">Total Anggota UKM = <?= $total->num_rows();?></h2>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                
              </thead>

              <tbody>
                <tr>
                  <th><b>NIM</b></th>
                  <th><b>Nama Lengkap</b></th>
                  <th><b>Jurusan</b></th>
                  <th><b>Angkatan</b></th>
                  <th><b>Status</b></th>
                </tr>
                <tr>
                <?php foreach($anggota as $pengurus){

                ?>
                </tr>
                <tr>
                  <td><?= $pengurus->nim;?></td>
                  <td><?= $pengurus->namalengkap;?></td>
                  <td><?= $pengurus->programstudi;?></td>
                  <td><?= $pengurus->angkatan;?></td>
                  <td><?= $pengurus->status;?></td>
                </tr>
              </tbody>
              <?php }?>
            </table>
          </div>
        </div>
  </section>