<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM guru WHERE idGuru = '$id'");
?>
<script>document.location.href="lihat_guru.php"</script>