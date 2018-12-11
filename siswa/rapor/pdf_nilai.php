 <?php
include '../../lib/koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/images/logo.ico">

    <title>Tabel Nilai SD N Bendungan 2</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/index/assets/form/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="../../assets/index/assets/form/form-validation.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" align="left" src="../../assets/images/unnamed.png" alt="" width="110">
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
        <p>Hal : Tabel Nilai</p>
        <p>Lampian : - </p>
      </div><br>
      <table class="table table-striped table-bordered" style="boder-weight:4px">
       <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>Mapel</th>
            <th>Tugas</th>
            <th>UH</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>NA</th>
            <th>Ket</th>
        </tr>
    </thead>
    <tbody>
    <?php
    error_reporting(0);
        $no=0;
        $id = $_GET['id'];
        if ($id != '') 
        {
            $sql = $k->query("SELECT
            tb_nilai.kd_nilai,
            tb_nilai.kd_siswa,
            tb_nilai.kd_kelas,
            tb_nilai.kd_mapel,
            tb_nilai.ta,
            tb_nilai.semester,
            tb_nilai.n_tugas,
            tb_nilai.n_uh,
            tb_nilai.n_uts,
            tb_nilai.n_uas,
            tb_nilai.n_akhir,
            tb_nilai.ket,
            tb_mapel.nm_mapel,
            tb_kelas.kelas,
            tb_siswa.nm_siswa
            FROM
            tb_nilai
            INNER JOIN tb_mapel ON tb_nilai.kd_mapel = tb_mapel.kd_mapel
            INNER JOIN tb_kelas ON tb_nilai.kd_kelas = tb_kelas.kd_kelas
            INNER JOIN tb_siswa ON tb_nilai.kd_siswa = tb_siswa.kd_siswa WHERE kd_nilai='$id'");
        }
        else
        {
            $sql = $k->query("SELECT
                tb_nilai.kd_nilai,
                tb_nilai.kd_siswa,
                tb_nilai.kd_kelas,
                tb_nilai.kd_mapel,
                tb_nilai.ta,
                tb_nilai.semester,
                tb_nilai.n_tugas,
                tb_nilai.n_uh,
                tb_nilai.n_uts,
                tb_nilai.n_uas,
                tb_nilai.n_akhir,
                tb_nilai.ket,
                tb_mapel.nm_mapel,
                tb_kelas.kelas,
                tb_siswa.nm_siswa
                FROM
                tb_nilai
                INNER JOIN tb_mapel ON tb_nilai.kd_mapel = tb_mapel.kd_mapel
                INNER JOIN tb_kelas ON tb_nilai.kd_kelas = tb_kelas.kd_kelas
                INNER JOIN tb_siswa ON tb_nilai.kd_siswa = tb_siswa.kd_siswa");
        }
        while ($t = $sql->fetch_assoc()) 
        {
            $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['kd_nilai'];?></td>
            <td><?php echo $t['nm_siswa'];?></td>
            <td><?php echo $t['kelas'];?></td>
            <td><?php echo $t['nm_mapel'];?></td>
            <td><?php echo $t['n_tugas'];?></td>
            <td><?php echo $t['n_uh'];?></td>
            <td><?php echo $t['n_uts'];?></td>
            <td><?php echo $t['n_uas'];?></td>
            <td><?php echo $t['n_akhir'];?></td>
            <td><?php echo $t['ket'];?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <img align="left" class="d-block mx-auto mb-4" src="../../assets/images/pendaftar/<?php echo $t['foto']; ?>" alt="" width="150">
    </div>
    <div align="center">
      <a onclick="window.print()" target="_blank">Cetak</a> | <a onclick="window.close()">Kembali</a>
    </div>
  </body>
</html>