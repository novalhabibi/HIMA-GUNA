<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../img/BPH Himaguna 20171030_120532.png" />
	<title>Anggota</title>
	<link rel="stylesheet" type="text/css" href="../css/responsible.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
<!--	<link rel="stylesheet" type="text/css" href="../css/blogpoststyle.css"> -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
 <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
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
<?php 
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
$tampil="SELECT *FROM anggota order by id_anggota desc";
$query=mysqli_query($koneksi,$tampil)or die ("gagal".mysqli_error($koneksi));

if (isset($_GET['aksi']) and isset($_GET['id'])) {
	if ($_GET['aksi']=="hapus") {
		$queryhapus=mysqli_query($koneksi,"DELETE from anggota where id_anggota = $_GET[id]");
		if ($query) {
		echo "<script>window.alert('Data berhasil dihapus');	
		document.location='tampilanggota.php';</script>";
		}
	}
}else{

?>
<body >


<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="anggota.php" data-0="line-height:90px;" data-300="line-height:50px;">Anggota
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="../index.php">Home</a></li>
						<li class="active"><a href="artikel.php">Artikel</a></li>
						<li class="active"><a href="event.php">Event</a></li>
					<!--	<li><a href="#section-mulai-belajar">Mulai Belajar</a>
							<ul>
								<li><a href="#section-bab1" id="link-section-bab1">Bab 1</a></li>
								<li><a href="#section-bab2" id="link-section-bab2">Bab 2</a></li>
								<li><a href="#section-bab3" id="link-section-bab3">Bab 3</a></li>
								<li><a href="#section-bab4" id="link-section-bab4">Bab 4</a></li>
								<li><a href="#section-bab5" id="link-section-bab5">Bab 5</a></li>
								<li><a href="#section-bab6" id="link-section-bab6">Bab 6</a></li>
								<li><a href="#section-bab7" id="link-section-bab7">Bab 7</a></li>
							</ul>
						</li> -->
						<li class="active"><a href="anggota.php">Anggota</a></li>
						
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>









<!--

<h1>Data Anggota</h1>
-->
<br><br><br><br>
<table border="1" align="center">
	<?php 
	while ($row=mysqli_fetch_array($query)) 
	{
	$id_anggota=$row['id_anggota'];
    $nm_anggota= $row['nm_anggota'];
    $asal_kampus = $row['asal_kampus'];
    $alamat=$row['alamat'];
    $email = $row['email'];
    $nohp=$row['nohp'];
    $departemen=$row['departemen'];
    $jabatan=$row['jabatan'];
    $foto=$row['foto'];
    ?>
	<tr>
		<td width="120" rowspan="9"><a href="../gambar/foto/<?php echo $foto; ?>"> <img src="../gambar/foto/<?php echo $foto; ?>" width="200" height="200"></a></td>
	</tr>
	<tr>
		<td width="82">Id Anggota</td>
		<td width="3">:</td>
		<td width="231"><?php echo $id_anggota; ?></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><?php echo $nm_anggota; ?></td>
	</tr>
	<tr>
		<td>Asal Kampus</td>
		<td>:</td>
		<td><?php echo $asal_kampus; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $email; ?></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>:</td>
		<td><?php echo $nohp; ?></td>
	</tr>
	<tr>
		<td>Departemen</td>
		<td>:</td>
		<td><?php echo $departemen; ?></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><?php echo $jabatan; ?></td>
	</tr>
	<tr>
	<td colspan="4"><hr></td>
	</tr>
	
	<?php }?>
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