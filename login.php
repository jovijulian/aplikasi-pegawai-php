<?php 
// mengaktifkan session pada php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db,"select * from login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	echo 'yey';

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai Administrator
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard Administrator
		header("location:homeadmin.php");

	// cek jika user login sebagai Operator
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard Operator
		header("location:homeuser.php");	
	}else{
		header("location:index.php?pesan=gagal");
	}
}