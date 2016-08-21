<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template1.css" type="text/css" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headerstock.html");
    ?>
    <style type="text/css">
        #vehicledisplaytb{
            width: 600px;
            height: 550px;
        }
    
    </style>
</head>
<body>

</br></br>
<div id ="lol"></div>
<div id="main">
    <div id="header">
        <img src="images/55.jpg">
    </div>
    

    <div id="content">
        <div id ="top_section">

            <div id = "top_left_vehicle">
                <form method="post">
                    <table id="vehicletb" border="0" width="500" height="500" >

                        <tr>

                            <td id="table_font">Vehicle Type</td>

                            <td>
                                <input type="text" name="vehicletype"  class="form-control">
                            </td>



                        </tr>
                        <tr>

                            <td id="table_font">Vehicle ID</td>

                            <td>
                                <input type="text" name="vehicleid"  class="form-control">
                            </td>
                        </tr>

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
                    </table>
             

            <div id="top_right_section">
                <div id="button1">
                    <input type="submit" id="button_effect" name="VehicleInsert" value="Insert"/><br><br>
                    <input type="submit" id="button_effect" name="VehicleSearch" value="Search" /><br><br>
                    <input type="submit" id="button_effect" name="VehicleDelete" value="Delete" /><br><br>
                    <input type="submit" id="button_effect" name="VehicleUpdate" value="Update"/> <br><br>
                    <button type="button" id="button_effect">Clear</button> <br><br>
                    <button type="reset" id="button_effect">Refresh</button>

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
</div>
<?php

if(isset($_POST['VehicleInsert'])){
    include('vehicle.php');
    
    $myVehicle = new Vehicle();
    $myVehicle -> addVehicle();
}
if(isset($_POST['VehicleSearch'])){
   include('vehicle.php');
    
    $myvehicle4 = new Vehicle();
    $myvehicle4 -> searchVehicle(); 
    
    
}
if(isset($_POST['VehicleDelete'])){
    include('vehicle.php');
    $myvehicle2 = new Vehicle();
    $myvehicle2 -> deleteVehicle();
}

if(isset($_POST['VehicleUpadate'])){
    include('vehicle.php');
    $myvehicle3 = new Vehicle();
    $myvehicle3 -> updateVehicle();
    
}
?>

</body>
</html>
