<?php
include "../include/config.php";

$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$ruang = $_POST['ruang'];
$jumlah = $_POST['jumlah'];

$nama = "$kelas $jurusan $ruang";

$query = mysql_query("INSERT INTO ruang_kelas (nama, jumlah_siswa) VALUES ('$nama', '$jumlah')");

if(!$query){
?>
<script>alert('Terjadi kesalahan saat input data\nmungkin nama kelas sudah ada');document.location.href="input_kelas.php"</script>
<?php
}else{
?>
<script>document.location.href="lihat_kelas.php"</script>
<?php
}
//Copyright © 2011 Andi Sholihin
?>