<?php
require "config.php";

//data
$password=md5($_POST['password']);
$username=$_POST['username'];


//proses database
$upload_database=mysql_query("update password set password='$password' where username='$username' ");
if ($upload_database){echo "<script> alert('Berhasil Ganti Password !'); document.location.href='index.php?menu=home'; </script>";} else { echo "<script> alert('Gagal Ganti Password !'); document.location.href='index.php?menu=home'; </script>";}
?>
