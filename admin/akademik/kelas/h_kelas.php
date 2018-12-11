<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_kelas` WHERE `tb_kelas`.`kd_kelas` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=kelas';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=kelas';
	</script>";
}
?>