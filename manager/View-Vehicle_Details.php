<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vehicle Details</h1>
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT * FROM vehicle";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo"<tr>
                <th><h5 align='center'>Vehicle ID </h5></th>
                <th><h5 align='center'>Vehicle No </h5></th>
                <th><h5 align='center'>Capacity</h5></th>
                <th><h5 align='center'>Vehicle Type </h5></th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'>" . $row["vehicle_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vehicleNo"]. "</h5></td>
                    <td><h5 align='center'>" . $row["capacity"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vehicleType"]. "</h5></td>
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
