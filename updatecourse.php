<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `course` where C_ID = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$Course_Name = $row['Course_Name'];
$Course_Code = $row['Course_Code'];
$Credit_Hours = $row['Credit_Hours'];
$Course_Alias = $row['Course_Alias'];

if(isset($_POST['submit'])){
    $Course_Name=$_POST['Course_Name'];
    $Course_Code=$_POST['Course_Code'];
    $Credit_Hours=$_POST['Credit_Hours'];
    $Course_Alias=$_POST['Course_Alias'];

    $sql = "UPDATE `course` set C_ID=$id, Course_Name='$Course_Name', Course_Code='$Course_Code',
    Credit_Hours='$Credit_Hours',
    Course_Alias= '$Course_Alias' 
    WHERE C_ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated";
        header('location:addcourse.php');
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
        <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">Add Course</h2> <br><hr><hr>
     
            <div class="m-4">
                <label for="Course_Name">Course Name</label>
                <input type="text" class="mx-2 p-1 rounded-md" name="Course_Name"
                       placeholder="Course Name ..." value=<?php echo $Course_Name; ?>>
            </div>

            <div class="m-4">
                <label for="Course_Code">Course Code</label>
                <input type="text" class="mx-2 p-1 rounded-md" name="Course_Code"
                       placeholder="Course Code ..." value=<?php echo $Course_Code; ?>>
            </div>

            <div class="m-4">
                <label for="Credit_Hours">Credit Hours</label>
                <select class="mx-2 p-1 rounded-md"  name="Credit_Hours" >
                    <option selected disabled>Select</option>
                    <option value="3+0">3+0</option>
                    <option value="3">3</option>
                    <option value="3+1">3+1</option>
                    <option value="2+1">2+1</option>
                </select>
            </div>

            <div class="m-4">
                <label for="Course_Alias">Course Alias</label>
                <input type="text" class="mx-2 p-1 rounded-md" name="Course_Alias"
                       placeholder="Course Alias ..." value=<?php echo $Credit_Hours; ?>>
            </div>
            
           
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Update</button>
            
        </form>
        </center>


</body>

</html>