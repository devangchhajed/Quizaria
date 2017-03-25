<?php include'config.php'; ?>
<table border="1">

		<tr>
				<th>ID</th>
				<th>GName</th>
				<th>GLEADER</th>
				<th>CONTACT</th>
				<th>EMAIL</th>
				<th>EVENT</th>
				<th>COLLEGE</th>
				<th>REG_DETAILS</th>
			</tr>
		<?php
	//connection to mysql
			$sql="select * from participant";
			$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr>"
				."<td>".$row["id"]."</td>"
				."<td>".$row["gname"]."</td>"
				."<td>".$row["gleader"]."</td>"
				."<td>".$row["contact"]."</td>"
				."<td>".$row["email"]."</td>"
				."<td>".$row["event"]."</td>"
				."<td>".$row["college"]."</td>"
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