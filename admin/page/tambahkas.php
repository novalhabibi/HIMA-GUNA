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
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * from periode_kas where id_kas = '$id'");
    $kas = mysqli_fetch_array($query);
    }
    else  $id = "";
?>

<body>
<span class="page-title">Tambah Kas</span>	
<br>
<br>
<br>
<form accept="" method="POST" enctype="multipart/form-data">
	<table width="572" border="1">
	  <tr>
	  	<?php 
	  	$query = mysqli_query($koneksi,"SELECT * from periode_kas where id_kas = '$id'");
    	//$kas = mysqli_fetch_array($query);

	  	?>
	    <td width="275" height="23">Tanggal Buka Kas : <?php echo $kas['tgl_buka']; ?></td>
	    <td width="281" align="right">Tanggal Tutup Kas : <?php echo $kas['tgl_tutup']; ?></td>
	  </tr>
	</table>
</form>
</body>
</html>