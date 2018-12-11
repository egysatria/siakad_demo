<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kd_siswa = mysqli_real_escape_string($k,$_POST['kd_siswa']);
	$n = mysqli_real_escape_string($k,$_POST['nis']);
	$nm_siswa = mysqli_real_escape_string($k,$_POST['nm_siswa']);	
	$tp_lahir = mysqli_real_escape_string($k,$_POST['tp_lahir']);
	$tg = mysqli_real_escape_string($k,$_POST['tgl_lahir']);
	$ag = mysqli_real_escape_string($k,$_POST['agama']);
	$ta = mysqli_real_escape_string($k,$_POST['ta']);	
	$alamat = mysqli_real_escape_string($k,$_POST['alamat']);
	$status = mysqli_real_escape_string($k,$_POST['status']);
	$nm_ayah = mysqli_real_escape_string($k,$_POST['nm_ayah']);
	$nm_ibu = mysqli_real_escape_string($k,$_POST['nm_ibu']);
	$alamat_ortu = mysqli_real_escape_string($k,$_POST['alamat_ortu']);
	$pk_ayah = mysqli_real_escape_string($k,$_POST['pk_ayah']);
	$pk_ibu = mysqli_real_escape_string($k,$_POST['pk_ibu']);
	$password = mysqli_real_escape_string($k,$_POST['password']);
	$tlp_ortu = mysqli_real_escape_string($k,$_POST['tlp_ortu']);

	$pesan = "";

	$pict = $_FILES['foto']['name'];
	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    

	if ($pict == "") 
	{
		$sql = $k->query("UPDATE `tb_siswa` SET `nis` = '".$n."', `nm_siswa` = '".$nm_siswa."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `agama` = '".$ag."', `ta` = '".$ta."', `alamat` = '".$alamat."', `nm_ayah` = '".$nm_ayah."', `nm_ibu` = '".$nm_ibu."', `alamat_ortu` = '".$alamat_ortu."', `pk_ayah` = '".$pk_ayah."', `pk_ibu` = '".$pk_ibu."', `password` = MD5('".$password."'), `tlp_ortu` = '".$tlp_ortu."' WHERE `tb_siswa`.`kd_siswa` = '".$kd_siswa."';");

		$pesan = '<div class="alert alert-success">
		                <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=siswa" class="alert-link">Lihat Data</a>.
		           </div>';
		header('location:../../index.php?hal=siswa&act=ubah');
	}
	else
	{
		$q = $k->query("SELECT * FROM tb_siswa WHERE nis='$n'");
    	$ft_lm = mysqli_fetch_array($q);
    	$b = $ft_lm['foto'];
    	unlink("../../../assets/images/siswa/".$b);

		$simpan = move_uploaded_file($sumber, "../../../assets/images/siswa/".$ft);
		if($simpan)
		{
			$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_siswa` SET `nis` = '".$n."',`nm_siswa` = '".$nm_siswa."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `agama` = '".$ag."', `ta` = '".$ta."', `alamat` = '".$alamat."', `status` = '".$status."', `nm_ayah` = '".$nm_ayah."', `nm_ibu` = '".$nm_ibu."', `alamat_ortu` = '".$alamat_ortu."', `pk_ayah` = '".$pk_ayah."', `pk_ibu` = '".$pk_ibu."', `password` = MD5('".$password."'), `tlp_ortu` = '".$tlp_ortu."', `foto` = '".$ft."' WHERE `tb_siswa`.`kd_siswa` = '".$kd_siswa."';");
			
			$pesan = '<div class="alert alert-success">
		                <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=siswa" class="alert-link">Lihat Data</a>.
		           </div>';
			header('location:../../index.php?hal=siswa&act=ubah');
		}
	}

	$_SESSION['pesan'] = $pesan;

}
?>
