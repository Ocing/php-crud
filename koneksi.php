<?php

	$host		="localhost";
	$user		="root";
	$passwd		="root";	
	$dbname		="mahasiswa";

$koneksi=mysql_connect($host,$user,$passwd);

if($koneksi){
	$db=mysql_select_db($dbname);
	if($db);
	echo "";
} else {
	echo "koneksi gagal";
}

?>