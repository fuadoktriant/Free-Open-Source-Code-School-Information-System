<?php 
include "../../include/conf_user.php";
if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT idSiswa FROM wali_murid_has_siswa WHERE idwali_murid = '$_SESSION[user]'"));
$nis = $id['idSiswa'];
}

$pilih = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE idSiswa='$nis'"));

$id = mysql_fetch_array(mysql_query("SELECT idRuang_Kelas FROM ruang_kelas WHERE nama = '$pilih[kelas]'"));

$query = mysql_query("SELECT * FROM guru_has_mata_pelajaran NATURAL JOIN mata_pelajaran_has_ruang_kelas WHERE idRuang_Kelas = '$id[idRuang_Kelas]'");

$kls = mysql_fetch_array(mysql_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = '$id[idRuang_Kelas]'"));
//Copyright © 2011 Andi Sholihin
?>
<div align="center">
<h1><div align="center">Jadwal Pelajaran <?php if($kls['nama']!=""){echo "Kelas $kls[nama]";} ?></div></h1><br />
</div>

<hr><br />
<script type="text/javascript" src="js/tinybox.js"></script>
<link rel="stylesheet" href="js/style.css" />
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
        <table width="1000" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="48"><h3>No</h3></th>
                  <th width="101"><h3>Hari</h3></th>
                  <th width="341"><h3>Mata Pelajaran</h3></th>
                  <th width="186"><h3>Jam Pelajaran</h3></th>
                  <th width="242"><h3>Guru Pengajar</h3></th>
				  <th width="81" class=nosort><h3>Foto Guru </h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($hasil = mysql_fetch_array($query)){
			$plj = mysql_fetch_array(mysql_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$hasil[idmata_pelajaran]'"));
			$guru = mysql_fetch_array(mysql_query("SELECT * FROM guru WHERE idGuru = '$hasil[idGuru]'"));
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$hasil[hari]</td>
			<td>$plj[nama]</td>
			<td>$hasil[jampelajaran]</td>
			<td>$guru[nama]</td>
			<td>
			<a onClick=\"tampil.box.show({image:'../../administrasi/$guru[foto]',boxid:'frameless',animate:true,openjs:function(){openJS()}})\" style=\"cursor:pointer\"><img src=icon/rinci.png border=0></a>
			</td>
            </tr>";
			}
			//Copyright © 2011 Andi Sholihin, Achmad Fauzi & Qutsiyah (RPL Final Project)
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