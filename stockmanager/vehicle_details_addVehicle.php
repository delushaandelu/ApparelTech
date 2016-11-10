<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
    </head>
<body>
        
<?php
    include("../config/stockmgrmenu.php");
 ?>
<style type="text/css">
    #vehicledisplaytb{
        width: 600px;
        height: 550px;
        }
</style>
<div id="content">
        
        <div id ="top_section">

            <div id = "top_left_vehicle">
                <form method="post" action="vehicle_details_addVehicle.php">
                     <div class="panel-heading-vehicle" align="center">Add Vehicle</div>
                    <table id="vehicletb" border="0" width="500" height="500" >

                        <tr>
                            <td id="table_font">Vehicle Number</td>

                            <td>
                                <input type="text" name="vehiclenumber"  class="form-control">
                            </td>

                        </tr>
                        <tr>
                            <td id="table_font">Capacity</td>

                            <td>
                                <input type="text" name="vehiclecapacity"  class="form-control">
                            </td>

                        </tr>

                        <tr>
                            <td id="table_font">Vehicle Type</td>

                            <td>
                                <select name="vehicletype" class="form-control">
                                <option>van</option>
                                <option>lorry</option>
                                </select>
                               
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">status</td>

                            <td>
                                <select name="status" class="form-control">
                                <option>0</option>
                                <option>1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2"><center><input type="submit" class="btn" name="VehicleInsert" value="Insert"/>
                    <button type="button" class="btn">Clear</button>
                    <button type="reset" class="btn">Refresh</button></center></td>
                        </tr>
                    </table>
             </form>
    </div>
</div>
</div>
<div id="bottomvehicle">
    
    
</div>
       
<div id="footer">
        
</div>

<?php

if(isset($_POST["VehicleInsert"])){                //call to addVehicle method in Vehicle class
    include('vehicle.php');
    $myVehicle = new Vehicle();
    $myVehicle -> addVehicle();
    
}

?>
  

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






