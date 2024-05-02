<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `session` where S_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:addsession.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>