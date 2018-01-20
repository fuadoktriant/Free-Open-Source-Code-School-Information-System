<?php

$page = $_GET['page'];

if($_SESSION['hak']=="guru"){
$file = "guru/$page.php";
}else{
$file = "siswa/$page.php";
}
if(!file_exists($file) || empty($page)){ 
	$file = "home.php";
    echo "<iframe align=middle width=100% height=440 src=$file frameborder=0></iframe> "; 
  }else{ 
echo "<iframe align=middle width=100% height=640 src=$file frameborder=0></iframe> "; 
}
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>