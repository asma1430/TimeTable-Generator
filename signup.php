<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $usertype = $_POST['usertype'];

    $select = "SELECT * FROM `user` WHERE name='$name' && password = '$password'";

    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exist!';
    } else {

        if ($password != $cpassword) {
            $error[] = 'Password not matched!';
        } else {

            $insert = "INSERT INTO `user` (name, password,cpassword,usertype)
            VALUES('$name','$password','$cpassword','$usertype')";
            mysqli_query($con, $insert);
            header('location:login.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration</title>
</head>

<body>

    <div class="container my-5">

        <form method="post">
            <h3>Register/Sign Up</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span>' . $error . '</span>';
                }
            }

            ?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>


                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label>Re-Enter Password</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter password">
                </div>

                <select name="usertype">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select><br><br>

                <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
            </form>

    </div>


</body>

</html>