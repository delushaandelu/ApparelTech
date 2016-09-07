<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h1 class="page-header">Suppliers</h1>
            </div>
            <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#x26B2   Search for suppliers by id..." style="width: 300px " >

            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <?php
        include('database_connection.php');

        $sql = "SELECT * FROM supplier";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' style='border: 0;' id='myTable'>";
            echo"<tr>
                <th><h4 align='center'>Supplier ID </h4></th>
                <th><h4 align='center'>Name </h4></th>
                <th><h4 align='center'>E-mail </h4></th>
                <th><h4 align='center'>Address </h4></th>
                <th><h4 align='center'>Location </h4></th>
                <th><h4 align='center'>Telephone Number </h4></th>
                <th><h4 align='center'>Mobile Number </h4></th>
                <th><h4 align='center'>Action </h4></th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'>" . $row["supplier_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["sname"]. "</h5></td>
                    <td><h5 align='center'>" . $row["email"]. "</h5></td>
                    <td><h5 align='center'>" . $row["address"]. "</td>
                    <td><h5 align='center'>" . $row["location"]. "</h5></td>
                    <td><h5 align='center'>" . $row["tele"]. "</h5></td>
                    <td><h5 align='center'>" . $row["mobile"]. "</h5></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $dbcon->close();

        ?>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
