<?php
	include 'common_header.php'; 
	include 'loginModal.php'; 
	include 'registerModal.php'; 
	include 'notificationModal.php'; 
	include 'carousel.php'; 

?>
  
<div class="container">
	<h2 style="text-align:center">Round 2</h3>
	<hr>
	<h3>About Round 2</h3>
	<p>
	

Hi friends, <br>

We are pleased to inform you that we are successfully solving the glitches and server issues we were facing yesterday during the quiz and we are almost ready to bring you the round 2 of QuiZAria.<br>

But, we are determined to bring you the best and glitch-free quizzing experience. Hence, we have postponed the round 2.</P>

 NOTE : WE WILL INFORM YOU ON YOUR REGISTERED EMAIL.</P>

We can’t keep you waiting, but we can’t compromise with the quality of the quizzing experience we give to you. Please bear with us.</P>

Happy Quizing</P>

Regards<br>
Team QuiZAria<br>
	
	
	
	
	
	
	
	</p>
	<hr>
	<div style="text-align:center">
		<?php
			if(isset($_SESSION["name"])||isset($_SESSION["email"]))
			{
				echo '<a href="playarea1.php" class="btn btn-default">Next</a>';
			}else
			{
				echo'<li class="btn btn-default" data-toggle="modal" data-target="#registerModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li class="btn btn-default" data-toggle="modal" data-target="#loginModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
			}
		?>
		</p>
	</div>
</div>
<?php include 'common_footer.php'; ?>
</body>
</html>
