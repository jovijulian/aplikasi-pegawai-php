<?php
include('login.php'); // Memasuk-kan skrip Login 

if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
	header("location: homeadmin.php");
} elseif ($_SESSION['level'] == 'user') {
	header("location: homeuser.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="style.css"/>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form action="" method="post">
			<h2>Login</h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>

  </body>
</html>






