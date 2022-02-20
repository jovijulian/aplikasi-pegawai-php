<?php

include 'koneksi.php';
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
$nip = $_GET['nip'];
$sql = "SELECT nip, nama, jabatan, golongan, nama_user, no_tlp FROM pegawai WHERE nip = '$nip'";

$result = mysqli_query($db, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$nip = $row['nip'];
		$nama =$row['nama'];	
        $no_tlp =$row['no_tlp'];
        $jabatan =$row['jabatan'];
        $golongan =$row['golongan'];
        $namauser =$row['nama_user'];
			
    }
} else {
    echo "0 results";
}



?>

<html>
<head>
<title>Edit Siswa</title>
</head>
<center>
<h1>Edit</h1>
<body>
<p>Edit Data Pegawai</p>
<form action="updatepegawai.php" method="post">
<div id="formulir">
NIP:</br><input name="nip" class="textField" type="text" readonly="true" value="<?= $_GET['nip'] ?>"/></br>
Nama:</br><input name="nama" class="textField" type="text" value="<?= $nama?>" /></br>
No Telepon:</br><input name="no_tlp" class="textField" type = "text" value="<?= $no_tlp ?>" /></br>
Jabatan :</br><input name="jabatan" class="textField" type="text" value="<?= $jabatan ?>" /></br>
Golongan :</br><input name="golongan" class="textField" type="text" value="<?= $golongan ?>" /></br>


<input class="textField" type="submit" value="Save"/>
</div>
</form>
</body></center>

</html>
