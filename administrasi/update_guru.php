<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$nama = ucfirst($_POST['nama']);
$wali = $_POST['wali'];
$password = $_POST['password'];
$alamat = ucfirst($_POST['alamat']);

//script untuk upload
$nama_gambar=$_FILES['file']['name'];

$uploaddir='foto/';
$alamatfile=$uploaddir.$nama_gambar;

if($password=="123456789"){
$pass = "";
}else{
$pass = ", password = md5($password)";
}

if($nama_gambar==""){
$foto="";
}else{
$foto=", foto='$alamatfile'";
}

if (move_uploaded_file($_FILES['file']['tmp_name'],$alamatfile)){
}
$sql = mysql_query("UPDATE guru SET idGuru = '$id', nama = '$nama' $pass,alamat = '$alamat' $foto, wali_kelas = '$wali' WHERE idGuru = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_guru.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_guru.php"</script><?php
}
//Copyright © 2011 Andi Sholihin
?>