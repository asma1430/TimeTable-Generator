<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `crud` (name,email, mobile, password)
    VALUES('$name', '$email', '$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }


    // $insert = "INSERT INTO crud (`name`, `email`, `mobile`,`password`) VALUES 
    // ('".$name."', '".$email."', '".$mobile."', '".$password."')";
    // echo "Query<br>".$insert;
    // $execute = mysqli_query($con, $insert);

    // if($execute){
    //         echo "Data inserted successfully";
    //     }else{
    //         die(mysqli_error($con));
    //     }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD operation</title>
</head>

<body>

    <div class="container my-5">

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>

            <form method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>

                <form method="post">
                    <div class="form-group">
                        <label>Number</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter number">
                    </div>

                    <form method="post">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>



                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

    </div>


</body>

</html>