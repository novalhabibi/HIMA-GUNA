<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KAS</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
   $koneksi=mysqli_connect("localhost","root","");
  mysqli_select_db($koneksi,"hima"); 
  if(isset($_GET['aksi']) and isset($_GET['id_kas'])){
    if($_GET['aksi']=="delete"){
      $queryHapus = mysqli_query($koneksi,"DELETE from periode_kas where id_kas = $_GET[id_kas]");
      if($queryHapus){
        echo "<script>window.alert('Data berhasil di hapus');
            document.location = '?page=tampilkas';</script>";
      }
    }
  }else{
?>

<span class="page-title">Data Kas</span>

<br>
<br>
<br>
<br>


<table width="509" border="1" align="center">
  <tr>
    <td>No.</td>
    <td width="">Tanggal Buka Kass</td>
    <td width="">Tanggal Tutup Kass</td>
    <td colspan="2">Aksi</td>
  </tr>
  <?php 
  $query = mysqli_query($koneksi,"SELECT * from periode_kas");
  $no = 0;
  while($data = mysqli_fetch_array($query)){
    $no++;
    //$kas=$data['id_kas'];
    $id_kas=$data['id_kas'];
    $_SESSION['id_kas'] = $id_kas;
    
 ?>
  <tr> 

    <td><?php echo $no; ?></td>
    <td><?php echo $data['tgl_buka'];?></td>
    <td><?php echo $data['tgl_tutup'];?></td>
    <td><A href="?page=bayarkas&id_kas=<?php echo $data['id_kas'];?>" id="lik">Lihat</a> ||
    <A href="?page=kategori&aksi=delete&id=<?php echo $data['id_kategori'];?>" id="lik">Delete</a></td>
  </tr> 
<?php } ?>
</table>
<a href="?page=tambahperiodekas">Tambah</a>
</body>
</html>
<?php }?>