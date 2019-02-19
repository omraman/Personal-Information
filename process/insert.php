<?php
	
	include('dbconnect.php');

	$_POST = json_decode(file_get_contents('php://input'), true);
	$name = $_POST['fname'];
  	$email = $_POST['email'];
	$password = $_POST['password'];

	echo $name;
	echo $email;
	echo $password;

	$query = "INSERT into user_info (name,email,password) VALUES ('$name','$email','$password')";
	$result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

	echo $json_response = json_encode($rows);

?>