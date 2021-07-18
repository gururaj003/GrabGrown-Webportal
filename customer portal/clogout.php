<?php
session_start();
if(session_destroy()){ // Destroying All Sessions 
header("Location: clogin.php"); // Redirecting To Home Page
}
?>