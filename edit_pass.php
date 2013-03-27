<?php
require "config.php";
$user=$_SESSION['username'];
$data=mysql_query("select * from password where username='$user' ");
$tampil=mysql_fetch_array($data);
$password=$tampil['password'];
?>

<form action="proses_pass.php" method="post" enctype="multipart/form-data" name="form1">
<table width="424" border="1">
  <tr>
    <td width="103">Password Baru</td>
    <td width="8">:</td>
    <td width="291"><label>
        <input name="password" type="password" id="password" size="47">
      </label></td>
</table>
<input name="username" type="hidden" id="username" value="<?php echo $username; ?>">
<p>
  <label>
  <input type="submit" name="Submit" value="Submit">
  </label>
  <label>
  <input type="reset" name="Submit2" value="Reset">
  </label>
</p>
</form>
