<?php  
 $connect = mysqli_connect("localhost", "root", "mysql", "testing");  
 include('csession.php');
if(!isset($_SESSION['login_user'])){
header("location: clogin.php"); // Redirecting To Home Page
}
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Customer</title>   
      <center>  <h1>SELECT PRODUCTS</h1>   </center> 
  <meta name="viewport" content="width=device-width, initial-scale=1 height=auto">
	<link rel="stylesheet" href="hme.css">
	</head> 
	<body> 

	
<ul>
<li><a1><img src="1logo.jpg"width="50"></a1></li>
  <li><a2><img src="1name.jpg"width="100%"></a2></li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>
                <br />                
                <br />  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '<a href="index2.php"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" ></a> ';  
                }  
                ?>   
      </body>  
 </html>  