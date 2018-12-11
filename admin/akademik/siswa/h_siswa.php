<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_siswa WHERE nis = ".$_GET['id']);
$ft_lm = mysqli_fetch_array($q);
$b = $ft_lm['foto'];
unlink("../assets/images/siswa/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_siswa` WHERE `tb_siswa`.`nis` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=siswa';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=siswa';
	</script>";
}
?>