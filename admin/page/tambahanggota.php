<!DOCTYPE html>
<html>
<head>
	<title>Tambah Anggota</title>
	<link rel="stylesheet" type="text/css" href="../css/responsible.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php 
  $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 

  if(isset($_POST['tambah'])){
  	$id_anggota=$_POST['id_anggota'];
    $nm_anggota= $_POST['nm_anggota'];
    $asal_kampus = $_POST['asal_kampus'];
    $alamat=$_POST['alamat'];
    $email = $_POST['email'];
    $nohp=$_POST['nohp'];
    $departemen = $_POST['departemen'];
    $jabatan=$_POST['jabatan'];

  if($id_anggota == "" or $nm_anggota == "" or $asal_kampus == "" or $alamat=="" or $email=="" or $nohp == "" or $departemen=="" or $jabatan==""){
    echo "<script>alert('Masih ada data yang kosong .');
    document.location='tambahanggota.php';</script>";
  }else{
    if (isset($_FILES["foto"]["tmp_name"])) {
        $foto = $_FILES["foto"]["name"];
        $foto = stripslashes($foto);
        $foto = str_replace("'","",$foto);
        $foto = str_replace(" ","-",$foto);
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../gambar/foto/$foto");
      }else {
        $foto = "";
      }

    $simpan = mysqli_query($koneksi,"INSERT INTO anggota() values('$id_anggota', '$nm_anggota', '$asal_kampus', '$alamat' , '$email', '$nohp', '$departemen','$jabatan','$foto')")or die(mysqli_error($koneksi));
    if($simpan){
        echo "<script>alert('Data berhasil di input !');
        document.location='?page=tampilanggota';</script>";
      }else{
        echo "<script>alert('gagal mas bro !');
        document.location='?page=tambahanggota';</script>";
      }
    }
  }
?>
<body>
<h1>Masukan</h1>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td>Id Anggota</td>
			<td>:</td>
			<td><input type="text" name="id_anggota" placeholder="NIM Anda"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nm_anggota"></td>
		</tr>
		<tr>
			<td>Asal Kampus</td>
			<td>:</td>
			<td><input type="text" name="asal_kampus"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td><input type="text" name="nohp"></td>
		</tr>
		<tr>
			<td>Masukan Depateremn</td>
			<td>:</td>
			<td>
				<select name="departemen">
					<option value="">--Pilih--</option>
					<option value="ORKAD">ORKAD</option>
					<option value="SOSIAL">SOSIAL</option>
					<option value="PENDIDIKAN">PENDIDIKAN</option>
					<option value="INFOKOM">INFOKOM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>
				<input type="radio" name="jabatan" value="Anggota">Anggota<input type="radio" name="jabatan" value="Ketua">Ketua
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto" id="lik" placeholder="Max 1,8 MB"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Tambah" name="tambah"></td>
		</tr>
	</table>
s</form>
</body>
</html>