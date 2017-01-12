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
            <h2 class="page-header">View Order Stock</h2>
        </div>
        
    </div>
    <div class="row">
         <div id="content">

        <div id="top">
            <h4 style="center">Order Stock</h4>
        <?php

        //include('database_connection.php');

        $sql = "SELECT * FROM item WHERE 'stockQty'<='reOrderLevel' ";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' id='myTable' >";
            echo"<tr class='success'>
                <th>Item ID </th>
                <th>Item Name </th>
                <th>Brand </th>
                <th>Category </th>
                <th>Stock Qty </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'> " . $row["item_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["itemName"]. "</h5></td>
                    <td><h5 align='center'>" . $row["brand"]. "</h5></td>
                    <td><h5 align='center'>" . $row["catagery"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vechicle_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["stockQty"]. "</h5></td>
                    
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
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
