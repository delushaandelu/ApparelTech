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
        #driverdisplaytb{
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

            <div id = "top_left_driver">
                <form method="post">
                    <table id="drivertb" border="0" width="500" height="500" >

                        <tr>

                            <td id="table_font">Driver Name</td>

                            <td>
                                <input type="text" name="drivername"  class="form-control">
                            </td>



                        </tr>
                        <tr>

                            <td id="table_font">Driver ID</td>

                            <td>
                                <input type="text" name="driverid"  class="form-control">
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font">Licence Number</td>

                            <td>
                                <input type="text" name="licencenumber"  class="form-control">
                            </td>
                        </tr>


                        <tr>

                            <td id="table_font">Contact</td>

                        </tr>

                        <tr>

                            <td id="table_font" align="center">Mobile 01</td>

                             <td>
                                <input type="text" name="mobile1"  class="form-control" >
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font" align="center">Mobile 02</td>

                            <td>
                                <input type="text" name="mobile2"  class="form-control" >
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font">Address</td>

                            <td>
                                <input type="text" name="address"  class="form-control" >
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">Vehicle ID</td>

                            <td>
                                <input type="text" name="vehicleid"  class="form-control">
                            </td>
                        </tr>


                    </table>
             

            <div id="top_right_section">
                <div id="button1">
                    <input type="submit" id="button_effect" name="DriverInsert" value="Insert"/><br><br>
                    <input type="submit" id="button_effect" name="DriverSearch" value="Search" /><br><br>
                    <input type="submit" id="button_effect" name="DriverDelete" value="Delete" /><br><br>
                    <input type="submit" id="button_effect" name="DriverUpdate" value="Update"/> <br><br>
                    <button type="button" id="button_effect">Clear</button> <br><br>
                    <button type="reset" id="button_effect">Refresh</button>

                </div>
            </div>
        </form>
    </div>
</div>
    </div>
    <div id="bottomdriver">
    
    
    </div>
       
    <div id="footer">
    	
    </div>
</div>
<?php

if(isset($_POST['DriverInsert'])){
    include('driver.php');
    
    $myDriver = new Driver();
    $myDriver -> addDriver();
}
if(isset($_POST['DriverSearch'])){
   include('driver.php');
    
    $myDriver4 = new Driver();
    $myDriver4 -> searchDriver(); 
    
    
}
if(isset($_POST['DriverDelete'])){
    include('driver.php');
    $myDriver2 = new Driver();
    $myDriver2 -> deleteDriver();
}

if(isset($_POST['DriverUpadate'])){
    include('driver.php');
    $myDriver3 = new Driver();
    $myDriver3 -> updateDriver();
    
}
?>

</body>
</html>
