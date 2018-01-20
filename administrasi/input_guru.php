<?php
include "../include/config.php";

$query = mysql_query("SELECT MAX(idGuru) as idGuru FROM guru");
$hasil = mysql_fetch_array($query);
$hasil2 = $hasil[idGuru]+1;
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Guru</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="isi_guru.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" onClick="highlight(event)" onKeyUp="highlight(event)">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">ID Guru </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="id" value="<?php echo $hasil2;?>"/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password"/></td>
  </tr>
  <tr>
    <td>Wali Kelas </td>
    <td>:</td>
    <td><select name="wali">
      <option value="Tidak">Tidak</option>
      <?php $hajar = mysql_query("SELECT nama FROM ruang_kelas");
	  while ($kelas = mysql_fetch_array($hajar)){
	  echo "<option>$kelas[nama]</option>";
	  }
	  ?>
    </select>
  </tr>
  <tr>
 <td>Foto</td>
 <td>:</td><td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"></textarea></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>