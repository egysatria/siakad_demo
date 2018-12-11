<?php
include 'lib/koneksi.php';

$sql1 = $k->query("SELECT * FROM set_tgl ORDER BY id DESC LIMIT 1");
$tpl = mysqli_fetch_array($sql1);

$d_awal =  strtotime($tpl['tgl_awal']);
$d_akhir =  strtotime($tpl['tgl_akhir']);

$tgl = strtotime(date("Y-m-d H:m:s"));

if ($tgl >= $d_awal && $tgl <= $d_akhir) 
{
    $carikode = $k->query("SELECT kd_daftar FROM tb_daftar");
    $datakode = mysqli_fetch_array($carikode);
    $jumlah_data = mysqli_num_rows($carikode);
    if ($datakode) {
     $nilaikode = substr($jumlah_data[0], 1);
     $kode = (int) $nilaikode;
     $kode = $jumlah_data + 1;
     $kode_otomatis = "P".str_pad($kode, 4, "0", STR_PAD_LEFT);
    } else {
     $kode_otomatis = "P0001";
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logo.ico">

    <title>Pendaftaran SD N Bendungan 2</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/index/assets/form/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/index/assets/form/form-validation.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/images/unnamed.png" alt="" width="80">
        <h2>FORM PENDAFTARAN SISWA BARU</h2>
        <h4>SD N BENDUNGAN 2 KARANGMOJO</h4>
        <p class="lead">Silahkan isi fom pendaftaran dengan benar</p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">INPUT DATA</h4>
          <form class="needs-validation" action="p_t_daftar.php" enctype="multipart/form-data" method="POST" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="kd_daftar">Kode Daftar</label>
                <input type="text" class="form-control" id="kd_daftar" name="kd_daftar" placeholder="" value="<?= $kode_otomatis ?>" readonly required>
                <div class="invalid-feedback">
                  Isi Kode Daftar
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nm_pendaftar" id="nama" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Isi Nama
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Tempat Lahir</label>
              <div class="input-group">
                <input type="text" class="form-control" name="tp_lahir"  required>
                <div class="invalid-feedback" style="width: 100%;">
                  Isi Tempat Lahir
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="tgl_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
              <div class="invalid-feedback">
                Isi Tanggal Lahir
              </div>
            </div>
           <div class="row">
              <div class="col-md-4 mb-3">
                <label for="jk">Jenis Kelamin</label>
                <select class="custom-select d-block w-100" id="jk" name="jk" required>
                  <option value="">Pilih...</option>
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                <div class="invalid-feedback">
                  Isi Jenis Kelamin
                </div>
              </div>
              <div class="col-md-8 mb-3">
                <label for="agama">Agama</label>
                <select class="custom-select d-block w-100" id="agama" name="agama" required>
                  <option value="">Pilih...</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                </select>
                <div class="invalid-feedback">
                  silahkan Isi Agama
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
              <div class="invalid-feedback">
                Silahkan Isi Alamat.
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nm_ayah">Nama Ayah</label>
                <input type="text" class="form-control" id="nm_ayah" name="nm_ayah" required>
                <div class="invalid-feedback">
                  Isi Nama Ayah
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nm_ibu">Nama Ibu</label>
                <input type="text" class="form-control" name="nm_ibu" id="nm_ibu"  required>
                <div class="invalid-feedback">
                  Isi Nama Ibu
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="alamat_ortu">Alamat Orangtua</label>
              <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" required>
              <div class="invalid-feedback">
                Silahkan Isi Alamat.
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="pk_ayah">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pk_ayah" name="pk_ayah" required>
                <div class="invalid-feedback">
                  Isi Pekerjaan Ayah
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="pk_ibu">Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="pk_ibu" id="pk_ibu"  required>
                <div class="invalid-feedback">
                  Isi Pekerjaan Ibu
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="tlp_ortu">Telepon Orangtua</label>
                <input type="text" class="form-control" id="tlp_ortu" name="tlp_ortu" required>
                <div class="invalid-feedback">
                  Isi Nomer Telepon
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="foto">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" required>
              <div class="invalid-feedback">
                Silahkan Pilih Foto
              </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="simpan" type="submit">Daftar</button>
          </form>
          <a href="index.php" style="margin-top:20px" class="btn btn-danger btn-lg btn-block">Kembali</a>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 SD N Bendungan 2 Karangmojo</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/index/form/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/index/assets/form/assets/js/vendor/popper.min.js"></script>
    <script src="assets/index/assets/form/js/bootstrap.min.js"></script>
    <script src="assets/index/assets/form/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
<?php
}
else
{
  ?>
    <script>
    alert('Maaf Belum Waktunya Mendafatar');
    window.location.href="index.php";
    </script>
  <?php
}
?>