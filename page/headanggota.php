<script type="text/javascript" src="../js/jquery-1.4.js"></script>

<script src="../js/headline2.js" type="text/javascript"></script>

      <?php
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
?>
    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent2(this,'div9')" id="slideAwal9">9</a>
      <a href="javascript:;" onClick="bukaContent2(this,'div10')">10</a>
      <a href="javascript:;" onClick="bukaContent2(this,'div11')">11</a>
      <a href="javascript:;" onClick="bukaContent2(this,'div12')">12</a>
    

<div id="divContent">
    <?php
    $sql = mysqli_query($koneksi,"SELECT * FROM anggota ORDER BY id_anggota DESC LIMIT 4");
    $no=9;
    while($r=mysqli_fetch_array($sql)){
      echo "<div id='div$no'>
              <span class='title'>$r[nm_anggota]</span><br>
              <img src='gambar/foto/$r[foto]' align='center' width='350' height='250'$r[id_anggota]>
            </div>";
      $no++;    
    }     
    ?>
    
   </div>
</div>
 