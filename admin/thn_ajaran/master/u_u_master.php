<?php
include "../../../lib/koneksi.php";

if ($_GET['id']) 
{
	$id = $_GET['id'];

	$sql = $k->query("UPDATE `tb_master` SET `status` = '0' WHERE `tb_master`.`kd_master` = '$id';");

	if ($sql) 
	{
		echo "<script>alert('Tahun Ajaran Berhasil Di Non Aktifkan');
			window.location.href='index.php?hal=master';
		</script>";
	}
}

?>