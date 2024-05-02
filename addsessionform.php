<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $Session = $_POST['Session'];
    $Semester = $_POST['Semester'];
    $Batch = $_POST['Batch'];

    $sql = "INSERT INTO `session` (Session,Semester,Batch)
    VALUES ('$Session','$Semester', '$Batch')";
    $result1 = mysqli_query($con, $sql);
    if ($result1) {
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

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
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