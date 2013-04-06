<?php
require "config.php";
$data=mysql_query("select * from barang where id_barang='$id_barang' ");
$tampil=mysql_fetch_array($data);
$nama_barang=$tampil['nama_barang'];
$penjelasan=$tampil['penjelasan'];
$harga=$tampil['harga'];
$id_barang=$tampil['id_barang'];
$dir="../dirgambar/";
$gambar_barang=$tampil['gambar_barang'];
$gambar_barang=$dir.$gambar_barang;
?>

<form action="proses_edit.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="691" height="185" border="1" align="center">
  <input name="id_barang" type="hidden" value="<?php echo $id_barang; ?>" id="id_barang"/> <?php echo $id_barang; ?>
    <tr>
      <td><div align="center">Nama Barang</div></td>
      <td>:</td>
      <td><label>
        <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $nama_barang; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="34"><div align="center">Penjelasan</div></td>
      <td>:</td>
      <td><label>
		<input type="text" name="penjelasan" id="penjelasan" value="<?php echo $penjelasan; ?>"/>
      </label></td>
    </tr>
	<tr>
		<td height="34"><div align="center">Harga</div></td>
		<td>:</td>
		<td><input type="text" name="harga" id="harga" value="<?php echo $harga; ?>"/></td>
	</tr>
	<tr>
		<td height="34"><div align="center">Gambar</div></td>
		<td>:</td>
		<td><input type='file' name="gambar_barang" id="gambar_barang" value="<?php echo $gambar_barang; ?></td>
	</tr>
  </table>
    <label>
    <div align="center">
      <input type="submit" name="Submit" value="Submit">
    </div>
    </label>
    <label>
    <div align="center">
      <input name="Reset" type="reset" id="Reset" value="Reset">
    </div>
    </label>
</form>
