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
            <h1 class="page-header">Supplier Search Results</h1>
        </div>

    </div>
    <div class="row">
    <button name="back" id="button1" value="Back" onclick="location.href='Supplier-View_Supplier.php'">&#9754 Back</button>
        <br><br>

        <?php
include ('database_connection.php');
$output='';

if(isset($_POST["search"])) {
    $search = $_POST['search'];

    $sql = "SELECT * FROM supplier WHERE sname LIKE '%$search%'";
    $result = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($result) > 0) {

        $output .= '<div class="table-responsive">
                    <table class="table table-striped">
                        <tr> 
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>E mail</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Telephone</th>
                            <th>Mobile</th>
                        </tr>';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                    <tr align="center">
                        <td align="center"><h5>' . $row["supplier_id"] . '</h5></td>
                        <td align="center"><h5>' . $row["sname"] . '</h5></td>
                        <td align="center"><h5>' . $row["email"] . '</h5></td>
                        <td align="center"><h5>' . $row["address"] . '</h5></td>
                        <td align="center"><h5>' . $row["location"] . '</h5></td>
                        <td align="center"><h5>' . $row["tele"] . '</h5></td>
                        <td align="center"><h5>' . $row["mobile"] . '</h5></td>
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


