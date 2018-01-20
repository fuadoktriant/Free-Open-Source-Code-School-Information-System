<?php
include "../include/config.php";
$id = $_GET['id'];
$tu = mysql_fetch_array(mysql_query("SELECT * FROM t_u WHERE idT_U = '$id'"));
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_tu.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center">Edit Data Pegawai TU</h2> 
<table align="center" border="1"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="update_tu.php" onsubmit="return validate(this)" method="post">
<input type="hidden" name="id" value="<?php echo $id?>"/>
<table width="385" height="232" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="95" height="32">Nama</td>
    <td width="10">:</td>
    <td width="161"><input type="text" name="nama" id="nama" value="<?php echo $tu['nama'];?>"/></td>
  </tr>
  <tr>
    <td height="34">Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $tu['username'];?>"/></td>
  </tr>
  <tr>
    <td height="33">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password"  value="******"/></td>
  </tr>
  <tr>
    <td height="45" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"><?php echo $tu['alamat'];?></textarea></td>
  </tr>
  <tr align="center">
    <td colspan="3"><input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="reset" /></td>
  </tr>
</table>
</form>
</td></tr></table>
