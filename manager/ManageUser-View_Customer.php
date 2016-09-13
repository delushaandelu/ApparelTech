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
            <div class="1">
                <h1 class="page-header">Customers</h1>
            </div>
            <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#x26B2   Search for customers by name..." style="width:300px"">
                    <br><br><br>
            </div>
        </div>

    </div>
    <div class="row">
        <?php
            include('database_connection.php');

            $sql = "SELECT customer_id, nic, fullname, designation, companyname, address, email, mobile, tele FROM customer where status = 'true'";
            $result = $dbcon->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped' id='myTable'>";
                echo"<tr>
                    <th>Customer ID </th>
                    <th>NIC </th>
                    <th>Full Name </th>
                    <th>Designation </th>
                    <th>Company Name </th>
                    <th>Address </th>
                    <th>e-mail </th>
                    <th>Mobile </th>
                    <th>Telephone </th>
                </tr>";

                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["customer_id"]. "</td>
                        <td>" . $row["nic"]. "</td>
                        <td>" . $row["fullname"]. "</td>
                        <td>" . $row["designation"]. "</td>
                        <td>" . $row["companyname"]. "</td>
                        <td>" . $row["address"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["mobile"]. "</td>
                        <td>" . $row["tele"]. "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $dbcon->close();

        ?>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[2];
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

<?php


