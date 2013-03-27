<table width="961" border="1">
  <tr>
    <td width="35"><div align="center">No</div></td>
  <td width="35"><div align="center">Username</div></td>
    <td width="72"><div align="center">Full Name</div></td>
    <td width="73"><div align="center">Email</div></td>
    <td width="83"><div align="center">Birthday</div></td>
    <td colspan="3"><div align="center">Action</div></td>
  </tr>
  
  <?php
require "config.php";
  $no=1;
  $data1=mysql_query("select * from member");
while($tampil=mysql_fetch_array($data1)) {
$username=$tampil['username'];
$name=$tampil['name'];
$email=$tampil['email'];
$tanggal=$tampil['tanggal'];
$bulan=$tampil['bulan'];
$tahun=$tampil['tahun'];
$birth=$tanggal.'-'.$bulan.'-'.$tahun;
?>
  
  <tr>
    <td height="29"><?php echo $no; ?></td>
	<td><?php echo $username; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $birth; ?></td>
    <td width="48"><div align="center"><a href="edit.php?username=<?php echo $username; ?>">Edit</a></div></td>
    <td width="48"><div align="center"><a href="delete.php?username=<?php echo $username; ?>">Delete</a></div></td>
  </tr>
  <?php
	$no++ ; }
	?>
</table>
