<?php 
	$page="";
	if(isset($_GET['page']))
	{
		$page=htmlspecialchars($_GET['page']);
	}
	else
		$page=1;
	$offset=(($page-1)*10);
	require 'config.php';
	$sql="select name, college, score, email from users order by score desc, ttime asc LIMIT 10 OFFSET ".$offset;
	$result = $conn->query($sql);
?>

<hr>
	<div class="col-md-12" style="margin-bottom:10px;">
		<h1 class="tcenter">LeaderBoard</h1>
	</div>
	</p>

<style>
.lrow{
	cursor:pointer;
}
</style>
<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<?php	
$i=$offset+1;
	if($result->num_rows>0)
	{
?>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
		<th>Rank</th>
		<th>Name</th>
		<th>College</th>
		<th>Score</th>
      </tr>
    </thead>
    <tbody>
<?php		
		
		
		while($row=$result->fetch_assoc())
		{
?>		

<?php if ($row['score']!=0)
{	?>

	<tr class="">
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['college'] ?></td>
      <td><?php echo $row['score'] ?></td>
    </tr>

<?php	
}}
	}
	else
	{
		echo "0 Results";
	}
	mysqli_free_result($result);
?>
    </tbody>
  </table>
	<div style="text-align:center; margin:20px;">
<ul class="pagination">
<?php

	$sql="select * from users";
	$result = mysqli_query($conn,$sql);

  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $rowcount=$rowcount/10;
  for($i=1;$i<=$rowcount+1;$i++)
  {
		echo '<li><a href="leaderboard.php?page='.$i.'">'.$i.'</a></li>';
  }
  
  	$conn->close();

?>
</ul>


	</div>
	
	