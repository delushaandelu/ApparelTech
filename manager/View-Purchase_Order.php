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
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Purchase Order Details</h4>
        </div>
        <div class="2">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#x26B2   yyyy-mm-dd" style="width: 300px">
        </div>
        
    </div>
    <div class="row">

            <table class='table table-hover' id='myTable' >
            <tr  bgcolor='#C0C0C0' width = '10px'>
                <th><h5 align='center'><b> Purchase Order ID</b> </h5></th>
                <th><h5 align='center'><b>Customer ID</b> </h5></th>
                <th><h5 align='center'><b>Total Price</b> </h5></th>
                <th><h5 align='center'><b>Purchase Order Date</b> </h5></th>
                <th><h5 align='center'><b>Status</b> </h5></th>
                <th><h5 align='center'><b>Action</b> </h5></th>
            </tr>

            <?php

            //include('database_connection.php');

            $sql = "SELECT p_id, customer_id, totalprice, created, status FROM purchasereport";
            $result = $dbcon->query($sql);

            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><h5 align='center'><?php echo $row['p_id'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['customer_id'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['totalprice'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['created'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['status'] ?></h5></td>
                    <td class="bt"><h5 align='center'><button type="button" id="button" class="btn btn-info" value="Delete" onclick="location.href='View-Purchase_Order.php?p_id=<?php echo $row['p_id'] ?>'"><i class="fa fa-trash-o"></i></button></h5></td>
                </tr>
                <?php } ?>
            </table>

        <?php
        if(isset($_GET['p_id'])){

            $id = $_GET['p_id'];

            $sql= "DELETE FROM purchasereport WHERE p_id = '$id'";
            $result=mysqli_query($dbcon,$sql);

            if($result){
                echo'<script language ="javascript">';
                echo "swal({  title: 'Purchase order deleted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='View-Purchase_Order.php'});";
                echo'</script>';
            }
            else{
                echo'<script language ="javascript">';
                echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='View-Purchase_Order.php'});";
                echo'</script>';
            }
        }

        ?>


        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[3];
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
