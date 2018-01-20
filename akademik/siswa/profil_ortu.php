<?php
include "../../include/conf_user.php";

if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT idSiswa FROM wali_murid_has_siswa WHERE idwali_murid = '$_SESSION[user]'"));
$nis = $id['idSiswa'];
}

$id = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid_has_siswa WHERE idSiswa = '$nis' "));

$ortu = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid WHERE idwali_murid = '$id[idwali_murid]'"));
?>
<h1 align="center">Profil Wali Murid </h1>
<table width="406" height="192" border="1" align="center">
  <tr><td>
<table width="378" height="164" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="145">ID Wali Murid </td>
    <td width="12">:</td>
    <td width="207"><?php echo $ortu['idwali_murid'];?></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td>:</td>
    <td><?php echo $ortu['nama'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $ortu['alamat'];?></td>
  </tr>
</table>
</td></tr></table>
