<?php

include "koneksi.php";

?>

<?php
	
	$no_mhs=$_GET['no_mhs'];
	$query=mysql_query("select *from daftar where no_mhs='$no_mhs'");
	if($tampil_data=mysql_fetch_array($query)){
		$no_mhs=$tampil_data['no_mhs'];
		$nm_mhs=$tampil_data['nm_mhs'];
		$jk=$tampil_data['jk'];
		$jurusan=$tampil_data['jurusan'];
		$alamat=$tampil_data['alamat'];

}

?>

<html>
<head><title>Edit data</title>
<style type="text/css">
body {
	color: #000; padding: 10px; margin: 10px;
	font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 13px;
	text-decoration: none;
}
table {
	border: 0px;
}
#nm_input{
	width: 150px
}
#ip_input{
	width: 400px;
}
#op_input{
	width: 300px;
	height: 25px;
}
#op_text{
	width: 300px;
	height: 100px;
}
</style>
</head>
<body>

<h3>Edit Data Mahasiswa</h3>
<table>
	<form action="edit.data.php?no_mhs=<?php echo $no_mhs;?>" method="post" name="input">
<tr>
<td id="nm_input">NIM Mahasiswa</td>
<td id="ip_input"><input type="text" name="no_mhs" size="25" id="op_input" value="<?php echo $no_mhs;?>"></td>
</tr>
<tr>
<td id="nm_input">Nama</td>
<td id="ip_input"><input type="text" name="nm_mhs" size="25" id="op_input" value="<?php echo $nm_mhs;?>"></td>
</tr>
<tr>
<td id="nm_input">Jenis kelamin</td>
<td id="nm_input">
						<?php

						if($jk=="laki-laki"){
							echo "<input type='radio' name='jk' value='laki-laki' checked='checked'>laki-laki";
							echo "<input type='radio' name='jk' value='perempuan'>perempuan<br>";
						} else if ($jk=="perempuan"){
							echo "<input type='radio' name='jk' value='laki-laki'>laki-laki";
							echo "<input type='radio' name='jk' value='perempuan' checked='checked'>perempuan<br>";
						}

						?>
</tr>
<td id="nm_input">jurusan</td>
<td id="ip_input"><select name="jurusan">
								<option value="<?php echo $jurusan;?>"><?php echo $jurusan;?></option>
								<option value="Teknik informatika">Teknik Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Manajemen Infomartika">Manajemen Informatika</option>
							</select></td>
						</tr>
<tr>
<td id="nm_input">alamat</td>
<td id="ip_input"><textarea name="alamat" clos="30" rows="5" id="op_text"><?php echo $alamat;?></textarea></td>
</tr>
<tr>
	<td id="nm_input"></td>
	<td id="ip_input"><input type="submit" value="Update Data" name="input" onclick="return cek_form(this.form)"></td>
</tr>

</table>
</form>					

<?php

	if(isset($_POST['input'])){
		$no_mhs=$_POST['no_mhs'];
		$nm_mhs=$_POST['nm_mhs'];
		$jk=$_POST['jk'];
		$jurusan=$_POST['jurusan'];
		$alamat=$_POST['alamat'];

		$no_mhs=$_GET['no_mhs'];
		$Update_mhs=mysql_query("UPDATE daftar SET nm_mhs='$nm_mhs',jk='$jk',jurusan='$jurusan',alamat='$alamat' where no_mhs='$no_mhs'");

		if($Update_mhs==1){
		echo "data Mahasiswa telah di update <a href='lihat.php'>lihat Data</a>";
		} else {
		echo "data gagal di update <a href='lihat.php'>Silahkan Coba Lagi</a>";
		} 
	}
?>

	</body>
</html>	