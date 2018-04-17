<!DOCTYPE html>
<html>
<head> 
	<link rel="shortcut icon" href="../img/BPH Himaguna 20171030_120532.png" />
	<title>Artikel</title>
<link rel="stylesheet" type="text/css" href="../css/style.csss">
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<meta charset="utf-8" name="viewport" content="width=-device-width, initial-scale1.0">
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
<!--	<link rel="stylesheet" type="text/css" href="../css/blogpoststyle.css"> -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
 <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>VT Kursus Website Development Komplit - Bangun 5 Project Website</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<script src="js/video/CodoPlayer.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.css"> 
        <link rel="stylesheet" href="../css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="../skin/default.css">
</head>
<body>
<!-- dari web sebelah -->

<!-- dari web sebelah -->
<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="../page/artikel.php" data-0="line-height:90px;" data-300="line-height:50px;">Artikel
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="../index.php">Home</a></li>
						<li class="active"><a href="../artikel.php">Artikel</a></li>
						<li class="active"><a href="event.php">Event</a></li>
						<li class="active"><a href="anggota.php">Anggota</a></li>
						
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>
<?php 
$koneksi=mysqli_connect("localhost","root","");
$databese=mysqli_select_db($koneksi,"hima");
	if(isset($_GET['aksi']) and isset($_GET['id'])){
		if($_GET['aksi']=="hapus"){
			$queryHapus = mysqli_query($koneksi,"DELETE from artikel where id_artikel = $_GET[id]");
			if($queryHapus){
				echo "<script>window.alert('Data berhasil di hapus');
					  document.location = 'tampilartikel.php';</script>";
			}
		}
	}else{
?>

<!--<div>
	<h2>Artikel</h2>
</div> -->
<div>
<br><br><br><br>

<table border="1" cellspacing="0" width="90%" align="center">

<tr>
	<td colspan="3" align="center"><h2><marquee>Artikel</marquee></h2></td>
</tr>
<?php 
isset($_GET['id_artikel']);
$id_artikel=$_GET['id_artikel'];
$query=mysqli_query($koneksi,"SELECT *FROM artikel where id_artikel='$id_artikel'")or die("gagal".mysqli_error($koneksi));
while ($row=mysqli_fetch_array($query)) 
{
$judul=$row['judul'];
$isi=$row['isi'];
$gambar=$row['gambar'];


 ?>
 <tr>
 	<td width="13%" rowspan="2"><img src="../gambar/artikel/<?php echo $gambar; ?>" width="200" height="200"></td>
 	<td width="87%" height="27"><b><?php echo $judul; ?></b></td>
 </tr>
 <tr>
 	<td align="justify"><?php echo $isi; ?></td>
 </tr>
 
 <tr>
 	<td colspan="3"><hr></td>
 </tr>
<!--<tr>
	
</tr>	-->
<?php } ?>
</table>
<a href="#header" class="scrollup" style="color: red;" ><i class="fa fa-chevron-up"></i></a>	




<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/jquery.nicescroll.min.js"></script>
	<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../js/skrollr.min.js"></script>		
	<script src="../js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="../js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../js/jquery.appear.js"></script>
	<script src="../js/validate.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
<?php } ?>