<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./dist/output.css">
    <!-- CUSTOM STYLE CSS -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body>
<?php
include 'nav.html';?>
<center>
<div  style="margin:-650px 0px 0px 100px;
">
    <button id="teachermanual" class="bg-slate-900 text-white rounded-2xl shadow-2xl text-sm font-serif w-36 h-16"><a  target="_blank" href="allotmentform.php ">ALLOTMENT </a></button>
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
        function deleteHandlers() {
            var table = document.getElementById("teacherstable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                //var b = currentRow.getElementsByTagName("td")[0];
                var createDeleteHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "deleteteacher.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id=teacherstable style="margin-left: 80px"><br>
        <tr>
            <th width="10" class="font-sans bg-zinc-100">Allotment ID</th>
            <th width=90 class="font-sans bg-zinc-100">Teacher Name</th>
            <th width=50 class="font-sans bg-zinc-100">Course Name</th>
            <th width=50 class="font-sans bg-zinc-100">Batch</th>
         
            <th width="100" class="font-sans bg-zinc-100">Action</th>
        </tr>
        <tbody>

        <?php
        include 'connect.php';
        $sql ="SELECT * FROM `course_assignment`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['CA_ID'];
            $Teacher_Name = $row['Teacher_Name'];
            $Course_Alias = $row['Course_Alias'];
            $Batch = $row['Batch'];
           
            echo '<tr>
        <th >' . $id . '</th>
        <td>' . $Teacher_Name . '</td>
        <td>' . $Course_Alias . '</td>
        <td>' . $Batch . '</td>
      
        
        <td>

<button class="bg-green-800 text-white rounded-md shadow-2xl text-sm font-serif w-14 h-7" ><a href="updateallot.php?updateid='. $id .'">Update</a></button>
<button class="bg-red-700 text-white rounded-md shadow-2xl text-sm font-serif w-14 h-7 mt-1"> <a  href="deleteallot.php?deleteid=' . $id . '">Delete</a></button>
</td>
        
      </tr>';
          }
        }
        ?>

        
        </tbody>
    </table>

</div>

</body>
</html>
