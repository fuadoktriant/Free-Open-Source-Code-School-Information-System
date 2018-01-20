<?php
include "../include/config.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM spp WHERE id='$id'");

?>
<script>document.location.href="lihat_spp.php"</script>