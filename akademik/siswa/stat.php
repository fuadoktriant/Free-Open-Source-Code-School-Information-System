<?php
include "../../include/sambung.php";

// membaca parameter NIM dari <img src="stat.php?nim=...">
$nis = $_GET['nis'];

// menyiapkan array untuk menyimpan smt dan tahun
$smtThn = array();

// menyiapkan array untuk menyimpan ip
$nilai = array();

// memanggil modul JpGraph untuk membuat grafik batang dan garis
// modul ini terletak dalam folder bernama 'modul'
include ("modul/jpgraph.php");
include ("modul/jpgraph_bar.php");
include ("modul/jpgraph_line.php");

// query sql untuk mendapatkan nilai total setiap semester dari siswa
$query = "	SELECT semester, thn_ajaran, avg( rata ) AS nilai 
			FROM siswa_has_mata_pelajaran WHERE idSiswa =$nis
			GROUP BY thn_ajaran, semester
			ORDER BY thn_ajaran DESC,semester DESC";

$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
  // menyimpan data semester dan tahun hasil query ke dalam array $smtThn
  // smt dan tahun digabung dalam satu string untuk ditampilkan dalam sumbu-y grafik
  array_unshift($smtThn, $data['semester']." ".$data['thn_ajaran']);

  // menyimpan data nilai total hasil query ke dalam array $nilai
  array_unshift($nilai, $data['nilai']);
}

// membuat image ukuran 550 x 350 pixel
$graph = new Graph(700,350,"auto");

// membuat skala grafik. Nilai 100 di sini adalah nilai maksimum sumbu Y nya, mengingat nilai maks adalah 100
$graph->SetScale("textlin", 1, 100);

// membuat bayangan dari image
$graph->SetShadow();

// mengatur batas margin grafik
$graph->SetMargin(50,50,40,40);

// membuat bar plot dari data nilai
$barplot = new BarPlot($nilai);

// membuat line plot dari data nilai
$lineplot=new LinePlot($nilai);

// memberi warna merah pada bar plot
$barplot->SetFillColor("green");

// menampilkan value nilai pada setiap bar
$barplot->value->show();

// mengatur tampilan value nilai dengan format 1 digit desimal di belakang koma
$barplot ->value->SetFormat("%3.1f");

// mengatur ketebalan garis pada lineplot
$lineplot->SetWeight(2);

// mengatur posisi ujung line plot supaya terletak di tengah-tengah bar
$lineplot->SetBarCenter();

// menampilkan barplot ke dalam image
$graph->Add($barplot);

// menampilkan lineplot ke dalam image
$graph->Add($lineplot);

// menampilkan smt dan tahun pada sumbu X
$graph->xaxis-> SetTickLabels($smtThn);

// menampilkan title grafik
$graph->title->Set("Grafik Nilai Siswa");

// memberi label pada sumbu X
$graph->xaxis->title->Set("Tahun Ajaran");

// memberi label pada sumbu Y
$graph->yaxis->title->Set("Total Nilai Siswa");

// mengatur jenis font pada title, label sumbu X dan label sumbu Y
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// menampilkan output grafik
$graph->Stroke();
?>