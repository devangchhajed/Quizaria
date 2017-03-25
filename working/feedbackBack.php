<?php

	$name=htmlspecialchars($_GET['name']);
	$feedback=htmlspecialchars($_GET['feedback']);

	$data = array(
    "status" => false, 
    );

	
		require '../config.php';

            $sql="insert into feedback(name, feedback) values ('$name', '$feedback')";
            if($conn->query($sql)===true)
            {
				$data["status"] = true;
            }
				

	$conn->close();

		echo json_encode($data);

?>