<blockquote>&nbsp;  </blockquote>
<table width="495" border="1" align="center">

  <?php
  require "config.php";
  $data=mysql_query("select * from chat");
  $no=1;
  while ($tampil=mysql_fetch_array($data)) {
  $username=$tampil["username"];
  $gambar=$tampil['gambar'];
  $chat=$tampil['chat'];
  $waktu=$tampil['waktu'];
  ?>
 	<tr><td height="104"><img src="dirchat/<?php echo $gambar; ?>" width="100" height="100"></td>
    <td><?php echo $username; ?></td>
    <td><?php echo $chat; ?></td>
    <td><?php echo $waktu; ?></td>
 </tr>
  <?php $no++;  } ?>
</table>
