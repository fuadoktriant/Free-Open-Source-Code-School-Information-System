<?php
include "../include/config.php";
$kelas = $_GET['kelas'];
$mapel = $_GET['mapel'];

$id = mysql_fetch_array(mysql_query("SELECT * FROM guru_has_mata_pelajaran NATURAL JOIN mata_pelajaran_has_ruang_kelas WHERE idRuang_Kelas = '$kelas' AND idmata_pelajaran = $mapel"));
$jam = explode(" - ",$id['jampelajaran']);
$kls = mysql_fetch_array(mysql_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = '$kelas'"));
$pljrn = mysql_fetch_array(mysql_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$mapel'"));

?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_jadwal.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Update Jadwal Pelajaran</u></h2>
<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="update_jadwal.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="idmapel" value="<?php echo $mapel ?>" />
<input type="hidden" name="idkelas" value="<?php echo $kelas ?>"
<table width="394" height="267" border="0" align="center" style="margin:20px">
  <tr>
    <td height="39">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
        <?php 
		$query = mysql_query("SELECT nama FROM ruang_kelas");
		while($kelas = mysql_fetch_array($query)){
		if($kls['nama']==$kelas['nama']){
		echo "<option selected=\"selected\">$kelas[nama]</option>";
		}else{
		echo "<option>$kelas[nama]</option>";
			}
		}
		?>
      </select>    </td>
  </tr>
  <tr>
    <td height="38">Mata Pelajaran </td>
    <td>:</td>
    <td><select name="pelajaran" id="pelajaran">
        <option value="">-Pilih Pelajaran-</option>
        <?php 
	  	$hajar = mysql_query("SELECT nama FROM mata_pelajaran");
	 	while ($pl = mysql_fetch_array($hajar)){
		if($pljrn['nama']==$pl['nama']){
		echo "<option selected=\"selected\">$pl[nama]</option>";
		}else{
	 	echo "<option>$pl[nama]</option>";
			}
		}
	?>
      </select>
    </td>
  </tr>
  <tr>
    <td width="108" height="41">Hari</td>
    <td width="11">:</td>
    <td width="238"><select name="hari" id="hari">
	<option selected="selected"><?php echo $id['hari']; ?></option>
	<option>Senin</option>
	<option>Selasa</option>
	<option>Rabu</option>
	<option>Kamis</option>
	<option>Jumat</option>
	<option>Sabtu</option>
    </select>
    </td>
  </tr>
  <tr>
    <td height="40">Jam Pelajaran </td>
    <td>:</td>
    <td><select name="jammulai" id="jammulai">
	<?php
	$f = explode(":",$jam[0]);
	$e = explode(":",$jam[1]);
	for($i=7;$i<=17;$i++){
	if($i<=9){$i="0$i";}
	if($i==$f[0]){
	echo "<option selected=\"selected\">$i</option>";
	}else{
	echo "<option>$i</option>";
	}}?>
    </select>
	<select name="menitmulai" id="menitmulai">
	<?php for($i=0;$i<=59;$i++){
	if($i<=9){
	$i="0$i";
	}
	if($i==$f[1]){
	echo "<option selected=\"selected\">$i</option>";
	}else{
	echo "<option>$i</option>";
	}}?>
    </select>
	&nbsp;s/d&nbsp;
	<select name="jamakhir" id="jamakhir">
	<?php for($i=7;$i<=17;$i++){
	if($i<=9){$i="0$i";}
	if($i==$e[0]){
	echo "<option selected=\"selected\">$i</option>";
	}else{
	echo "<option>$i</option>";
	}}?>
    </select>
	<select name="menitakhir" id="menitakhir">
	<?php for($i=0;$i<=59;$i++){
	if($i<=9){
	$i="0$i";
	}
	if($i==$e[1]){
	echo "<option selected=\"selected\">$i</option>";
	}else{
	echo "<option>$i</option>";
	}}?>
    </select>
	</td>
  </tr>
  <tr>
    <td height="36">Guru</td>
    <td>:</td>
    <td><select name="guru" id="guru">
	<option value="">-Pilih Guru-</option>
	<?php 
	$guru = mysql_query("SELECT * FROM guru");
	while($hasil = mysql_fetch_array($guru)){
	if($hasil['idGuru']==$id['idGuru']){
	echo "<option selected=\"selected\">$hasil[nama]</option>";
	}else{
	echo "<option>$hasil[nama]</option>";
	}}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>
