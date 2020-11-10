<?php  
  session_start();
  if (isset($_SESSION['username'])) {
  header('location:index.php'); }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Form Pendaftaran</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>SIGNUP</h2>
        <div class="underline-title-signup"></div>
      </div>
      <form method="post" class="form" action="prosesdaftar.php">
        <label for="user-name" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="Sign up" />
        <a href="login.php" id="signup">Already have an account?</a>
      </form>
    </div>
  </div>
</body>
</html>
