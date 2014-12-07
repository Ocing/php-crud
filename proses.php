<?php

include "koneksi.php";

if(isset($_POST['input'])){
	$xno_mhs=$_POST['no_mhs'];
	$xnm_mhs=$_POST['nm_mhs'];
	$xjk=$_POST['jk'];
	$xjurusan=$_POST['jurusan'];
	$xalamat=$_POST['alamat'];

	$record=mysql_query("INSERT INTO daftar(no_mhs,nm_mhs,jk,jurusan,alamat)
		VALUES('$xno_mhs','$xnm_mhs','$xjk','$xjurusan','$xalamat')");
	
	if($record==1){
		echo "Data berhasil di simpan";
		} else {
		echo "Data gagal di simpan";
		}	
}

?>

<html>
<head></head>
<body>
<br>
<tr>
	<td align"center"><a href="index.php">Silahkan klik di sini ! untuk input data Baru</a>
	</td>
</tr>
</br>

<tr>
	<td align"center"><a href="lihat.php">Silahkan klik di sini ! untuk melihat data</a>
	</td>
</tr>

</body>
</html>