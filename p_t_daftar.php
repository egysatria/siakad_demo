<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include 'lib/koneksi.php';

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
	$tlp_ortu = mysqli_real_escape_string($k,$_POST['tlp_ortu']);
	$tgl_daftar = mysqli_real_escape_string($k,date("Y/m/d"));

	$pesan = "";

	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];
    $simpan = move_uploaded_file($sumber, "assets/images/siswa/".$ft);

    if($simpan)
    {
    	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_daftar` (`kd_daftar`, `kelas`,`nm_pendaftar`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `tlp_ortu`, `tgl_daftar`, `status`, `foto`) VALUES ('".$kd_daftar."', 'I', '".$nm_pendaftar."', '".$tp_lahir."', '".$tg."', '".$jk."', '".$ag."', '".$alamat."', '".$nm_ayah."', '".$nm_ibu."', '".$alamat_ortu."', '".$pk_ayah."', '".$pk_ibu."', '".$tlp_ortu."', '".$tgl_daftar."', '0', '".$ft."');");
    	?>
    		<script>
				alert('Selamat Anda Telah Terdaftar, Silahkan cetak bukti!!');
				window.location.href="cetak_daftar.php";
			</script>
    	<?php
    }
    else
    {
    	echo "Gagal Di Simpan";
    }
}
?>
