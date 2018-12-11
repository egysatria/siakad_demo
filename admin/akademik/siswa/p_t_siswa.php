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
	$nm_ayah = mysqli_real_escape_string($k,$_POST['nm_ayah']);
	$nm_ibu = mysqli_real_escape_string($k,$_POST['nm_ibu']);
	$alamat_ortu = mysqli_real_escape_string($k,$_POST['alamat_ortu']);
	$pk_ayah = mysqli_real_escape_string($k,$_POST['pk_ayah']);
	$pk_ibu = mysqli_real_escape_string($k,$_POST['pk_ibu']);
	$password = mysqli_real_escape_string($k,$_POST['password']);
	$tlp_ortu = mysqli_real_escape_string($k,$_POST['tlp_ortu']);

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto -".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../../assets/images/siswa/".$ft);

    if($simpan)
    {
    	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_siswa` (`kd_siswa`,`nis`, `nm_siswa`, `tp_lahir`, `tgl_lahir`, `agama`, `ta`, `alamat`, `status`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `password`, `tlp_ortu`, `foto`) VALUES ('".$kd_siswa."','".$n."', '".$nm_siswa."', '".$tp_lahir."', '".$tg."', '".$ag."', '".$ta."', '".$alamat."', 'siswa', '".$nm_ayah."', '".$nm_ibu."', '".$alamat_ortu."', '".$pk_ayah."', '".$pk_ibu."', MD5('".$password."'), '".$tlp_ortu."', '".$ft."');");

    	$pesan = '<div class="alert alert-success">
                <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=siswa" class="alert-link">Lihat Data</a>.
            </div>';
            
   		header('location:../../index.php?hal=siswa&act=tambah');
        
    }
    else
    {
    	echo "Gagal Di Simpan";
    }
    $_SESSION['pesan'] = $pesan;
}
?>
