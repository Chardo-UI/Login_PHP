<?php 
	session_start();
	if (isset($_SESSION['username'])) {
	header('location:index.php');}
	require_once("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Form Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="proseslogin.php">
        <label for="user-name" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <a href="daftar.php" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>
</html>