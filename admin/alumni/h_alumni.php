<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_alumni WHERE kd_alumni = '$id'");
$ft_lm = mysqli_fetch_array($q);
$b = $ft_lm['foto'];
unlink("../assets/images/alumni/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_alumni` WHERE `tb_alumni`.`kd_alumni` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=alumni';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=alumni';
	</script>";
}
?>