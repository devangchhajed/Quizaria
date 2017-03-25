	<?php include 'common_header.php';	
?>
		<div class="w3-container">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Regdate</th>
				<th>Message</th>
			</tr>
			
		<?php
			$sql="select * from notification";
			$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{

			echo "<tr>"
				."<td>".$row["id"]."</td>"
				."<td>".$row["regdate"]."</td>"
				."<td>".$row["message"]."</td></tr>";
			
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
