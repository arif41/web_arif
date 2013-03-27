<?php
mysql_connect("localhost","root","");
mysql_select_db("forumfjb");
$data=mysql_query("select * from produk");
  $no=1;
  while ($isi=mysql_fetch_array($data)) {
	$id_prod=$isi['id_prod'];
	$title=$isi['title'];
	$harga=$isi['harga'];
	 ?>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>No</td>
    <td><?php echo $id_prod; ?>&nbsp;</td>
    <td rowspan="3"><a href="cart.php?action=add&id=<?php echo $id_prod ?>" >ADD TO CART</a></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $title; ?>&nbsp;</td>
    </tr>
  <tr>
    <td>harga</td>
    <td><?php echo $harga ?>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp;</p>
<?php } ?>
