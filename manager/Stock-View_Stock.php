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
            <div class="1">
                <h1 class="page-header">Stock Details</h1>
            </div>
            <div class="2">
                <form action="demo_form.asp">
                    <div class="col-xs-3">
                        <input type="text" name="searchitem" placeholder="Search by item id" class="form-control" size="35">
                    </div>
                    <div>
                        <button type="button" id="button2" class="btn btn-default" onclick="function(item_id)">Search</button>
                    </div>


                    <br>
            </div>
            
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

        $sql = "SELECT * FROM item";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'>";
            echo"<tr class='info'>
                <th>Item ID </th>
                <th>Item Name </th>
                <th>Buying Price</th>
                <th>Selling Price </th>
                <th>Brand </th>
                <th>Category </th>
                <th>Stock Qty </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr class='danger'>
                    <td>" . $row["item_id"]. "</td>
                    <td>" . $row["itemName"]. "</td>
                    <td>" . $row["buyingPrice"]. "</td>
                    <td>" . $row["sellingPrice"]. "</td>
                    <td>" . $row["brand"]. "</td>
                    <td>" . $row["catagery"]. "</td>
                    <td>" . $row["stockQty"]. "</td>
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
