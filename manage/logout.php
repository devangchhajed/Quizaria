<?php


	session_start();


$_SESSION = array(); session_destroy();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header("Location:../index.php");		



?>