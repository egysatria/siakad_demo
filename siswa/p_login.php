<?php
session_start();

if (isset($_POST['login'])) 
{
	include '../lib/koneksi.php';

	$u = $_POST['nis'];
	$p = $_POST['password'];

	$user = mysqli_real_escape_string($k,$u);
	$pass = mysqli_real_escape_string($k,$p);
	$pesan = "";

	$P = md5($pass);

	if ($u == "") 
	{
		echo "<script>

		alert('Username Harus Terisi !!');
		document.getElementById('nis').focus();

		</script>";
	}

	elseif($P == "")
	{
		echo "<script>

		alert('Password HArus Diiisi !!');
		</script>";
	}
	else
	{
		$sqle = $k->query("SELECT * FROM tb_siswa WHERE nis = '$user' AND password = '$P'");
		$n = mysqli_fetch_array($sqle);

		if (mysqli_num_rows($sqle) == 1) 
		{
			$_SESSION['username'] = $u;
			$_SESSION['nm'] = $n['nm_siswa'];
			$_SESSION['ft'] = $n['foto'];

		?>

		<script>
			alert('Selamat Anda Berhasil Login !!');
			window.location.href="index.php?hal=dashboard";
		</script>
		<?php
		}
		else
		{
			$pesan = '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Mohon Maaf Anda Gagal Login !! 
                    </div>';

            header('location:login.php');
		}
	}

	$_SESSION['pesan'] = $pesan;
}
?>