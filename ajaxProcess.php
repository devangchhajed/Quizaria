<?php

session_start();
require 'config.php';
if(isset($_REQUEST['answer']))
{
//echo preg_replace("/[^a-zA-Z0-9]/", '', $_REQUEST['answer']);
$answer = sha1(preg_replace("/[^a-zA-Z0-9]/", '', $_REQUEST['answer']));
$quesID = $_SESSION['currentQuestion'];
$questions = $_SESSION['mainArray'];
$quesseries=$_SESSION['counterArray'];
$timeLeft = $_REQUEST['timeLeft'];
$index = $_REQUEST['quesID'];
$timeStart = $_REQUEST['timeStart'];
$timeTaken=$timeStart-$timeLeft;
if($timeTaken==0)
	$timeTaken=1;
	
	
$chkAnswer = sha1(preg_replace("/[^a-zA-Z0-9]/", '', $questions[$index]['rans']));
//echo preg_replace("/[^a-zA-Z0-9]/", '', $_REQUEST['answer']).":".$answer."<br>".preg_replace("/[^a-zA-Z0-9]/", '', $questions[$index]['rans']).":".$chkAnswer;
	if($answer === $chkAnswer)
{
		
		echo "Time Taken: ".$timeTaken." sec.<br>";
		$_SESSION['points'] += $questions[$index]['points'];
		$_SESSION['points'] += $questions[$index]['points']*ceil(10/$timeTaken);
		echo "<p>Total Points: ".$_SESSION['points'];
		
}
else
{
		echo "Time Taken: ".$timeTaken." sec.<br>";
		echo "<p>Total Points: ".$_SESSION['points'];
		
	
}
$_SESSION["score"]=$_SESSION['points'];

//CALCULATE POUNTS AND UPDATE TABLE
}

else if(isset($_REQUEST['nextQuestion']))
{
$questions = $_SESSION['mainArray'];
$quesseries = $_SESSION['counterArray'];
$qNo = ++$_REQUEST['questionNO'];

if($qNo==sizeof($quesseries))
{

$_SESSION["score"]=$_SESSION['points'];
	echo "<script>alert('Total Score: ".$_SESSION['points']."'); $('#textArea').text('Redirecting to Quiz Over'); window.location='quizOver.php'</script>";
exit(0);
}
$timeStart = $_REQUEST['timeStart'];
$index = $quesseries[$qNo];
$qN=$qNo+1;

echo '
		<div class="row well">
		Question '.$qN.':  '.$questions[$index]["ques"].'
		</div>
		<input type="hidden" id="questionID" value="'.$index.'">
		<input type="hidden" id="questionNumber" value="'.$qNo.'">
		<input type="hidden" id="timeStart" value="'.$timeStart.'">
		<div class="row" style="width:100%">

			<button type="button" style="margin:10px;" id="answer1" onclick="answer(this)"  class="btn btn-primary">'.$questions[$index]["ans1"].'</button>
			<button type="button" style="margin:10px;"  id="answer2" onclick="answer(this)"  class="btn btn-primary">'.$questions[$index]["ans2"].'</button>
		</div>
		<div class="row" style="width:100%">
			<button type="button" style="margin:10px;" id="answer3"  onclick="answer(this)"  class="btn btn-primary">'.$questions[$index]["ans3"].'</button>
			<button type="button" style="margin:10px;" id="answer4" onclick="answer(this)"  class="btn btn-primary">'.$questions[$index]["ans4"].'</button>
		</div>
		';







}


else if(isset($_REQUEST['update']))
{

$sql="UPDATE users set score = ".$_SESSION['points']." where email = '".$_SESSION['email']."'";
	if($conn->query($sql)===true)
	{
		echo "Points Updated by Ajax";
	}
}


?>