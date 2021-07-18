<?php
include('clogval.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: cprofile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<center><link href="s.css" rel="stylesheet" type="text/css">
<h1><b>CUSTOMER LOGIN</b></h2></center>
  <style>body{background-image: url("cus3.jpg");
  height: 100%; 
  background-position: center ;
  background-repeat: no-repeat;
  background-size: cover;}</style>
</head>
<center><body>
<form action="" method="post">
<input  name="username" placeholder="username" type="text" required></br>
<input name="password" placeholder="password" type="password" required><br><br>
<input name="submit" class="login" type="submit" value=" LOGIN">
<span><?php echo $error; ?></span>
</form>
<hr color=white width=30% >
 <div><b>Don't have an account ?</b></div><br>
 <b><input type="button" class="login" onclick="window.location.href='fsignup.html';" value="SIGN UP"></b>
</body></center>
</html>