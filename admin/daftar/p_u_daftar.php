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
	$status = mysqli_real_escape_string($k,$_POST['status']);

	$pesan = "";

	$pict = $_FILES['foto']['name'];
	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];

    if($pict == "")
    {
    	$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_daftar` SET `nm_pendaftar` = '".$nm_pendaftar."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `jk` = '".$jk."', `agama` = '".$ag."', `alamat` = '".$alamat."', `nm_ayah` = '".$nm_ayah."', `nm_ibu` = '".$nm_ibu."', `alamat_ortu` = '".$alamat_ortu."', `pk_ayah` = '".$pk_ayah."', `pk_ibu` = '".$pk_ibu."', `tlp_ortu` = '".$tlp_ortu."', `tgl_daftar` = '".$tgl_daftar."', `status` = '".$status."' WHERE `tb_daftar`.`kd_daftar` = '".$kd_daftar."';");

        if ($status == 1) 
        {
            $slc = $k->query("SELECT thn_ajaran,status FROM tb_master WHERE status='1' LIMIT 1");
            $thn = mysqli_fetch_array($slc);

            $tp_thn = $thn['thn_ajaran'];
            $sql1 = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_siswa` (`kd_siswa`, `nis`, `nm_siswa`, `tp_lahir`, `tgl_lahir`, `agama`, `ta`, `alamat`, `status`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `password`, `tlp_ortu`, `foto`) VALUES ('".$kd_daftar."','".$kd_daftar."', '".$nm_pendaftar."', '".$tp_lahir."', '".$tg."', '".$ag."', '".$tp_thn."', '".$alamat."', 'siswa', '".$nm_ayah."', '".$nm_ibu."', '".$alamat_ortu."', '".$pk_ayah."', '".$pk_ibu."', MD5('12345'), '".$tlp_ortu."', '".$ft."');");
        }
        
    	$pesan = '<div class="alert alert-success">
                	<strong>Selesai!</strong> Data Berhasil Di Inputkan <a href="index.php?hal=daftar" class="alert-link">Lihat Data</a>.
            		</div>';
            
   		header('location:../index.php?hal=daftar&act=ubah');
        
    }
    else
    {
    	$q = $k->query("SELECT * FROM tb_daftar WHERE kd_daftar='$kd_daftar'");
        $ft_lm = mysqli_fetch_array($q);
        $b = $ft_lm['foto'];
        unlink("../../assets/images/pendaftar/".$b);

        $simpan = move_uploaded_file($sumber, "../../assets/images/pendaftar/".$ft);

        if ($simpan) 
        {
            $s= $k->query("UPDATE `db_sd_bendungan2`.`tb_daftar` SET `nm_pendaftar` = '".$nm_pendaftar."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tgl_lahir."', `jk` = '".$jk."', `agama` = '".$ag."', `alamat` = '".$alamat."', `nm_ayah` = '".$nm_ayah."', `nm_ibu` = '".$nm_ibu."', `alamat_ortu` = '".$alamat_ortu."', `pk_ayah` = '".$pk_ayah."', `pk_ibu` = '".$pk_ibu."', `tlp_ortu` = '".$tlp_ortut."', `tgl_daftar` = '".$tgl_daftar."', `foto` = '".$ft."' WHERE `tb_daftar`.`kd_daftar` = '".$kd_daftar."';");
            
            if ($status == 1) {
            $sql1 = $k->query("INSERT INTO `db_sd_bendungan2`.`tb_siswa` (`kd_siswa`, `nis`, `nm_siswa`, `tp_lahir`, `tgl_lahir`, `agama`, `ta`, `alamat`, `status`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `password`, `tlp_ortu`, `foto`) VALUES ('".$kd_daftar."','".$kd_daftar."', '".$nm_pendaftar."', '".$tp_lahir."', '".$tg."', '".$ag."', '2018/2019', '".$alamat."', 'siswa', '".$nm_ayah."', '".$nm_ibu."', '".$alamat_ortu."', '".$pk_ayah."', '".$pk_ibu."', MD5('12345'), '".$tlp_ortu."', '".$ft."');");
                }

             $pesan = '<div class="alert alert-success">
                        <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=daftar" class="alert-link">Lihat Data</a>.
                    </div>';

            header('location:../index.php?hal=daftar&act=ubah');
        }
    }
    $_SESSION['pesan'] = $pesan;
}
?>
