<?php
include "../include/config.php";
$id = $_GET['nis'];
$hajarbos = mysql_query("SELECT * FROM siswa WHERE idSiswa = $id");
$hasil = mysql_fetch_array($hajarbos);
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>

<h2 align="center"><u>Edit Data Siswa </u></h2>
<form name="form" id="form" class="form" action="update_siswa.php" onsubmit="return validate(this)" method="post">
<input type="hidden" name="id" value="<?php echo $hasil['idSiswa']; ?>">
<input type="hidden" name="pass" value="<?php echo $hasil['password']; ?>">
<table width="473" border="0" align="center">
  <tr>
    <td width="150" height="37">NIS</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="nis" id="nis" size="10" value="<?php echo $hasil['idSiswa']; ?>"/></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30" value="<?php echo $hasil['nama']; ?>"/></td>
  </tr>
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30" value="*****"/></td>
  </tr>
  <tr>
    <td height="38">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
      <?php $query = mysql_query("SELECT nama FROM ruang_kelas"); 
	  while($qry = mysql_fetch_array($query)){
	  if($qry['nama']==$hasil['kelas']){
	  echo "<option selected=\"selected\">$qry[nama]</option>";
	  }else{
	  echo "<option>$qry[nama]</option>";
	  }}
	  ?>
    </select> </td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"><?php echo $hasil['alamat']; ?></textarea></td>
  </tr>
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" class="submit" />
      <input type="reset" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>