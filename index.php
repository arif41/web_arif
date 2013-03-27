<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by NodeThirtyThree <http://www.nodethirtythree.com>
Published by Free CSS Templates <http://www.freecsstemplates.org/>
Released for free under a Creative Commons Attribution 2.5 License

Title      : stylized
Version    : 1.1
Released   : 20070716
Description: A two-column fixed width template for 1024x768 resolutions.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to CMS Shop</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robots" content="all" />
<link href="screen.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="logo">
	<h1><a href="?menu=home">CMS Shop !</a></h1>
	<h2>By <a href="http://ultwimate.com/Follow/ariff_41/">Arif Wiguna</a>
</h2>
</div>
<div id="menu">
	<ul>
            <?php 
	  		@session_start();
	  		if ((isset($_SESSION['username'])) and ($_SESSION['status']=='Admin'))  { ?>
			<li class="active"><a href="?menu=home" accesskey="3" title="">Homepage</a></li>
			<li><a href="?menu=logout" accesskey="3" title="">Log Out</a></li>
			<?php }	elseif ((isset($_SESSION['username'])) and ($_SESSION['status']=='Operator'))  { ?>
			<li class="active"><a href="?menu=home" accesskey="3" title="">Homepage</a></li>
			<li><a href="?menu=logout" accesskey="3" title="">Log Out</a></li>
			<?php }	elseif ((isset($_SESSION['username'])) and ($_SESSION['status']=='User'))  { ?>
			<li class="active"><a href="?menu=home" accesskey="3" title="">Homepage</a></li>
			<li><a href="?menu=logout" accesskey="3" title="">Log Out</a></li>
			<?php } else {?>
			<li class="active"><a href="?menu=home" accesskey="3" title="">Homepage</a></li>
			<li><a href="?menu=contact" accesskey="3" title="">Contact</a></li>
			<li><a href="?menu=login" accesskey="3" title="">Log In</a></li>
			<li><a href="?menu=daftar" accesskey="3" title="">Daftar</a></li>
			<?php } ?>
	</ul>
	<hr />
</div>
<div id="bg">
	<div id="page">
		<div id="content">
		<?php
   			 if ((@$_GET['menu']=='home') || (@$_GET['menu']=='')) {require "home.php";}
			elseif ($_GET['menu']=='contact') {require "contact.php";}
			elseif ($_GET['menu']=='delete') {require "delete.php";}
			elseif ($_GET['menu']=='login') {require "login.php";}
			elseif ($_GET['menu']=='profil') {require "profil.php";}
			elseif ($_GET['menu']=='daftar') {require "daftar.php";}
			elseif ($_GET['menu']=='edit') {require "edit.php";}
			elseif ($_GET['menu']=='edit_pass') {require "edit_pass.php";}
			elseif ($_GET['menu']=='logout') {require "logout.php";}
			elseif ($_GET['menu']=='profil_member') {require "profil_member.php";}
			elseif ($_GET['menu']=='tambah_operator') {require "tambah_operator.php";}
			elseif ($_GET['menu']=='tambah_barang') {require "tambah_barang.php";}
			elseif ($_GET['menu']=='input') {require "input.php";}
			elseif ($_GET['menu']=='chat') {require "chat.php";}
			elseif ($_GET['menu']=='edit_data') {require "edit_member.php";}
			elseif ($_GET['menu']=='beli_barang') {require "beli_barang.php";}
			elseif ($_GET['menu']=='video') {require "video.php";}
		?>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<div id="sponsors" class="box">
				<h2 class="title">Menu</h2>
				<div class="content">
					<ul>
						<?php 
	  					@session_start();
	  					if ((isset($_SESSION['username'])) and ($_SESSION['status']=='Admin'))  { ?>
						<li><a href="tampil_barang.php">Tampilkan Barang</a></li>
						<li><a href="?menu=tambah_operator">Tambah Operator</a></li>
						<li><a href="tampil_member.php">Tampilkan Member</a></li>
						<li><a href="?menu=edit_pass">Ganti Password</a></li>
						<li><a href="?menu=chat">Chat</a></li>
						<?php }	elseif ((isset($_SESSION['username'])) and ($_SESSION['status']=='Operator'))  { ?>
						<li><a href="?menu=tambah_barang">Tambahkan Barang</a></li>
						<li><a href="tampil_barang.php">Tampilkan Barang</a></li>
						<li><a href="?menu=edit_pass">Ganti Password</a></li>
						<li><a href="?menu=chat">Chat</a></li>
						<?php }	elseif ((isset($_SESSION['username'])) and ($_SESSION['status']=='User'))  {
						session_start();  ?>
						<li><a href="?menu=profil_member">Profil Member</a></li>
						<li><a href="beli_barang.php">Tampilkan Barang</a></li>
						<li><a href="?menu=edit_data">Edit Data</a></li>
						<li><a href="?menu=chat">Chat</a></li>
						<li><a href="?menu=edit_pass">Ganti Password</a></li>
						<?php } else {?>
						<li><a href="?menu=profil">Profil Admin</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<!-- end #sponsors -->
		</div>
		<!-- end #sidebar -->
		<div style="clear: both; height: 20px;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<!-- end #bg -->
<div id="footer">
	<hr />
	<p>	Copyright (c) 2013 Arif Wiguna. All rights reserved. Designed by <a href="http://arif41.github.com">Arif41</a>.</p>
</div>
</body>
</html>
