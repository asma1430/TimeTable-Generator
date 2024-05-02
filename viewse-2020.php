
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

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse move-me">
            <ul class="nav navbar-nav navbar-left">
            
               <li><a href="studenttable.php">GENERATE TIMETABLE</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
 <!--NAVBAR SECTION END-->
<br>
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

<div class="container">
        <div class="">
            <h3>BSSE 2020</h3>
        <table id=timetable style="margin-left: 80px">
        <caption><strong> </strong></caption>
        <tr>
      
        <th style="text-align:center" width="90">WEEKDAY</th>
            <th style="text-align:center" width="90">9:00-9:50</th>
            <th style="text-align:center" width="90">9:50-10:40</th>
            <th style="text-align:center" width="90">10:40-11:30</th>
            <th style="text-align:center" width="90">11:30-12:20</th>
            <th style="text-align:center" width="90">12:20-1:10</th>
            <th style="text-align:center" width="90">1:10-2:00</th>
          
        </tr>
        <tbody>
        <?php
        include 'config.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable generator"),
            "SELECT * FROM se2020 ");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr>
           
                    <td>{$row['Weekday']}</td>
                    <td>{$row['period1']}</td>
                    <td>{$row['period2']}</td>
                    <td>{$row['period3']}</td>
                    <td>{$row['period4']}</td>
                    <td>{$row['period5']}</td>
                    <td>{$row['period6']}</td>
                    
                    
                    </tr>\n";
        }
       
        ?>
        </tbody>
    </table>
  

</body>
</html>
