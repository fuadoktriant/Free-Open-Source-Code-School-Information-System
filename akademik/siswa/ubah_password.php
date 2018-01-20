<?php
include "../../include/conf_user.php";

$lama = md5($_POST['p_lama']);
$baru = md5($_POST['p_baru']);

if($_SESSION['hak']=="siswa"){
$query = mysql_fetch_array(mysql_query("SELECT password FROM siswa WHERE idSiswa = '$_SESSION[user]'"));
if($query['password']==$lama){
$sql = mysql_query("UPDATE siswa SET password='$baru' WHERE idSiswa = '$_SESSION[user]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}

}else{

$query = mysql_fetch_array(mysql_query("SELECT password FROM wali_murid WHERE idwali_murid = '$_SESSION[user]'"));
if($query['password']==$lama){
$sql = mysql_query("UPDATE wali_murid SET password='$baru' WHERE idwali_murid = '$_SESSION[user]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}
}
?>
<script>document.location.href="ganti_password.php"</script>