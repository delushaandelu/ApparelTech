<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>                     
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>
         <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="&#x26B2   Search for customer by id..." style="width: 320px; height: 50px">

            </div>
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
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
                <ul class="breadcrumb">
                    <h4>Delivery Details</li></h4>
                </ul>
<div id="content">
    <form action="GET">
        <table  class="table datatable" id='myTable'>
            
            <tr class="success">
                <th><center>Request Id</center></th>
                <th><center>Purchase order Id</center></th>
                <th><center>Company</center></th>
                <th><center>Address</center></th>
                <th><center>Date</center></th>
                <th><center>Telephone</center></th>
                <th><center>Bank</center></th>
                <th><center>Branch</center></th>
                <th><center>Voucher</center></th>
                <th><center>Amount</center></th>
                <center><th colspan="3"><center>Action</center></th></center></tr>
            <?php 
                    $sql = "select * from deliveryrequest where status ='Not approved' ";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
                        <tr class="active">
                            <td><center><?php echo $row['rid'] ?></center></td>
                            <td><center><?php echo $row['poid'] ?></center></td>
                            <td><center><?php echo $row['company'] ?></center></td>
                            <td><center><?php echo $row['address'] ?></center></td>
                            <td><center><?php echo $row['date'] ?></center></td>
                            <td><center><?php echo $row['telephone'] ?></center></td>
                            <td><center><?php echo $row['bank'] ?></center></td>
                            <td><center><?php echo $row['branch'] ?></center></td>
                            <td><center><?php echo $row['voucher'] ?></center></td>
                            <td><center><?php echo $row['amount'] ?></center></td>
                            <td><center<?php echo $row['status'] ?></center></td>
                            <td class="bt"><center><button type="button" class="btn" name="Accept" onclick="location.href='managedelivery.php?pid=<?php echo $row['poid'] ?>'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Accept</button></center></td>
                            <td class="bt"><center><button type="button" id="delete" name='delete' class="btn" onclick="location.href='managedelivery.php?poid=<?php echo $row['poid'] ?>'"><i class="fa fa-check-square-o" aria-hidden="true"></i> Reject</button>  
                        </tr>
                
                 <?php } ?>
        </table>
        </form>
       
        <?php
            if(isset($_GET['poid'])){

                $id = $_GET['poid'];
                
                //query
                $sql= "UPDATE deliveryrequest SET status='Rejected' WHERE poid = '$id'";
                $result = $dbcon->query($sql);
        
                if($result){
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Manage Delivery Reject successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='managedelivery.php'});";
                    echo'</script>';
                }
                else{
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='managedelivery.php'});";
                    echo'</script>';
                }
            }
        ?>
            <?php
            if(isset($_GET['pid'])){
                $id = $_GET['pid'];
                
                //query
                $sql= "UPDATE deliveryrequest SET status='Approved' WHERE poid = '$id'";
                $result = $dbcon->query($sql);
        
                if($result){
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Manage Delivery Accept successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='managedelivery.php'});";
                    echo'</script>';
                }
                else{
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Error occurs while accepting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='managedelivery.php'});";
                    echo'</script>';
                }
            }
        ?>
</div>

                
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>