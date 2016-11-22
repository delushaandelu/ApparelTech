<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        <?php
             require("database_connection.php"); 
        ?>
                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
<?php
$query=sprintf("SELECT item_id, stockQty FROM item ORDER BY item_id");
$result=mysqli_query($dbcon,$query);
if(!$result){
    echo"error";
}
$data=array();
foreach($result as $row){
    $data[]=$row;
}

$result -> close();

$dbcon -> close();

print json_encode($data);
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>



