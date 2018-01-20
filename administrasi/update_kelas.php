<?php
include "../include/config.php";

$id = $_POST['id'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$ruang = $_POST['ruang'];
$jumlah = $_POST['jumlah'];

$nama = "$kelas $jurusan $ruang";

$query = mysql_query("UPDATE ruang_kelas SET nama = '$nama', jumlah_siswa = '$jumlah' WHERE idRuang_Kelas = '$id'");

if(!$query){
?>
<script>alert('Terjadi kesalahan saat Update data\nmungkin nama kelas sudah ada');document.location.href="edit_kelas.php?id=<?php echo $id?>"</script>
<?php
}else{
?>
<script>document.location.href="lihat_kelas.php"</script>
<?php
}
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>