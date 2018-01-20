<?php include "../include/config.php"; ?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Siswa </u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="isi_siswa.php" onsubmit="return validate(this)" method="post">
<table width="473" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="150" height="37">NIS</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="nis" id="nis" size="10"/></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30"/></td>
  </tr>
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30"/></td>
  </tr>
  <tr>
    <td height="38">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
      <option value="">-=Pilih=-</option>
      <?php $query = mysql_query("SELECT nama FROM ruang_kelas"); 
	  while($qry = mysql_fetch_array($query)){
	  echo "<option>$qry[nama]</option>";
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"></textarea></td>
  </tr>
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" class="submit" />
      <input type="reset" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td>
</tr>
</table>