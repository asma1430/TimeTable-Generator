
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
               
               <a href="studenttable.php" class="nav-item nav-link " style="color:white;">GENERATE TIMETABLE</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link" style="color:white;">LOGOUT</a>
            </div>
        </div>
    </div>
</nav>
 <!--NAVBAR SECTION END-->


<div align="center"
     style="margin-top:10%">
    <button
        class="btn btn-success btn-lg">view timetable
    </button>
</div>

<center><div class="list-group ">
  <a href="viewcs-2020.php" class="list-group-item list-group-item-action " aria-current="true">
    CS-2020
  </a>
  <a href="viewse-2020.php" class="list-group-item list-group-item-action">SE-2020</a>
 
</div>
</center>
<div>

</body>
</html>
