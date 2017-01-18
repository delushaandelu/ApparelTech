<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>   
        <link rel="stylesheet" type="text/css" href="VehicleUpdate.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
        
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");  //include stock manager menu
?>
    <!--- vehicle update --------------------------->
<?php
    $vehicle_id= $_GET['ID'];
       if(isset($_POST['update'])){
            //$driverid = $_POST['driver_id'];
            $vehicleNo = $_POST['vehicleNo'];
            $capacity = $_POST['capacity'];
            $vehicleType = $_POST['vehicleType'];
            
            $sql= "UPDATE vehicle SET vehicleNo = '$vehicleNo',capacity='$capacity',vehicleType='$vehicleType' WHERE vehicle_id = $vehicle_id";
                if(!mysqli_query($dbcon,$sql)){
                   echo'<script language ="javascript">';
                        echo"swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                        echo'</script>';
            }
                else{
                    echo'<script language ="javascript">';
                    echo"swal({  title: 'Vehicle updated!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='vehicle_details.php'});";
                    echo'</script>';
            }
            
            
            
        }
?>
    
  <!----------vehicle update display table----------->  
    
<div class="about">
    <div class="centre">
        <div class="panel-heading" align="center">Update Vehicle</div>
        <form id="vhicle-container" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table  class="ui definition table" id="joblist">
                <?php 
                    $sql = "select * from vehicle where vehicle_id='$vehicle_id'";
                    $result = mysqli_query($dbcon,$sql);        
                    while($row = mysqli_fetch_array($result)) {
                ?>
    
                    <tr><td>VehicleNo</td><td><input class="form-control" type=text name=vehicleNo value="<?php echo $row['vehicleNo'] ?>"></td></tr>
                    <tr><td>Capacity</td><td><input class="form-control" type=text name=capacity value="<?php echo $row['capacity'] ?>"></td></tr>
                    <tr><td>VehicleType</td><td><input class="form-control" type=text name=vehicleType value="<?php echo $row['vehicleType'] ?>"></td></tr>
                    <tr><td colspan="2"><center><input class="btn"type=submit name=update value=Update></center></td></tr>
                <?php } ?>
            </table>
        </form>
    </div>
</div>
<!----------------------------------------------->
        
        
        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






