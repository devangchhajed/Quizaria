<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Quizaria</title>

		<!-- My CSS -->
			<link rel="stylesheet" href="../css/w3.css">
			<link rel="stylesheet" href="../css/w3-theme.css">
			<link rel="stylesheet" href="../css/style.css">
			<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
			
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/agency.css" rel="stylesheet">

        <!-- Custom Fonts -->
<!--        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  
  <!DOCTYPE html>
<html>
<title>Quizaria - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<body>

<?php
	require 'config.php';

	session_start();
/*if($_SERVER['REMOTE_ADDR']!="127.0.0.1")
{
		  header("Location:../index.php");
  exit();

}*/
	
	if(empty($_SESSION["username"]))
	{
		  header("Location:../index.php");		
	}
	

?>
<nav class="w3-sidenav w3-light-grey" style="width:15%">
<h2 class="w3-center">Area You can<br> Access</h2>
	<a href='viewreg.php'>Regesterations</a>
	<a href='viewnoti.php'>Notification</a>
	<a href='sqledit.php'>SQL Edit</a>
	</br>
  <a href="logout.php">Logout</a>		

  
  

  </nav>
<div id="main" style="margin-left:15%"> <!-- Start main -->

	<header class="w3-container w3-blue-grey">
		<h1>Quizaria - Admin Panel</h1>
		<div align="right">
				User Logged In : <?php echo $_SESSION["username"];?> </br>
				User IP : <?php echo $_SERVER['REMOTE_ADDR']; ?> <br>
		</div>
	</header>
	