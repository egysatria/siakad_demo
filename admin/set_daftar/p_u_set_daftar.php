<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$id = mysqli_real_escape_string($k,$_POST['id']);
	$ta = mysqli_real_escape_string($k,$_POST['ta']);
	$tgl_awal= mysqli_real_escape_string($k,$_POST['tgl_awal']);	
	$tgl_akhir  = mysqli_real_escape_string($k,$_POST['tgl_akhir']);


	$pesan = "";


	$s = $k->query("UPDATE `db_sd_bendungan2`.`set_tgl` SET `ta` = '".$ta."', `tgl_awal` = '".$tgl_awal."', `tgl_akhir` = '".$tgl_akhir."' WHERE `set_tgl`.`id` = '".$id."'");

	if ($s) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=set_daftar" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=set_daftar&act=tambah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Ubah !!');
			window.location.href='../index.php?hal=set_daftar';    			
		</script>";
	}

	$_SESSION['pesan'] = $pesan;
	
}
?>
