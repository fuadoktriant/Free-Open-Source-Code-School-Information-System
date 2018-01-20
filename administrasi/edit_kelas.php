<?php 
include "../include/config.php";
$id = $_GET['id'];
$query = mysql_fetch_array(mysql_query("SELECT * FROM ruang_kelas WHERE idRuang_Kelas = '$id'"));
$nama = explode(" ",$query['nama']);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_kelas.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Edit Ruang Kelas</u></h2> 
  </p>
<table border="1" align="center"><tr><td height="209">
<form name="form" id="form" class="form" action="update_kelas.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="id" value="<?php echo $query['idRuang_Kelas'] ?>"/>
  <table width="437" height="149" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Nama Ruangan </td>
    <td width="15">:</td>
    <td width="270"><select name="kelas" id="kelas" class="kelas">
	  <option selected="selected"><?php echo $nama[0]?></option>
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
    </select>
      <select name="jurusan" id="jurusan" class="jurusan">
	    <option selected="selected"><?php echo $nama[1]?></option>
        <option value="-">-</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
      </select>
	  <select name="ruang" id="ruang" class="ruang">
	  <option selected="selected"><?php echo $nama[2]?></option>
	  <?php for($i=1;$i<=10;$i++){echo "<option>$i</option>"; } ?></select></td>
  </tr>
  <tr>
    <td height="42">Jumlah Siswa </td>
    <td>:</td>
    <td><select name="jumlah" id="jumlah">
	<option selected="selected"><?php echo $query['jumlah_siswa'] ?></option>
	<?php for($i=1;$i<=100;$i++){echo "<option>$i</option>";}?>
    </select>
    </td>
  </tr>
  <tr>
    <td height="31" colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>