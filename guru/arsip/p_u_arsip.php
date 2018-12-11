<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_arsip = mysqli_real_escape_string($k,$_POST['kd_arsip']);
	$judul = mysqli_real_escape_string($k,$_POST['judul']);
	$tgl_publis = mysqli_real_escape_string($k,$_POST['tgl_publis']);

	$pesan = "";

	$fl = $_FILES['file']['name'];
	$ex = explode(".", $_FILES['file']['name']);
    $nm = "f-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['file']['tmp_name'];

	if ($fl == "") 
	{

		$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_arsip` SET `judul` = '".$judul."', `tgl_publis` = '".$tgl_publis."' WHERE `tb_arsip`.`kd_arsip` = '".$kd_arsip."';");

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=arsip" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=arsip&act=ubah');
	}
	 else
    {
    	$q = $k->query("SELECT * FROM tb_arsip WHERE kd_arsip = '$kd_arsip'");
    	$fl_lm = mysqli_fetch_array($q);
    	$b = $fl_lm['file'];
    	unlink("../../assets/file/".$b);

    	$simpan = move_uploaded_file($sumber, "../../assets/file/".$nm);

    	if ($simpan) 
    	{
    		$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_arsip` SET `judul` = '".$judul."', `file` = '".$nm."', `tgl_publis` = '".$tgl_publis."' WHERE `tb_arsip`.`kd_arsip` = '".$kd_arsip."';");

			 $pesan = '<div class="alert alert-success">
	                	<strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=arsip" class="alert-link">Lihat Data</a>.
	           		</div>';

		    header('location:../index.php?hal=arsip&act=ubah');
    	}
    }
	
	$_SESSION['pesan'] = $pesan;
}
?>
