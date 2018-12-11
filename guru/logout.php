<?php

session_start();
session_destroy();
?>
<script>
	alert('Selamat Anda Berhasil Logout !!');
	window.location.href="login.php";
</script>