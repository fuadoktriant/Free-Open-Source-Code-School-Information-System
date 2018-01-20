<?php

if(!session_start()){
session_start();
}
//cek apakah admin sudah login atau belum
if(!isset($_SESSION['admin']) && (($_SESSION['level']!="admin") || ($_SESSION['level']!="tu")) ){
?>
<script>document.location.href="../admin/login.php"</script>
<?php 
}
?>