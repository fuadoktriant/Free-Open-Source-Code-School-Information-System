<?php
include "../include/config.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];

if($pass!='****************'){

$password = ", password = md5($pass)";
}else{
$password = '';
}


$sql = mysql_query("UPDATE kep_sek SET nama = '$nama', username = '$username' $password");
if(!$sql){
?><script>alert('Terjadi kesalahan input data');document.location.href="edit_kepsek.php";</script>"
<?php
}else{
?>
<script>alert('Data berhasil di update');document.location.href="home.php";</script>
<?php
}
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>