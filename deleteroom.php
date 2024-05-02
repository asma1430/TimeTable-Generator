<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `room` where R_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:addroom.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>