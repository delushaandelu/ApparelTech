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
            <h1 class="page-header">Purchase Order Details</h1>
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT customer_id, order_id, po_date, status FROM purchaseorder";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' style='border: solid 2px black;'>";
            echo"<tr>
                <th style='border: solid 2px black;'>Customer ID </th>
                <th style='border: solid 2px black;'>Order ID </th>
                <th style='border: solid 2px black;'>Purchase Order Date </th>
                <th style='border: solid 2px black;'>Status </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td style='border: solid 2px black;'>" . $row["customer_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["order_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["po_date"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["status"]. "</td>
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
