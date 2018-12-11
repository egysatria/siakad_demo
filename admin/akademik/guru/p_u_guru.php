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

	$pict = $_FILES['foto']['name'];
	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];

	if ($pict == "") 
	{
		$s= $k->query("UPDATE `db_sd_bendungan2`.`tb_guru` SET `nm_guru` = '".$nm_guru."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `jk` = '".$jk."', `agama` = '".$ag."', `jabatan` = '".$jabatan."', `alamat` = '".$al."', `golongan` = '".$golongan."', `status` = '".$status."', `password` = MD5('".$password."'), `pendidikan` = '".$pendidikan."' WHERE `tb_guru`.`nip` = '".$n."';");

		 $pesan = '<div class="alert alert-success">
		                <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=guru" class="alert-link">Lihat Data</a>.
		           </div>';
		 header('location:../../index.php?hal=guru&act=ubah');
    }
    else
    {
    	$q = $k->query("SELECT * FROM tb_guru WHERE nip='$n'");
    	$ft_lm = mysqli_fetch_array($q);
    	$b = $ft_lm['foto'];
    	unlink("../../../assets/images/guru/".$b);

    	$simpan = move_uploaded_file($sumber, "../../../assets/images/guru/".$ft);

    	if ($simpan) 
    	{
    		$s= $k->query("UPDATE `db_sd_bendungan2`.`tb_guru` SET `nm_guru` = '".$nm_guru."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `jk` = '".$jk."', `agama` = '".$ag."', `jabatan` = '".$jabatan."', `alamat` = '".$al."', `golongan` = '".$golongan."', `status` = '".$status."', `password` = MD5('".$password."'), `pendidikan` = '".$pendidikan."', `foto` = '".$ft."' WHERE `tb_guru`.`nip` = '".$n."';");

			 $pesan = '<div class="alert alert-success">
	                	<strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=guru" class="alert-link">Lihat Data</a>.
	           		</div>';

		    header('location:../../index.php?hal=guru&act=ubah');
    	}
    }

	$_SESSION['pesan'] = $pesan;
}

?>