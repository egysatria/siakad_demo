<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_daftar = mysqli_real_escape_string($k,$_POST['kd_daftar']);
	$nm_pendaftar = mysqli_real_escape_string($k,$_POST['nm_pendaftar']);	
	$tp_lahir = mysqli_real_escape_string($k,$_POST['tp_lahir']);
	$tg = mysqli_real_escape_string($k,$_POST['tgl_lahir']);
	$jk = mysqli_real_escape_string($k,$_POST['jk']);
	$ag = mysqli_real_escape_string($k,$_POST['agama']);
	$alamat = mysqli_real_escape_string($k,$_POST['alamat']);
	$nm_ayah = mysqli_real_escape_string($k,$_POST['nm_ayah']);
	$nm_ibu = mysqli_real_escape_string($k,$_POST['nm_ibu']);
	$alamat_ortu = mysqli_real_escape_string($k,$_POST['alamat_ortu']);
	$pk_ayah = mysqli_real_escape_string($k,$_POST['pk_ayah']);
	$pk_ibu = mysqli_real_escape_string($k,$_POST['pk_ibu']);
	$tlp_ortu = mysqli_real_escape_string($k,$_POST['no_tlp']);
	$tgl_daftar = mysqli_real_escape_string($k,$_POST['tgl_daftar']);

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../assets/images/pendaftar/".$ft);

    if($simpan)
    {
    	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_daftar` (`kd_daftar`, `nm_pendaftar`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `tlp_ortu`, `tgl_daftar`,`status`, `foto`) VALUES ('".$kd_daftar."', '".$nm_pendaftar."', '".$tp_lahir."', '".$tg."', '".$jk."', '".$ag."', '".$alamat."', '".$nm_ayah."', '".$nm_ibu."', '".$alamat_ortu."', '".$pk_ayah."', '".$pk_ibu."', '".$tlp_ortu."', '".$tgl_daftar."', '1', '".$ft."');");

    	$pesan = '<div class="alert alert-success">
                <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=daftar" class="alert-link">Lihat Data</a>.
            </div>';
            
   		header('location:../index.php?hal=daftar&act=tambah');
        
    }
    else
    {
    	echo "Gagal Di Simpan";
    }
    $_SESSION['pesan'] = $pesan;
}
?>
