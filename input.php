<form action="proses.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="556" border="1">
    <tr>
      <td width="66"><div align="center">Nama Barang</div></td>
      <td width="64"><div align="center">Penjelasan</div></td>
    <td width="103"><div align="center">Harga</div></td>
	  <td width="92"><div align="center">ID Barang</div></td>
	  <td width="74"><div align="center">Gambar</div></td>
    </tr>
<?php
$jumlahdata=$_POST['jum'];
for ($i=1; $i<=$jumlahdata; $i++)
{
echo "<tr><td><input type='text' name='nama_barang".$i."'></td><td><input type='text' name='penjelasan".$i."'></td><td><input type='text' name='harga".$i."'></td><td><input type='text' name='id_barang".$i."'></td><td><input type='file' name='gambar_barang".$i."'></td></tr>";
}
?>
  </table>
<input type="hidden" name="jum" value="<?php echo $jumlahdata; ?>" />
<input type="submit" name="Submit" value="Submit" />
</form>
