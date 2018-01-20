<?php
include "../../include/conf_user.php";

$lama = md5($_POST['p_lama']);
$baru = md5($_POST['p_baru']);

$query = mysql_fetch_array(mysql_query("SELECT password FROM guru WHERE idGuru = '$_SESSION[user]'"));
if($query['password']==$lama){
$sql = mysql_query("UPDATE guru SET password='$baru' WHERE idGuru = '$_SESSION[user]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}
?>
<script>document.location.href="ganti_password.php"</script>