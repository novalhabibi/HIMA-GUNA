<!DOCTYPE html>
<html>
<head>
	<title>Edit Data ANggota</title>
	<link rel="stylesheet" type="text/css" href="../css/responsible.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php 
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * from anggota where id_anggota = '$id'");
    $ang = mysqli_fetch_array($query);
    }
    else  $id = "";

  if(isset($_POST['perbarui'])){
    $nm_anggota= $_POST['nm_anggota'];
    $asal_kampus = $_POST['asal_kampus'];
    $alamat=$_POST['alamat'];
    $email = $_POST['email'];
    $nohp=$_POST['nohp'];
    $departemen = $_POST['departemen'];
    $jabatan=$_POST['jabatan'];

    if($nm_anggota == "" or $asal_kampus == "" or $alamat=="" or $email=="" or $nohp == "" or $departemen=="" or $jabatan=="") {
      echo "<script>alert('Masih ada data yang kosong .');
      document.location = 'editartikel.php';</script>";
      }else{
      if (isset($_FILES["foto"]["tmp_name"]) and $_FILES["foto"]["name"] != "") {
          $foto = $_FILES["foto"]["name"];
          $foto = stripslashes($foto);
          $foto = str_replace("'","",$foto);
          $foto = str_replace(" ","-",$foto);
          move_uploaded_file($_FILES["foto"]["tmp_name"], "../gambar/foto/$foto");
          $update = mysqli_query($koneksi,"UPDATE anggota SET 
                                nm_anggota = '$nm_anggota', 
                                asal_kampus = '$asal_kampus', 
                                alamat       = '$alamat',
                                email		='$email',
                                nohp		='$nohp',
                                departemen='$departemen',
                                jabatan		='$jabatan',
                                foto	='$foto'
                               where id_anggota = '$id'") or die(mysqli_error($koneksi));
        }else {
          $update = mysqli_query($koneksi,"UPDATE anggota SET 
                                nm_anggota = '$nm_anggota', 
                                asal_kampus = '$asal_kampus', 
                                alamat       = '$alamat',
                                email		='$email',
                                nohp		='$nohp',
                                departemen='$departemen',
                                jabatan		='$jabatan',
                                foto      = '$_POST[fototxt]'
                                where id_anggota = '$id'") or die(mysqli_error($koneksi));
          }

        if($update){
            echo "<script>alert('Data berhasil di update !');
            document.location = 'tampilanggota.php';</script>";
          }else{
            echo "<script>alert('Gagal mas bro !');
            document.location = 'editanggota.php';</script>";
          }
      }
  }
?>


<body>
<h1 align="center">Edit Anggota</h1>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td>Id Anggota</td>
			<td>:</td>
			<td><?php echo $ang['id_anggota']; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nm_anggota" value="<?php echo $ang['nm_anggota']; ?>"></td>
		</tr>
		<tr>
			<td>Asal Kampus</td>
			<td>:</td>
			<td><input type="text" name="asal_kampus" value="<?php echo $ang['asal_kampus']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"><?php echo $ang['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" value="<?php echo $ang['email']; ?>"></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td><input type="text" name="nohp" value="<?php echo $ang['nohp']; ?>"></td>
		</tr>
		<tr>
			<td>Masukan Depateremn</td>
			<td>:</td>
			<td>
				<select name="departemen">
					<option value="">--Pilih--</option>
					<option value="ORKAD">ORKAD</option>
					<option value="SOSIAL">SOSIAL</option>
					<option value="PENDIDIKAN">PENDIDIKAN</option>
					<option value="INFOKOM">INFOKOM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>
				<input type="radio" name="jabatan" value="Anggota">Anggota<input type="radio" name="jabatan" value="Ketua">Ketua
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto" id="lik">
				<input type="hidden" name="fototxt" value="<?php echo "$ang[foto]"; ?>"><?php echo "$ang[foto]"; ?></td>
		</tr>
		<tr>
			<td><input type="submit" value="Perbarui" name="perbarui"></td>
		</tr>
	</table>
	
</form>

</body>
</html>