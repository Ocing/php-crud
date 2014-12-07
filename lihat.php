<html>
<head><title>Data</title>
<style type="text/css">
body{
	color: #000; padding: 10px; margin: 10px;
	font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 13px;
	text-decoration: none;
}

table{
	border: 1px;
}

#title{
	font-weight: bold;
	text-align: center;
	background: #e4e4e4;
}
</style>

</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table width="900" border="1" cellpadding="2" cellspacing="2">
		<tr id="title">
			<td width="100">No</td>
			<td width="200">Nama</td>
			<td width="100">Jenis kelamin</td>
			<td width="200">Jurusan</td>
			<td width="200">Alamat</td>
			<td width="200">Opsi</td>
		</tr>


<?php

include "koneksi.php";

$query=mysql_query("SELECT *FROM daftar ORDER BY no_mhs ASC");
while ($tampilkan=mysql_fetch_array($query)) {
		$no_mhs=$tampilkan['no_mhs'];
		$nm_mhs=$tampilkan['nm_mhs'];
		$jk=$tampilkan['jk'];
		$jurusan=$tampilkan['jurusan'];
		$alamat=$tampilkan['alamat'];

?>

<tr>
	<td width="100"><?php echo $no_mhs;?></td>
	<td width="200"><?php echo $nm_mhs;?></td>
	<td width="100"><?php echo $jk;?></td>
	<td width="200"><?php echo $jurusan;?></td>
	<td width="200"><?php echo $alamat;?></td>
	<td width="200">
		<a href="edit.data.php?no_mhs=<?php echo $no_mhs;?>">&raquo;Edit</a>
		<a href="hapus.php?no_mhs=<?php echo $no_mhs;?>">&raquo;Hapus</a></td>
</tr>

<?php
}
?>

</table>
<a href="index.php">Tambah Data</a>
</body>
</html>