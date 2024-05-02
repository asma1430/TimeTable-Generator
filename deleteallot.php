<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `course_assignment` where CA_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:allotment.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>