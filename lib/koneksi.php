<?php
$h = "localhost";
$u = "root";
$p = "";
$db = "db_sd_bendungan2";


$k = new mysqli($h,$u,$p,$db);

if (!$k) 
{
	echo "Database Tidak DItemukan";
}


?>