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

	$pict = $_FILES['foto']['name'];
	$ex = explode(".", $_FILES['foto']['name']);
    $nm = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];

	if ($pict == "") 
	{
		$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_admin` SET `username` = '".$username."', `password` = MD5('".$password."'), `nama` = '".$nama."' WHERE `tb_admin`.`kd_admin` = '".$kd_admin."';");

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=dashboard" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=admin&act=ubah');
	}
	else
	{
		$q = $k->query("SELECT * FROM tb_admin WHERE kd_admin='$kd_admin'");
    	$ft_lm = mysqli_fetch_array($q);
    	$b = $ft_lm['foto'];
    	unlink("../../assets/images/admin/".$b);

    	$simpan = move_uploaded_file($sumber, "../../assets/images/admin/".$nm);

    	if ($simpan) 
    	{
    		$s= $k->query("UPDATE `db_sd_bendungan2`.`tb_admin` SET `username` = '".$username."', `password` = MD5('".$password."'), `nama` = '".$nama."', `foto` = '".$nm."' WHERE `tb_admin`.`kd_admin` = '".$kd_admin."';");

			 $pesan = '<div class="alert alert-success">
	                	<strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=dashboard" class="alert-link">Lihat Data</a>.
	           		</div>';

		    header('location:../index.php?hal=admin&act=ubah');
    	}
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>
