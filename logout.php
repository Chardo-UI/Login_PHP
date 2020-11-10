<?php  
	
	session_start();
	session_destroy();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="card">
    	<div id="card-content">
      		<div id="card-title">
        		<h2>LOGOUT</h2>
        	<div class="underline-title-logout"></div>
      		</div>
			<div align="center">
				<h2>Anda berhasil logout</h2>
				Silahkan klik <b><a href="login.php">disini</a></b> untuk login kembali
			</div>
		</div>
	</div>
</body>
</html>