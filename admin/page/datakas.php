<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="../css/responsible.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 


?>
<body>
<br>
<br>
<br>
<br>
<!-- ini khusus PHP -->
<?php
if(isset($_GET['tgl'])){
    $id = $_GET['tgl'];
    $query = mysqli_query($koneksi,"SELECT * from periode_kas where tgl_buka = '$tgl'");
    $tgl = mysqli_fetch_array($query);
    }
    else  $id = "";

?>
<!-- Ini Khusus tampilan -->
<span class="page-title">Data Kas</span>
<!-- <form  method="POST" enctype="multipart/form-data"> -->
<!-- <form  method="POST" action="?page=datakas2">	 -->
<table>
	<tr>
		<td>Tanggal Buka Periode</td>
		<td>:</td>
		<td><select name="periode">
			<option>--Pilih Periode Kas</option>
			<?php
			$qry=mysqli_query($koneksi,"SELECT *From periode_kas order by tgl_buka ASC");
			if (mysqli_num_rows($qry)!=0) {
				while ($data=mysqli_fetch_array($qry)) {
					echo "<option>".$data['tgl_buka']."</option>";
					$tgl=$data['tgl_buka'];
				}
			}
			?>
		</select>
			
		</td>
		<td><!-- <a href="?page=datakas2&tgl=$tgl" id="lik""><button type="submit">Tampil</button></a> -->
		<a href="?page=bayarkas&tgl=<?php echo $tgl;?>" id="lik">fs</a>	

		</td>
	</tr>
	<!-- <tr>
		<td><?php echo $nama; ?></td>
		<td><?php echo $departemen; ?></td>
	</tr> -->
</table>
<!-- </form>	 -->
<?php

?>
</body>
</html>
