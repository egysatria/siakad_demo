<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_daftar WHERE kd_daftar = '$id'");
$ft_lm = mysqli_fetch_array($q);
$b = $ft_lm['foto'];
unlink("../assets/images/pendaftar/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_daftar` WHERE `tb_daftar`.`kd_daftar` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=daftar';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=daftar';
	</script>";
}
?>