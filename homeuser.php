<!DOCTYPE html>
<html>
<head>
  <title>Halaman User</title>
  <link rel="stylesheet" href="tampilanCss.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
  crossorigin="anonymous"></script>
</head>
<body>
<div id='cssmenu'>
<ul>
   
    <li><a href='viewpegawaiUser.php'><span>View Pegawai</span></a></li>
   <li><a href='logout.php'><span>logout</span></a></li>
</ul>
</li>
</li>
</li> 
</li> 
</li> 
</li> 
</div>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<center><h1>Halaman User</h1>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></center>

</body>
</html>