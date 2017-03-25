<?php 
	include 'config.php';
	$sql="select * from notification";
	$result = $conn->query($sql);
?>


  <table class="table table-striped">
    <thead>
      <tr>
		<th>TimeStamp</th>
		<th>Notifications</th>
      </tr>
    </thead>
    <tbody>
<?php	
$i=1;
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
?>		
    <tr>
      <td><?php echo $row['regdate'] ?></td>
      <td><?php echo $row['message'] ?></td>
    </tr>


<?php	}
	}
	else
	{
		echo "No Notification";
	}
	$sql="select * from users";
	$result = $conn->query($sql);
	$num=mysqli_num_rows($result);
?>
    <tr>
      <td rowsspan="2">Registered Users : <?php echo $num; ?></td>
    </tr>

<?php
	$conn->close();
?>






    </tbody>
  </table>