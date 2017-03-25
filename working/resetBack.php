<?php

	$email=htmlspecialchars($_GET['email']);

	$data = array(
    "status" => false, 
    );

	
require '../config.php';
	$sql="select password from users where email='".$email."'";

	
	$result = $conn->query($sql);
	$password="";
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$password=$row["password"]; 
		}


		$subject = "Quizaria Password";

		$message = "
							<!DOCTYPE html>
							<html>
							<title>Quizaria</title>
							<body>
								<div style='margin:10px;'>
									<header>
										<h1>Quizaria</h1>
									</header>

									<div>
										<div style='margin:10px;'>
											<h3>Your Quizaria Credentials</h3></br>
											Hii there we just came to know that you forgot you credentials. So here they are.
											UserName : ".$email."</br>
											Password : ".$password."</br>
											<p>&nbsp;</br>
											Login to <a href='http://www.quizaria.techvibesbit.com'>Quizaria</a>
											<p>&nbsp;</br>
											If you have any other query.. Feel free to Contact Us at <a href='mailto:quizaria@techvibesbit.com'>
											quizaria@techvibesbit.com</a>.
										</div>

									</div>
									<div style='margin-top:30px;'>
										<p>Quizaria By Devang</p>
									</div>
	
								</div>

							</body>
							</html> 
								";
	
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

								$headers .= 'From: <quizaria@techvibesbit.com>' . "\r\n";
								$headers .= 'Cc: quizaria@techvibesbit.com' . "\r\n";

								mail($email,$subject,$message,$headers);
				
			$data["status"] = true;

	}
	$conn->close();

		echo json_encode($data);

?>