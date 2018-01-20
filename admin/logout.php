<?php
include "../include/config.php";

$ambil = mysql_query("SELECT current_login FROM administrator WHERE username='$_SESSION[admin]'");
$hasil = mysql_fetch_array($ambil);

$query = mysql_query("UPDATE administrator SET last_login = '$hasil[current_login]' WHERE username='$_SESSION[admin]'");

//$_SESSION=array();
unset($_SESSION['admin']);
unset($_SESSION['level']);
//setcookie('PHPSESSID','',time()-3600,'/','',0);
header("location:../index.php");
?>
