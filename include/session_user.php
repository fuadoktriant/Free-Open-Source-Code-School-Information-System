<?php

if(!session_start()){
session_start();
}
//cek apakah user sudah login atau belum
if(!isset($_SESSION['user']) && ($_SESSION['agent']!="admin") ){
?>
<script>document.location.href="../akademik/login/"</script>
<?php 
}
?>