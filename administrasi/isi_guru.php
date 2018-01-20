<?php
include "../include/config.php";


$id = $_POST['id'];
$nama = ucwords($_POST['nama']);
$password  = $_POST['password'];
$walikelas = $_POST['wali'];
$alamat  = ucwords($_POST['alamat']);

//script untuk upload
$nama_gambar=$_FILES['file']['name'];
$uploaddir='foto/';
$alamatfile=$uploaddir.$nama_gambar;
if (move_uploaded_file($_FILES['file']['tmp_name'],$alamatfile)){
$query = mysql_query("INSERT INTO guru (idGuru, nama, alamat, wali_kelas, password, foto) VALUES ('$id','$nama','$alamat','$walikelas',md5('$password'),'$alamatfile')");
}
if(!$query){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_guru.php";
</script><?php
}else{
?>
<script>document.location.href="lihat_guru.php"</script><?php
}
?>