<!-- <html>
  <head>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" /> 
    <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script src="../js/video/CodoPlayer.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css"> 
        <link rel="stylesheet" href="../css/style.css"> -->
    <!-- skin
    <link rel="stylesheet" href="../skin/default.css">

    <link rel="stylesheet" type="text/css" href="head.css">
	  <script language="javascript" src="../js/jquery-1.4.js"></script>
	  <script language="javascript" src="../js/headline.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');			
	    });
	  </script>	

  </head>
    <body> -->
<?php
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
?>
    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
      <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
      <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
    </div>

<div id="divContent">
    <?php
    $sql = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 4");
    $no=1;
    while($r=mysqli_fetch_array($sql)){
      echo "<div id='div$no'>
              <span class='title'>$r[judul]</span><br>
              <img src='gambar/artikel/$r[gambar]' align='left' width='350' height='250'$r[id_artikel]>

            </div>";
      $no++;    
    }    
    ?>
   </div>




   <!-- <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>  

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
 -->