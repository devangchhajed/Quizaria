<?php
	session_start();
	require 'config.php';
	date_default_timezone_set("Asia/Kolkata");

	$page_title="QuiZAria 16";
	$user_score=0;
		if(isset($_SESSION["name"])||isset($_SESSION["email"]))
		{
			$sql='select score from users where email="'.$_SESSION["email"].'"';
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				// Fetch one and one row
				$row = $result->fetch_assoc();				
				$user_score=$row['score'];
				// Free result set
				mysqli_free_result($result);
			}

			mysqli_close($conn);
		}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $page_title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico" type="image/ico" sizes="16x16">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="./js/noclick.js"></script>

 </head>
<body>


<nav class="navbar navbar-default" style="position:fixed; width:100%; z-index:200;">
  <div class="container-fluid">
    <div class="navbar-header" style="">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nnavbar">
        <span class="icon-bar" style="background-color: #000000;"></span>
        <span class="icon-bar" style="background-color: #000000;"></span>
        <span class="icon-bar" style="background-color: #000000;"></span> 
      </button>
      <a class="navbar-brand" href="./."><img src="./images/navbar.png" height="32" style="margin-top:-7px;"></a>
    </div>
	
    <div class="collapse navbar-collapse" id="nnavbar">
    <ul class="nav navbar-nav">
      <li><a href="./.">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rounds <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="round1D.php">Round 1</a></li>
          <li><a href="round2.php">Round 2</a></li>
        </ul>
      </li>
      <li data-toggle="modal" data-target="#notificationModal"><a href="#">Notification</a></li>
      <li><a href="leaderboard.php">LeaderBoard</a></li>
      <li><a href="coordinators.php">Coordinators</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	
  <?php
	
	if(isset($_SESSION["name"])||isset($_SESSION["email"]))
	{
		echo'
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> '.$_SESSION["name"].'  <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="score.php?id='.$_SESSION["email"].'">Score : '.$user_score.'</a></li>
          <li><a href="profile.php">Profile</a></li>
        </ul>
      </li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
		
	}
	else
	{
		echo'
      <li data-toggle="modal" data-target="#registerModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li data-toggle="modal" data-target="#loginModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
	}

	
?>

    </ul>
  </div>
  </div>
</nav>
  
 <body class="bg-grey">