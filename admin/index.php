 <?php
//session_start();
//if (empty($_SESSION['admin'])) 
//	{
//	echo "<script>window.alert('Anda Belum Masuk');
//		 document.location='login.php';</script>";
//	}
//else 
//	{
//	?>
<!--	<!DOCTYPE html>
	<html>
	<head>
/		<title>Login || Administrator</title>
		<style type="text/css">
		
			td{
				background-color: #4864F5;

			  }
		
		</style>
	</head>
	<body bgcolor="#0E48CD">
		<table width="100%" border="2">
			<tr align="center" valign="top">
				<td></td>
			</tr>
		</table>
	
	</body>
	</html>



-->
<?php
	//error_reporting(0);
	session_start();
	ob_start();
	define('BASEPATH', true);
	if(!isset($_SESSION['admin']) || $_SESSION['admin']!=true){
		header("Location: login.php");
		exit();
	}
	
	$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"hima"); 
	//include_once("../include/function.php");
	//include_once("../PHPMailer/class.phpmailer.php");
	//include_once("../include/sendmail.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../img/BPH Himaguna 20171030_120532.png" />
<title>HIMA Gunuungkencana | Administrator</title>

<?php if($_POST): ?>

<?php else: ?>

<link type="text/css" rel="stylesheet" href="asset/css/style.css" />
<link type="text/css" rel="stylesheet" href="asset/css/jquery.fancybox.css" />
<link type="text/css" rel="stylesheet" href="asset/css/jquery-ui.css" />
<script type="text/javascript" src="asset/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="asset/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.price_format1.8-min.js"></script>
<script type="text/javascript" src="asset/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="asset/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="asset/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="../asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="../asset/tinymce/plugins/moxiemanager/js/moxman.loader.min.js"></script>
<script>var OEmpty = 'empty.php';</script>
<script type="text/javascript" src="asset/js/validator.js"></script>
<script type="text/javascript">
jQuery(function($){
	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true
	});
	
	$('body').niceScroll({
		autohidemode		: true,
		cursoropacitymax	: 0.8,
		cursorborderradius	: "6px",
		cursorwidth			: "8px", 
		cursorcolor			: "#333333",
		cursorborder		: "none",
		cursorminheight		: 80,
		railpadding			: {left:0, right:1},
		railalign			: "center",
		enablekeyboard		: true
	});
	
	var hNav = $('.mainnav').height();
	var hCon = $('.contentwrap').height();
	if(hNav > hCon) $('.contentwrap').height(hNav);
	if(hNav < hCon) $('.mainnav').height(hCon); 
	setTimeout("jQuery('div.message > div').fadeOut('fast');",3000);
});
</script>
<?php endif; ?>
</head>
<body id="bd">
<div class="wrapper clr">
    <div class="header clr">
    	<h1 class="logo">
        	<a href="index.php">
            	<span>HIMA GUNA</span>
            </a>
		</h1>
            
        <a href="../admin/logout.php" class="logout animate">
        	<span>Logout</span>
        </a>
        <div class="clr"></div>
	</div>
    
    <div class="message clr">
    <?php
		//echo $_SESSION['msg'];
		//unset($_SESSION['msg']);
	?>
    </div>
	
    <div class="container clr">
        <div class="mainnav">
        	<div class="titlenav">Main Menu</div>
                <ul class="navigation">
                    <li><a href="?page=home"><span>Beranda</span></a></li>
                    <li><a href="javascript:void(0);"><span>Data Master</span></a>
                        <ul>
                        	<li><a href="?page=tampilanggota"><span>Data Anggota</span></a></li>
                            <li><a href="?page=tampilartikel"><span>Data Artikel</span></a></li>
                            <li><a href="?page=tampilevent"><span>Data Event</span></a></li>
                            <!-- <li><a href="?page=datakas3"><span>Data Kas</span></a></li> -->
                            
                            <?php
                            //untuk membatasi hak akses DATA KAS
                             if ($_SESSION['departemen']=="INFOKOM") 
                             //$a=($_SESSION['$d']);
                             // echo "ii";}
                           //if (isset($_SESSION['$d'])!="INFOKOM") 
                                {
                                echo "<li><a href='?page=tampilkas'><span>Bayar Kas</span></a></li>";
                                }
                            else
                                {
                                echo "";    
                                }

                            ?>
                        </ul>
                    </li>
                    <!--
                    <li><a href="javascript:void(0);"><span>Data Operation</span></a>
                        <ul>
                            <li><a href="?p=member"><span>Data Member</span></a></li>
                            <li><a href="?p=category"><span>Product Category</span></a></li>
                            <li><a href="?p=product"><span>Data Product</span></a></li>
                            <li><a href="?p=order"><span>Data Order</span></a></li>
                            <li><a href="?p=confirm"><span>Konfirmasi Bayar</span></a></li>
                        </ul>
                    </li>
                    -->
                 <!--   <li><a href="javascript:void(0);"><span>Data Laporan</span></a>
                        <ul>
                            <li><a href="?p=reportorder"><span>Order Penjualan</span></a></li>
                            <li><a href="?p=reportdetail"><span>Penjualan Product</span></a></li>
                        </ul>
                    </li> -->
                </ul>
                
      </div><!--mainnav-->
        
        <div class="contentwrap">
        <?php

  if(isset($_GET['page'])){
    if(file_exists ("page/$_GET[page].php")) include "page/".$_GET['page'].".php"; else echo "<h2>error 404 !!</h2>page nya belom ada !!";


  }else{
    include "page/home.php";
  }
 
          //$pages = isset($_GET['p'])?$_GET['p']:'home';
            //$dirPages = "content/".$pages.".php";
            //if(file_exists($dirPages)){
              //  include_once($dirPages);
       	///	} else {
         	//      ?>
<!--              <span class="page-title">Error 404</span>
                <div class="inner">
                   <h1>Uuppss Error 404 Document Not Found</h1>
                </div> -->
                <?php
            	//}
        ?> 
        <div class="clr"></div>
        </div>
    <div class="clr"></div>
    </div>
</div>
</body>
</html>
