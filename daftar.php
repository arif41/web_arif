<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1">
  <table width="450" border="1" align="center">
    <tr>
      <td width="127">Username</td>
      <td width="6">:</td>
      <td width="295"><label>
        <input name="username" type="text" id="username" size="47">
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><label>
        <input name="password" type="password" id="password" size="47">
      </label></td>
    </tr>
    <tr>
      <td>Full Name </td>
      <td>:</td>
      <td><label>
        <input name="name" type="text" id="name" size="47">
      </label></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td>:</td>
      <td><label>
        <input name="email" type="text" id="email" size="47">
      </label></td>
    </tr>
    <tr>
      <td>Birthday</td>
      <td>:</td>
      <td><label>
        <select name="tanggal" id="tanggal">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
          <option selected>Tanggal</option>
        </select>
        <select name="bulan" id="bulan">
          <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>Mei</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Agu</option>
          <option>Sep</option>
          <option>Okt</option>
          <option>Nov</option>
          <option>Des</option>
          <option selected>Bulan</option>
        </select>
        <select name="tahun" id="tahun">
          <option>1999</option>
          <option>1998</option>
          <option>1997</option>
          <option>1996</option>
          <option>1995</option>
          <option>1994</option>
          <option>1993</option>
          <option>1992</option>
          <option>1991</option>
          <option>1990</option>
          <option>1989</option>
          <option>1988</option>
          <option>1987</option>
          <option>1986</option>
          <option>1985</option>
          <option>1984</option>
          <option>1983</option>
          <option>1982</option>
          <option>1981</option>
          <option>1980</option>
          <option selected>Tahun</option>
        </select>
      </label></td>
    </tr>
  </table>
  <p>
    <label>
    <div align="center">
    </label>
    <label>
    <div align="center">
      <label>
      <input type="submit" name="Submit" value="Submit">
      </label>
      <label>
      <input name="Reset" type="reset" id="Reset" value="Reset">
      </label>
    </div>
    </label>
</form>

<?php
if (empty($_POST['Submit'])) {} else {
require "config.php";
//data
$username=$_POST['username'];
$password=md5($_POST['password']);
$name=$_POST['name'];
$email=$_POST['email'];
$status=$_POST['status'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$birth=$tanggal.'-'.$bulan.'-'.$tahun;

//input
$upload_database=mysql_query("insert into member value ('$username','$name','$email','$birth')");
$upload_member=mysql_query("insert into password value ('$username','$password','User')");
if ($upload_database and $upload_member){echo "<script> alert('Berhasil Daftar !! '); document.location.href='index.php?menu=home'; </script>";} else { echo "<script> alert('Gagal Daftar !! Coba ulangi !!'); document.location.href='index.php?menu=registration'; </script>";}
}
?>
