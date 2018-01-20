<?php
include "../include/config.php";
if($_SESSION['level']!="admin"){
echo "<h1 align=center><blink>Maaf, Akses Ditolak!</blink></h1>";
}else{
$nama = ucwords(strtolower($_POST['nama']));
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysql_query("INSERT INTO administrator (nama, username, password) VALUES ('$nama', '$username', '$password')");

if(!$query){
?>
<script>alert('Terjadi kesalahan saat input data');
document.location.href="input_admin.php";
</script>
<?php
}else{
?>
<script>
alert('Admin baru berhasil ditambahkan\nAnda tidak dapat menghapus atau mengedit Administrator');
</script>
<?php
}
}
?>