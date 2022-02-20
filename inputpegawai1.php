<?php

session_start();

include 'koneksi.php';

$nipDapat = $_POST['nip'];
$namaDapat = $_POST['nama'];
$no_tlpDapat = $_POST['no_tlp'];
$jabatanDapat = $_POST['jabatan'];
$pegawaiDapat = $_POST['golongan'];  
$namauserDapat = $_POST['nama_user'];


$inputBerhasil = "Data Yang Anda Masukan Berhasil";
$balikInsert = "</br><a href='inputpegawai.php'>Back </a>";
$viewAllSiswa = "</br><a href='viewpegawai.php'>View All </a>";

$sql = "INSERT INTO pegawai (nip,nama,no_tlp,jabatan,golongan,nama_user)
VALUES ('$nipDapat', '$namaDapat', '$no_tlpDapat', '$jabatanDapat', '$pegawaiDapat', '$namauserDapat')";

$exec = mysqli_query($db, $sql);

if ($exec === TRUE) {
    $content1="<h1>Data Yang Anda Masukan Telah Berhasil<h1></br>";
	$content="$viewAllSiswa";
} else {
    $content1="<h1>Mohon isi full data<h1>";
	$content="$balikInsert";
}

?>
<!DOCTYPE>
<html>
<head>
<title>Record Input Pegawai</title>
<link rel="stylesheet" href=""/>
</head>
<body>
<center>
<div id="content">
<?=$content1?>
<?=$content?>
</div>
</center>
</body>
</html>