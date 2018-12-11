<?php

    include 'lib/koneksi.php';

    // membaca id file dari link
    $id = $_GET['id'];

    // membaca informasi file dari tabel berdasarkan id nya
    $query  = $k->query("SELECT * FROM tb_arsip WHERE kd_arsip = '$id'");
    $data = mysqli_fetch_array($query);

    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$data['judul']);

   // proses membaca isi file yang akan didownload dari folder 'data'
   $fp  = fopen("assets/file/".$data['judul'], 'r');
   $content = fread($fp, filesize('assets/file/'.$data['judul']));
   fclose($fp);

   // menampilkan isi file yang akan didownload
   echo $content;

   exit;
?>