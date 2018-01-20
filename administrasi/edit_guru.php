<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM guru WHERE idGuru = '$id'");
$hasil = mysql_fetch_array($query);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Guru</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_guru.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idGuru'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">ID Guru </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="id" value="<?php echo $hasil['idGuru'];?>"/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" value="<?php echo $hasil['nama'];?>"/></td>
  </tr><tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" value="123456789"/></td>
  </tr>
  <tr>
    <td>Wali Kelas </td>
    <td>:</td>
    <td><select name="wali">
	  <option selected="selected"><?php echo $hasil[wali_kelas] ?></option>
	  <option value="Tidak">Tidak</option>
      <?php $hajar = mysql_query("SELECT nama FROM ruang_kelas");
	  while ($kelas = mysql_fetch_array($hajar)){
	  echo "<option>$kelas[nama]</option>";
	  }
	  ?>
    </select>    </td>
  </tr><tr>
 <td>Foto</td>
 <td>:</td>
 <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"><?php echo $hasil['alamat'];?></textarea></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>