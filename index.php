<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="shortcut icon" href="img/BPH Himaguna 20171030_120532.png" />
		
<title>Himpunan Mahasiswa Gunuungkencana</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<script src="js/video/CodoPlayer.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css"> 
        <link rel="stylesheet" href="css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">




<!-- dari web sebelal1 -->
<script type="text/javascript" src="js/jquery-1.4.js"></script>
<script src="js/headline.js" type="text/javascript"></script>

  <script type="text/javascript"> 
      $(document).ready(function(){
	  		bukaContent($('#slideAwal'),'div1');		
	    });
	</script>
	 <script type="text/javascript"> 
      $(document).ready(function(){
	  		bukaContent($('#slideAwal5'),'div5');		
	    });
	</script>
	 <script type="text/javascript"> 
      $(document).ready(function(){
	  		bukaContent2($('#slideAwal9'),'div9');		
	    });
	</script>
<!-- dri web sebelah -->
<!-- <script type="text/javascript" src="js/jquery-1.4 - Copy 1.js"></script>
<script src="js/headline2.js" type="text/javascript"></script>
  <script type="text/javascript"> 
      $(document).ready(function(){
	  		bukaContent($('#slideAwal2'),'div12');			
	    });
	</script> -->
<!-- dari web sebelal1 -->
<!-- dri web sebelah -->

<style type="text/css">
<!--
.style1 {color: #00000E}
.style2 {color: #0000FF}
-->
</style>
</head>	 
<body>
<?php
 $koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
?>
<section id="header" class="appear"></section>
	<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="fa fa-bars color-white"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;"><img src="img/BPH Himaguna 20171030_120532.png" />HIMA
							</a></h1>
			</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="index.php">Home</a></li>
						<li class="active"><a href="page/artikel.php">Artikel</a></li>
						<li class="active"><a href="page/event.php">Event</a></li>
						<li class="active"><a href="page/anggota.php">Anggota</a></li>
						<li><a href="#section-contact">Kontak</a></li> 
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>

<!-- INI HEADER -->
<section class="featured">
	<div class="container"> 
		<div class="row mar-bot40">
			<div class="col-md-6 col-md-offset-3">		
				<div class="align-center">
					<h2 class="slogan">Selamat Datang di Web Himpunan Mahasiswa Mahasiswi Gunungkencana</h2>
				</div>
			</div>
		</div>
	</div>
</section>
	
		
<!-- section works -->
<section id="section-mulai-belajar" class="section appear clearfix">
	<div class="container">	
		<div class="row mar-bot40">
			<div class="col-md-offset-3 col-md-6">
				<div class="section-header">
					<h2 class="section-heading animated" data-animation="bounceInUp">Tentang Kami</h2>
				</div>
			</div>
		</div>
				
						
					<?php
				//include "page/headartikel.php";
					//echo "<br>";

					//include "page/headevent.php";



					?>
		<!-- <div class="row">
                          
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3"> -->

                                <article class="col-md-4 isotopeItem webdesign" align='center'>

									<div class="portfolio-item" align='center'>
										

										<?php
									//include "page/headartikel.php" ; 
										// echo "<br>";
										// include "page/headevent.php";
								//  $koneksi=mysqli_connect("localhost","root","");
								// mysqli_select_db($koneksi,"hima"); 
								?>
								   <!--  <div id="divTrigger">
								      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
								      <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
								      <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
								      <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
								    </div>
 -->
	<!-- 							<div id="divContent"> -->
								    <?php
								    // $sql = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 4");
								   
								    // $no=1;
								    // while($r=mysqli_fetch_array($sql)){
								    //   echo "<div id='div$no'>
								    //           <span class='title'>$r[judul]</span><br>
								    //           <img src='gambar/artikel/$r[gambar]' align='left' width='350' height='250'$r[id_artikel]>
								    //         </div>";
								    //   $no++;    
								    // }     
								    ?>
								   <!-- </div> -->
										<!-- //include "page/tabs.php";
										//include "page/headevent.php";
										?> -->
									
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="page/artikel.php"  name="section-bab0">Artikel</a></h5>
												<a href="page/artikel.php"  name="section-bab0"><i class="fa fa-plus fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
                                <article class="col-md-4 isotopeItem webdesign" align='center'>
									<div class="portfolio-item" align='center'>
										<?php
										include "page/headevent.php" ; 
								?>
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="page/event.php"  name="section-bab0">Event</a></h5>
												<a href="page/event.php"  name="section-bab0"><i class="fa fa-plus fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
                                <article class="col-md-4 isotopeItem webdesign" align='center'>
									<div class="portfolio-item" align='center'>
										<?php
									//	include "page/headanggota.php" ; 
								?>
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="page/anggota.php"  name="section-bab0">Anggota</a></h5>
												<a href="page/anggota.php"  name="section-bab0"><i class="fa fa-plus fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

            

	</div>
</section>
		<!-- section works -->
<!-- contact -->
		<section id="section-contact" class="section appear clearfix greyodd">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Kontak Kami</h2>
							<p>Silahkan Kontak Kami via <br /><strong>Alamat :</strong> Gunungkencana<br />
Lebak - Banten <br /><strong>No. HP :</strong> 085771966503 (Noval Habibi)<br /><strong>Email :</strong> <strong><a href="mailto:ask@ilmuwebsite.com">noval7sihaibi@gmail.com</a></strong></p>
						</div>
					</div>
				</div>
				
				
			</div>
		</section>
	
		
	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="http://www.ilmuwebsite.com/feed" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="http://www.facebook.com/ilmuwebsite" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/ilmuwebsite" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>				
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12"><p>Web Template Powered by Ilmuwebsite. <a href="http://ilmuwebsite.com">www.ilmuwebsite.com</a></p></div>
			</div>
		</div>

	</section>

	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/skrollr.min.js"></script>		
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/validate.js"></script>
    <script src="js/main.js"></script>
        
	</body>
</html>
