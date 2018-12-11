<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kd_mapel = mysqli_real_escape_string($k,$_POST['kd_mapel']);
	$nm_mapel = mysqli_real_escape_string($k,$_POST['nm_mapel']);	
	$kkm_mapel = mysqli_real_escape_string($k,$_POST['kkm']);
	$nip = mysqli_real_escape_string($k,$_POST['nip']);	

	$pesan = "";


	$s = $k->query("UPDATE `db_sd_bendungan2`.`tb_mapel` SET `nm_mapel` = '".$nm_mapel."', `kkm_mapel` = '".$kkm_mapel."', `nip` = '".$nip."' WHERE `tb_mapel`.`kd_mapel` = '".$kd_mapel."';");

	if ($s) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=mapel" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=mapel&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Ubah !!');
			window.location.href='../../index.php?hal=mapel';    			
		</script>";
	}

	$_SESSION['pesan'] = $pesan;
	
}
?>
