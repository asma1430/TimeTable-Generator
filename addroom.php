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
    <button id="teachermanual" class="bg-slate-900 text-white rounded-2xl shadow-2xl text-sm font-serif w-36 h-16"><a  target="_blank" href="addroomform.php ">ADD ROOM</a></button>
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
            <th width="30" class="font-sans bg-zinc-100">Room ID</th>
            <th width=190 class="font-sans bg-zinc-100">Room Name</th>
            <th width=60 class="font-sans bg-zinc-100">Room Type</th>
            <th width="90" class="font-sans bg-zinc-100">Action</th>
        </tr>
        <tbody>

        <?php
        include 'connect.php';
        $sql ="SELECT * FROM `room`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['R_ID'];
            $Room_Name = $row['Room_Name'];
            $Type = $row['Type'];
           
            echo '<tr>
        <th >' . $id . '</th>
        <td>' . $Room_Name . '</td>
        <td>' . $Type . '</td>
       
        
        <td>

<button class="bg-green-800 text-white rounded-md shadow-2xl text-sm font-serif w-20 h-7" ><a href="updateroom.php?updateid='. $id .'">Update</a></button>
<button class="bg-red-700 text-white rounded-md shadow-2xl text-sm font-serif w-20 h-7 mt-1"> <a  href="deleteroom.php?deleteid=' . $id . '">Delete</a></button>
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
