<?php

require"config.php";

if ($_GET['id_barang'] !="")
   {
 	$id_barang=$_GET['id_barang'];}
 	{
 	mysql_query("delete from barang where id_barang='$id_barang'");
 	echo "<script> alert ('Data berhasil dihapus'); document.location.href='index.php?menu=home'; </script>";
 	}
?>
