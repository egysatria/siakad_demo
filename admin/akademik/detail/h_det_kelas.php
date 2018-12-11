<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_detail_kel` WHERE `tb_detail_kel`.`kode` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=det_kelas';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=det_kelas';
	</script>";
}
?>