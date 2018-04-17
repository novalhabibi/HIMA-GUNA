<!DOCTYPE html>
<html>
<head>
	<title>Tambah Event</title>
  <link rel="stylesheet" type="text/css" href="../css/responsible.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
if(isset($_POST['tambah'])){
    $nm_event= $_POST['nm_event'];
    $deskripsi = $_POST['deskripsi'];

  if($nm_event == "" or $deskripsi == ""){
    echo "<script>alert('Masih ada data yang kosong .');
    document.location='tambahevent.php';</script>";
  }else{
    if (isset($_FILES["foto"]["tmp_name"])) {
        $foto = $_FILES["foto"]["name"];
        $foto = stripslashes($foto);
        $foto = str_replace("'","",$foto);
        $foto = str_replace(" ","-",$foto);
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../gambar/event/$foto");
      }else {
        $foto = "";
      }

    $simpan = mysqli_query($koneksi,"INSERT INTO event() values('', '$nm_event', '$deskripsi','$foto')")or die(mysqli_error($koneksi));
    if($simpan){
        echo "<script>alert('Data berhasil di input !');
        document.location='?page=tampilevent';</script>";
      }else{
        echo "<script>alert('gagal mas bro !');
        document.location='?page=tambahevent';</script>";
      }
    }
  }


?>
<body>
<h1>Tambah Event</h1>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td>Nama Event</td>
			<td>:</td>
			<td><input type="text" name="nm_event" placeholder="Nama Event"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi" placeholder="Tempat, Waktu, Dll" cols="50" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Foto Kegiatan</td>
			<td>:</td>
			<td><input type="file" name="foto" id="lik"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><input type="submit" name="tambah" value="Tambah"><input type="reset" name="batal" value="Batal"></td>
		</tr>
	</table>
</form>
</body>
</html>