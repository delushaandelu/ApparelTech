<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
     
    <script>
    function printPageArea(areaID){
	var printContent = document.getElementById(areaID);
	var WinPrint = window.open('', '', 'width=900,height=650');
	WinPrint.document.write(printContent.innerHTML);
	WinPrint.document.close();
	WinPrint.focus();
	WinPrint.print();
	WinPrint.close();
    }
    </script>
    
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Vehicle Details</h4>
        </div>
        <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('top')">Print</a> 
    </div>
    <div class="row">
        <div id="content">
            <div id="top">
                
        <h4 style="center">Vehicle Details</h4>
        <?php
        //include('database_connection.php');

        $sql = "SELECT * FROM vehicle";
        $result = $dbcon->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-hover' id='myTable'>";
            echo"<tr  bgcolor='#C0C0C0' width = '10px'>
                <th><h5 align='center'><b>Vehicle ID</b></h5></th>
                <th><h5 align='center'><b>Vehicle No</b> </h5></th>
                <th><h5 align='center'><b>Capacity</b></h5></th>
                <th><h5 align='center'><b>Vehicle Type</b></h5></th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td><h5 align='center'>" . $row["vehicle_id"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vehicleNo"]. "</h5></td>
                    <td><h5 align='center'>" . $row["capacity"]. "</h5></td>
                    <td><h5 align='center'>" . $row["vehicleType"]. "</h5></td>
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

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
