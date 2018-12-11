<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kd_master = mysqli_real_escape_string($k,$_POST['kd_master']);
	$thn_ajaran = mysqli_real_escape_string($k,$_POST['thn_ajaran']);
	$status = mysqli_real_escape_string($k,$_POST['status']);

	$pesan = "";

	$sql=$k->query("INSERT INTO `tb_master` (`kd_master`, `thn_ajaran`, `status`) VALUES ('".$kd_master."', '".$thn_ajaran."', '".$status."');");
	
	if ($sql === TRUE) {

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=master" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=master&act=tambah');
	}
	
	$_SESSION['pesan'] = $pesan;
}

?>