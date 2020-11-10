<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Sukses Login</title>
</head>
<body>
	<div align="center">
		Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
	</div>
</body>
</html>