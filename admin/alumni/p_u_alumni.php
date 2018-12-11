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

    $pict = $_FILES['foto']['name'];
	$ex = explode(".", $_FILES['foto']['name']);
    $ft = "foto-".round(microtime(true)).".".end($ex);
    $sumber = $_FILES['foto']['tmp_name'];

    if($pict == "")
    {
    	$sql = $k->query("UPDATE `db_sd_bendungan2`.`tb_alumni` SET `nm_alumni` = '".$nm_alumni."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `jk` = '".$jk."', `alamat` = '".$al."', `thn_masuk` = '".$thn_masuk."', `thn_keluar` = '".$thn_keluar."', `no_tlp` = '".$no_telp."' WHERE `tb_alumni`.`kd_alumni` = '".$kd_alumni."';");
    
        $pesan = '<div class="alert alert-success">
                    <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=alumni" class="alert-link">Lihat Data</a>.
                </div>';
                
        header('location:../index.php?hal=alumni&act=ubah');
        
    }
    else
    {
    	$q = $k->query("SELECT * FROM tb_alumni WHERE kd_alumni='$kd_alumni'");
        $ft_lm = mysqli_fetch_array($q);
        $b = $ft_lm['foto'];
        unlink("../../assets/images/alumni/".$b);

        $simpan = move_uploaded_file($sumber, "../../assets/images/alumni/".$ft);

        if ($simpan) 
        {
            $s= $k->query("UPDATE `db_sd_bendungan2`.`tb_alumni` SET `nm_alumni` = '".$nm_alumni."', `tp_lahir` = '".$tp_lahir."', `tgl_lahir` = '".$tg."', `jk` = '".$jk."', `alamat` = '".$al."', `thn_masuk` = '".$thn_masuk."', `thn_keluar` = '".$thn_keluar."', `no_tlp` = '".$no_telp."', `foto` = '".$ft."' WHERE `tb_alumni`.`kd_alumni` = '".$kd_alumni."';");

             $pesan = '<div class="alert alert-success">
                        <strong>Selesai!</strong> Data Berhasil Di Ubah <a href="index.php?hal=alumni" class="alert-link">Lihat Data</a>.
                    </div>';

            header('location:../index.php?hal=alumni&act=ubah');
        }
    }

    $_SESSION['pesan'] = $pesan;
}
?>
