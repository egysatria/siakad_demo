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


	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_mapel` (`kd_mapel`, `nm_mapel`, `kkm_mapel`, `nip`) VALUES ('".$kd_mapel."', '".$nm_mapel."', '".$kkm_mapel."', '".$nip."');");

	if ($sql) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=mapel" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=mapel&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Inputkan !!');
			window.location.href='../../index.php?hal=mapel';    			
		</script>";
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>
