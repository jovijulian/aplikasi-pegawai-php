<?php

include 'koneksi.php';

$dataHeadTable = "<table>
  <tr>
    <th>Nip</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Jabatan</th>
    <th>Golongan</th>
    <th>Nama User</th>
	<th>Delete</th>
	<th>Edit</th>

  </tr>";
  
  $data ="<tr> ";

$sql = "SELECT nip, nama, no_tlp, jabatan, golongan, nama_user FROM pegawai";

$result = mysqli_query($db, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nip = $row['nip'];
		$data = $data . "<tr>";
		
		$data = $data . "<td>" . $row['nip'] . "</td>";
		$data = $data . "<td>" . $row['nama']."</td>";
		$data = $data . "<td>" . $row['no_tlp']."</td>";	
		$data = $data . "<td>" . $row['jabatan']."</td>";
    $data = $data . "<td>" . $row['golongan']."</td>";
    $data = $data . "<td>" . $row['nama_user']."</td>";
		$data = $data . "<td>";
		$data = $data . "<a href='deletepegawai.php?nip=$nip'>Delete</a>  | ";
		$data = $data . "<a href='editpegawai.php?nip=$nip'>Edit</a>";
		$data = $data . "</td>";
		$data = $data . "</tr>";
    }
	$dataHeadTable = $dataHeadTable . $data . "</table>";
} else {
    echo "0 results";
}
?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<head>
<title></title>
<link rel="stylesheet" >
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="homeadmin.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>	
<div class="container-fluid">
<table class="table">
  <thead class="thead-light"
	<tr>	
		<th scope="col">Nip</th>
		<th scope="col">Nama</th>
		<th scope="col">No Telepon</th>
		<th scope="col">Jabatan</th>
		<th scope="col">Golongan </th>
    <th scope="col">Nama User </th>
		
	
		<th scope="col">Tindakan</th>
		
  </tr>
  <tr>
	<?= $data?> 
  </tr>
  
</thead>

</div>


</body>
</html>