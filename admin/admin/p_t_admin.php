<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_admin = mysqli_real_escape_string($k,$_POST['kd_admin']);
	$username = mysqli_real_escape_string($k,$_POST['username']);
	$password = mysqli_real_escape_string($k,$_POST['password']);
	$nama = mysqli_real_escape_string($k,$_POST['nama']);

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $nm = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../assets/images/admin/".$nm);

	if ($simpan) 
	{


		$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_admin` (`kd_admin`, `username`, `password`, `nama`, `akses`, `foto`) VALUES ('".$kd_admin."', '".$username."', MD5('".$password."'), '".$nama."', 'admin', '".$nm."');");

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=dashboard" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=admin&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Inputkan !!');
			window.location.href='../index.php?hal=dashboard';    			
		</script>";
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>
