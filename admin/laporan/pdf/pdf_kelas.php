 <?php
include '../../../lib/koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../assets/images/logo.ico">

    <title>Tabel Kelas SD N Bendungan 2</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../assets/index/assets/form/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="../../../assets/index/assets/form/form-validation.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" align="left" src="../../../assets/images/unnamed.png" alt="" width="110">
        <h4><b>PEMERINTAH KABUPATEN GUNUNGKIDUL<br>
            DINAS PENDIDIKAN PEMUDA DAN OLAH RAGA<br>
            UPT PAUD DAN SD KECAMATAN KARANGMOJO<br>
            <h2>SD NEGERI BENDUNGAN 2 KARANGMOJO</h2></b></h4>
        <p align="center"><i> Watudalang, Bendungan, Karangmojo, Gunungkidul, DIY, <span class="glyphicon glyphicon-envelope"></span> Kode Pos : 55891</i></p>
      </div>
      <div style="border-bottom: groove #000000 4px;margin-top:5px;margin-bottom:20px"></div>
      <p align="right">Tanggal Publish : <?php echo date("Y/m/d"); ?></p><br>
      <div class="py-5 text-left">
        <p>No : - </p>
        <p>Hal : Tabel Kelas</p>
        <p>Lampian : - </p>
      </div><br>
      <table class="table table-striped table-bordered" style="boder-weight:4px">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Kelas</th>
            <th>NIP</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=0;
        $sql = $k->query("SELECT kd_kelas, kelas, nm_guru FROM tb_kelas INNER JOIN tb_guru USING (nip)");
        while ($t = $sql->fetch_assoc()) 
        {
            $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['kd_kelas'];?></td>
            <td><?php echo $t['kelas'];?></td>
            <td><?php echo $t['nm_guru'];?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <img align="left" class="d-block mx-auto mb-4" src="assets/images/pendaftar/<?php echo $t['foto']; ?>" alt="" width="150">
    </div>
    <div align="center">
      <a onclick="window.print()" target="_blank">Cetak</a> | <a onclick="window.close()">Kembali</a>
  </body>
</html>