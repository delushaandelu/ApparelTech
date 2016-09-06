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
                <form method="post" action="searchStock.php">
                    <div class="col-xs-3">
                        <input type="text" name="id" placeholder="Search by item id" class="form-control" size="35">
                    </div>
                    <div>
                        <button type="submit" id="button" class="btn btn-default">Search</button>
                    </div>


                    <br>
            </div>
            
        </div>
        
    </div>
    <div class="row">
        <?php

        include('database_connection.php');

        $sql = "SELECT * FROM item";
        $result = $dbcon->query($sql);

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
                    <td><h5 align='center'>" . $row["item_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["itemName"]. "</h5></td>
                    <td><h5 align='center'>" . $row["buyingPrice"]. "</h5></td>
                    <td><h5 align='center'>" . $row["sellingPrice"]. "</h5></td>
                    <td><h5 align='center'>" . $row["brand"]. "</h5></td>
                    <td><h5 align='center'>" . $row["catagery"]. "</h5></td>
                    <td><h5 align='center'>" . $row["stockQty"]. "</h5></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $dbcon->close();

        ?>

        <?php
           

                if(isset($_POST['searchbutton'])){
                    $itemName = $_POST['itemName'];
                    $mystock = new stock();
                    $mystock -> searchStock($itemName);
                }

        ?>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
