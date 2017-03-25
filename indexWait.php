<?php
    require 'config.php';
	include 'common_header.php'; 
	include 'loginModal.php'; 
	include 'registerModal.php'; 
	include 'leaderModal.php'; 
	include 'notificationModal.php'; 
	include 'errorhandeling.php'; 

?>
<style>
.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
	
<div class="container">
  <div class="jumbotron">
    <h1 id="timer">Bootstrap Tutorial</h1>
<?php

date_default_timezone_set("Asia/Calcutta");
$date = strtotime("Feb 13, 2016 06:33 PM");
$remaining = $date - time();

if($remaining<=0)
echo "asd".$remaining;
else
	echo "asdasdasda".date("Y-m-d h:i:sa");
?>	
  </div>
</div>
  



<?php include 'common_footer.php'; ?>
</body>
</html>
