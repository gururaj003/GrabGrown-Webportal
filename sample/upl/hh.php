<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>
 
<form  enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
 
 
</form>
</body>
</html>
<?php
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "mysql";
    $dbname = "farmer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From sign Where email = ? Limit 1";
     $INSERT = "INSERT Into sign (image) values(?)";
     if(isset($_POST['Submit1']))
     { 
       $filepath = "images/" . $_FILES["file"]["name"];
 
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
     {
      echo "<img src=".$filepath." height=200 width=300 />";
     } 
    else 
    {
      echo "Error !!";
    }
    } 

?>