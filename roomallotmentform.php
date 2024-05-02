<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $CA = $_POST['CA'];
    $Room = $_POST['Room'];
    $Time = $_POST['Time'];

    $sql = "INSERT INTO `timetable` (CA,Room,Time)
    VALUES ('$CA','$Room', '$Time')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:roomallotment.php');
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
            <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">ALLOTMENT</h2> <br>
            <hr>
            <hr>

            <div class="m-4 ">
                <label for="CA">Select</label>
                <select class="mx-2 p-1  w-40 rounded-md" name="CA">

                    <?php include 'connect.php';
                    $query = "SELECT * FROM `course_assignment`";
                    $result = mysqli_query($con, $query);
                    ?>
                    <option selected disabled>Select</option>
                    <?php
                    foreach ($result as $row) {
                        echo "<option>$row[Teacher_Name]   ||   $row[Course_Alias]   ||   $row[Batch]</option>";
                    }
                    ?></select>

                    <div class="m-4 ">
                        <label for="Room">Room Name</label>
                        <select class="mx-2 p-1  w-40 rounded-md" name="Room">

                            <?php include 'connect.php';
                            $query = "SELECT * FROM `room`";
                            $result = mysqli_query($con, $query);
                            ?>
                            <option selected disabled>Select</option>
                            <?php
                            foreach ($result as $row) {
                                echo "<option>$row[Room_Name]</option>";
                            }
                            ?>

                        </select>

                        <div class="m-4 ">
                            <label for="Time">Time</label>
                            <select class="mx-2 p-1  w-44 rounded-md" name="Time">

                                <?php include 'connect.php';
                                $query = "SELECT * FROM `time_slot`";
                                $result = mysqli_query($con, $query);
                                ?>
                                <option selected disabled>Select</option>
                                <?php
                                foreach ($result as $row) {
                                    echo "<option>$row[Duration]</option>";
                                }
                                ?>

                            </select>
                            
                            <br><br>


                            <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                            <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>

        </form>
    </center>
</body>

</html>