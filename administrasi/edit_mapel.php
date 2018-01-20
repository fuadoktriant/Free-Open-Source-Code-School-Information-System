<?php
include "../include/config.php";
$id = $_GET['id'];
$mapel = mysql_fetch_array(mysql_query("SELECT * FROM mata_pelajaran WHERE idmata_pelajaran = '$id'"));
?>
<center><h2>Input Mata Pelajaran</h2></center>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="valid_mapel.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<form name="form" id="form" class="form" action="update_mapel.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table width="392" height="184" border="1" align="center">
  <tr><td>
<table width="284" height="110" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="109" height="62">Mata Pelajaran </td>
    <td width="5">:</td>
    <td width="149"><input type="text" name="nama" id="nama" value="<?php echo $mapel['nama']; ?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table></td></tr></table>
</form>
