<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="../ckeditor/contents.css">
  <link rel="stylesheet" href="../ckeditor/contents.css">
</head>
<body>
<?php 
 $koneksi=mysqli_connect("localhost","root","");
$databese=mysqli_select_db($koneksi,"hima");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * from artikel where id_artikel = '$id'");
    $art = mysqli_fetch_array($query);
    }
    else  $id = "";

  if(isset($_POST['perbarui'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if($judul == "" or $isi== "") {
      echo "<script>alert('Masih ada data yang kosong .');
      document.location = '?page=editartikel';</script>";
      }else{
      if (isset($_FILES["gambar"]["tmp_name"]) and $_FILES["gambar"]["name"] != "") {
          $gambar = $_FILES["gambar"]["name"];
          $gambar = stripslashes($gambar);
          $gambar = str_replace("'","",$gambar);
          $gambar = str_replace(" ","-",$gambar);
          move_uploaded_file($_FILES["gambar"]["tmp_name"], "../gambar/artikel/$gambar");
          $update = mysqli_query($koneksi,"UPDATE artikel SET 
                                judul = '$judul', 
                                isi = '$isi', 
                                gambar       = '$gambar'
                               where id_artikel = '$id'") or die(mysqli_error($koneksi));
        }else {
          $update = mysqli_query($koneksi,"UPDATE artikel SET 
                                judul = '$judul', 
                                isi = '$isi', 
                                gambar      = '$_POST[gambartxt]'
                                where id_artikel = '$id'") or die(mysqli_error($koneksi));
          }

        if($update){
            echo "<script>alert('Data berhasil di update !');
            document.location = '?page=tampilartikel';</script>";
          }else{
            echo "<script>alert('Gagal mas bro !');
            document.location = '?page=editartikel';</script>";
          }
      }
  }
?>
<span class="page-title">Edit Artikel</span>
<form action="" method="post" enctype="multipart/form-data">
<br>
<br>
<table align="center">
  <!-- <tr>
    <td>Id Artikel</td>
    <td>:</td>
    <td><?php //echo $id; ?></td>
  </tr> -->
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" value="<?php echo "$art[judul]";?>"></td>
  </tr>
    <td>Isi</td>
    <td>:</td>
    <td><textarea name="isi" class="ckeditor" id="ckeditor" cols="60" rows="10"><?php echo "$art[isi]";?></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td><input type="file" name="gambar" size="50" id="lik">
    <input type="hidden" name="gambartxt" value="<?php echo "$art[gambar]";?>"><?php echo "$art[gambar]";?></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="perbarui" value="Perbarui" id="lik"></td>
  </tr>
</table>
</form>
</body>
</html>
