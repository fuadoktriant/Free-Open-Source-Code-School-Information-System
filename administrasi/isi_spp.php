<?php 
include "../include/config.php";

$in = mysql_query("insert into spp values ('','$_POST[nis]','$_POST[bulan]','$_POST[tgl]','$_POST[jumlah]')");

if($in){
?>
<script>
var lagi=confirm('Data telah disimpan, Apakah ingin input data pembayaran SPP lagi?')
if(lagi){
document.location.href="input_spp.php"	
}else{
document.location.href="lihat_spp.php"	
}
</script>
<?php
}else{
?>
<script>alert('input data gagal karena : <?php echo mysql_error(); ?>');history.back();</script>
<?php	
}
?>