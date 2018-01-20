<?php
include "../../include/conf_user.php";
$kelas = $_GET['kelas'];
$pilih = mysql_query("SELECT * FROM ruang_kelas WHERE idRuang_Kelas IN (SELECT idRuang_Kelas FROM guru_has_mata_pelajaran WHERE idGuru = '$_SESSION[user]')");
$ambil = mysql_query("SELECT * FROM siswa WHERE kelas = '$kelas'");
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
<h1><div align="center">Rekapitulasi Nilai  <?php if($kelas!=""){echo "Kelas $kelas";} ?></div></h1><br /><hr>
<table border="0" align="center">
<form action="lihat_nilai.php" name="form" method="get" onSubmit="return valid(this)">
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
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
	<td width="118"><input type="submit" value="Tampilkan Nilai" /></td>
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
        <table width="709" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="53"><h3>No</h3></th>
                  <th width="120"><h3>NIS</h3></th>
                  <th width="231"><h3>Nama Siswa </h3></th>
                  <th width="213"><h3>Alamat</h3></th>
                  <th width="91" class=nosort><h3>Rincian Nilai</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			$kls = join('+',explode(" ",$kelas));
			while ($siswa = mysql_fetch_array($ambil)){
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$siswa[idSiswa]</td>
			<td>$siswa[nama]</td>
			<td>$siswa[alamat]</td>
			<td><a href=rincian_nilai.php?nis=$siswa[idSiswa]&kelas=$kls><img src=icon/rinci.png border=0></a></td>
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