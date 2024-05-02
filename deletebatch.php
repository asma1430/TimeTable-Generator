<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `batch` where B_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:addbatch.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>