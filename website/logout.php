<?php 
session_start();
session_destroy();
unset($_SESSION['name']); 
$_SESSION['message']="You are now logged out";
header("location: http://localhost/website/index.php"); 
?> 