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
                <form method="post" action="driver.php" >
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
                </form>
            </div>

            <div id="top_right_section">
                <div id="button1">
                    <button type="button" id="button_effect">Insert</button> <br><br>
                    <button type="button" id="button_effect">Search</button><br><br>
                    <button type="button" id="button_effect">Delete</button> <br><br>
                    <button type="button" id="button_effect">Update</button> <br><br>
                    <button type="button" id="button_effect">Clear</button> <br><br>
                    <button type="button" id="button_effect">Refresh</button>

                </div>


            </div>
        </div>

    </div>
    <div id="bottomdriver">
        
        
        
    </div>

   
    <div id="footer">
    	
    </div>
</div>

</body>
</html>
