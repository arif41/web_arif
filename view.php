<?php
$total=0;
if (!empty($_SESSION['cart'])) { //cek isi variabel _SESSION['basket']
foreach ($_SESSION['cart'] as $key => $val) {
$total +=$val; //menghitung jumlah barang
}
echo 'Ada <strong>'.$total.'</strong> barang di keranjang<br />';
} else {
echo "Tidak ada barang di keranjang";
}
?>
