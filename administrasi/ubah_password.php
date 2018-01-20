<?php
include "../include/config.php";

$lama = md5($_POST['p_lama']);
$baru = md5($_POST['p_baru']);
if($_SESSION['level']=="admin"){
$query = mysql_fetch_array(mysql_query("SELECT password FROM administrator WHERE username = '$_SESSION[admin]'"));
if($query['password']==$lama){
$sql = mysql_query("UPDATE administrator SET password='$baru' WHERE username = '$_SESSION[admin]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}

}else if($_SESSION['level']=="tu"){

$query = mysql_fetch_array(mysql_query("SELECT password FROM t_u WHERE username = '$_SESSION[admin]'"));

if($query['password']==$lama){
$sql = mysql_query("UPDATE t_u SET password='$baru' WHERE username = '$_SESSION[admin]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}
}else{
$query = mysql_fetch_array(mysql_query("SELECT password FROM kep_sek WHERE username = '$_SESSION[admin]'"));

if($query['password']==$lama){
$sql = mysql_query("UPDATE kep_sek SET password='$baru' WHERE username = '$_SESSION[admin]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}
}
?>
<script>document.location.href="ganti_password.php"</script>