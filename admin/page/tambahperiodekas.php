<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 

if(isset($_POST['tambah'])){
    $tgl_buka = $_POST['tgl_buka'];
    $tgl_tutup=$_POST['tgl_tutup'];

  if($tgl_buka == "" or $tgl_tutup=="") {
    echo "<script>alert('Tanggal harus di isi !');
    document.location = '?page=tambahperiodekas';</script>";
  }else{
    $simpan = mysqli_query($koneksi,"INSERT INTO periode_kas() values('', '$tgl_buka','$tgl_tutup')");
    if($simpan){
        echo "<script>alert('Data berhasil di input !');
        document.location = '?page=tampilkas';</script>";
      }else{
        echo "<script>alert('gagal mas bro !');
        document.location = '?page=tambahperiodekas;</script>";
      }
    }
  }
?>


<body>
<br>
<br>
<br>
<br>
<span class="page-title">Tambah Periode</span>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1">
		<tr>
			<td>Masukan Tanggal Buka :</td>
			<td><input type="date" name="tgl_buka"></td>
		
			<td>Masukan Tanggal Tutup :</td>
			<td><input type="date" name="tgl_tutup"></td>
			<td><input type="submit" name="tambah" value="Tambah" id="lik"></td>
		</tr>
	</table>


</form>	
</body>
</html>
