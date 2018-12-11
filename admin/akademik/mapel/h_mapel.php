<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_mapel` WHERE `tb_mapel`.`kd_mapel` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=mapel';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=mapel';
	</script>";
}
?>