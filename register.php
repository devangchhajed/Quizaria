<?php
	require("config.php");

	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	$mobile=htmlspecialchars($_POST['mobile']);
	$college=htmlspecialchars($_POST['college']);
	if($email!="" && $password!="" && $name!="" && $mobile!="" && $college!="") 
	{
        
        $nameresult = mysqli_query($conn,"select email from users where email='$email'");
        $nameresultset = mysqli_fetch_assoc($nameresult);
        if($nameresultset['email']!=$email) 
        {
			$dimage = "./images/dp/".rand(1,38).".jpg";
            $sql="insert into users(name, email, password, phone, college, score, dimage) values ('$name', '$email', '$password', '$mobile', '$college', 0, '$dimage')";
            if($conn->query($sql)===true)
            {
                session_start();
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                echo "<script>location.href='index.php?SignupAttempt=3'</script>";
            }
            else
            {
                echo "<script>location.href='index.php?SignupAttempt=2&Error=".$conn->error."'</script>";
            }
        }
        else
        {
            $cerror="Email Already Exist.";
            echo "<script>location.href='index.php?SignupAttempt=2&Error=".$cerror."'</script>";
        }
        

	}
	else	
	{
		echo "<script>location.href='index.php?SignupAttempt=1'</script>";
	}
	
?>