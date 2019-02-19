<?php
    
   	include('dbconnect.php');

    $_POST = json_decode(file_get_contents('php://input'), true);

   
        $id = $_POST['id'];

    $query = "DELETE FROM user_info WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

    echo $json_response = json_encode($rows);
?>