<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center">
    <marquee><p>Bicara Dengan Kami</p></marquee>
    <table width="428" border="0">
        <input name="<?php echo $username; ?>" type="hidden"/>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input name="gambar" type="file" id="gambar">
        <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="3000000000" /></td>
      </tr>
      <tr>
        <td>Isi</td>
        <td>:</td>
        <td><textarea name="chat"></textarea></td>
      </tr>
    </table>
  </div>
  <p align="center">
    <input type="submit" name="Submit" value="Submit" />
  </p>
</form>

<div align="center">
<?php
if (empty($_POST['Submit'])) {} else {
require "config.php";

//gambar
$dir="dirchat/";
$nama_gambar=$_FILES["gambar"]["name"];
$upload_dir=$dir.$nama_gambar;
$tmp_gambar=$_FILES["gambar"]["tmp_name"];
$proses_upload=move_uploaded_file($tmp_gambar,$upload_dir);

//isi chat
$username=$_SESSION['username'];
$chat=$_POST['chat'];
$waktu=date(d-M-y H:i);

//memasukan data ke database
$upload_database=mysql_query("insert into chat value ('$username','$nama_gambar','$chat','$waktu')");
}
?>
</div>
