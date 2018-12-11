<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_alumni = mysqli_real_escape_string($k,$_POST['kd_alumni']);
	$nm_alumni = mysqli_real_escape_string($k,$_POST['nm_alumni']);	
	$tp_lahir = mysqli_real_escape_string($k,$_POST['tp_lahir']);
	$tg = mysqli_real_escape_string($k,$_POST['tgl_lahir']);	
	$jk = mysqli_real_escape_string($k,$_POST['jk']);
	$al = mysqli_real_escape_string($k,$_POST['alamat']);
	$thn_masuk = mysqli_real_escape_string($k,$_POST['thn_masuk']);
	$thn_keluar = mysqli_real_escape_string($k,$_POST['thn_keluar']);
	$no_telp = mysqli_real_escape_string($k,$_POST['no_telp']);

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "../../assets/images/alumni/".$ft);

    if($simpan)
    {
    	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_alumni` (`kd_alumni`, `nm_alumni`, `tp_lahir`, `tgl_lahir`, `jk`, `alamat`, `thn_masuk`, `thn_keluar`, `no_tlp`, `foto`) VALUES ('".$kd_alumni."', '".$nm_alumni."', '".$tp_lahir."', '".$tg."', '".$jk."', '".$al."', '".$thn_masuk."', '".$thn_keluar."', '".$no_telp."', '".$ft."');");
    
        $pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=alumni" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=alumni&act=tambah');
        
    }
    else
    {
    	echo "Gagal Di Simpan";
    }
    $_SESSION['pesan'] = $pesan;
}
?>
