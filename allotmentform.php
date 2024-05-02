<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $Teacher_Name = $_POST['Teacher_Name'];
    $Course_Alias = $_POST['Course_Alias'];
    $Batch = $_POST['Batch'];

    $sql = "INSERT INTO `course_assignment` (Teacher_Name,Course_Alias,Batch)
    VALUES ('$Teacher_Name','$Course_Alias', '$Batch')";
    $result1 = mysqli_query($con, $sql);
    if ($result1) {
        header('location:allotment.php');
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
                <label for="Teacher_Name">Teacher Name</label>
                <select class="mx-2 p-1  w-40 rounded-md" name="Teacher_Name">

                    <?php include 'connect.php';
                    $query = "SELECT * FROM `teacher`";
                    $result = mysqli_query($con, $query);
                    ?>
                    <option selected disabled>Select</option>
                    <?php
                    foreach ($result as $row) {
                        echo "<option>$row[name]</option>";
                    }
                    ?></select>

                    <div class="m-4 ">
                        <label for="Course_Alias">Course Name</label>
                        <select class="mx-2 p-1  w-40 rounded-md" name="Course_Alias">

                            <?php include 'connect.php';
                            $query = "SELECT * FROM `course`";
                            $result = mysqli_query($con, $query);
                            ?>
                            <option selected disabled>Select</option>
                            <?php
                            foreach ($result as $row) {
                                echo "<option>$row[Course_Alias]</option>";
                            }
                            ?>

                        </select>

                        <div class="m-4 ">
                            <label for="Batch">Batch</label>
                            <select class="mx-2 p-1  w-44 rounded-md" name="Batch">

                                <?php include 'connect.php';
                                $query = "SELECT * FROM `batch`";
                                $result = mysqli_query($con, $query);
                                ?>
                                <option selected disabled>Select</option>
                                <?php
                                foreach ($result as $row) {
                                    echo "<option>$row[Batch]</option>";
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