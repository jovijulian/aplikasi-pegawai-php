<?php

include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$jabatan = $_POST['jabatan'];
$golongan = $_POST['golongan'];
$linkKeTable = "</br><a href='viewpegawai.php'>Back</a>";

$sql = "UPDATE pegawai SET `nama`='$nama',
`no_tlp`='$no_tlp',
`jabatan`='$jabatan',
`golongan`='$golongan'
WHERE `nip`='$nip'";

if (mysqli_query($db, $sql) === TRUE) {
    $content1 = "<h1>Record updated! successfully</h1>";
	$content2 = $linkKeTable;
} else {
    $content1 = "Error: " . $sql . "<br>" . $db->error;
}





?>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="update.css"/>
</head>
<body>

<center>
<div id="content">
<?= $content1 ?> 
<?= $content2 ?> 
</div>
</center>
</body>
</html>