<?php

include '../../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_admin WHERE kd_admin = '$id'");
$fl_lm = mysqli_fetch_array($q);
$b = $fl_lm['foto'];
unlink("../assets/images/admin/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_admin` WHERE `tb_admin`.`kd_admin` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=dashboard';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=dashboard';
	</script>";
}
?>