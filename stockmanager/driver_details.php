
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
    </head>

        
<?php
    include("../config/stockmgrmenu.php");
     require("database_connection.php");
 ?>

<ul class="breadcrumb">
    <h2>Driver Details</li></h2>
</ul>
<div class = "panel">
        
        <style type="text/css">
        #driverdisplaytb{
            margin-top:10%;
            margin-left: 30%;
            width: 500px;
            height: 400px;
        }</style>
    </head>
<body>

</br></br>

<div id="content">
        <ul class="nav nav-justified" >
            <li id ="nav_tab_item_effect"><a href="driver_details_addDriver.php">Add Driver</a></li>
   	    </ul>
 
        <table class="table table-striped">
            <tr class="title"><th>driver_id</th><th>driverName</th><th>LicenceNo</th><th>driverAddress</th><th>Mobile No</th><th>vehicle_id</th></tr>
                <?php 
                    $sql = "select * from driver";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
                            <tr class="active">
                            <td><?php echo $row['driver_id'] ?></td>
                            <td><?php echo $row['driverName'] ?></td>
                            <td><?php echo $row['LicenceNo'] ?></td>
                            <td><?php echo $row['driverAddress'] ?></td>
                            <td><?php echo $row['mobileNo'] ?></td>
                            <td><?php echo $row['vechicle_id'] ?></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=Delete name="Delete" onclick="location.href='driver_details.php?driver_id=<?php echo $row['driver_id']?> & vehicle_id=<?php echo $row['vechicle_id'] ?>'"></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=update onclick="location.href='driver_details_updateDriver.php?ID=<?php echo $row['driver_id'] ?>'" ></td>
                            </tr>
                
                <?php } ?>
        </table>
                <?php
       
                    if(!empty($_GET['driver_id']) && !empty($_GET['vehicle_id']) ){
            
                        $vehicle_id=$_GET['vehicle_id'];
                        $id = $_GET['driver_id'];
                        $sql= "delete from driver where driver_id = '$id'";
                        $result=mysqli_query($dbcon,$sql);
                            if($result){
                                echo'<script language ="javascript">';
                                echo"swal({  title: 'Driver Deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                                echo'</script>'; }
            
                        $sqlupdate="UPDATE vehicle SET status=0 WHERE vehicle_id=$vehicle_id ";
                        mysqli_query($dbcon,$sqlupdate);
                    }
    
                ?>
</div>
<div id="bottomdriver">
    
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





