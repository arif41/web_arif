<?php
require "config.php";

//data
$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$penjelasan=$_POST['penjelasan'];
$harga=$_POST['harga'];

//gambar
$dir="dirgambar/";
$nama_gambar=$_FILES['gambar_barang']['name'];
$upload_dir=$dir.$nama_gambar;
$tmp_gambar=$_FILES['gambar_barang']['tmp_name'];
$proses_upload=move_uploaded_file($tmp_gambar,$upload_dir);

//proses database
$upload_database=mysql_query("update barang set id_barang='$id_barang',nama_barang='$nama_barang',penjelasan='$penjelasan',harga='$harga',nama_barang='$nama_barang' where id_barang='$id_barang'");
if ($upload_database){echo "<script> alert('Berhasil Edit'); document.location.href='index.php?menu=home'; </script>";} else { echo "<script> alert('Gagal Edit'); document.location.href='index.php?menu=home'; </script>";}
?>
