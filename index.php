<?php

include "koneksi.php";

?>

<html>
<head>

// Belum Solved Validasi Javascript

<script type="text/javascript">
	
	function cek_form(form){
	
	if(document.form.no_mhs.value==""){
		document.form.no_mhs.focus();
		alert("Nomor Mahasiswa Harus di isi...");
		return false;
	}

	if(document.form.nm_mhs.value==""){
		document.form.nm_mhs,focus();
		alert("Nama Mahasiswa harus di isi ...");
		return false;
	}

	if((document.form.jk[0].checked==false)&&
		(document.form.jk[1].checked==false)){
		alert("Silahkan pilih jenis Kelamin...");
		return false;
	}

	if(document.form.jurusan.value==""){
		document.form.jurusan.focus();
		alert("Jurusan Mahasiswa harus di isi");
		return false;
	}

	if(document.form.alamat.value==""){
		document.form.alamat.focus();
		alert("Alamat Mahasiswa harus di isi");
		return false;
	} 

	else
	return true;

	}

</script>

// End

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

	<h3>POLITEKNIK TEGAL</h3>
<table>
	<form method="post" name="input" action="proses.php">
<tr>
<td id="nm_input">NIM Mahasiswa</td>	
<td id="ip_input"><input type="text" name="no_mhs" id="op_input"></td>
</tr>

<tr>
<td id="nm_input">Nama Mahasiswa</td>
<td id="ip_input"><input type="text" name="nm_mhs" id="op_ipnut"></td>
</tr>

<tr>
<td id="nm_input">Jenis Kelamin</td>
<td id="ip_input"><input type="radio" name="jk" value="laki-laki">Laki- Laki
				  <input type="radio" name="jk" value="perempuan">Perempuan</td>
</tr>

<tr>
<td id="nm_input">Jurusan</td>
<td id="ip_input"><select name="jurusan">
						<option value="0"> - Pilih Jurusan - </option>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
				 </select></td>
</tr>
<td id="nm_input">Alamat</td>
<td id="ip_input"><textarea name="alamat" cols="30" rows="5" id="op_text"></textarea></td>
</tr>
			<tr>
				<td id="nm_input"></td>
				<td id="ip_input"><input type="submit" name="input" value="simpan" onclick="retrun cek_form(this.form)"></td>
			</tr>
			<tr>
				<td id="nm_input"></td>
				<td id="ip_input"><input type="reset" name="batal" value="batal"></td>
			</tr>
			<td align="center"><br>Cek Data Mahasiswa</br><a href="lihat.php">Data Mahasiswa</a></td>

</form>
</table>
</body>						
</html>