<?php
session_start();
if (isset($_SESSION['admin'])) 
	{
	echo "<script>document.location='index.php';</script>";
	}
else
	{
	?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../img/BPH Himaguna 20171030_120532.png" />
	<title>Login || Admin</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
<style type="text/css">
	
#tabel-masuk
{
	background:#0CC7EF;

}


</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="../admin/page/login.php" method="POST">

<table align="center"  id="tabel-masuk" border="0" valign="Top">
	<tr>
      <td height="29" colspan="2" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><p style="text-align: center; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">Masuk Ruang Administrator HIMA Guna</p></td>
      <td width="116" rowspan="4"><img src="../img/login.png" width="112" height="79" alt=""/></td>
    </tr>
    <tr style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
      <td width="120">E-mail Anggota</td>
      <td width="173"><input type="text" name="username" size="25"></td>
    </tr>
    <tr style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
      <td height="25">NIM Anggota</td>
      <td><input type="password" name="password" size="25"></td>
    </tr>
    <tr>
    	<!--<td colspan="3" align="center"><img src="../gambar/log2.png" width="200" height="30"></td> -->
    	<td><input type="submit" value="LOGIN" name="login"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php } ?>