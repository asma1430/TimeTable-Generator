<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `user` where U_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Username = $row['Username'];
$password = $row['password'];
$usertype = $row['usertype'];

if(isset($_POST['submit'])){
    $Username=$_POST['Username'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];
    

    $sql = "UPDATE `user` set U_ID=$id, Username='$Username', password='$password' ,usertype='$usertype'
    WHERE U_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
        header('location:adduser.php');
    } else {
        die(mysqli_error($con));
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./dist/output.css">
    <title>UPDATE TEACHER</title>
</head>

<body>
    <center>
    <form  action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
        <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">UPDATE User</h2> <br><hr><hr>
            

        <div class="m-4">
                <label for="Username">Username</label>
                <input type="text" class="mx-2 p-1 rounded-md"  name="Username"  
                placeholder="Enter username.." value=<?php echo $Username; ?>>
            </div>

            
        <div class="m-4">
                <label for="password">Password</label>
                <input type="text" class="mx-2 p-1 rounded-md"  name="password"  
                placeholder="Enter password.." value=<?php echo $password; ?>>
            </div>

            <div class="m-4">
                <label for="usertype">Usertype</label>

                <select class="mx-2 p-1 w-60 rounded-md" name="usertype">
                    <option selected disabled>Select</option>
                    <option value="Admin">Admin</option>
                    <option value="Student">Student</option>
                </select>
            </div>
         
           
                <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>
            
        </form>
        </center>
        
</body>

</html>