<?php
require "config.php";

//data
$username=$_POST['username'];
$password=md5($_POST['pass']);

//proses ke database
$upload_database=mysql_query("update password set username='$username',password='$pass' where username='$user'");
if ($upload_database){echo "<script> alert('Berhasil Ganti Password'); document.location.href='index.php?menu=home'; </script>";} else { echo "<script>alert('Gagal Ganti'); document.location.href='index.php?menu=home'; </script>";}
?>
