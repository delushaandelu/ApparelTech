<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>    
        <link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
             require("database_connection.php");   
        ?>

                <ul class="breadcrumb">
                    <h2>Add invoice!</li></h2>
                </ul>
    
 
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
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
