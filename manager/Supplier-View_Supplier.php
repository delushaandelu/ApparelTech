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
                <h1 class="page-header">Suppliers</h1>
            </div>
            <div class="2">


            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <?php
        include('database_connection.php');

        $sql = "SELECT * FROM supplier";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' style='border: solid 2px black;'>";
            echo"<tr>
                <th style='border: solid 2px black;'>Supplier ID </th>
                <th style='border: solid 2px black;'>Name </th>
                <th style='border: solid 2px black;'>E-mail </th>
                <th style='border: solid 2px black;'>Address </th>
                <th style='border: solid 2px black;'>Location </th>
                <th style='border: solid 2px black;'>Telephone Number </th>
                <th style='border: solid 2px black;'>Mobile Number </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["supplier_id"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["sname"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["email"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["address"]. "</td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["location"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["tele"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["mobile"]. "</h5></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $dbcon->close();

        ?>

        <form action="supplierSearch.php">
            <div class="col-xs-3">
                <input type="text" name="email" placeholder="Search by email" class="form-control" size="35">
                <button type="button" id="button2" class="btn btn-default" name="SearchSupplier">Search</button>
            </div>
        </form>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
