<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>   
         
        <style type="text/css">
            #renttb2{
             margin-top:6%;   
            }
            
        
        </style>
        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

               
    
    <?php
    if(isset($_GET['vi'])){
            
            
     $id = $_GET['vi'];
     
    $sql1="select rent_id,itemName,rentedQty,stockQty from item,renteditem where item.item_id=renteditem.rent_id and rent_id=$id ";
    $result1=mysqli_query($dbcon,$sql1);
                                    
            
    if(!$result1){
        echo"query error2";
    }
 }
    
    ?>
<form>
<table class="table table-striped" id="renttb2">
    <tr>
         
        <th>ProductID</th>
        <th>Product Name</th>
        <th>Rented Quantity</th>
        <th>Stock Quantity</th>
    </tr>
        <?php
  
    while ($row = mysqli_fetch_assoc($result1) ){

        echo "<tr>";
            echo "<td>";
            echo $row['rent_id'];
            echo "</td>";
            
            echo "<td>";
            echo $row['itemName'];
            echo "</td>";

            echo "<td>";
            echo $row['rentedQty'];
            echo "</td>";

            echo "<td>";
            echo $row['stockQty'];
            echo "</td>";
        echo "</tr>";

       
    }
        ?>
    
</table>
    </form>  
    
    
    
    
    
    
    
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
