<!DOCTYPE html>
<html>
<head>
  <title></title>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="../ckeditor/contents.css">
  <link rel="stylesheet" href="../ckeditor/contents.css">
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css">
 -->
</head>
<body>
<?php 
$koneksi=mysqli_connect("localhost","root","");
$databese=mysqli_select_db($koneksi,"hima"); 
  if(isset($_POST['tambah']))
  {
    $judul=$_POST['judul'];
    $isi=$_POST['isi'];

    if ($judul=="" or $isi=="") 
    {
    echo "<script>alert('Masih ada data yang kosong');
    document.location='?page=tambahartikel';</script>";
    }
    else
    {
      if (isset($_FILES["gambar"]["tmp_name"])) 
      {
      $gambar=$_FILES["gambar"]["name"];
      $gambar=stripslashes($gambar);
      $gambar=str_replace("'","",$gambar);
      $gambar=str_replace(" ","-",$gambar);
      move_uploaded_file($_FILES["gambar"]["tmp_name"],"../gambar/artikel/$gambar");
      }
      else
      {
        $gambar="";
      }
      $simpan=mysqli_query($koneksi,"INSERT INTO artikel() values('','$judul','$isi','$gambar')");
      if ($simpan) 
      {
      echo "<script>alert('Data sukses di simpan');
    document.location='?page=tampilartikel';</script>";
      }else
      {
        echo "<script>alert('Data gagal di simpan');
    document.location='?page=tambahartikel.php';</script>";
      }
    }
   } 
?>
<h1>Tambah Artikel</h1>
<!-- <div align="center">
    <div style="width:800px;text-align:left;">
    <script type="text/javascript" src="../library/ckeditor/ckeditor.js"></script>
    <link href="../library/ckeditor/contents.css" rel="stylesheet" type="text/css"/>
    <h2>Input Berita</h2>
    <form method="post" action=#>
    <table>
    <tr><td width=70>Judul</td><td><input type='text' name= judul></td></tr>
    <tr><td>isi</td><td>
    <textarea cols="60" rows="10" id="posting" name="posting" ></textarea>
    <script type="text/javascript">
    var editor = CKEDITOR.replace('posting');
    </script>
    </td>
    <tr><td></td><td colspan="2"><input type="submit" value="Posting" name="<?php echo $button ?>" > <input type="button" value=Batal onclick="self.history.back()"></td> </tr>
    </table></form>
    </div>
    </div>     -->
<!-- <textarea name="isi" class="ckeditor"></textarea> -->
<form action="" method="post" enctype="multipart/form-data">
<div>
<table border="1" align="center">
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" placeholder="Judul"></td>
  </tr>
  <tr>
    <td>Isi</td>
    <td>:</td>
    <td><textarea name="isi"  class="ckeditor" id="ckeditor" cols="60" rows="10"></textarea></td>
     <script type="text/javascript">
var editor = CKEDITOR.replace('posting');
</script> 
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td><input type="file" name="gambar" id="lik"></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="tambah" value="Simpan" id="lik"></td>
  </tr>
</table>
</div>
<!-- <textarea class="ckeditor" id="ckeditor"></textarea> -->
</form>
</body>
</html>