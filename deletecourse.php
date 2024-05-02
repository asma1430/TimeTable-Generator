<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `course` where C_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:addcourse.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>