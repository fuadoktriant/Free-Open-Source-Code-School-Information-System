<?php
include "../../include/conf_user.php";

$kelas =$_POST['kelas'];
$kelas = mysql_fetch_array(mysql_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = '$kelas'"));

$semester =$_POST['semester'];
$tahun =$_POST['tahun'];
$nis =$_POST['nama'];
$pelajaran =$_POST['pelajaran'];
$afektif =$_POST['afektif'];
$komulatif =$_POST['komulatif'];
$psikomotorik =$_POST['psikomotorik'];
$rata = ($afektif+$komulatif+$psikomotorik)/3;

$bos = mysql_query("UPDATE siswa_has_mata_pelajaran SET afektif = '$afektif', komulatif = '$komulatif', psikomotorik = '$psikomotorik', rata = '$rata' WHERE idSiswa = '$nis' AND idmata_pelajaran = '$pelajaran' AND semester = '$semester' AND thn_ajaran = '$tahun'");
//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
?>
<script>document.location.href="rincian_nilai.php?nis=<?php echo $nis;?>&kelas=<?php echo $kelas['nama']?>"</script>