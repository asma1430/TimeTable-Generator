<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `user` where U_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:adduser.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>