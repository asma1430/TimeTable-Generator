<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</select>

<div class="m-4 ">
<?php include 'connect.php';
        $query = "SELECT * FROM `session`";
        $result = mysqli_query($con, $query);
        ?>
    <label for="Batch">Batch</label>
    <select class="mx-2 p-1  w-44 rounded-md" name="Batch">

            <option selected disabled>Select</option>
        <?php
        foreach ($result as $row) {
            echo "<option>$row[Batch]</option>";
        } ?>

    </select>

        <label for="Batch">Semester</label>
        <select class="mx-2 p-1  w-44 rounded-md" name="Batch">
    
                <option selected disabled>Select</option>
            <?php
            foreach ($result as $row) {
                echo "<option>$row[Semester]</option>";
            } ?>

        </select>

</div>
  
    <div>
        <br>
        <!-- //styling -->
        <style>
            table {
                margin-top: 10px;
                font-family: arial, sans-serif;
                border-collapse: collapse;
                margin-left: 30px;
                width: 80%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>


        <table id=teacherstable style="margin-left: 80px"><br>
            <tr>
                <th width="90" class="font-sans bg-zinc-100">Days</th>
                <th width=100 class="font-sans bg-zinc-100">Monday</th>
                <th width=100 class="font-sans bg-zinc-100">Tuesday</th>
                <th width=100 class="font-sans bg-zinc-100">Wednesday</th>
                <th width=100 class="font-sans bg-zinc-100">Thursday</th>
                <th width=100 class="font-sans bg-zinc-100">Friday</th>
                <th width=100 class="font-sans bg-zinc-100">Saturday</th>

            </tr>
            <tbody>

                <tr>
                    <td>
                        <div class="m-4 ">
                            <select class="mx-2 p-1  w-44 rounded-md" name="Time">

                                <?php include 'connect.php';
                                $query = "SELECT * FROM `time_slot`";
                                $result = mysqli_query($con, $query);
                                ?>
                                <option selected disabled>Time</option>
                                <?php
                                foreach ($result as $row) {
                                    echo "<option>$row[Duration]</option>";
                                }
                                ?>

                            </select>
                    </td>

                    <td>
                    <form action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
<div class="m-4 ">
    <select class="mx-2 p-1  w-40 rounded-md" name="CA">

        <?php include 'connect.php';
        $query = "SELECT * FROM `course_assignment`";
        $result = mysqli_query($con, $query);
        ?>
        <option selected disabled>Select Teacher</option>
        <?php
        foreach ($result as $row) {
            echo "<option>$row[Teacher_Name]   ||   $row[Course_Alias] ";
        }
        ?></select>

            <select class="mx-2 p-1  w-40 rounded-md" name="Room">

                <?php include 'connect.php';
                $query = "SELECT * FROM `room`";
                $result = mysqli_query($con, $query);
                ?>
                <option selected disabled> Room</option>
                <?php
                foreach ($result as $row) {
                    echo "<option>$row[Room_Name]</option>";
                }
                ?>

            </select>                            
                        <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>

</form>
                    </td>
                </tr>

                
            </tbody>
        </table>



    </div>

</body>

</html>

<! -->