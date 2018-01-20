<?php
include "../include/config.php";

$kelas = $_GET['kelas'];
$semester = $_GET['semester'];
$tahun = $_GET['tahun'];
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val2_nilai.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center">Input Nilai Peserta Didik Kelas <?php $kls = mysql_fetch_array(mysql_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = $kelas")); echo $kls['nama']; ?></h2><hr />
<h3 align="center">
Semester : <?php echo $semester; ?><br />
Tahun Ajaran : <?php echo $tahun; ?>
</h3>

<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="isi_nilai.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="kelas" value="<?php echo $kelas; ?>" />
<input type="hidden" name="semester" value="<?php echo $semester; ?>" />
<input type="hidden" name="tahun" value="<?php echo $tahun;?>" />
<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td width="111" height="48">Nama Siswa </td>
    <td width="14">:</td>
    <td width="297"><select name="nama" id="nama">
	<option value="">-Nama Siswa-</option>
	<?php 
	$baris = mysql_query("SELECT nama, idSiswa FROM siswa WHERE kelas = '$kls[nama]'");
	  while ($siswa = mysql_fetch_array($baris)){
	  echo "<option value=\"$siswa[idSiswa]\">$siswa[nama]</option>";
	}
	?>
    </select>    </td>
  </tr>
  <tr>
    <td height="48">Mata Pelajaran </td>
    <td>:</td>
    <td><select name="pelajaran" id="pelajaran">
        <option value="">-Pilih Pelajaran-</option>
    <?php 
	$pilih = mysql_query("SELECT idmata_pelajaran FROM mata_pelajaran_has_ruang_kelas WHERE idRuang_Kelas = '$kelas'");  
	while($ambil = mysql_fetch_array($pilih)){
		$hajar = mysql_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$ambil[idmata_pelajaran]'");
	  	$pl = mysql_fetch_array($hajar);
	  	echo "<option value=\"$ambil[idmata_pelajaran]\">$pl[nama]</option>";
	}
	?>
      </select>    </td>
  </tr>
  <tr>
    <td height="52">Nilai</td>
    <td>:</td>
    <td><select name="afektif" id="afektif">
	<option value="">Afektif</option>
	<?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
    </select>
	&nbsp;
      <select name="komulatif" id="komulatif">
	  <option value="">Komulatif</option>
	  <?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
      </select>
	 &nbsp;
      <select name="psikomotorik" id="psikomotorik">
	  <option value="">Psikomotorik</option>
	  <?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
      </select>      </td>
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
