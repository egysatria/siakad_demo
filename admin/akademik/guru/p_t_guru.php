<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$n = mysqli_real_escape_string($k,$_POST['nip']);
	$nm_guru = mysqli_real_escape_string($k,$_POST['nm_guru']);	
	$tp_lahir = mysqli_real_escape_string($k,$_POST['tp_lahir']);
	$tg = mysqli_real_escape_string($k,$_POST['tgl_lahir']);	
	$jk = mysqli_real_escape_string($k,$_POST['jk']);	
	$ag = mysqli_real_escape_string($k,$_POST['agama']);
	$jabatan = mysqli_real_escape_string($k,$_POST['jabatan']);
	$al = mysqli_real_escape_string($k,$_POST['alamat']);
	$golongan = mysqli_real_escape_string($k,$_POST['gol']);
	$status = mysqli_real_escape_string($k,$_POST['status']);
	$password = mysqli_real_escape_string($k,$_POST['password']);
	$pendidikan = mysqli_real_escape_string($k,$_POST['pendidikan']);

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../../assets/images/guru/".$ft);

    if($simpan)
    {
    	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_guru` (`nip`, `nm_guru`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `jabatan`, `alamat`, `golongan`, `status`, `password`, `pendidikan`, `foto`) VALUES ('".$n."', '".$nm_guru."', '".$tp_lahir."', '".$tg."', '".$jk."', '".$ag."', '".$jabatan."', '".$al."', '".$golongan."', '".$status."', MD5('".$password."'), '".$pendidikan."', '".$ft."');");
    
        $pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=guru" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=guru&act=tambah');
        
    }
    else
    {
    	echo "Gagal Di Simpan";
    }
    $_SESSION['pesan'] = $pesan;
}
?>
