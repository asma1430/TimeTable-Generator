<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `teacher` where T_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$faculty = $row['faculty'];
$designation = $row['designation'];
$mobile = $row['mobile'];
$email = $row['email'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $faculty=$_POST['faculty'];
    $designation=$_POST['designation'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $sql = "UPDATE `teacher` set T_ID=$id, name='$name', faculty='$faculty' ,designation='$designation', mobile='$mobile', email='$email'
    WHERE T_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
        header('location:addteacher.php');
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
    <title>UPDATE TEACHER</title>
</head>

<body>
    <center>
    <form  action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
        <h2  class="font-bold font-sans text-center uppercase mt-6">UPDATE Teacher</h2> <br><hr><hr>
     
            <div class="m-4">
                <label for="teachername">Teacher's Name</label>
                <input type="text" class="mx-2 p-1 rounded-md" id="Teacher_Name" name="name"
                       placeholder="Teacher's Name ..."  value=<?php echo $name; ?>>
            </div>
             
            <div class="m-4">
                <label for="faculty">Faculty</label>

                <select class="mx-2 p-1 rounded-md" id="Faculty" name="faculty">
                    <option selected disabled>Select</option>
                    <option value="Science">Science</option>
                    <option value="Arts">Arts</option>
                    <option value="Commerce">Commerce</option>
                </select>
            </div>
            
            <div class="m-4">
                <label for="designation">Designation</label>
                <select class="mx-2 p-1 rounded-md" id="Designation" name="designation">
                    <option selected disabled>Select</option>
                    <option value="Professor">Professor</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Associate Professor">Associate Professor</option>
                    <option value="Guest Faculty">Guest Faculty</option>
                </select>
            </div>
            <div class="m-4">
                <label for="teachercontactnumber">Contact No.</label>
                <input type="text" class="mx-2 p-1 w-56 rounded-md" id="Contact_number" name="mobile"  
                placeholder="03**-****** ..." value=<?php echo $mobile; ?>>
            </div>

            <div class="m-4">
                <label for="teacheremailid">Email-ID</label>
                <input type="email" class="mx-2 p-1 w-60 rounded-md" id="Emailid" name="email"
                       placeholder="abc@xyz.com ..." value=<?php echo $email; ?>>
            </div>
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Update</button>
            
        </form>
        </center>


</body>

</html>