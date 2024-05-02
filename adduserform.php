<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $Username=$_POST['Username'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];

    $sql="INSERT INTO `user` (Username,password, usertype)
    VALUES ('$Username', '$password', '$usertype')";
    $result=mysqli_query($con,$sql);
    if($result){
       header('location:adduser.php');
    }else{
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
    
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
</head>
<body>
    <center>
    <form  action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
        <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">Add User</h2> <br><hr><hr>
            

        <div class="m-4">
                <label for="Username">Username</label>
                <input type="text" class="mx-2 p-1 rounded-md"  name="Username"  
                placeholder="Enter username..">
            </div>

            
        <div class="m-4">
                <label for="password">password</label>
                <input type="text" class="mx-2 p-1 rounded-md"  name="password"  
                placeholder="Enter password..">
            </div>

            <div class="m-4">
                <label for="usertype">usertype</label>

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