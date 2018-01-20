<?php 
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_spp.js"></script>

<h2 align="center">Input Nilai Peserta Didik</h2><hr />
<fieldset style="width:60%;margin:auto;">
<legend>Input Data Pembayaran SPP</legend>
<form action="input_spp2.php" method="post" name="form" onsubmit="return validate(this)">
<table width="335" height="148" border="0" align="center">
  <tr>
    <td width="92">Kelas</td>
    <td width="35">:</td>
    <td width="194">
    	<select name="kelas" id="kelas">
        <option value="">Pilih Kelas</option>
        <?php
			$k=mysql_query("select nama from ruang_kelas");
        	while($kelas = mysql_fetch_array($k)){
			echo "<option>$kelas[nama]</option>";
				}
		?>
        </select>
    </td>
  </tr>
  <tr>
    <td>Bulan</td>
    <td>:</td>
    <td><select name="bulan" id="bulan">
    	<option value="">Pilih Bulan</option>
    <?php
		$bln=array('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember');
    	for($i=2009;$i<=2030;$i++){
			foreach($bln as $key => $val){
				echo "<option>$val $i</option>";
			} 
		}
	?>
    </select>
    </td>
  </tr>
  <tr align="center">
    <td colspan="3"><input type="submit" name="simpan" id="simpan" value="Next >>" /></td>
    </tr>
</table>
</form>
</fieldset>
