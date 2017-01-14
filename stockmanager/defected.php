<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        
        <?php
        
            include("../config/stockmgrmenu.php");
        ?>
    <?php  
  if (isset($_POST['btn'])){
        $customer_id = $_POST['customer_id'];
        $item_id = $_POST['item_id'];
        $po_id = $_POST['po_id'];
        $Qty = $_POST['Qty'];
        $date = $_POST['date'];
        $description = $_POST['description'];
         
    
    $sql="INSERT INTO defectitem (customer_id,item_id,po_id,returnItemQty,returnDate,description) VALUES ('$customer_id','$item_id','$po_id','$Qty','$date','$description')";
    

if ($dbcon->query($sql) === TRUE) {
            echo'<script language ="javascript">';
                    echo "swal({  title: 'Successfully added! Thank you', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='defected.php'});";
                echo'</script>';
        } else {
             echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='defected.php'});";
                echo'</script>';
        }

    mysqli_close($dbcon);
    }
    ?>
                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
     <div id="defect">
        <form method="post">
            <table class="table table-hover">
                <tr>
                    <td>customer ID</td>
                    <td><input type="text" class="form-control" name="customer_id"></td>
                </tr>
                <tr>
                    <td>Item ID</td>
                    <td><input type="text" class="form-control" name="item_id"></td>
                </tr>
                <tr>
                    <td>Product ID</td>
                    <td><input type="text" class="form-control" name="po_id"></td>
                </tr>
                <tr>
                    <td>Return Item Quantity</td>
                    <td><input type="text" class="form-control" name="Qty"></td>
                </tr>
                <tr>
                    <td>Return Date</td>
                    <td><input type="date" class="form-control" name="date"></td>
                </tr>
                
                
                <tr>
                    <td>Description</td>
                    <td><input type="text" class="form-control" name="description"></td>
                </tr> 
                
                <tr>
                    <td colspan="2"><center><input type="submit" class="btn btn-success" name="btn"></center></td>
                </tr>
            </table>
        </form>
    </div>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






