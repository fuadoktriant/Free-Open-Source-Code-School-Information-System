<link rel="stylesheet" href="style4.css" type="text/css" />
<ul class="acc" id="acc">
	<li>
		<h3 align="center">Nilai</h3>
		<div class="acc-section">
			<div class="acc-content">
			<a href="?page=lihat_jadwal"><center><img src="images/jadwal.png" width="50" height="50" border="0"><br />Jadwal Pelajaran</center></a><br />
			<a href="?page=input_nilai"><center><img src="images/input.png" width="50" height="50" border="0"><br />
			Input Nilai
			</center></a><br />
			<a href="?page=lihat_nilai"><center>
<img src="images/grafik.png" width="50" height="50" border="0"><br />
			Lihat Nilai
			  </center></a>
			</div>
		</div>
	</li>
	<li>
		<h3 align="center">Biodata</h3>
		<div class="acc-section">
			<div class="acc-content" align="center">
		<a href="?page=profil_guru"><center><img src="images/ortu.png" width="50" height="50" border="0"><br />
		Biodata Guru
		</center></a>
			</div>
		</div>
	</li><li>
		<h3 align="center">Tentang</h3>
		<div class="acc-section">
			<div class="acc-content" align="center">
		<a href="?page=tentang"><center><img src="images/about.png" width="50" height="50" border="0"><br />Tentang Project</center></a>
			</div>
		</div>
	</li>
</ul>

<script type="text/javascript" src="script2.js"></script>

<script type="text/javascript">

var parentAccordion=new TINY.accordion.slider("parentAccordion");
parentAccordion.init("acc","h3",0,0);

var nestedAccordion=new TINY.accordion.slider("nestedAccordion");
nestedAccordion.init("nested","h3",1,-1,"acc-selected");

</script>