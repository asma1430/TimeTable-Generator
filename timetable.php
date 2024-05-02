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
            echo "<option>$row[Teacher_Name]   ||   $row[Course_Alias]   ||   $row[Batch]</option>";
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