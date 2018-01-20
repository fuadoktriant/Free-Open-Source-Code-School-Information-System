<?php

if(!session_start()){
session_start();
}
//cek apakah user sudah login atau belum
if(isset($_SESSION['user']) && (($_SESSION['hak']=="siswa") || ($_SESSION['hak']=="ortu") || ($_SESSION['hak']=="guru"))){
?>
<script>document.location.href="../"</script>
<?php 
}
?>
<html>
<title>Halaman Login Siswa SMA Negeri 1 Wkwk Land </title>
<style type="text/css">
<!--
.judul {
	background-color: #999999;
}
-->
</style>
<body background="login_bg.jpg">
<style type="text/css">
<!--
.style2 {color: #999999}
-->
</style>
<div align="center">
  <p>&nbsp;</p>
  <h1 class="judul"><strong>.::Halaman Login Siswa dan Guru SMA Negeri 1 Wkwk Land::.</strong></h1>
<br /><br />
  <form method="post" action="login.php">
    <table width="329" height="198" border="0" align="center" background="login_bg.png">
    <tr>
      <th width="24" rowspan="3" scope="row">&nbsp;</th>
      <th height="35%" colspan="3" scope="row">&nbsp;</th>
      <td width="22" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th width="85" height="45" scope="row"> <div align="left">Username</div></th>
      <td width="15">:</td>
      <td width="161">
        <input type="text" name="username" />      </td>
      </tr>
    <tr>
      <th height="47" scope="row"><div align="left">Password</div></th>
      <td>:</td>
      <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <th height="45" colspan="5" scope="row">
         <input type="submit" name="Submit" value="Login" />  
        <input name="reset" type="reset" value="Reset" /></th>
      </tr>
    <tr>
      <th height="27" colspan="5" scope="row">&nbsp;</th>
    </tr>
  </table>
  </form>
</div>
</body>
</html>