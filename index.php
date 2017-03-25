<?php
    require 'config.php';
	include 'common_header.php'; 
	include 'loginModal.php'; 
	include 'registerModal.php'; 
	include 'leaderModal.php'; 
	include 'notificationModal.php'; 
	include 'logoandname.php'; 
?>
<?php
	include 'errorhandeling.php'; 

 include'associates.php';

			/*if(isset($_SESSION["name"])||isset($_SESSION["email"]))
			{
				echo '<a href="round1.php" class="btn btn-primary btn-lg">Play Round 1</a>';
			}
			*/

?>


<div class="container" style="margin-bottom:10px;">
	<div class="col-md-6">
		<h3 class="tcenter">About</h3>
		<hr>
		<h4>QuiZAria</h4>
		QuiZAria is about everything, every cool thing that you can think of. And if you pull off some great moves in this quiz, we have cash prizes waiting for you. So register now! and invite your friends by sharing it.
		</p>
		<h5>BIRLA INSTITUTE OF TECHNOLOGY</h5>
		Birla Institute of Technology, Jaipur was established in the year 1995 by Shri Braj Mohan Birla in the campus of Birla Institute of Scientific Research. It is an extension centre of its prestigious parent institute Birla Institute of Technology Mesra, Ranchi. Established with an aim to promote science and technology amongst the youth of the country, the institute has produced excellent engineers and graduates. Our animation department is ranked amongst the top few and boasts of possessing some of the most creative minds of our nation.	

		
	</div>
	<div class="col-md-6">
		<h3 class="tcenter">Notifications</h3>
		<hr>
		<?php 
			include 'notificationcontent.php'; 
		?>
	</div>
</div>
	<div style="text-align:center">
		<?php
			if(isset($_SESSION["name"])||isset($_SESSION["email"]))
			{
				echo '&nbsp;';
			}else
			{
				echo'<li class="btn btn-default" data-toggle="modal" data-target="#registerModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li class="btn btn-default" data-toggle="modal" data-target="#loginModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
			}
		?>
		</p>
	</div>
  



<?php 
include 'common_footer.php'; ?>
</body>
</html>
