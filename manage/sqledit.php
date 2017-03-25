<?php include 'common_header.php';



if(isset($_GET['q']))
{
	$sql=$_GET['q'];
	if($conn->query($sql)===true)
	{
		echo "Data inserted Successfuly";
	}
	else
	{
		echo "Db error : ".$sql."<br>".$conn->error;
	}
}

	?>


<form action="sqledit.php">
<textarea name="q" rows="20" cols="50" style="width:100%; height:100%;">
INSERT INTO `notification`(`id`, `regdate`, `message`) VALUES ([value-1],[value-2],[value-3]);
</textarea>
  <input type="submit" name="submit"/>
</form>


<?php include 'common_footer.php';?>

</div> <!-- End main -->
          
</body>
</html> 
