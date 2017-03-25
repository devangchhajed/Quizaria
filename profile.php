<?php
	include 'common_header.php'; 
	include 'loginModal.php'; 
	include 'registerModal.php'; 
	include 'notificationModal.php'; 
?>
<div class="container">
	<h2 style="text-align:center">Profile</h3>
	<hr>
<?php
		require 'config.php';
		if(isset($_SESSION["name"])||isset($_SESSION["email"]))
		{
			$fsql='select * from users where email="'.$_SESSION["email"].'"';
			$result = $conn->query($fsql);
			if ($result->num_rows > 0)
			{
				// Fetch one and one row
				$row = $result->fetch_assoc();				
?>
     <link rel="stylesheet" href="css/developer.css">

<div class="shadow-wrap"></div>
		<section class="section-purple">
			<div class="page-wrap hero-image han-solo-bg">
			</div>
		</section>
		<section class="w3-container space-exception">
			<div class="section-shadow page-wrap parent">
				<div class="profile-info">
					<div class="profile-image">
						<div class="circular-image-shadow"></div>
						<img src="<?php echo $row['dimage']; ?>">
					</div>
					<div class="profile-detail">
					<h3><?php echo $row['name']; ?></h3>
					<h4><?php echo $row['email']; ?></h4>
					<h4><?php echo $row['phone']; ?></h4>
					<h4><?php echo $row['college']; ?></h4>
					<h4>Score : <?php echo $row['score']; ?></h4>
					</div>
				</div>
			</div>
		</section>
<?php				
				// Free result set
				mysqli_free_result($result);
			}

			mysqli_close($conn);
		}

 ?>

 

</div>

<?php include 'common_footer.php'; ?>
</body>
</html>
