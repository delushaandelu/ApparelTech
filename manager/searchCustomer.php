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
    <button name="back" id="button1" value="Back" onclick="location.href='ManageUser-View_Customer.php'">&#9754 Back</button>
        <br><br>

        <?php
        //include database connection
include ('database_connection.php');
$output='';

if(isset($_POST["id"])) {
    $id = $_POST['id'];

    //query
    $sql = "SELECT * FROM customer WHERE customer_id LIKE '%$id%'";
    $result = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($result) > 0) {

        //resulted table
        $output .= '<div class="table-responsive">
                    <table class="table table-striped">
                        <tr> 
                            <th>Customer ID</th>
                            <th>NIC</th>
                            <th>Customer Name</th>
                            <th>Designation</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>E mail</th>
                            <th>Mobile</th>
                            <th>Telephone</th>
                            
                        </tr>';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                    <tr align="center">
                        <td><h5 align="center">' . $row["customer_id"] . '</h5></td>
                        <td><h5 align="center">' . $row["nic"] . '</h5></td>
                        <td><h5 align="center">' . $row["fullname"] . '</h5></td>
                        <td><h5 align="center">' . $row["designation"] . '</h5></td>
                        <td><h5 align="center">' . $row["companyName"] . '</h5></td>
                        <td><h5 align="center">' . $row["address"] . '</h5></td>
                        <td><h5 align="center">' . $row["email"] . '</h5></td>
                        <td><h5 align="center">' . $row["mobile"] . '</h5></td>
                        <td><h5 align="center">' . $row["tele"] . '</h5></td>
                        </tr>';
        }
        echo $output;

    } else {
        echo 'Data not found!';
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


