<?php
require "config.php";
$user=$_SESSION['username'];
$data=mysql_query("select * from member where username='$user' ");
$tampil=mysql_fetch_array($data);
$username=$tampil['username'];
$name=$tampil['name'];
$email=$tampil['email'];
$tanggal=$tampil['tanggal'];
$bulan=$tampil['bulan'];
$tahun=$tampil['tahun'];
$birth=$tanggal.'-'.$bulan.'-'.$tahun;
?>

<form action="proses_edit.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="691" height="185" border="1" align="center">
    <tr>
      <td width="138"><div align="center">Username</div></td>
      <td width="8">:</td>
      <td width="523"><input name="username" type="hidden" value="<?php echo $username; ?>" id="username"/> <?php echo $username; ?></td>
    </tr>
    <tr>
      <td><div align="center">Full Name </div></td>
      <td>:</td>
      <td><label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="34"><div align="center">E-Mail</div></td>
      <td>:</td>
      <td><label>
     <input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Birthday</div></td>
      <td>:</td>
      <td><label>
        <select name="tanggal">
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
        <select name="bulan">
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
        <select name="tahun">
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
