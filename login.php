<?php
include 'connect.php';

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    //  $email=$_POST['email'];
    $password = $_POST['password'];
    //  $cpassword=$_POST['cpassword'];
    //  $usertype = $_POST['usertype'];

    $select = "SELECT * FROM `user` WHERE name='$name' && password = '$password'";
    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['usertype'] == 'admin') {

            $_SESSION['name'] = $row['name'];
            header('location:admin.php');
        } elseif ($row['usertype'] == 'user') {

            $_SESSION['name'] = $row['name'];
            header('location:student.php');
        }
    } else {
        $error[] = 'Incorrect email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <div class="container">

        <form method="post">
            <h3>Log In</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span>' . $error . '</span>';
                }
            }

            ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" >
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </form>

            
        </form>

    </div>

</body>

</html>