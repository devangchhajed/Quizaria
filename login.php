<?php
include("config.php");

$email=trim($_POST['LoginEmail']);
$password=trim($_POST['LoginPassword']);

	if($email!="" or $password!="") 
	{
		$sel=$conn->query("select * from users where email='$email' ");
		$arr=mysqli_fetch_array($sel,MYSQLI_ASSOC);

		if(($arr['email']==$email) and ($arr['password']==$password))	
		{
			session_start();
			$_SESSION['name']=$arr['name'];
			$_SESSION['score']=$arr['score'];
			$_SESSION['email']=$email;
			echo "<script>location.href='index.php'</script>";
		}
		else	
		{
			echo "<script>location.href='index.php?LoginFailed=2'</script>";
		}
	}
	else	
	{
		echo "<script>location.href='index.php?LoginFailed=1'</script>";
	}
	
?>