<?php

require_once '../../include/sambung.php';

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=md5($_POST['password']);

$siswa = mysql_num_rows(mysql_query("SELECT * FROM siswa WHERE idSiswa='$myusername' and password='$mypassword'"));

$ortu = mysql_num_rows(mysql_query("SELECT * FROM wali_murid WHERE idwali_murid='$myusername' and password='$mypassword'"));

$guru = mysql_num_rows(mysql_query("SELECT * FROM guru WHERE idGuru='$myusername' and password='$mypassword'"));

if($siswa==1){
session_start();
		$_SESSION['user']=$myusername;
		$_SESSION['hak']="siswa";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
else if($ortu==1){
session_start();
		$_SESSION['user']=$myusername;
		$_SESSION['hak']="ortu";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}else if($guru==1){
session_start();
		$_SESSION['user']=$myusername;
		$_SESSION['hak']="guru";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}else{
echo "<script>alert('Login gagal!'); document.location.href=\"index.php\"</script>";
}
?>
