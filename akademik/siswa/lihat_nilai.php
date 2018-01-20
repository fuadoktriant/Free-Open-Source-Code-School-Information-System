<?php 
include "../../include/conf_user.php";
if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT idSiswa FROM wali_murid_has_siswa WHERE idwali_murid = '$_SESSION[user]'"));
$nis = $id['idSiswa'];
}
//Copyright © 2011 Andi Sholihin
$ambil = mysql_query("SELECT * FROM siswa_has_mata_pelajaran WHERE idSiswa = '$nis' ORDER BY thn_ajaran DESC");
?>
<div align="right">
<h1><div align="center">Rekapitulasi Nilai  Siswa</div></h1><br />
<table border="0" align="center">
</table></div>
<hr>
<div align="center">
<table border="0">
  <tr>
    <td width="130">Nama Lengkap </td>
    <td width="11">:</td>
    <td width="207"><?php $sql = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE idSiswa = '$nis'"));
	echo $sql['nama'];
	 ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $sql['kelas'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $sql['alamat'];?></td>
  </tr>
</table><hr />
</div>
<br />
<link rel="stylesheet" href="style2.css" />
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
        <table width="1001" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="46"><h3>No</h3></th>
                  <th width="210"><h3>Mata Pelajaran</h3></th>
				  <th width="103"><h3>Semester</h3></th>
				  <th width="122"><h3>Tahun Ajaran</h3></th>
                  <th width="114"><h3>Nilai Afektif</h3></th>
                  <th width="138"><h3>Nilai Komulatif</h3></th>
				  <th width="148"><h3>Nilai Psikomotorik</h3></th>
				  <th width="119"><h3>Nilai Rata-rata</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			$kls = join('+',explode(" ",$kelas));
			while ($nilai= mysql_fetch_array($ambil)){
			$plj = mysql_fetch_array(mysql_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$nilai[idmata_pelajaran]'"));
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$plj[nama]</td>
			<td>$nilai[semester]</td>
			<td>$nilai[thn_ajaran]</td>
			<td>$nilai[afektif]</td>
			<td>$nilai[komulatif]</td>
			<td>$nilai[psikomotorik]</td>
			<td>$nilai[rata]</td>
            </tr>";
			}
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