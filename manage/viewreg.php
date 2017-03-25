	<?php include 'common_header.php';	
?>
		<div class="w3-container">
<a href="export.php">Click here Download in Excel Format</a>
		<table class="table table-responsive">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>PASSWORD</th>
				<th>INSTITUTE</th>
				<th>SCORE</th>
				<th>ttime</th>
				<th>Image</th>
				<th>REG_DETAILS</th>
			</tr>
			
		<?php
			$sql="select * from users";
			$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{

			echo "<tr>"
				."<td>".$row["id"]."</td>"
				."<td>".$row["name"]."</td>"
				."<td>".$row["email"]."</td>"
				."<td>".$row["phone"]."</td>"
				."<td>".$row["password"]."</td>"
				."<td>".$row["college"]."</td>"
				."<td>".$row["score"]."</td>"
				."<td>".$row["ttime"]."</td>"
				."<td>".$row["dimage"]."</td>"
				."<td>".$row["reg_date"]."</td></tr>";
			
		}
	}
	else
	{
		echo "0 Results";
	}
	$conn->close();
		
		?>
		</table>
		</div>
	<?php include 'common_footer.php';?>

</div> <!-- End main -->
          
</body>
</html> 
