<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
         <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
    </head>
<body>
        
<?php
    include("../config/stockmgrmenu.php");
    require("database_connection.php");
?>

<ul class="breadcrumb">
    <h2>Page Heading here!</li></h2>
</ul>
    
    
<?php
    $driver_id= $_GET['ID'];
    if(isset($_POST['update'])){
            
        //$driverid = $_POST['driver_id'];
        $driverName = $_POST['driverName'];
        $LicenceNo = $_POST['LicenceNo'];
        $driverAddress = $_POST['driverAddress'];
        $vehicleid = $_POST['vehicleID'];
        $mobileNo=$_POST['mobileNo'];
            
        $sql= "UPDATE driver SET driverName = '$driverName',LicenceNo='$LicenceNo',driverAddress='$driverAddress',mobileNo='$mobileNo',vechicle_id='$vehicleid' WHERE driver_id = $driver_id";
        
            if(!mysqli_query($dbcon,$sql)){
               echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';
            }
            else{
                 echo'<script language ="javascript">';
                    echo "swal({  title: 'Driver Updated!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';
            }
        
        $sqlupdatevehicle="UPDATE vehicle SET status=1 WHERE vehicle_id=$vehicleid";
        mysqli_query($dbcon,$sqlupdatevehicle);
        
    }
    
?>
    
    
    
<div class="about">
    <div class="centre">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table class="joblist">
                <?php 
                    $sql = "select * from driver where driver_id='$driver_id'";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
    
                    <tr><td>DriverName</td><td><input class="in" type=text name=driverName value="<?php echo $row['driverName'] ?>"></td></tr>
                    <tr><td>LicenceNo</td><td><input class="in" type=text name=LicenceNo value="<?php echo $row['LicenceNo'] ?>"></td></tr>
                    <tr><td>DriverAddress</td><td><input class="in" type=text name=driverAddress value="<?php echo $row['driverAddress'] ?>"></td></tr>
                    <tr><td>MobileNo</td><td><input class="in" type=text name=mobileNo value="<?php echo $row['mobileNo'] ?>"></td></tr>
                    <tr><td>Vehicleid</td><td><select name="vehicleID">
                    <?php
                        $sql="SELECT vehicle_id FROM vehicle";
                        $result=mysqli_query($dbcon,$sql);
                            while($res=mysqli_fetch_array($result)){
                                echo("<option value = '" . $res['vehicle_id'] . "'>" . $res['vehicle_id'] . "</option>");
                            }
                    ?>
                                
                    </select></td></tr>
                  
                    <tr><td colspan="2"><input class="btn btn-info" type=submit name=update value=Update></td></tr>
                    <?php } ?>
            </table>
        </form>
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






