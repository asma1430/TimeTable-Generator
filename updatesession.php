<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `session` where S_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$Session = $row['Session'];
$Semester = $row['Semester'];
$Batch = $row['Batch'];

if(isset($_POST['submit'])){
    $Degree_program=$_POST['Session'];
    $Semester=$_POST['Semester'];
    $Batch=$_POST['Batch'];

    $sql = "UPDATE `session` set S_ID=$id, Session='$Session',Semester='$Semester', Batch='$Batch'
    WHERE S_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
        header('location:addsession.php');
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
        <form action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
            <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">Add Session</h2> <br>
            <hr>
            <hr>

            <div class="m-4">
                <label for=" Session"> Session</label>

                <select class="mx-2 p-1 w-60 rounded-md" name=" Session">
                    <option selected disabled>Select</option>
                    <option value="Fall">Fall</option>
                    <option value="Spring">Spring</option>
                </select>
            </div>

<div class="m-4">
                <label for=" Semester"> Semester</label>
            <select class="mx-2 p-1 w-60 rounded-md" name=" Semester">
                    <option selected disabled>Select</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                </select>
            </div>

            <div class="m-4 ">
                <label for="Batch">Batch</label>
                <select class="mx-2 p-1  w-40 rounded-md" name="Batch">
                    
                <?php include 'connect.php';
                $query = "SELECT * FROM `batch`";
                $result= mysqli_query($con,$query);
                ?>
                    <option selected disabled>Select</option>
                    <?php
                    foreach($result as $row){
                        echo "<option>$row[Batch]</option>";
                    }
                    ?>
                 
                </select><br><br>

                <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>

        </form>
    </center>
</body>

</html>