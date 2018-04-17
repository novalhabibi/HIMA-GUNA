<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima");
$u = $_POST['username'];
$p = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * from anggota where email = '$u' and id_anggota = '$p'");
$cek = mysqli_num_rows($query);
if($cek >= 1){
	session_start();
	$_SESSION['admin'] = $u;

	//$departemen=mysqli_query($koneksi,"SELECT * from anggota where email = '$u' and id_anggota = '$p'");
	$row=mysqli_fetch_array($query);
	$d=$row['departemen'];
	$nama=$row['nm_anggota'];
	 $_SESSION['departemen'] = $d;
	echo "<script>
        alert('Selamat datang di Web Administrator $nama departemen $d');
        document.location = '../index.php';</script>";
	// while ($row=mysqli_fetch_array($departemen)) 
	// {
	
	// $departemen=$row['departemen'];
	
	// }





  	echo "<script>document.location = '../index.php';</script>";
}else{
  echo "<script>
        alert('username atau password salah');
        document.location = '../login.php';</script>";
}
?>