<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `course_assignment` where CA_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$Teacher_Name = $row['Teacher_Name'];
$Course_Alias = $row['Course_Alias'];
$Batch = $row['Batch'];

if(isset($_POST['submit'])){
    $Teacher_Name = $_POST['Teacher_Name'];
    $Course_Alias = $_POST['Course_Alias'];
    $Batch = $_POST['Batch'];

    $sql = "UPDATE `course_assignment` set CA_ID=$id, Teacher_Name='$Teacher_Name', Course_Alias='$Course_Alias', Batch='$Batch'
    WHERE CA_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
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