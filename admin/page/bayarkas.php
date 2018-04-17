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

if(isset($_GET['id_kas'])){
    $id_kas = $_GET['id_kas'];
    $query = mysqli_query($koneksi,"SELECT * from periode_kas where id_kas = '$id_kas'");
    $kas = mysqli_fetch_array($query);
    $id_kas=$kas['id_kas'];
    $_SESSION['id_kas'] = $id_kas;
    }
    else  $id_kas = "";

//   if(isset($_POST['update'])){
//     $nama = $_POST['nama'];

//     if($nama == "") {
//       echo "<script>alert('Nama ga boleh kosong !.');
//       document.location = '?page=input_kategori';</script>";
//       }else{
//         $update = mysql_query("UPDATE kategori SET nama_kategori = '$nama' where id_kategori = '$id'") or die(mysql_error());
//         if($update){
//             echo "<script>alert('Data berhasil di update !');
//             document.location = '?page=kategori';</script>";
//           }else{
//             echo "<script>alert('gagal mas bro !');
//             document.location = '?page=kategori';</script>";
//           }
//       }
//   }
?>
<body>
<br>
<br>
<br>
<br>
<?php
// $query=mysqli_query($koneksi,"SELECT *from ")

?>
	<table border='1'>
		<tr>

			<td>Masukan Tanggal Buka :</td>
			<td><?php echo $kas['tgl_buka']; ?></td>
			<td>Masukan Tanggal Tutup :</td>
			<td><?php echo $kas['tgl_tutup']; ?></td>
		
		</tr>
		<tr>
			<th>No. </th>
			<th>Nama</th>
			<th>Departemen</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			$query = mysqli_query($koneksi, "SELECT * from anggota ");
			$no = 0;
			while($data = mysqli_fetch_array($query)){
				$no++;
				$kas1=$kas['id_kas'];
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data['nm_anggota'];?></td>
			<td><?php echo $data['departemen'];?></td>
			<td><A href="?page=tambahkasanggota&id=<?php echo $data['id_anggota'];?>&id_kas=<?php echo $kas1 ?>  " id="lik">Tambah</a></td>
			<td><A href="?page=produk&aksi=delete&id=<?php echo $data['id_anggota'];?>" id="lik">Delete</a></td>
		</tr>	
		<?php } ?>
		<tr>
			<td><a href="?page=datakas2&id_kas=<?php echo $kas1?>">[Lihat sudah bayar]</a></td>
		</tr>
	</table>
</table>
</body>
</html>