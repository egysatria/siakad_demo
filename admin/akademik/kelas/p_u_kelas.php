<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kd_kelas = mysqli_real_escape_string($k,$_POST['kd_kelas']);
	$kelas = mysqli_real_escape_string($k,$_POST['kelas']);
	$nip = mysqli_real_escape_string($k,$_POST['nip']);	

	$pesan = "";


	$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_kelas` SET `kelas` = '".$kelas."', `nip` = '".$nip."' WHERE `tb_kelas`.`kd_kelas` = '".$kd_kelas."';");

	if ($sql) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=kelas" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=kelas&act=ubah');
	}
	else
	{
		$pesan = '<div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Data Kelas Gagal di Ubah !!
                </div>';
                
        header('location:../../index.php?hal=kelas&act=ubah');
	}

	$_SESSION['pesan'] = $pesan;
	
}
?>
