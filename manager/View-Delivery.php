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
            <h2 class="page-header">Delivery Details</h2>
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT * FROM delivery";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' style='border: solid 2px black;'>";
            echo"<tr>
                <th style='border: solid 2px black;'>Note ID </th>
                <th style='border: solid 2px black;'>Item ID </th>
                <th style='border: solid 2px black;'>Quantity </th>
                <th style='border: solid 2px black;'>Address </th>
                <th style='border: solid 2px black;'>Delivery Date </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td style='border: solid 2px black;'>" . $row["note_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["item_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["deliveryQty"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["deliveryAddress"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["deliveryDate"]. "</td>
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
