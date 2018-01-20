<?php
include "../include/config.php";

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM t_u WHERE idT_U = '$id'");
?>
<script>document.location.href="lihat_tu.php"</script>