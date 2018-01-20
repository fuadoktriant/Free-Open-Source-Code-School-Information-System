<?php
include "../include/conf_user.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Solutions 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091102

Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Akademik Sekolah</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style3.css" rel="stylesheet" type="text/css" media="screen" />
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0625114722_0) return;
  window.mm_menu_0625114722_0 = new Menu("root",93,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0625114722_0.addMenuItem("New&nbsp;item","location='#'");
  mm_menu_0625114722_0.addMenuItem("New&nbsp;item","location='#'");
  mm_menu_0625114722_0.addMenuItem("New&nbsp;item","location='#'");
   mm_menu_0625114722_0.hideOnMouseOut=true;
   mm_menu_0625114722_0.bgColor='#99FF00';
   mm_menu_0625114722_0.menuBorder=1;
   mm_menu_0625114722_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0625114722_0.menuBorderBgColor='#009933';

mm_menu_0625114722_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="logo"><br />
<H2>SISTEM INFORMASI</H1>
  <h1><a href="#">SMA Negeri 1 Wkwk Land</a></h1>
</div>
<hr />
<!-- end #logo -->
<div id="header">
  <div id="menu">
    <ul>
      <li><a href="?page=home">Beranda</a></li>
	  <li><a href="?page=ganti_password">Password</a></li>
      <li><a href="login/logout.php" onclick="return confirm('Anda yakin keluar dari sistem?')">Keluar</a></li>
    </ul>
  </div>
<div id="search">
<font color="#FFFFFF" size="4">
<?php 
if($_SESSION['hak']=="siswa"){
$nama = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE idSiswa = '$_SESSION[user]'"));
echo "NIS : $_SESSION[user] | Nama : $nama[nama]";
}else if($_SESSION['hak']=="ortu"){
$nama = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid WHERE idwali_murid = '$_SESSION[user]'"));
echo "ID Wali : $_SESSION[user] | Nama : $nama[nama]";
}else{
$nama = mysql_fetch_array(mysql_query("SELECT * FROM guru WHERE idGuru = '$_SESSION[user]'"));
echo "ID Guru : $_SESSION[user] | Nama : $nama[nama]";
}
?>
</font></div>
</div>
<!-- end #header -->
<div style="height: 46px;"></div>
<!-- end #header-wrapper -->
<div id="page">
  <div id="content">
    <?php include "isi.php";?>
  </div>
  <!-- end #content -->
  <div id="sidebar">
    <?php 
	if($_SESSION['hak']!="guru"){
	include "menu.php";
	}else{
	include "menu_guru.php";
	}
	?>
  </div>
  <!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
  <p>Sistem Informasi SMA Negeri 1 Wkwkland &copy; 2017 Nusamandiri | All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
