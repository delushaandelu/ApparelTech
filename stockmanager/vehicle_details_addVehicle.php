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

<ul class="breadcrumb">
    <h2>ADD Vehicle here!</li></h2>
</ul>
    
 <div id="content">
        
        <div id ="top_section">

            <div id = "top_left_vehicle">
                <form method="post" action="vehicle_details_addVehicle.php">
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
                                <select name="vehicletype">
                                <option>van</option>
                                <option>lorry</option>
                                </select>
                               
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">status</td>

                            <td>
                                <select name="status">
                                <option>0</option>
                                <option>1</option>
                                </select>
                            </td>
                        </tr>
                    </table>
             

            <div id="top_right_section">
                <div id="button1">
                    <input type="submit" class="btn btn-info" name="VehicleInsert" value="Insert"/><br><br>
                    <button type="button" class="btn btn-info">Clear</button> <br><br>
                    <button type="reset" class="btn btn-info">Refresh</button>

                </div>
            </div>
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






