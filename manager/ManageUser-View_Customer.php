<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- link css , alert files-->
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
            <div class="1">
                <h4 class="page-header">Customers</h4>
            </div>
            <div class="2">
                <!-- search box -->
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#x26B2   Search for customers by name..." style="width:300px">
                    <br><br><br>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- table for view accepted customers -->

                <table class='table table-hover' id='myTable'>
                <tr bgcolor='#C0C0C0' width = '10px'>
                    <th><h6>Customer ID </h6></th>
                    <th><h6>NIC </h6></th>
                    <th><h6>Full Name </h6></th>
                    <th><h6>Designation </h6></th>
                    <th><h6>Company Name </h6></th>
                    <th><h6>Address </h6></th>
                    <th><h6>e-mail </h6></th>
                    <th><h6>Mobile </h6></th>
                    <th><h6>Telephone </h6></th>
                    <th><h6>Action </h6></th>
                </tr>

                    <?php
                    //include('database_connection.php');

                    $sql = "SELECT customer_id, nic, fullname, designation, companyname, address, email, mobile, tele FROM customer where status = 'true'";
                    $result = $dbcon->query($sql);

                    while($row = $result->fetch_assoc()) {
                        ?>



                    <tr>
                        <td><h6 align='center'><?php echo $row['customer_id'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['nic'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['fullname'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['designation'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['companyname'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['address'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['email'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['mobile'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['tele'] ?></h6></td>

                        <td class="bt"><button type="button" id="button" class="btn btn-info" onclick="location.href='ManageUser-View_Customer.php?customer_id=<?php echo $row['customer_id'] ?>'"><i class="fa fa-trash-o"></i></button></td>
                    </tr>
                    <?php } ?>
                </table>

        <?php
        if(isset($_GET['customer_id'])){

            $id = $_GET['customer_id'];
            $sql1= "DELETE FROM customer WHERE customer_id = '$id'";
            $sql2= "DELETE FROM user WHERE user_id = '$id'";
            $result1=mysqli_query($dbcon,$sql1);
            $result2=mysqli_query($dbcon,$sql2);

            if($result1 && $result2){
                echo'<script language ="javascript">';
                echo "swal({  title: 'Customer deleted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-View_Customer.php'});";
                echo'</script>';
            }
            else{
                echo'<script language ="javascript">';
                echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-View_Customer.php'});";
                echo'</script>';
            }
        }
        ?>
           


        <!-- display live search -->
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
<!-- link js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php


