<?php

    include('dbconnect.php');
    
    $data = array();
    $query = "SELECT * FROM user_info";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }

    echo $json_response = json_encode($data);
?>