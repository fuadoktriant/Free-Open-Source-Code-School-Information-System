<?php
include "../include/config.php";


$id = $_GET['id'];

$sql = mysql_query("DELETE FROM mata_pelajaran WHERE idmata_pelajaran = '$id'");
?>
<script>document.location.href="lihat_mapel.php"</script>