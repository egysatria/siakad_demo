 <?php
include 'lib/koneksi.php';
$q = $k->query("SELECT * fROM tb_daftar ORDER BY kd_daftar DESC LIMIT 1");
$t = mysqli_fetch_array($q);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../assets/images/logo.ico">

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
        <a href="index.php"><img class="d-block mx-auto mb-4" align="left" src="assets/images/unnamed.png" alt="" width="110"></a>
        <h4><b>PEMERINTAH KABUPATEN GUNUNGKIDUL<br>
            DINAS PENDIDIKAN PEMUDA DAN OLAH RAGA<br>
            UPT PAUD DAN SD KECAMATAN KARANGMOJO<br>
            <h2>SD NEGERI BENDUNGAN 2 KARANGMOJO</h2></b></h4>
        <p align="center"><i> Watudalang, Bendungan, Karangmojo, Gunungkidul, DIY, <span class="glyphicon glyphicon-envelope"></span> Kode Pos : 55891</i></p>
      </div>
      <div style="border-bottom: groove #000000 4px;margin-top:5px;margin-bottom:20px"></div>
      <p align="right">Tanggal Daftar : <?php echo $t['tgl_daftar']; ?></p><br>
      <div class="py-5 text-left">
        <p>No : <?php echo $t['kd_daftar'];?></p>
        <p>Hal : Form Pendaftaran</p>
        <p>Lampian : - </p>
      </div><br>
      <table class="table table-striped table-bordered" style="boder-weight:4px">
      <tr>
        <td width="300px">Kode :</td>
        <td><?php echo $t['kd_daftar']?></td>
      </tr>
      <tr>
         <td width="300px">Nama :</td>
        <td><?php echo $t['nm_pendaftar']?></td>
      </tr>
      <tr>
        <td width="300px">Tempat Lahir :</td>
        <td><?php echo $t['tp_lahir']?></td>
      </tr>
      <tr>
        <td width="300px">Tanggal Lahir :</td>
        <td><?php echo $t['tgl_lahir']?></td>
      </tr>
      <tr>
        <td width="300px">Jenis Kelamin :</td>
        <td><?php echo $t['jk']?></td>
      </tr>
      <tr>
        <td width="300px">Agama :</td>
        <td><?php echo $t['agama']?></td>
      </tr>
      <tr>
        <td width="300px">Alamat :</td>
        <td><?php echo $t['alamat']?></td>
      </tr>
      <tr>
        <td width="300px">Nama Ayah :</td>
        <td><?php echo $t['nm_ayah']?></td>
      </tr>
      <tr>
        <td width="300px">Nama Ibu :</td>
        <td><?php echo $t['nm_ibu']?></td>
      </tr>
      <tr>
        <td width="300px">Alamat Orangtua :</td>
        <td><?php echo $t['alamat_ortu']?></td>
      </tr>
      <tr>
        <td width="300px">Pekerjaan Ayah :</td>
        <td><?php echo $t['pk_ayah']?></td>
      </tr>
      <tr>
        <td width="300px">Pekerjaan Ibu :</td>
        <td><?php echo $t['pk_ibu']?></td>
      </tr>
      <tr>
        <td width="300px">Telepon Orangtua :</td>
        <td><?php echo $t['tlp_ortu']?></td>
      </tr>
  </table>
  <img align="left" class="d-block mx-auto mb-4" src="assets/images/siswa/<?php echo $t['foto']; ?>" alt="" width="150">
    </div>
    <div align="center">
      <a onclick="window.print()" target="_blank">Cetak</a> | <a href="index.php">Kembali</a>
    </div>
  </body>
</html>