<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `timetable` where T_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


$CA = $row['CA'];
$Room = $row['Room'];
$Time = $row['Time'];

if (isset($_POST['submit'])) {
    $CA = $_POST['CA'];
    $Room = $_POST['Room'];
    $Time = $_POST['Time'];

    $sql = "UPDATE `timetable` set T_ID=$id, CA='$CA', Room='$Room', Time='$Time'
    WHERE T_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./dist/output.css">
    <title>UPDATE COURSE</title>
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