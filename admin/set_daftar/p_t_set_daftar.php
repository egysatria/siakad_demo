<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$ta = mysqli_real_escape_string($k,$_POST['ta']);	
	$tgl_awal = mysqli_real_escape_string($k,$_POST['tgl_awal']);
	$tgl_akhir = mysqli_real_escape_string($k,$_POST['tgl_akhir']);

	$pesan = "";


	$sql = $k->query("INSERT INTO set_tgl (id, ta, tgl_awal, tgl_akhir) VALUES (NULL, '".$ta."', '".$tgl_awal."', '".$tgl_akhir."')");

	if ($sql) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=set_daftar" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=set_daftar&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Inputkan !!');
			window.location.href='../index.php?hal=set_daftar';    			
		</script>";
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>
