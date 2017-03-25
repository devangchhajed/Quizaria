<?php

	if(isset($_GET["logout"]))
	{
		$error=htmlspecialchars($_GET['logout']);
		$message="";
		if($error=="1")
		{
			echo '	
			<div class="alert alert-info">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Logged Out : </strong>You have been Logged Out 
			</div>';
		}
	}

	if(isset($_GET["LoginFailed"]))
	{
		$error=htmlspecialchars($_GET['LoginFailed']);
		$message="";
		if($error=="1")
			$message="Please fill All Details.";
		if($error=="2")
			$message="Wrong Email/Password. Wanna try to <a href='./reset.php'>Recover  Password</a>?";
		echo '	
		<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error : </strong>'.$message.'
		</div>';
	}

	if(isset($_GET["SignupAttempt"]))
	{
		$error=htmlspecialchars($_GET['SignupAttempt']);
		$message="";

		if($error=="3")
		{
					echo '
		<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Wow!! : </strong> Your account has been successfully created.
		</div>';

		}else{
			
		if($error=="1")
			$message="Please fill All Details.";
		if($error=="2")
			$message=htmlspecialchars($_GET["Error"]);
		if($error=="4")
			$message=htmlspecialchars($_GET["Error"]);

		echo '	
		<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error : </strong>'.$message.'
		</div>';
		}
	}
	
?>