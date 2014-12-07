<?php

include "koneksi.php";

$no_mhs=$_GET['no_mhs'];
$hapus=mysql_query("DELETE FROM daftar WHERE no_mhs='$no_mhs'");

if($hapus==1){
	echo "Nomor Mahasiswa<b>$no_mhs</b>telah di hapus dari data .. <a href='lihat.php'>lihat data</a>";
} else {
	echo "Nomor Mahasiswa<b>$no_mhs</b>tidak di temukan, silahkan <a href='lihat.php'>coba lagi</a>";
}

?>