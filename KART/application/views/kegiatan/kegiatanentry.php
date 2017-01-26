<head>
    <title><?= $title;?></title>
</head>

<div class="row">
    <div class="col-lg-6">

        <form role="form" action="submitkeg" method="post">

        
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <input type="text" class="form-control" placeholder="Judul" name="judul" required="required">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <input type="text" class="form-control" placeholder="Penulis" name="penulis" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <textarea class="form-control" name="kegiatan" rows='10' cols="80">-- Isi Berita --</textarea>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <input type="file" class="form-control" name="foto">
            </div>

            <input type="submit" class="btn btn-default" value="Submit News">
        </form>

    </div>
</div>