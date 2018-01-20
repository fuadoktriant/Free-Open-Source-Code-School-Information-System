<?php 
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_nilai.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center">Input Nilai Peserta Didik</h2><hr />
<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="input2_nilai.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="get">
<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td width="111" height="48">Kelas</td>
    <td width="14">:</td>
    <td width="297"><select name="kelas" id="kelas">
	<option value="">-Pilih Kelas-</option>
	<?php 
	$baris = mysql_query("SELECT * FROM ruang_kelas");
	  while ($kelas = mysql_fetch_array($baris)){
	  echo "<option value=\"$kelas[idRuang_Kelas]\">$kelas[nama]</option>";
	}
	?>
    </select>    </td>
  </tr>
  <tr>
    <td height="48">Semester</td>
    <td>:</td>
    <td><select name="semester" id="semester">
        <option value="">-Pilih-</option>
        <option>Ganjil</option>
		<option>Genap</option>
      </select>    </td>
  </tr>
  <tr>
    <td height="52">Tahun Ajaran </td>
    <td>:</td>
    <td><select name="tahun" id="tahun">
	<option value="">-Pilih-</option>
	<?php for($i=2009;$i<=2100;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
    </select>
	</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Input Nilai >>" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>
