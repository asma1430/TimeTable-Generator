<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `teacher` where T_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:addteacher.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>