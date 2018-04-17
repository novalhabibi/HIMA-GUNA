<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.csss">
<link rel="stylesheet" type="text/css" href="../css/responsible.css">
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/bootstrap-theme.css"> 
<link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
<span class="page-title">Sudah Bayar</span>
<!-- <form  method="POST" enctype="multipart/form-data"> -->
<!-- <form  method="POST" action="?page=datakas2">	 -->
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
if(isset($_GET['id_kas'])){
 $id_kas = $_GET['id_kas'];
$query = mysqli_query($koneksi, "SELECT * from detail_kas where id_kas='$id_kas' ");
?>
<br><br><br>
 <table border='1'>
		<tr>
			<th>No. </th>
			<th>ID Kas</th>
			<th>ID Anggota</th>
			<th>Nama Anggota</th>
		</tr>
		<?php 
			 
			 $no = 0;
			 while($data = mysqli_fetch_array($query)){
			 	$no++;
			 	// $kas1=$kas['id_kas'];
			 	$id_anggota=$data['id_anggota'];
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data['id_kas'];?></td>
			<td><?php echo $data['id_anggota'];?></td>
			<?php 
			$qry = mysqli_query($koneksi, "SELECT nm_anggota from anggota where id_anggota='$id_anggota' ");
			while($data = mysqli_fetch_array($qry)){
			 	//$no++;
			 	// $kas1=$kas['id_kas'];
			 	$nm_anggota=$data['nm_anggota'];
			 }

			?>
			<td><?php echo $nm_anggota; ?></td>

		</tr>	
		<?php } ?>
		
	</table>
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