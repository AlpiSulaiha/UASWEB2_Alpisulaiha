<!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet">
        <title>Input Mahasiswa</title>
    </head>
    <body>
        <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h3>Formulir Pendataan Mahasiswa ITB Indonesia</h3>
                
                <h5>Silahkan Isi Formulir Dibawah Ini Dengan Benar!!!</h5>
                <br />
            </div>
        </div>

     <div class="container">
        <div class="row">
            <div Class="col-md-12">  
            <form action="proses-input-mahasiswa.php" method="POST">
                <div Class="form-group">
                <label for="">NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Isikan NIM">
                </div>

                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
                </div>

                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="laki-laki">laki-Laki</option>
                    <option value="perempuan">perempuan</option>
                </select> 
                </div>


                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
                </div>

                <div class="form-group">
                <label for="nama">Nama Orang Tua</label>
                <input type="text" class="form-control" name="nama_ortu" placeholder="Isikan Nama Orang Tua">
                </div>

                <div class="form-group">
                <label for="nama">Nomor telepon</label>
                <input type="text" class="form-control" name="nomor" placeholder="Isikan Nomor telepon anda">
                </div>

                 <div class="form-group">
                <label for="nama">Asal Sekolah</label>
                <input type="text" class="form-control" name="asal" placeholder="Isikan Asal sekolah anda">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
              </form>
            </div>
        </div>
    </div>
</div>

    <script src = "bootstrap/js/jQuery.js"></script>
    <script src = "bootstrap/js/bootstrap.min.js"></script>

    </body>
    </html>