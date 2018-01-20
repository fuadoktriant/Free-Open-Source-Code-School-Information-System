<?php
include "../include/config.php";

$kelas =$_POST['kelas'];
$semester =$_POST['semester'];
$tahun =$_POST['tahun'];
$nis =$_POST['nama'];
$pelajaran =$_POST['pelajaran'];
$afektif =$_POST['afektif'];
$komulatif =$_POST['komulatif'];
$psikomotorik =$_POST['psikomotorik'];
$rata = ($afektif+$komulatif+$psikomotorik)/3;

$bos = mysql_query("INSERT INTO siswa_has_mata_pelajaran VALUES ('$nis','$pelajaran','$semester','$tahun','$afektif','$komulatif','$psikomotorik',$rata)");
if(!$bos){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_nilai.php";
</script><?php
}else{
?>
<script>var ulang = confirm('Input Data Berhasil ^_^\nUlangi input data untuk kelas yang sama?');
if(ulang){
document.location.href="input2_nilai.php?kelas=<?php echo $kelas;?>&semester=<?php echo $semester;?>&tahun=<?php echo $tahun;?>";
}else{
document.location.href="lihat_nilai.php?nis=<?php echo $nis;?>&kelas=<?php $kls=mysql_fetch_array(mysql_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas='$kelas'")) ;echo $kls['nama'];?>";}</script><?php
}
//Copyright © 2011 Andi Sholihin
?>