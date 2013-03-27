<table width="961" border="1">
  <tr>
    <td width="35"><div align="center">No</div></td>
  <td width="43"><div align="center">Nama Barang</div></td>
    <td width="72"><div align="center">Penjelasan</div></td>
    <td width="73"><div align="center">Harga</div></td>
    <td width="83"><div align="center">ID Barang</div></td>
    <td colspan="3"><div align="center">Gambar</div></td>
  <?php
require "config.php";
  $no=1;
  $data1=mysql_query("select * from barang");
while($tampil=mysql_fetch_array($data1)) {
$nama_barang=$tampil['nama_barang'];
$penjelasan=$tampil['penjelasan'];
$harga=$tampil['harga'];
$id_barang=$tampil['id_barang'];
$dir="../dirgambar/";
$gambar_barang=$tampil['gambar_barang'];
$gambar_barang=$dir.$gambar_barang;
?>
  
  <tr>
    <td height="29"><?php echo $no; ?></td>
	<td><?php echo $nama_barang; ?></td>
    <td><?php echo $penjelasan; ?></td>
    <td><?php echo $harga; ?></td>
    <td><?php echo $id_barang; ?></td>
	<td width="120"><img src="dirgambar/<?php echo $gambar_barang; ?>" width="120" height="120" hight="150" /></td>
  </tr>
  <tr>
    <td colspan="2"><center><a href="cart.php?action=add&amp;id=<?php echo $id_barang; ?>">ADD TO CART</a></center></td>
  </tr>
  <?php
	$no++ ; }
	?>
</table>
