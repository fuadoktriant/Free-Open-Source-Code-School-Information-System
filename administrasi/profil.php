<?php //Copyright © 2011 Andi Sholihin
include "../include/config.php";
if($_SESSION['level']=="admin"){
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM administrator WHERE username = '$_SESSION[admin]'"));
}else if($_SESSION['level']=="tu"){
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM t_u WHERE username = '$_SESSION[admin]'"));
}else{
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM kep_sek WHERE username = '$_SESSION[admin]'"));
}
?>
<h1 align="center">Profil Administrator</h1>
<table align="center" border="1"><tr><td>
<table width="359" height="163" border="0" align="center" style="margin:20px">
  <tr>
    <td width="148">Nama Lengkap </td>
    <td width="13">:</td>
    <td width="184"><?php echo $hasil['nama']; ?></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><?php echo $hasil['username']; ?></td>
  </tr>
<?php if($_SESSION['level']=="admin"){ ?>
  <tr>
    <td>Login Terakhir </td>
    <td>:</td>
    <td><?php echo $hasil['last_login'];?></td>
  </tr>
  <tr>
    <td>Login Saat Ini </td>
    <td>:</td>
    <td><?php echo $hasil['current_login'];?></td>
  </tr>
 <?php 
 }else if($_SESSION['level']=="tu"){ ?>
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $hasil['alamat'];?></td>
  </tr>
 <?php
 }
 ?>
</table>
</td></tr></table>
