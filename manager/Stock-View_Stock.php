<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- css and sweet alert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
    <style type="text/css">
        .stocktb{
            width: 50%;
            height: 20%;
        }
    
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
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h4 class="page-header">Stock Details</h4>
            </div>
            <div class="">
                <div class="">
                    <!-- live search box -->
                    <table class="table datatable" width="500px;">
                    <tr>
                    <td><input type="text" id="myInput1" onkeyup="myFunction1()" class="form-control" placeholder="&#x26B2    id..." style="width: 170px " ></td>   
                    <td> <input type="text" id="myInput2" onkeyup="myFunction2()" class="form-control" placeholder="&#x26B2    category..." style="width: 170px " ></td>
                    <td> <input type="text" id="myInput3" onkeyup="myFunction3()" class="form-control" placeholder="&#x26B2    name..." style="width: 170px " ></td> 
                    <td> <input type="text" id="myInput4" onkeyup="myFunction4()" class="form-control" placeholder="&#x26B2    brand..." style="width: 170px " ></td> 
                    </tr>
                    </table>
                </div>
            </div>
            
        </div>
        <br>
        <br>
    </div>
    <div class="row">
        <!-- display stock -->
        <?php

        //include('database_connection.php');

        $sql = "SELECT * FROM item";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table datatable' id='myTable'>";
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
        <input type="button" id="button2" class="pdfbtn" name="submitpdf" value="download pdf" onclick="location.href='../manager/tcpdf/project/stockdetails.php'"/><br><br>
        

        <!-- live search functions -->
        <script>
            function myFunction1() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput1");
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
            
            function myFunction2() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput2");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[5];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } 
                        else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
            
            function myFunction3() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput3");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
            
            function myFunction4() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput4");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[4];
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
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
