<?php 
include "../include/config.php";
$hasil=mysql_query("SELECT * FROM guru");
//Copyright © 2011 Andi Sholihin
?>
<link rel="stylesheet" href="js/style.css" />
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="js/tinybox.js"></script>
<h1><center>Data Guru Pengajar</center></h1><br />
<body>
	<div id="tablewrapper">
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
        <table width="708" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="49"><h3>ID GURU</h3></th>
                  <th width="237"><h3>Nama Guru</h3></th>
                  <th width="146"><h3>Alamat</h3></th>
                  <th width="122"><h3>Wali Kelas</h3></th>
				  <th width="74" class=nosort><h3>Foto</h3></th>
				  <th width="79" class=nosort><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysql_fetch_array($hasil)){
			echo"<tr align=\"center\">
			<td>$baris[idGuru]</td>
			<td>$baris[nama]</td>
			<td>$baris[alamat]</td>
			<td>$baris[wali_kelas]</td>
			<td>
<a onClick=\"tampil.box.show({image:'$baris[foto]',boxid:'frameless',animate:true,openjs:function(){openJS()}})\" style=\"cursor:pointer\"><img src=icon/rinci.png border=0></a>

</td>";
			
		 if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
			echo "<td>
			<a href=edit_guru.php?id=$baris[idGuru]><img src=icon/update.png border=0></a>&nbsp;|
			<a href=hapus_guru.php?id=$baris[idGuru] onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data?')\"><img src=icon/hapus.png border=0></a>
			</td>
            </tr>";
			}}
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