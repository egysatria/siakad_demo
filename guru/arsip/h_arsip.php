<?php

include '../../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_arsip WHERE kd_arsip = '$id'");
$fl_lm = mysqli_fetch_array($q);
$b = $fl_lm['file'];
unlink("../assets/file/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_arsip` WHERE `tb_arsip`.`kd_arsip` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=arsip';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=arsip';
	</script>";
}
?>