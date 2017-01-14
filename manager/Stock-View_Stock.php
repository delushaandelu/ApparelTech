<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- css , sweetalert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">

    <style type="text/css">
        .pdfbtn{
            background-color: #1caf9a;
            color: aliceblue;
            border: none;
            width:200px;
            height: 40px;
            margin-left: 40%;
            
        }
    
    </style>
</head>

<body>

<?php
    //manager's menu
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h4 class="page-header">Suppliers</h4>
            </div>
            <div class="2">

            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
            <!-- display stock -->
        <?php

        //include('database_connection.php');

        $sql = "SELECT * FROM item";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='0' class='table table-hover' id='myTable'>";
            echo"<tr bgcolor='#C0C0C0' width = '10px'>
                <th align='center'>Item ID </th>
                <th align='center'>Item Name</th>
                <th align='center'>Buying Price</th>
                <th align='center'>Selling Price</th>
                <th align='center'>Brand</th>
                <th align='center'>Category</th>
                <th align='center'>Stock Qty</th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h6 align='center'>" . $row["item_id"]. "</h6></td>
                    <td><h6 align='center'>" . $row["itemName"]. "</h6></td>
                    <td><h6 align='center'>" . $row["buyingPrice"]. "</h6></td>
                    <td><h6 align='center'>" . $row["sellingPrice"]. "</h6></td>
                    <td><h6 align='center'>" . $row["brand"]. "</h6></td>
                    <td><h6 align='center'>" . $row["catagery"]. "</h6></td>
                    <td><h6 align='center'>" . $row["stockQty"]. "</h6></td>
                </tr>";
            }
            echo "</table>";
            
        } else {
            echo "0 results";
        }

        $dbcon->close();

        ?>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>      
</div>
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
