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

                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
<div id="content">
 
        <table class="table table-striped">
            
            <tr class="title">
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
                <center><th colspan="2">Action</th></center></tr>
            <?php 
                    $sql = "select * from deliveryrequest";
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
                                <td class="bt"><center><button type="button" class="btn" name="Update" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Accept</button></center></td>
                                <td class="bt"><center><button type="button" class="btn btn-danger" name="Delete" ><i class="fa fa-trash" ></i> Reject</button></center></td>
                                <td class="bt"><center><button type="button" class="btn" name="Update" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Print invoice</button></center></td>
                            </tr>
                
                 <?php } ?>
        </table>
                
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>