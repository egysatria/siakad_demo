<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$s = $k->query("DELETE FROM set_tgl WHERE id = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=set_daftar';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=set_daftar';
	</script>";
}
?>