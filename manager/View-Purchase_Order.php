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
            <h1 class="page-header">Purchase Order Details</h1>
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT p_id, customer_id, totalprice, created, status FROM purchasereport";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' id='myTable' >";
            echo"<tr>
                <th><h5 align='center'> Purchase Order ID </h5></th>
                <th><h5 align='center'>Customer ID </h5></th>
                <th><h5 align='center'>Total Price </h5></th>
                <th><h5 align='center'>Purchase Order Date </h5></th>
                <th><h5 align='center'>Status </h5></th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'>" . $row["p_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["customer_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["totalprice"]. "</h5></td>
                    <td><h5 align='center'>" . $row["created"]. "</h5></td>
                    <td><h5 align='center'>" . $row["status"]. "</h5></td>
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
