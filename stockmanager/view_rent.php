
<!DOCTYPE html>
<html lang="en">
    <head>  
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
        <style type="text/css">
            .btnb{
                background-color: #1caf9a;
                color: aliceblue;
                width: 100px;
                height: 30px;
                border: none;
                font-size: 13px;
               
        </style>
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
   // require("database_connection.php"); 
?>


<div class = "ui buttons">
    <ul class="ui labeled icon button" >
        <li id ="nav_tab_item_effect"><a href="rent.php"><button class="btnb"> <i class="left chevron icon"></i>Back</button></a></li>
   	</ul>
</div>
    <br>
    <br>
    <?php
    if(isset($_GET['vi'])){
            
            
     $id = $_GET['vi'];
     
    $sql1="select item_id,itemName,quantity,stockQty from item,rent_order_items where item.item_id=rent_order_items.product_id and id=$id ";
    $result1=mysqli_query($dbcon,$sql1);
                                    
            
    if(!$result1){
        echo"query error2";
    }
 }
    
    ?>
<form>
<table class="table table-striped">  <!----------display quantity table ------>
    <tr class="success">
         
        <th>ProductID</th>
        <th>Product Name</th>
        <th>Ordered Quantity</th>
        <th>Stock Quantity</th>
    </tr>
        <?php
  
    while ($row = mysqli_fetch_assoc($result1) ){

        echo "<tr>";
            echo "<td>";
            echo $row['item_id'];
            echo "</td>";
            
            echo "<td>";
            echo $row['itemName'];
            echo "</td>";

            echo "<td>";
            echo $row['quantity'];
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






