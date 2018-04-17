<!DOCTYPE html>
<html>
<head> 
	<title>Artikel</title>
<link rel="stylesheet" type="text/css" href="../css/style.csss">
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/bootstrap-theme.css"> 
<link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
<span class="page-title">Data Artikel</span>
<!--
<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="tampilanggota.php" data-0="line-height:90px;" data-300="line-height:50px;">Anggota
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="../index.html">Home</a></li>
						<li><a href="#section-mulai-belajar">Mulai Belajar</a>
							<ul>
								<li><a href="#section-bab1" id="link-section-bab1">Bab 1</a></li>
								<li><a href="#section-bab2" id="link-section-bab2">Bab 2</a></li>
								<li><a href="#section-bab3" id="link-section-bab3">Bab 3</a></li>
								<li><a href="#section-bab4" id="link-section-bab4">Bab 4</a></li>
								<li><a href="#section-bab5" id="link-section-bab5">Bab 5</a></li>
								<li><a href="#section-bab6" id="link-section-bab6">Bab 6</a></li>
								<li><a href="#section-bab7" id="link-section-bab7">Bab 7</a></li>
							</ul>
						</li>
						<li><a href="#section-contact">Kontak</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
<!--			</div>
		</div> -->
<?php 
$koneksi=mysqli_connect("localhost","root","");
$databese=mysqli_select_db($koneksi,"hima");
	if(isset($_GET['aksi']) and isset($_GET['id'])){
		if($_GET['aksi']=="hapus"){
			$queryHapus = mysqli_query($koneksi,"DELETE from artikel where id_artikel = $_GET[id]");
			if($queryHapus){
				echo "<script>window.alert('Data berhasil di hapus');
					  document.location = '?page=tampilartikel';</script>";
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
	<td colspan="3" align="center"><h2><marquee>Isi Artikel</marquee></h2><table align="right"><tr><th><a href="?page=tambahartikel">Tambah</a> </th></tr></table></td>
</tr>
<?php 
$query=mysqli_query($koneksi,"SELECT *FROM artikel order by id_artikel desc")or die("gagal".mysqli_error($koneksi));
while ($row=mysqli_fetch_array($query)) 
{
$judul=$row['judul'];
$isi=$row['isi'];
$gambar=$row['gambar'];
//	$query = mysqli_query($koneksi,"SELECT * from artikel");
//	$no = 0;
//	while($data = mysqli_fetch_array($query)){
//		$no++;

 ?>
 <tr>
 	<td width="13%" rowspan="2"><img src="../gambar/artikel/<?php echo $gambar; ?>" width="200" height="200"></td>
 	<td width="87%" height="27"><b><?php echo $judul; ?></b></td>
 </tr>
 <tr>
 	<td align="justify"><?php echo $isi; ?></td>
 </tr>
 <tr>
 	<td rowspan="2" align="center"><a href="?page=editartikel&id=<?php echo $row['id_artikel'];?>" id="lik">Edit</a>||<a href="?page=tampilartikel&aksi=hapus&id=<?php echo $row['id_artikel'];?>" id="lik" onClick="return confirm('Anda Yakin Ingin Menghapus Item ini ?'); ">Hapus</a></td>
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