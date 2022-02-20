<!DOCTYPE>
<html>
<head>
<title></title>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>    
</head>
<body>
<form action="inputpegawai1.php" name="form1" method="post" enctype="multipart/form-data" onsubmit="return cekform()">
    
  <div class="form-group col-sm-8">
    <label>NIP</label>
    <input type="nip" name="nip" class="form-control" id="nip"  placeholder="Enter nip">
  </div>
  <div class="form-group col-sm-8">
    <label>Nama</label>
    <input type="nama" name="nama" class="form-control" id="nama" placeholder="Enter nama">
  </div>
 <div class="form-group col-sm-8">
    <label >No Telepon</label>
    <input type="no_tlp" name="no_tlp" class="form-control" id="no_tlp" placeholder="Enter No Telepon">
  </div>
  <div class="form-group col-sm-8">
    <label>Jabatan</label>
    <input type="jabatan" name="jabatan" class="form-control" id="jabatan" placeholder="Enter jabatan">
  </div>
  <div class="form-group col-sm-8">
    <label>Golongan</label>
    <select name="golongan">
    	<option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
    </select>
  </div>
  <div class="form-group col-sm-8">
    <label>Gaji</label>
    <input type="gaji" name="gaji" class="form-control" id="gaji" placeholder="Enter gaji">
  </div>
  <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
  <div class="form-group col-sm-8">
    <label>Nama User</label>
    <input type="nama_user" name="nama_user" class="form-control" id="nama_user" value="<?php echo $_SESSION['username']; ?>"readonly>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href ="homeadmin.php" button type="submit" class="btn btn-primary">Back</a>
</form>

</body>
</html>