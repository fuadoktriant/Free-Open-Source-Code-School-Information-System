<center><h2>Input Mata Pelajaran</h2></center>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="valid_mapel.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<form name="form" id="form" class="form" action="isi_mapel.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<table align="center" border="1"><tr><td height="157">
<table width="277" height="133" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="109" height="62">Mata Pelajaran </td>
    <td width="5">:</td>
    <td width="149"><input type="text" name="nama" id="nama" /></td>
  </tr>
  <tr>
    <td height="65" colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table></td></tr></table>
</form>
