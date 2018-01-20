<?php
include "../include/config.php";
$value = mysql_fetch_array(mysql_query("select * from spp where id='$_GET[id]'"));
?>

<fieldset style="width:60%;margin:auto;">
<legend>Input Data Pembayaran SPP</legend>

<form name="form" method="post" action="update_spp.php">
<input type="hidden" name="id" value="<?php echo $value['id']; ?>" />
<table width="371" height="207" border="0" align="center">
  <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><select name="nis" id="nis">
        <?php
        $siswa = mysql_query("select * from siswa where kelas in (select kelas from siswa where idSiswa='$value[nis]')");
		while($op = mysql_fetch_array($siswa)){
			if($op['idSiswa']!=$value['nis']){
				echo "<option value='$op[idSiswa]'>$op[idSiswa] - $op[nama]</option>";
			}else{
				echo "<option selected=\"selected\" value='$op[idSiswa]'>$op[idSiswa] - $op[nama]</option>";
			}
		}
		?>
    	</select>
    </td>
  </tr>
  <tr>
  	<td>Bulan</td>
    <td>:</td>
    <td>
    	<select name="bulan" id="bulan">
    <?php
		$bln=array('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember');
    	for($i=2009;$i<=2030;$i++){
			foreach($bln as $key => $val){
				if($value['bulan']!="$val $i"){
					echo "<option>$val $i</option>";
				}else{
					echo "<option selected=\"selected\">$val $i</option>";
				}
			} 
		}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="text" name="tgl" id="tgl" value="<?php echo $value['tgl_bayar']; ?>"  /></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" id="jumlah" value="<?php echo $value['jumlah']; ?>" /></td>
  </tr>
  <tr align="center">
    <td colspan="3"><input name="kembali" type="button" value="&lt;&lt; Kembali" onclick="javascript:history.back()" /><input name="submit" type="submit" value="Simpan" /></td>
  </tr>
</table>
</form>
</fieldset>
