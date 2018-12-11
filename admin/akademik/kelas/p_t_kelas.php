<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kd_kelas = mysqli_real_escape_string($k,$_POST['kd_kelas']);
	$kelas = mysqli_real_escape_string($k,$_POST['kelas']);
	$nip = mysqli_real_escape_string($k,$_POST['nip']);	

	$pesan = "";

	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_kelas` (`kd_kelas`, `kelas`, `nip`) VALUES ('".$kd_kelas."', '".$kelas."', '".$nip."');");

	if ($sql) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=kelas" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=kelas&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Inputkan !!');
			window.location.href='../../index.php?hal=kelas';    			
		</script>";
	}

	$_SESSION['pesan'] = $pesan;
	
}
?>
