<?php
include "../include/config.php";

$hajar = mysql_query("update spp set nis='$_POST[nis]',bulan ='$_POST[bulan]', tgl_bayar='$_POST[tgl]',jumlah='$_POST[jumlah]' where id = '$_POST[id]'");

$kelas = mysql_fetch_array(mysql_query("select kelas from siswa where idSiswa = '$_POST[nis]'"));
?>
<script>
	document.location.href="lihat_spp.php?kelas=<?php echo $kelas['kelas']; ?>";
</script>