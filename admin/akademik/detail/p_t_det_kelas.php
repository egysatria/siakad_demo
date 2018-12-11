<?php
session_start();
if (isset($_POST['simpan'])) 
{
	include '../../../lib/koneksi.php';

	$kelas = mysqli_real_escape_string($k,$_POST['kelas']);
	$siswa = mysqli_real_escape_string($k,$_POST['siswa']);
	$ta = mysqli_real_escape_string($k,$_POST['ta']);	

	$pesan = "";

	$sql = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_detail_kel` (`kode`, `kd_kelas`, `kd_siswa`, `ta`) VALUES (NULL, '".$kelas."', '".$siswa."', '".$ta."');");

	if ($sql) 
	{
		$carikode = $k->query("SELECT id FROM thn_ajaran");
	    $datakode = mysqli_fetch_array($carikode);
	    $jumlah_data = mysqli_num_rows($carikode);
	    if ($datakode) {
	     $nilaikode = substr($jumlah_data[0], 1);
	     $kode = (int) $nilaikode;
	     $kode = $jumlah_data + 1;
	     $kode_otomatis = "T".str_pad($kode, 4, "0", STR_PAD_LEFT);
	    } else {
	     $kode_otomatis = "T0001";
	    }

		$sql .= $k->multi_query("INSERT INTO `db_sd_bendungan2`.`thn_ajaran` (`id`, `ta`, `kelas`, `siswa`) VALUES ('".$kode_otomatis."', '".$ta."', '".$kelas."', '".$siswa."');");

		$pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=det_kelas" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../../index.php?hal=det_kelas&act=tambah');
	}
	else
	{
		// echo "<script>
		// 	alert('Data Gagal Di Inputkan !!');
		// 	window.location.href='../../index.php?hal=det_kelas';    			
		// </script>";
	}

	$_SESSION['pesan'] = $pesan;
	
}
?>
