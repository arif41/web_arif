<?php

//memulai session
session_start();
mysql_connect("localhost","root","");
mysql_select_db("web_arif");
$pesan='';

//handler untuk aksi shopping cart
if (isset($_GET['action'])) {
if (isset($_GET['id'])) { //cek variabel id
$id=(int)$_GET['id'];
} else {
$id=0;
}
$action=$_GET['action'];
switch($_GET['action']) {
case 'add':
if (!empty($_SESSION['basket'][$id])) {
$pesan="Barang sudah ada di keranjang";
} else {
$_SESSION['basket'][$id]=1;
}
break;
case 'update' :
$produk=$_POST['produk'];
foreach ($produk as $key => $val) {
if (!empty($_SESSION['basket'][$key])) {
$_SESSION['basket'][$key]=$val;
} //jika barang memang ada, baru di-update
}
break;
case 'delete' :
if (!empty($_SESSION['basket'][$id])) {
unset($_SESSION['basket'][$id]);
} else {
$pesan="Barang yang dimaksud tidak ada";
}
break;
}
}
//Menampilan isi shopping cart
if (!empty($_SESSION['basket'])) {
$basket=$_SESSION['basket'];
?>
<FORM method="POST" action="?action=update">
<h3>Isi keranjang belanja:</h3>
<table border="1">
<tr>
<th>No.</th>
<th>Nama produk</th>
<th>Jumlah</th>
<th>aksi</th>

</tr>
<?php
$no_urut=0;
$total=0;
$total_harga=0;
foreach ($basket as $key => $val) { //menuliskan tabel
$no_urut++;
$query="SELECT * FROM produk WHERE id_prod='$key'";
$hasil=mysql_query($query);
if ($hasil) {
$data=mysql_fetch_array($hasil);
$total+=$val; //jumlah barang
$total_harga += ($val * $data['harga']); //total
?>
<tr>
<td><?php echo $no_urut?></td>
<td><?php echo $data['title']?></td>
<td><INPUT name="produk[<?php echo $key?>]" type="text"
value="<?php echo $val?>" /></td>
<td><A href="?action=delete&id=<?php echo $key
?>">Hapus</a></A></td>
</tr>
<?php }
} ?>
<tr>
<td colspan="2" align="center"><INPUT type="submit"
value="Perbaharui"></td>
<td><strong>Total</strong></td>
<td><?php echo 'Rp '.$total_harga?></td>
</tr>
</table>
</FORM><br />
<?php
echo 'Ada <strong>'.$total.'</strong> barang di keranjang<br />';
} else {
echo "<center><strong>Tidak ada barang di
keranjang</strong><br />";
}
echo '<strong>'.@$this->pesan.'</strong>'; //menampilkan pesan kalau
ada
?>
