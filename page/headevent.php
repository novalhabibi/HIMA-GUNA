 
      <?php
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
?>
    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
      <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
      <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
    

<div id="divContent">
    <?php
    $sql = mysqli_query($koneksi,"SELECT * FROM event ORDER BY id_event DESC LIMIT 4");
    $no=1;
    while($r=mysqli_fetch_array($sql)){
      echo "<div id='div$no'>
              <span class='title'>$r[nm_event]</span><br>
              <img src='gambar/event/$r[foto]' align='center' width='350' height='250'$r[id_event]>
            </div>";
      $no++;    
    }     
    ?>
    
   </div>
</div>
 