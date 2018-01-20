<?php
include "../include/config.php";

$nama = ucwords(strtolower($_POST['nama']));

$query = mysql_query("INSERT INTO mata_pelajaran (nama) VALUES ('$nama')");
//Copyright © 2011 Andi Sholihin
?>
<script>document.location.href="lihat_mapel.php"</script>