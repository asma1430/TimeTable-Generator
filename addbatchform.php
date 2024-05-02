<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $Degree_program=$_POST['Degree_program'];
    $Year=$_POST['Year'];

    $sql="INSERT INTO `batch` (Degree_program,Year,Batch)
    VALUES ('$Degree_program', '$Year','$Degree_program-$Year')";
    $result=mysqli_query($con,$sql);
    if($result){
       header('location:addbatch.php');
    }else{
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
    <form  action="" class="bg-slate-100 m-4 p-2 w-1/2 " method="POST">
        <h2 id="popupHead" class="font-bold font-sans text-center uppercase mt-6">Add Batch</h2> <br><hr><hr>
            
            <div class="m-4">
                <label for=" Degree_program"> Degree program</label>

                <select class="mx-2 p-1 w-60 rounded-md" name=" Degree_program">
                    <option selected disabled>Select</option>
                    <option value="CS">CS</option>
                    <option value="SE">SE</option>
                </select>
            </div>
            
            <div class="m-4 ">
                <label for="Year">Year</label>
                <select class="mx-2 p-1  w-40 rounded-md" id="Designation" name="Year">
                    <option selected disabled>Select</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2019">2018</option>
                </select><br><br>
           
                <!-- <input type="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10" name="submit" value="Submit"> -->
                <button type="submit" name="submit" class="bg-slate-900 text-white rounded-xl shadow-2xl text-sm font-serif w-24 h-10">Submit</button>
            
        </form>
        </center>
</body>
</html>