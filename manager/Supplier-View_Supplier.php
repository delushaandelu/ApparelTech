<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- css , sweetalert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/test123.css" type="text/css" />
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">

    <style type="text/css">
        .pdfbtn{
            background-color: #1caf9a;
            color: aliceblue;
            border: none;
            width:200px;
            height: 40px;
            margin-left: 80%;
            
        }
    
    </style>
</head>

<body>

<?php
    //manager's menu
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h4 class="page-header">Suppliers</h4>
            </div>
            <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="&#x26B2   Search for suppliers by name..." style="width: 320px; height: 50px">
                
            </div>
            <input type="button" name="submitpdf" class="pdfbtn" align="right" value="download pdf" onclick="location.href='../manager/tcpdf/project/supplierdetails.php'"/>
        </div>
    </div>
    <br><br>
    <div class="row">
            
            <form name="getcvs" action="" method="POST">
            <!-- view supplier-->
            <table class='table table-hover' style='border: 0;' id='myTable'>
                <tr bgcolor='#C0C0C0' width = '10px'>
                <th><h5 align='center'><b>Supplier ID</b> </h5></th>
                <th><h5 align='center'><b>Name</b> </h5></th>
                <th><h5 align='center'><b>E-mail</b> </h5></th>
                <th><h5 align='center'><b>Address</b> </h5></th>
                <th><h5 align='center'><b>Location</b> </h5></th>
                <th><h5 align='center'><b>Telephone Number</b> </h5></th>
                <th><h5 align='center'><b>Mobile Number</b> </h5></th>
                <th><h5 align='center'><b>Action</b> </h5></th>
            </tr>

                <?php
                //include('database_connection.php');

                $sql = "SELECT * FROM supplier";
                $result = $dbcon->query($sql);

                while($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td><h5 align='center'><?php echo $row['supplier_id'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['sname'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['email'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['address'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['location'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['tele'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['mobile'] ?></h5></td>

                    <td class="bt"><button type="button" id="button" class="btn btn-info" onclick="location.href='Supplier-View_Supplier.php?supplier_id=<?php echo $row['supplier_id'] ?>'"><i class="fa fa-trash-o"></i></button></td>
                </tr>
            <?php } ?>
            </table>
            
        </form>

        <!-- delete customer -->
        <?php
            if(isset($_GET['supplier_id'])){

                $id = $_GET['supplier_id'];
                
                //query
                $sql= "DELETE FROM supplier WHERE supplier_id = '$id'";
                $result=mysqli_query($dbcon,$sql);
        
                if($result){
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Supplier deleted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='Supplier-View_Supplier.php'});";
                    echo'</script>';
                }
                else{
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='Supplier-View_Supplier.php'});";
                    echo'</script>';
                }
            }
        ?>

        <!-- live search function -->
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
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
        </script>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>      
</div>
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
