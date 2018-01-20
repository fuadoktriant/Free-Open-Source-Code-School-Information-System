<?php
include "../include/config.php";
//Copyright © 2011 Andi Sholihin
if($_SESSION['level']!="admin"){
echo "<h1 align=center><blink>Maaf, Akses Ditolak!</blink></h1>";
}else{
$nama = ucwords(strtolower($_POST['nama']));
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = ucwords(strtolower($_POST['alamat']));

$query = mysql_query("INSERT INTO t_u VALUES(null,'$nama','$alamat','$username','$password')");
?>
<script>document.location.href="lihat_tu.php"</script>
<?php
}
?>