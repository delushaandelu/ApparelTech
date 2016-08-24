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
            <h1 class="page-header">Driver Details</h1>
        </div>
        
    </div>
    <div class="row">
        <?php

        $servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
        $username = "b477c41467c518";
        $password = "955eff62";
        $dbname = "apperaltech";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM driver";
        $sql = "SELECT contactNo FROM drivercontact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped' style='border: solid 2px black;'>";
            echo"<tr>
                <th style='border: solid 2px black;'>Driver ID </th>
                <th style='border: solid 2px black;'>Driver Name </th>
                <th style='border: solid 2px black;'>Licence Number </th>
                <th style='border: solid 2px black;'>Address </th>
                <th style='border: solid 2px black;'>Vehicle ID </th>
                <th style='border: solid 2px black;'>Contact No </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td style='border: solid 2px black;'>" . $row["driver_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["driverName"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["LicenceNo"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["driverAddress"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["vehicle_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["contactNo"]. "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

        ?>


    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
