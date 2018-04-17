<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
?>

<form method="get" action="" >
Masukan Tanggal : <select name="peride">
	<?php
	$qry=mysqli_query($koneksi,"SELECT *From periode_kas order by tgl_buka ASC");
			//if (mysqli_num_rows($qry)!=0) {
				while ($data=mysqli_fetch_array($qry)) {
					$tgl=$data['tgl_buka'];
					echo "<option>".$tgl."</option>";
					
				}
			//}
			?>

	
</select><input type="submit" name="lihat" value="Lihat">
</form>
</body>
</html>