<?php 
include "../include/sambung.php";
$user = $_POST['username'];
$pass = md5($_POST['password']);

$r=mysql_query("select * from administrator where username = '$user'AND password = '$pass'");
echo "<br>mysql_query(\"select * from administrator where username = '$user' AND password = '$pass'\");";
echo "<br> hasil :".mysql_num_rows($r).mysql_error();
/*
injection: asa' OR '1'='1' limit 1-- dumping data --
*/
?>
