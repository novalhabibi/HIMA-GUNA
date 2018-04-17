<?php if(!defined('BASEPATH')) die('You are not allowed to access this page'); ?>
<span class="page-title">Dashboard</span>
<div class="inner">
<h2 align="center">Selamat Datang di Halaman Administrator HIMA Gunungkencana</h2>

	<ul class="iconnav">
        <li class="n1 animate"><a href="?page=tampilartikel"><span>Artikel</span></a></li>
        <li class="n7 animate"><a href="?page=tampilevent"><span>Event</span></a></li>
        <li class="n4 animate"><a href="?page=tampilanggota"><span>Anggota</span></a></li>
        
        <?php
                            //untuk membatasi hak akses DATA KAS
         if ($_SESSION['departemen']=="INFOKOM")
	        {
	        echo "<li class=\"n4 animate\"><a href=\"?page=tampilkas\"><span>Bayar Kas</span></a></li>";
	        }
	    else
	        {
	        echo "";    
	        }
        ?>
    </ul>
</div>
<div align="center">
<!-- <a href="#" target="blank">lllllllll</a> -->
<a href="../../../HIMA" target="blank" title="HIMA GUNA">Goto Web</a><a href="<?php base_url(); ?>/Hima">csdcs</a>
<!-- <?php //base_url(); ?>/Hima -->

</div>