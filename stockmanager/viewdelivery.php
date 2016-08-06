<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headerstock.html");
    ?>
</head>
<body>

</br></br>
<div id ="lol"</div>
<div id="main">
    <div id="header">
        <img src="images/55.jpg">
    </div>

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

</body>
</html>
