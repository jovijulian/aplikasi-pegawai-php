<?php

include 'koneksi.php';

$nip = $_GET['nip'];
$sql = "DELETE FROM pegawai where nip='$nip'";
$query = mysqli_query($db, $sql);
if ( $query === true){
    $content1 ="<h1>Berhasil Dihapus </h1> </br>";
    $content2 ="<a href='viewpegawai.php'>Back</a>"; 
}else{
    echo "error deleting " . $db->error;
}

?>
<html>
<head>
<title>Delete</title>
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