<?php

$servername="localhost";
$username="root";
$password="";
$dbname="quizaria";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Conn Error : ".$conn->connect_error);
}

?>