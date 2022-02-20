<?php
include 'koneksi.php';
?>
<!DOCTYPE>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="tampilanCss.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
  crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" align="center">
    <h1>
      <center></center>
    </h1>

    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item active">
            <a class="nav-link" href="inputpegawai.php">Input Pegawai <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="viewpegawai.php">View Pegawai</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="inputgolongan.php">Input Golongan</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="viewgolongan.php">View Golongan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="InputHak.php">Input Hak akses</a>
              <a class="dropdown-item" href="viewHak.php">View Hak Akses</a>
              <a class="dropdown-item" href="logout.php">Logout</a>

            </div>
          </li>
        </ul>
      </div>
    </nav>


<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if(!$_SESSION['level']=="admin"){
		header("location:index.php?pesan=gagal");
	}

	?>
<center><h1>Halaman Admin</h1>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></center>
</body>

</html>