<?php

include '../lib/koneksi.php';
$id = $_GET['id'];

$q = $k->query("SELECT * FROM tb_guru WHERE nip = ".$_GET['id']);
$ft_lm = mysqli_fetch_array($q);
$b = $ft_lm['foto'];
unlink("../assets/images/guru/".$b);

$s = $k->query("DELETE FROM `db_sd_bendungan2`.`tb_guru` WHERE `tb_guru`.`nip` = '$id'");
if ($s) 
{
	echo "<script>
		alert('Data Berhasil Di Hapus !!');
		window.location.href='index.php?hal=guru';
	</script>";
}
else
{
	echo "<script>
		alert('Data Gagal Di Hapus !!');
		window.location.href='index.php?hal=guru';
	</script>";
}
?>