
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
    
<?php
    include("../config/stockmgrmenu.php");
     require("database_connection.php");   //connecting to database.
?>

<ul class="breadcrumb">
    <h2>Vehicle Details</li></h2>
</ul>
<div class = "panel">
        
    <style type="text/css">
        #vehicledisplaytb{
            margin-top:10%;
            margin-left: 30%;
            width: 500px;
            height: 400px;}
    </style>
</head>
<body>

</br></br>

<div id="content">
    <ul class="nav nav-justified" >
        <li id ="nav_tab_item_effect"><a href="vehicle_details_addVehicle.php">Add Vehicle</a></li>
   	</ul>
        <table class="table table-striped">
            <tr class="title"><th>vehicle_id</th><th>vehicleNO</th><th>capacity</th><th>vehicletype</th><th>status</th></tr>
                <?php 
                    $sql = "select * from vehicle";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
                            <tr class="data">
                            <td><?php echo $row['vehicle_id'] ?></td>
                            <td><?php echo $row['vehicleNo'] ?></td>
                            <td><?php echo $row['capacity'] ?></td>
                            <td><?php echo $row['vehicleType'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=Delete onclick="location.href='vehicle_details.php?vehicle_id=<?php echo $row['vehicle_id'] ?>'"></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=update onclick="location.href='vehicle_details_updateVehicle.php?ID=<?php echo $row['vehicle_id'] ?>'" ></td>
                            </tr>
                <?php } ?>
        </table>
    
              <?php
       
                if(isset($_GET['vehicle_id'])){
            
                    $id = $_GET['vehicle_id'];
                    $sql= "delete from vehicle where vehicle_id=$id";
                    $result=mysqli_query($dbcon,$sql);
            
                    $sqlupdatedriver="UPDATE driver SET vechicle_id='XXX' WHERE vechicle_id=$id";
                    mysqli_query($dbcon,$sqlupdatedriver);
            
                        if($result){
                            echo'<script language ="javascript">';
                                echo'alert("Vehicle deleted succesfully")';
                            echo'</script>'; }
                        else{
                            echo'<script language ="javascript">';
                                echo'alert("Error")';
                            echo'</script>'; }
                }
            
           ?>
    

</div>
<div id="bottomvehicle">
    
    
</div>
       
<div id="footer">
        
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





