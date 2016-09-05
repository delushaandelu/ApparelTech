<!DOCTYPE html>
<html lang="en">
<!--interface for search supplier-->
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
            <!--page heading-->
            <h1 class="page-header">Customer Search Results</h1>
        </div>

    </div>
    <div class="row">
        <button name="back" id="button1" value="Back" onclick="location.href='Stock-View_Stock.php'">&#9754 Back</button>
        <br><br>

        <?php
        //include database connection
        include ('database_connection.php');
        $output='';

        if(isset($_POST["id"])) {
            $id = $_POST['id'];

            //query
            $sql = "SELECT * FROM item WHERE item_id LIKE '%$id%'";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {

                //resulted table
                $output .= '<div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Bying Price</th>
                            <th>Selling Price</th>
                            <th>Brand Name</th>
                            <th>Category</th>
                            <th>Stock Quantity </th>
                        </tr>\\';

                while ($row = mysqli_fetch_array($result)) {
                    $output .= '
                    <tr align="center">
                        <td><h5 align="center">\' . $row["item_id"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["itemName"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["byingPrice"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["sellingPrice"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["brand"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["catagery"] . \'</h5></td>
                        <td><h5 align="center">\' . $row["stockQty"] . \'</h5></td>
                    </tr>\';
                }
                echo $output;

            } else {
               
            }
            mysqli_close($dbcon);
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





                        

