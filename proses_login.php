<?php
mysql_connect("localhost","root","");
mysql_select_db("web_arif");
$username=$_POST['username'];
$password=md5($_POST['password']);

$cekuser=mysql_query("select * from password where username='$username' and password='$password'");
$data=mysql_fetch_array($cekuser);
$jumlah=mysql_num_rows($cekuser);
if ($jumlah=="") {echo "<script>alert('maaf username atau pasword salah');document.location.href='index.php?menu=home';</script>";}
else {
@session_start();
echo "<script>alert('Selamat datang $username');document.location.href='index.php?menu=home';</script>";
$status = $data['status'];
$_SESSION['username']=$username;
$_SESSION['status']=$status;
}
?>
