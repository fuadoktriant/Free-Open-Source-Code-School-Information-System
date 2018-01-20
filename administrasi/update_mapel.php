<?php
include "../include/config.php";

$id = $_POST['id'];
$nama = $_POST['nama'];

$query = mysql_query("UPDATE mata_pelajaran SET nama = '$nama' WHERE idmata_pelajaran = '$id'");
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>
<script>document.location.href="lihat_mapel.php"</script>