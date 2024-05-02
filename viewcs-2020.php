<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
     <!-- BOOTSTRAP CORE STYLE CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT AWESOME CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" rel="stylesheet"/>

    <!-- CUSTOM STYLE CSS -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  " id="menu">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="addteachers.php" class="nav-item nav-link " style="color:white;">ADD TEACHERS</a>
                <a href="addsubjects.php" class="nav-item nav-link" style="color:white;">ADD COURSES</a>
                <a href="addclassrooms.php" class="nav-item nav-link" style="color:white;">ADD CLASSROOMS</a>
                <a href="addusers.php" class="nav-item nav-link " style="color:white;">ADD USERS</a>
                <a href="allotsubjects.php" class="nav-item nav-link " style="color:white;">ALLOTMENT </a>
               <a href="timetable.php" class="nav-item nav-link " style="color:white;">GENERATE TIMETABLE</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link" style="color:white;">LOGOUT</a>
            </div>
        </div>
    </div>
</nav>
 <!--NAVBAR SECTION END-->
<br>


<div align="center" style="margin-top:20px">
    <button id="timemanual" class="btn btn-success btn-lg">ADD Timetable</button>
</div>





<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addtimeBtn = document.getElementById("timemanual");
    var heading = document.getElementById("popupHead");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addtimeBtn.onclick = function () {
        modal.style.display = "block";
       
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        }

</script>


<div>
    <br>
    <!-- //styling -->
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <script>
       
    </script>

    <table id=duration style="margin-left: 80px">
        <caption><strong>Duration </strong></caption>
        <tr>
        <th style="text-align:center" width="30">ID</th>
        <th style="text-align:center" width="90">WEEKDAY</th>
            <th style="text-align:center" width="90">9:00-9:50</th>
            <th style="text-align:center" width="90">9:50-10:40</th>
            <th style="text-align:center" width="90">10:40-11:30</th>
            <th style="text-align:center" width="90">11:30-12:20</th>
            <th style="text-align:center" width="90">12:20-1:10</th>
            <th style="text-align:center" width="90">1:10-2:00</th>
            <th style="text-align:center" width="30">Action</th>
        </tr>
        <tbody>
        <?php
        include 'config.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable generator"),
            "SELECT * FROM cs2020 ");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr>
            <td>{$row['id']}</td>
                    <td>{$row['Weekday']}</td>
                    <td>{$row['period1']}</td>
                    <td>{$row['period2']}</td>
                    <td>{$row['period3']}</td>
                    <td>{$row['period4']}</td>
                    <td>{$row['period5']}</td>
                    <td>{$row['period6']}</td>
                    <td><a href='updatecs2020.php?id=$row[id]'>Edit</a></td>
                    
                    </tr>\n";
        }
       
        ?>
        </tbody>
    </table>

</div>



<!--  Jquery Core Script -->
<script src="js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="js/custom.js"></script>
</body>
</html>
