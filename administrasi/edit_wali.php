<?php include "../include/config.php"; 
$id = $_GET['id'];
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid WHERE idwali_murid = '$id'"));

$wali = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid_has_siswa WHERE idwali_murid = '$id'"));

$siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE idSiswa = '$wali[idSiswa]'"));
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Wali Murid</u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="update_wali.php" onsubmit="return validate(this)" method="post">
<input type="hidden" name="idlama" value="<?php echo $hasil['idwali_murid']; ?>"  />
<table width="473" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="150" height="37">ID Wali Murid</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="id" id="id" size="10" value="<?php echo $hasil['idwali_murid']; ?>"/></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30" value="<?php echo $hasil['nama']?>"/></td>
  </tr>
  <tr>
    <td height="38">Nama Siswa </td>
    <td>:</td>
    <td><select name="nis" id="nis">
      <option value="">-=Pilih=-</option>
      <?php $query = mysql_query("SELECT * FROM siswa"); 
	  while($qry = mysql_fetch_array($query)){
	  if($qry['idSiswa']==$siswa['idSiswa']){
	  echo "<option selected=\"selected\" value=\"$qry[idSiswa]\">$qry[nama]</option>";
	  }else{
	  echo "<option value=\"$qry[idSiswa]\">$qry[nama]</option>";
	  }}
	  ?>
    </select></td>
  </tr>
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30" value="*****"/></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"><?php echo $hasil['alamat']; ?></textarea></td>
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