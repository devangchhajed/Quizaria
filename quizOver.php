<?php
    require 'config.php';
	include 'common_header.php'; 
	include 'notificationModal.php'; 
	include 'logoandname.php'; 

	if(!isset($_SESSION["name"])||!isset($_SESSION["email"]))
	{
		echo '<script>window.location="round1.php"</script>';
	}	

	require 'config.php';
	
	$sql="UPDATE users set score = ".$_SESSION['points']." where email = '".$_SESSION['email']."'";
	if($conn->query($sql)===true)
	{
		$asd= "Data inserted Successfuly";
	}

?>

<hr>
<div class="container" style="margin-bottom:10px;">
	<div class="col-md-12" style="margin-bottom:10px; text-align:center;">
		<h1 class="tcenter">Quiz Ended</h1>
		<br>
		Your final Score is <strong><?php echo $_SESSION['points'];?></strong>
	</div>
	</p>


</div>
  



<?php  include'associates.php';
include 'common_footer.php'; ?>
</body>
</html>
