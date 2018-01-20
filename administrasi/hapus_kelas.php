<?php
include "../include/config.php";


$id = $_GET['id'];

$sql = mysql_query("DELETE FROM ruang_kelas WHERE idRuang_Kelas = '$id'");
?>
<script>document.location.href="lihat_kelas.php"</script>