<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../lib/koneksi.php';

	$kd_nilai = mysqli_real_escape_string($k,$_POST['kd_nilai']);
	$nis = mysqli_real_escape_string($k,$_POST['nis']);	
	$kd_kelas = mysqli_real_escape_string($k,$_POST['kd_kelas']);
	$kd_mapel = mysqli_real_escape_string($k,$_POST['kd_mapel']);
	$ta = mysqli_real_escape_string($k,$_POST['ta']);
	$semester = mysqli_real_escape_string($k,$_POST['semester']);
	$n_tgs = mysqli_real_escape_string($k,$_POST['n_tgs']);
	$n_uh = mysqli_real_escape_string($k,$_POST['n_uh']);
	$n_uts = mysqli_real_escape_string($k,$_POST['n_uts']);
	$n_uas = mysqli_real_escape_string($k,$_POST['n_uas']);


	$tot = $n_tgs+$n_uh+$n_uts+$n_uas;
	$na = $tot/4;

	if ($na >= 75) 
	{
		$ket = "Tuntas";
	}
	else
	{
		$ket = "Tidak Tuntas";
	}


	$pesan = "";


	$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_nilai` SET `kd_siswa` = '".$nis."', `kd_kelas` = '".$kd_kelas."', `kd_mapel` = '".$kd_mapel."', `ta` = '".$ta."', `semester` = '".$semester."', `n_tugas` = '".$n_tgs."', `n_uh` = '".$n_uh."', `n_uts` = '".$n_uts."', `n_uas` = '".$n_uas."', `t_nilai` = '".$tot."', `n_akhir` = '".$na."', `ket` = '".$ket."' WHERE `tb_nilai`.`kd_nilai` = '".$kd_nilai."';");

	if ($sql) 
	{
		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=nilai" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=nilai&act=ubah');
	}
	else
	{
		echo "<script>
			alert('Data Gagal Di Ubah !!');
			window.location.href='../index.php?hal=nilai';    			
		</script>";
	}
	
	$_SESSION['pesan'] = $pesan;
}
?>





