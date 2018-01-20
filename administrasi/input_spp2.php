<?php
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_spp2.js"></script>

<link rel="stylesheet" href="development-bundle/themes/base/jquery.ui.all.css">
	<script src="development-bundle/jquery-1.7.1.js"></script>
	<script src="development-bundle/ui/jquery.ui.core.js"></script>
	<script src="development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="development-bundle/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="demos.css">
<script>
	$(function() {
		$( "#tgl" ).datepicker();
		$( "#tgl" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );
	});
	</script>

<fieldset style="width:60%;margin:auto;">
<legend>Input Data Pembayaran SPP</legend>

<form name="form" method="post" action="isi_spp.php" onsubmit="return validate(this)">
<input type="hidden" name="bulan" value="<?php echo $_POST['bulan']; ?>" />
<table width="371" height="207" border="0" align="center">
  <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><select name="nis" id="nis">
    	<option value="">Pilih Siswa</option>
        <?php
        $siswa = mysql_query("select * from siswa where kelas = '$_POST[kelas]'");
		while($op = mysql_fetch_array($siswa)){
			echo "<option value='$op[idSiswa]'>$op[idSiswa] - $op[nama]</option>";
		}
		?>
    	</select>
    </td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="text" name="tgl" id="tgl" /></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" id="jumlah" /></td>
  </tr>
  <tr align="center">
    <td colspan="3"><input name="kembali" type="button" value="&lt;&lt; Kembali" onclick="javascript:history.back()" /><input name="submit" type="submit" value="Simpan" /></td>
  </tr>
</table>
</form>
</fieldset>
