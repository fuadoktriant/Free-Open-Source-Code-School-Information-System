<?php 
include "../include/config.php";
$kelas = $_GET['kelas'];
$pilih = mysql_query("SELECT nama FROM ruang_kelas");
$spp = mysql_query("select * from spp where nis in (select idSiswa from siswa where kelas = '$kelas')");
?>
<script type="text/javascript">
function valid(form){
var kelas = form.kelas.value;
if(kelas==""){
	alert('Pilih kelasnya dulu!');
	return false;
	}
return true;
}
</script>
<div align="center">
<h1><div align="center">Data Pembayaran SPP  <?php if($kelas!=""){echo "Kelas $kelas";} ?></div></h1><br /><hr>
<table border="0" align="center">
<form action="lihat_spp.php" name="form" method="get" onSubmit="return valid(this)" >
  <tr height="40">
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas" onChange="this.form.submit()" style="font-size:16px;">
	<option value="">-Pilih Kelas-</option>
	<?php
	while($hasil = mysql_fetch_array($pilih)){
	if($kelas==$hasil['nama']){
	echo "<option selected=\"selected\">$hasil[nama]</option>";
	}else{
	echo "<option>$hasil[nama]</option>";
	}}
	?>
    </select></td>
  </tr>
 </form>
</table>
</div>

<hr><br />
<link rel="stylesheet" href="style.css" />
<body>
	<div class="page" id="tablewrapper">
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onChange="sorter.search('query')"></select>
                <input type="text" id="query" onKeyUp="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Hasil <span id="startrecord"></span>-<span id="endrecord"></span> dari <span id="totalrecords"></span></div>
        		<div><a href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>
        <table width="848" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="39" height="28"><h3>No</h3></th>
                  <th width="101"><h3>NIS</h3></th>
                  <th width="217"><h3>Nama Siswa </h3></th>
                  <th width="143"><h3>Tanggal</h3></th>
                  <th width="126"><h3>Bulan</h3></th>
                  <th width="142"><h3>Jumlah</h3></th>
                  <th width="79" class=nosort><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			$kls = join('+',explode(" ",$kelas));
			while ($hasil = mysql_fetch_array($spp)){
				$siswa=mysql_fetch_array(mysql_query("select nama from siswa where idSiswa = '$hasil[nis]'"));
			$i++;
			echo"<tr align=\"center\" style=\"font-size:80%\">
					<td>$i</td>
					<td>$hasil[nis]</td>
					<td>$siswa[nama]</td>
					<td>$hasil[tgl_bayar]</td>
					<td>$hasil[bulan]</td>
					<td>Rp. $hasil[jumlah]</td>
					<td>
						<a href='edit_spp.php?id=$hasil[id]'><img src='icon/update.png' border='0'></a>|<a href='hapus_spp.php?id=$hasil[id]' onclick=\"return confirm('Yakin akan menghapus data?')\"><img src=icon/hapus.png border=0></td>
            </tr>";
			}
			//Copyright © 2011 Andi Sholihin
			?>
            </tbody>
      </table>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1,true)" />
                </div>
                <div>
                	<select id="pagedropdown"></select>
				</div>
                <div>
                	<a href="javascript:sorter.showall()">view all</a>
                </div>
          </div>
			<div id="tablelocation">
            	<div>
                    <select onChange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Data Per Halaman</span>
                </div>
                <div class="page">Halaman <span id="currentpage"></span> dari <span id="totalpages"></span></div>
            </div>
        </div>
</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:0,
		sortdir:1,
		//sum:[8],
		//avg:[6,7,8,9],
		//columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
</body>