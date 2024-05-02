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
    <?php include 'nav.html';?>

    <center>
<div  style="margin:-650px 0px 0px 100px;
">
    <button id="teachermanual" class="bg-slate-900 text-white rounded-2xl shadow-2xl text-sm font-serif w-36 h-16"><a  target="_blank" href="addcourseform.php ">ADD COURSE </a></button>
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
            <th width="20" class="font-sans bg-zinc-100">Course ID</th>
            <th width=190 class="font-sans bg-zinc-100">Course Name</th>
            <th width=90 class="font-sans bg-zinc-100">Course Code </th>
            <th width="50" class="font-sans bg-zinc-100">Alias</th>
            <th width="50" class="font-sans bg-zinc-100">Credit Hours</th>
          
            <th width="100" class="font-sans bg-zinc-100">Action</th>
        </tr>
        <tbody>

        <?php
        include 'connect.php';
        $sql ="SELECT * FROM `course`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['C_ID'];
            $Course_Name = $row['Course_Name'];
            $Course_code = $row['Course_Code'];
            $Course_Alias = $row['Course_Alias'];
            $Credit_Hours = $row['Credit_Hours'];
    
            echo '<tr>
        <th >' . $id . '</th>
        <td>' . $Course_Name . '</td>
        <td>' . $Course_code . '</td>
        <td>' . $Course_Alias . '</td>
        <td>' . $Credit_Hours . '</td>
        
        <td>

<button class="bg-green-800 text-white rounded-md shadow-2xl text-sm font-serif w-20 h-7" ><a href="updatecourse.php?updateid='. $id .'">Update</a></button>
<button class="bg-red-700 text-white rounded-md shadow-2xl text-sm font-serif w-20 h-7 mt-1"> <a  href="deletecourse.php?deleteid=' . $id . '">Delete</a></button>
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