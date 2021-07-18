<?php
include('dsession.php');
if(!isset($_SESSION['login_user'])){
header("location: dlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin:auto;
  text-align: center;
  font-family: arial;
  font-size: 30px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}
body{padding-top:50px;
  padding-right:1100px;}

}
</style>
</head>
<body>
<div class="card">

  <img src="bprof.png" alt="profileimg" style="width:100%">
  <b id="welcome"><?php echo $login_session; ?></i></b>
  <p><button>Profile</button></p>
  <p><button>Ratings And Customer FeedBack</button></p>
  <p><button>Customer Location</button></p>
  <p><button  onclick="window.location.href='flogout.php';" >LOGOUT</button> <p>
</div>
</form>


</body>
</html>