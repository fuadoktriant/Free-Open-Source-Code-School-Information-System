<?php
include "../include/config.php";

$id = $_POST['id'];
$nama = ucwords(strtolower($_POST['nama']));
$username = $_POST['username'];
$password = $_POST['password'];
if($password=="******"){
$pass = "";
}else{
$pass = ", password = md5($password)";
}

$alamat = ucwords(strtolower($_POST['alamat']));

$query = mysql_query("UPDATE t_u SET nama = '$nama', username = '$username' $pass, alamat = '$alamat' WHERE idT_U = '$id'");
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>
<script>document.location.href="lihat_tu.php"</script>