<?php 
include "../include/config.php";
if($_SESSION['level']!="admin"){
echo "<h1 align=center><blink>Maaf, Akses Ditolak!</blink></h1>";
}else{
$kepsek = mysql_fetch_array(mysql_query("SELECT * FROM kep_sek"))
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_admin.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Update Data Kepala Sekolah</u></h2> 
  <table border="1" align="center"><tr><td>
<form name="form" id="form" class="form" action="update_kepsek.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="146">Nama Kepala Sekolah</td>
    <td width="7">:</td>
    <td width="270"><input type="text" name="nama" id="nama" value="<?php echo $kepsek['nama'] ?>"/></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $kepsek['username'] ?>"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" value="****************"/></td>
  </tr>
  <tr>
    <td>Ulangi Password</td>
    <td>:</td>
    <td><input type="password" name="password2" id="password2" value="****************"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>
<?php
}
?>