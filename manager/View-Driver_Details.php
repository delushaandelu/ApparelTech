<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Driver Details</h2>
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT * FROM driver";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' id='myTable' >";
            echo"<tr class='success'>
                <th>Driver ID </th>
                <th>Driver Name </th>
                <th>Licence Number </th>
                <th>Address </th>
                <th>Vehicle ID </th>
                <th>Contact No </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'> " . $row["driver_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["driverName"]. "</h5></td>
                    <td><h5 align='center'>" . $row["LicenceNo"]. "</h5></td>
                    <td><h5 align='center'>" . $row["driverAddress"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vechicle_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["mobileNo"]. "</h5></td>
                    
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $dbcon->close();

        ?>


    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>