<?php
require"config.php";

$username=$_GET['username'];

$data=mysql_query("delete from member where username='$username'") or die(mysql_error());
$data1=mysql_query("delete from password where username='$username'") or die(mysql_error());
require"config.php";


if ($data && $data1) {
  	echo "<script> alert ('Successfull !!'); document.location.href='index.php?menu=home' ;</script>" ;
	}
	else {
		echo "<script> alert ('Failed , Sorry'); document.location.href='index.php?menu=home' ;</script>";
	}
?>
