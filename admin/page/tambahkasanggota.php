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
//$_SESSION['id_kas'] = $d; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * from anggota where id_anggota = '$id'");
    $ang = mysqli_fetch_array($query);
    }
    else  $id = "";

    if(isset($_POST['perbarui'])){
    $id_anggota = $ang['id_anggota'];

    if($id_anggota == "") {
      echo "<script>alert('Id Anggota ga boleh kosong !.');
      document.location = '?page=tambahkasanggota';</script>";
      }else{
      	
      if(isset($_GET['id_kas']))
      	{
      		$id_kas=$_GET['id_kas'];
      		$query = mysqli_query($koneksi,"SELECT * FROM detail_kas");
      		$data=mysqli_fetch_array($query);
      		$a=$data['id_kas'];
      		$b=$data['id_anggota'];
      		$c=$ang['id_anggota'];
      		$d=$id_kas; 

          $cek=mysqli_query($koneksi,"SELECT *from detail_kas where id_anggota='$c' and id_kas='$d'");
          $hasil = mysqli_num_rows($cek);
      		if (!$hasil == 0) 
      		{
      			echo "<script>alert('Data Sudah ada');
            document.location = '?page=tampilkas';</script>";
      		}else
      		{
        	$tambah = mysqli_query($koneksi,"INSERT INTO detail_kas() values('$id_kas', '$id_anggota')") or die(mysqli_error());
        	}
    	}
        if($tambah){
		echo "<script type='text/javascript'> 
			 	alert('Data berhasil ditambahkan');
		 		history.go(-2);
		 	  </script>";//notifikasi
          }else{
            echo "<script>alert('gagal mas bro !');
            document.location = '?page=tambahkasanggota';</script>";
          }
      }
  }
?>
<br>
<br>
<br>
<br>
<br>
<br>


<span class="page-title">Tambah Kas Anggota</span>	
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1" align="center">
		<?php
                            //untuk membatasi hak akses DATA KAS
                           //   if ($_SESSION['id_kas']) 
                           //   //$a=($_SESSION['$d']);
                           //   // echo "ii";}
                           // //if (isset($_SESSION['$d'])!="INFOKOM") 
                           //      {
                           //     $bisa=$id_kas;
                           //      }
                           //  else
                           //      {
                           //      $bisa="tidak BISA";
                           //      }

                            ?>
		<!-- <tr>
			<td>ID Periode</td>
			<td>:</td>
			<td><?php echo $d; ?></td>
		</tr> -->
		<tr>
			<td>Id Anggota</td>
			<td>:</td>
			<td><?php echo $ang['id_anggota']; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $ang['nm_anggota']; ?></td>
		</tr>
		<tr>
			<td>Masukan Depateremn</td>
			<td>:</td>
			<td><?php echo $ang['departemen']; ?></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="perbarui" value="Tambahkan"><!-- <a href="?page=bayarkas&aksi=tambah&id_kas=<?php// echo "$ang[id_anggota]";?> &aksi&id_kas=<?php //echo $id_kas; ?>" id="lik">Tambah</a> --></td>
		</tr>
	</table>
	
</form>

</body>
</html>