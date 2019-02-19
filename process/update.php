<?php
    include('dbconnect.php');
	
    $_POST = json_decode(file_get_contents('php://input'), true);

    
        $id = $_POST['id'];

   
        $name = $_POST['fname'];
  

        $email = $_POST['email'];

    
        $password = $_POST['password'];

    $query = "UPDATE user_info SET name='$name', password='$password', email='$email' WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

    echo $json_response = json_encode($rows);
?>