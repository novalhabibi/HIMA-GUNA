<!DOCTYPE html>
<html>
<head>
	<title>Edit Event</title>
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * from event where id_event = '$id'");
    $eve = mysqli_fetch_array($query);
    }
    else  $id = "";

  if(isset($_POST['perbarui'])){
    $nm_event= $_POST['nm_event'];
    $deskripsi = $_POST['deskripsi'];
 

    if($nm_event == "" or $deskripsi == "") {
      echo "<script>alert('Masih ada data yang kosong .');
      document.location = 'editevent.php';</script>";
      }else{
      if (isset($_FILES["foto"]["tmp_name"]) and $_FILES["foto"]["name"] != "") {
          $foto = $_FILES["foto"]["name"];
          $foto = stripslashes($foto);
          $foto = str_replace("'","",$foto);
          $foto = str_replace(" ","-",$foto);
          move_uploaded_file($_FILES["foto"]["tmp_name"], "../gambar/event/$foto");
          $update = mysqli_query($koneksi,"UPDATE event SET 
                                nm_event = '$nm_event', 
                                deskripsi = '$deskripsi', 
                                foto	='$foto'
                               where id_event = '$id'") or die(mysqli_error($koneksi));
        }else {
          $update = mysqli_query($koneksi,"UPDATE event SET 
                                nm_event = '$nm_event', 
                                deskripsi = '$deskripsi', 
                                foto      = '$_POST[fototxt]'
                                where id_event = '$id'") or die(mysqli_error($koneksi));
          }

        if($update){
            echo "<script>alert('Data berhasil di update !');
            document.location = '?page=tampilevent';</script>";
          }else{
            echo "<script>alert('Gagal mas bro !');
            document.location = '?page=editevent';</script>";
          }
      }
  }
?>
<body>
<h1>Edit Event</h1>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td>Nama Event</td>
			<td>:</td>
			<td><input type="text" name="nm_event" value="<?php echo $eve['nm_event'];  ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi" placeholder="Tempat, Waktu, Dll" cols="50" rows="5"><?php echo $eve['deskripsi'];  ?></textarea></td>
		</tr>
		<tr>
			<td>Foto Kegiatan</td>
			<td>:</td>
			<td><input type="file" name="foto" id="lik">
				<input type="hidden" name="fototxt" value="<?php echo $eve['foto'];  ?>"><?php echo $eve['foto'];  ?> </td>
		</tr>
		<tr>
			<td colspan="3" align="right"><input type="submit" name="perbarui" value="Perbarui"><input type="reset" name="batal" value="Batal"></td>
		</tr>
	</table>
</form>

</body>
</html>