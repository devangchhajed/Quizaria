<?php

// Grab User submitted information
$user = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

if("admin"==$user && "devang"==$pass)
{    echo"You are a validated user.";
	  echo '<script>  window.location="welcome.php";</script>';session_start();
	  $_SESSION["username"]=$user;
	  
  exit();
}else
    echo"Sorry, your credentials are not valid, Please try again.";
?>