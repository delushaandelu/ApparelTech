<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h2 class="page-header">Stock Details</h2>
            </div>
            <div class="2">
                <div class="2">
                    <!-- search box -->
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#x26B2   Search for items by id..." style="width: 300px " >

                </div>
            </div>
            
        </div>
        
    </div>
    <div class="row">
        <!-- display stock -->
        <?php

        include('database_connection.php');

        $sql = "SELECT * FROM item";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-hover' id='myTable'>";
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

        <!-- live search -->
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>


    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
