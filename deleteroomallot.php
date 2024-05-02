<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET ['deleteid'];
    $sql = "DELETE from `timetable_assignment` where RA_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:roomallotment.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>