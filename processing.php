<?php
	session_start();
	require 'config.php';
	if(!isset($_SESSION['visitCount']))
	$_SESSION['visitCount']=0;
/*	else
	{
	echo '<script>alert("Either You have clicked back button or want to restart quiz which is not allowed."); window.location="/quizaria"</script>';
	exit(0);		}*/
	$questions = array();
	
for($i=1;$i<=10;$i++)
{	
	$quesseries[$i]=$i;
}
	shuffle($quesseries);

	$sql="select * from qna order by id";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$i=1;
		while($row=$result->fetch_assoc())
		{
			$questions[$i]=$row;
			$i++;
		}
	}
	$conn->close();
	//$quesseries = array_rand($quesseries,sizeof($quesseries));
	shuffle($quesseries);
	
	$_SESSION["counterArray"]=$quesseries;
    $_SESSION["mainArray"]=$questions;


//print_r($_SESSION["counterArray"]);
//echo "<br><br><br>";
//print_r($_SESSION["mainArray"]);
	require 'config.php';
	
	$sql="UPDATE users set score = 1 where email = '".$_SESSION['email']."'";
	$conn->query($sql);

echo '<div style="height:75px; width:auto;text-align: center;text-transform: capitalize;display: flex;  /* justify-content: center; */ /* align horizontal */  /* align-items: center; */font-family: monospace;font-size: 20px;width: 523px;margin: auto;">
<img src="loader.gif" style="height: 75px; width: 100px;">
<span style="
    position: relative;
    left: -21px;
    top: 24px;
">Please Wait, Starting the QUIZ in a moment...</span></div> <Script>window.location="playarea1.php"</script>';
 ?>