<?php

include 'common_header.php'; 
	include 'notificationModal.php'; 
	require 'config.php';
			if(!isset($_SESSION["name"])||!isset($_SESSION["email"]))
			{
				echo '<script>window.location="round1.php"</script>';
			}	
			if($_SESSION["score"]!=0)
				echo '<script>alert("You can only Play once."); window.location="round1.php"</script>';
			
	$_SESSION['visitCount']++;
	
	if($_SESSION['visitCount']>1)
	{
	
	echo "<Script>alert('You have refreshed, and quiz is terminated. You are disqualified.'); window.location='quizOver.php';</script>";
	
	exit(0);
	}
$quesseries=$_SESSION["counterArray"];
$questions=$_SESSION["mainArray"];
$index=$quesseries[0];
$_SESSION['currentQuestion'] = $questions[$index]['id'];
$_SESSION['index'] = $index;
$_SESSION['questionNumber'] = 0;
$_SESSION['points'] = 0;
?>

<style>
.button-success, .button-error {
background:#3a78b8;
color:#ffffff;
padding:5px;
padding-left:4px;
padding-right:4px;
font-size:15px;
font-family:'arial';
border-radius:4px;
border:1px solid #87b0d9;
margin-bottom:4px;
line-height:34px;

}
</style>
  <body>
<div class="container" style="padding-top:50px;margin-bottom:100px;">
	<h2 style="text-align:center">Round 1</h3>
	<hr>
	<div class="questionImg">
		<img src="">
	</div>

	
<div class="row">

<div class=" col-sm-2">
	<div class="alert alert-info" style="margin:10px;">
		<strong>Time left : </strong>	
		<div id='timer' style="display:inline;"></div>
		<br>&nbsp;
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" id="pbar" style="width:0%">
				<div id='pbarp' style="display:inline;"></div>
			</div>
		</div>
	</div>
	<div id="textArea" class="alert" style="margin:10px;">
	Playing Info: 
	</div>
</div>	
	
	<div id="questionDIV" class="col-sm-8" style="margin:10px;text-align:center;">
		<div class="row well">
		Question 1: <?= $questions[$index]['ques'];?>
		</div>
		<input type="hidden" id="questionID" value="<?= $index; ?>">
		<input type="hidden" id="questionNumber" value="0">
			<input type="hidden" id="timeStart" value="1200">	
			<div class="row" style="width:100%">

			<button type="button" style="margin:10px;" id="answer1" onclick="answer(this)" class="btn btn-primary"><?= $questions[$index]['ans1'];?></button>
			<button type="button" style="margin:10px;"  id="answer2" onclick="answer(this)"  class="btn btn-primary"><?= $questions[$index]['ans2'];?></button>
		</div>
		<div class="row" style="width:100%">
			<button type="button" style="margin:10px;" id="answer3" onclick="answer(this)" class="btn btn-primary"><?= $questions[$index]['ans3'];?></button>
			<button type="button" style="margin:10px;" id="answer4" onclick="answer(this)" class="btn btn-primary"><?= $questions[$index]['ans4'];?></button>
		</div>
	</div>

</div>



	
	
	
	
	
	
	
	
	
</div>




<script>
 	var index;
   var tsec = 1200; 
   var count = 1200;
    var t;
    var beginDate = new Date();
    beginDate.setSeconds(beginDate.getSeconds() + 1200);
    var curDate;
    var timerGo = timedCount();
    function timedCount() {
    	
    	var hours = parseInt( count / 3600 ) % 24;
    	var minutes = parseInt( count / 60 ) % 60;
    	var seconds = count % 60;
    	var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);
    	$('#timer').html(result);
		var x=((tsec-count)/tsec)*100;
    	$('#pbar').css("width",x+"%");
		var xx=x.toFixed()+"% ";
    	$('#pbarp').html(xx);
        if(count <= 0 ){
        	window.location='quizOver.php';
        }
        curDate = new Date();
        count = Math.ceil((beginDate-curDate)/1000);
        t = setTimeout(function(){ timedCount() }, 999);
        
    }
    


 /*$(document).ready(function () {
   $("body").on("contextmenu",function(e){
     return false;
   });
});
*/
 function answer(ans)
 {

answered($(ans).text());

 }
 
 var i = 0;
 var time=4;

$(window).blur(function(){
  alert("You cannot change the window while the playing the quiz.");
  
  i++;
  if(i>1)
  return false;
  time=4;
  var tid = setTimeout(mycode, 1);
function mycode() {
  time--;
  if(time==0)
  { 
  i=0;
  abortTimer();
  nextQuestion();
  }
  if(time>=1)
  tid = setTimeout(mycode, 1000); // repeat myself
}
function abortTimer() { // to be called when you want to stop the timer
  clearTimeout(tid);
}
  
 
});


function answered(answer)
{ answer=encodeURIComponent(answer);
	index=$("#questionID").val();
	timeStart=$("#timeStart").val();
	$.ajax({
                url: "ajaxProcess.php",
                type: "post",
                dataType: "html",
                data : "answer="+answer+"&quesID="+index+"&timeLeft="+count+"&timeStart="+timeStart,
                async : false,
                success: function(resp) {
                	$('#textArea').html(resp);
					$('#textArea').removeClass("alert-info");
					$('#textArea').addClass("alert-success");
					setTimeout(function() {
						$('#textArea').removeClass('alert-success');
					$('#textArea').addClass('alert-info');

					}, 1000);
					nextQuestion();
                	}});
}
	function nextQuestion()
{   
time=0;
i=0;
	qNO=$("#questionNumber").val();
	$.ajax({
                url: "ajaxProcess.php",
                type: "post",
                dataType: "html",
                data : "nextQuestion=1&questionNO="+qNO+"&timeStart="+count,
                async : false,
                success: function(resp) {
                	$('#questionDIV').html(resp);
                	                }

});
}

function abortTimerCount(tid) { // to be called when you want to stop the timer
  clearTimeout(tid);
}

function updateScore()
{

$.ajax({
                url: "ajaxProcess.php",
                type: "post",
                dataType: "html",
                data : "update=1",
                async : false,
                success: function(resp) {
                	console.log(resp);
                	 }

});


setTimeout(updateScore, 30000);
}

$(document).ready(function(){

   $("a").attr("href", "#");
   setTimeout(updateScore(),10000);

$("#questionDIV")
        .attr('unselectable', 'on')
        .css({
            'user-select': 'none',
            'MozUserSelect': 'none'
        })
        .on('selectstart', false)
        .on('mousedown', false);
});



</script>

<?php
 include'associates.php'; 

 include 'common_footer.php'; ?>
</body>
</html>