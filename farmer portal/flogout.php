<?php
session_start();
if(session_destroy()){ // Destroying All Sessions 
header("Location: flogin.php"); // Redirecting To Home Page
}
?>