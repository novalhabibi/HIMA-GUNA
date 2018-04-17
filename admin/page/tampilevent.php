<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
  <link rel="stylesheet" type="text/css" href="../css/responsible.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
  <!--  <link rel="stylesheet" type="text/css" href="../css/blogpoststyle.css"> -->
 <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
   <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          
          <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />  
      <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
      <script src="js/video/CodoPlayer.js" type="text/javascript"></script> 
      <link rel="stylesheet" href="../css/bootstrap.css"> -->
      <link rel="stylesheet" href="../css/bootstrap-theme.css"> 
          <link rel="stylesheet" href="../css/style.css">
      <!-- skin -->
      <link rel="stylesheet" href="../skin/default.css">
</head>
<?php 
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
$tampil="SELECT *FROM event order by id_event desc";
$query=mysqli_query($koneksi,$tampil)or die ("gagal".mysqli_error($koneksi));

if (isset($_GET['aksi']) and isset($_GET['id'])) {
	if ($_GET['aksi']=="hapus") {
		$queryhapus=mysqli_query($koneksi,"DELETE from event where id_event = $_GET[id]");
		if ($query) {
		echo "<script>window.alert('Data berhasil dihapus');	
		document.location='?page=tampilevent';</script>";
		}
	}
}else{

?>
<body>
 <span class="page-title">Data EVENT</span> 
 <!-- <h2>EVENT</h2> -->
<table width="413" height="254" border="1" bordercolor="#CC0033" align="center">
	<?php 
	while ($row=mysqli_fetch_array($query)) 
	{
	$nm_event=$row['nm_event'];
    $deskripsi= $row['deskripsi'];
    $foto = $row['foto'];
    ?>
  <tr>
    <td height="139" colspan="4" align="center"><a href="../gambar/event/<?php echo $foto; ?>"><img src="../gambar/event/<?php echo $foto; ?>" width="400" height="200"></a></td>
  </tr>
  <tr>
    <td width="114" height="44">Nama Event </td>
    <td colspan="3"><b><?php echo $nm_event; ?></b></td>
  </tr>
  <tr>
    <td height="36">Deskripsi</td>
    <td colspan="3"><?php echo $deskripsi; ?></td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="center"><a href="?page=editevent&id=<?php echo $row['id_event']; ?>" id="lik">Edit</a></td>
    <td width="27">&nbsp;</td>
    <td width="194" align="center"><a href="?page=tampilevent&aksi=hapus&id=<?php echo $row['id_event']; ?>" id="lik" onClick="return confirm('Anda yakin mau hapus item ini ?');">Hapus</a></td>
  </tr>
  <?php } ?>
</table><br>

<table align="right" border="1" ><a href="?page=tambahevent"><font size="5"> Tambah</font></a></table> 
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
