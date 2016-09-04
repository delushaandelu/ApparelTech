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

<ul class="breadcrumb">
    <h2>Page Heading here!</li></h2>
</ul>
<div id="content">
        <div id="topdelivery">

        </div>
        <div id="bottomdelivery">
            <form method="post">
                <table id="deliverytb" border="0">
                    <caption id="delivery_cap">Delivery Note</caption>
                    <tr>
                        <td id="table_font">Note ID</td>
                        <td><input type="text" name="noteid" class="form-control"> </td>

                        <td id="table_font">Address</td>



                    </tr>
                    <tr>
                        <td id="table_font">P/O ID</td>
                        <td><input type="text" name="poid" class="form-control"> </td>

                        <td id="table_font">Line1</td>
                        <td><input type="text" name="line1" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td id="table_font">Date</td>
                        <td><input type="text" name="deliverydate" class="form-control"></td>

                        <td id="table_font">Line2</td>
                        <td><input type="text" name="line2" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td id="table_font" >Note</td>
                        <td><textarea>comment here</textarea></td>


                        <td id="table_font">District</td>
                        <td><input type="text" name="district" class="form-control" ></td>

                    </tr>


                    <tr>
                        <td id="table_font">Driver</td>
                        <td><input type="text" name="driver" class="form-control" ></td>
                        <td id="table_font">Vehicle</td>
                        <td><input type="text" name="Vehicle" class="form-control" ></td>
                    </tr>
                    <tr>
                        <td id="table_font">Vehicle</td>
                        <td><input type="text" name="Vehicle" class="form-control" ></td>

                    </tr>


                </table>


            </form>

        </div>
    </div>

    <div id="footer"></div>

</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






