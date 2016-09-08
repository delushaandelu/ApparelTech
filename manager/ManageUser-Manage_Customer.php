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
            <h1 class="page-header">Manage Customer</h1>
        </div>
    </div>
    


        <table class='table table-striped' >
        <tr>
                    <th >Customer ID </th>
                    <th >NIC </th>
                    <th >Full Name </th>
                    <th >Designation </th>
                    <th >Company Name </th>
                    <th >Address </th>
                    <th >e-mail </th>
                    <th >Mobile </th>
                    <th >Telephone </th>
                    <th colspan="2">Action</th>
                
                </tr>

        <?php
        //include database connection
        include('database_connection.php');

        //select query
        $sql = "SELECT customer_id, nic, fullname, designation, companyname, address, email, mobile, tele FROM customer";
        $result = $dbcon->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>


            <tr>
                        <td><?php echo $row['customer_id'] ?></td>
                        <td><?php echo $row['nic'] ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['designation'] ?></td>
                        <td><?php echo $row['companyname'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <td><?php echo $row['tele'] ?></td>
                <td class="bt"><input type="button" id="button" class="btn btn-info" value="Accept" onclick="location.href='ManageUser-Manage_Customer.php?cst_id=<?php echo $row['customer_id'] ?>'"></td>
                        <td class="bt"><input type="button" id="button" class="btn btn-info" value="Reject" data-toggle="modal" data-target="#myModal"  onclick="location.href='ManageUser-Manage_Customer.php?customer_id=<?php echo $row['customer_id'] ?>'"></td>
                    

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <p>Customer Rejected</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>



                    </tr>
        <?php } ?>
    </table>";



<?php
    if(isset($_GET['customer_id'])){

    $id = $_GET['customer_id'];
    $sql= "delete from customer where customer_id = '$id'";
    $result=mysqli_query($dbcon,$sql);

        if($result){
            echo'<script language ="javascript">';
            echo'alert("customer rejected succesfully")';
            echo 'window.location ="\'ManageUser-Manage_Customer.php\'" ';
            echo'</script>';
            }
        else{
            echo'<script language ="javascript">';
            echo'alert("Error")';
            echo'</script>'; }
    }
?>

    <?php
    if(isset($_GET['cst_id'])){
    $cid=$_GET['cst_id'];

        $copy_query = "INSERT INTO user (user_id,username,password,accessLevel)
    SELECT customer.customer_id, customer.username, customer.password,0
    FROM customer
    WHERE customer_id=$cid";
        $result1=mysqli_query($dbcon,$copy_query);

        if($result1){
            echo'<script language ="javascript">';
            echo'alert("customer rejected succesfully")';
            echo 'window.location ="\'ManageUser-Manage_Customer.php\'" ';
            echo'</script>';
        }
        else{
            echo'<script language ="javascript">';
            echo'alert("This is your exsisting customer!")';
            echo'</script>'; }
    }
    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
