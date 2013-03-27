<?php

mysql_connect("localhost", "root", "");
mysql_select_db("web_arif");

$jumdata=$_POST['jum'];

for ($i=1; $i<=$jumdata; $i++)
{
  $nama_barang=$_POST['nama_barang'.$i];
	$penjelasan=$_POST['penjelasan'.$i];
	$harga=$_POST['harga'.$i];
	$id_barang=$_POST['id_barang'.$i];
	$dir="dirgambar/";
    $nama_gambar=$_FILES['gambar_barang'.$i]['name'];
    $upload_dir=$dir.$nama_gambar;
    $tmp_gambar=$_FILES['gambar_barang'.$i]['tmp_name'];
    $proses_upload=move_uploaded_file($tmp_gambar,$upload_dir);
	{
		$upload_database= mysql_query("insert into barang values ('$nama_barang','$penjelasan','$harga','$id_barang','$nama_gambar')");
		if ($upload_database) {echo "<script>alert('SUKSES!');document.location.href='index.php'</script>;";}
		else {echo "<script>alert('GAGAL!');document.location.href='index.php'</script>;";}
		}
}

?>
