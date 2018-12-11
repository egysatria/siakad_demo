<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_arsip = mysqli_real_escape_string($k,$_POST['kd_arsip']);
	$judul = mysqli_real_escape_string($k,$_POST['judul']);
	$tgl_publis = mysqli_real_escape_string($k,$_POST['tgl_publis']);

	$pesan = "";

	$ex = explode(".", $_FILES['file']['name']);
    $nm = "f-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['file']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../assets/file/".$nm);

	if ($simpan) 
	{


		$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_arsip` (`kd_arsip`, `judul`, `file`, `tgl_publis`) VALUES ('".$kd_arsip."', '".$judul."', '".$nm."', '".$tgl_publis."');");

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=arsip" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=arsip&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Inputkan !!');
			window.location.href='../index.php?hal=arsip';    			
		</script>";
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>
