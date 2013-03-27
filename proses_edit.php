<?php
require "config.php";

//data
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$birth=$tanggal.'-'.$bulan.'-'.$tahun;

//proses database
$upload_database=mysql_query("update member set username='$username',name='$name',email='$email',birth='$birth' where username='$username'");
if ($upload_database){echo "<script> alert('Berhasil Edit'); document.location.href='index.php?menu=home'; </script>";} else { echo "<script> alert('Gagal Edit'); document.location.href='index.php?menu=home'; </script>";}
?>
