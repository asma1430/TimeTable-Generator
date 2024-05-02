<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `room` where R_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$Room_Name = $row['Room_Name'];
$Type = $row['Type'];

if(isset($_POST['submit'])){
    $Room_Name=$_POST['Room_Name'];
    $Type=$_POST['Type'];

    $sql = "UPDATE `room` set R_ID=$id, Room_Name='$Room_Name', Type='$Type'
    WHERE R_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
        header('location:addroom.php');
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
    <title>UPDATE COURSE</title>
</head>

<body>
    
<center>
    <form  action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
        <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">Add Room</h2> <br><hr><hr>
            
            <div class="m-4">
                <label for=" Room_Name"> Room Name</label>

                <select class="mx-2 p-1 w-60 rounded-md" name=" Room_Name">
                    <option selected disabled>Select</option>
                    <option value="C-60">C-60</option>
                    <option value="C-61">C-61</option>
                    <option value="C-62">C-62</option>
                    <option value="C-63">C-63</option>
                    <option value="D-18">D-18</option>
                    <option value="D-19">D-19</option>
                    <option value="D-20">D-20</option>
                </select>
            </div>
            
            <div class="m-4 ">
                <label for="Type">Type</label>
                <select class="mx-2 p-1  w-40 rounded-md" id="Designation" name="Type">
                    <option selected disabled>Select</option>
                    <option value="Lecture Room">Lecture Room</option>
                    <option value="Computer Lab">Computer Lab</option>

                </select><br><br>
           
                <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>
            
        </form>
        </center>
</body>

</html>