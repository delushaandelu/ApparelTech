<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headermanager.html");
    ?>
</head>
<body>

</br></br>
<div id="main">
    <div id="header">
        <img src="images/Managing.jpg">
    </div>

    <div id="menu">
        <h2>
            <font color="white" size="+1">Manage Stock</font>
        </h2>
    </div>

    <div id="content">

        <div id="top2">
            <table style width="100%" class="table table-striped">
                <tr>
                    <th>Report ID</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2016.01.02</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2016.01.03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2016.01.04</td>
                </tr>
            </table>

        </div>

        <div id ="bottom2" style="border: thin">
            <h3 style="color: #0000FF">
                                                   Stock Report
            </h3>
            <br><br>

            <tr>
                <td id="table-font" width="30" >
                    Report ID
                </td>
                <td>
                    <input type="text" name="Report ID" class="form-control" style="width: 30%">
                </td>
            </tr>

            <tr>
                <td id="table-font" width="60%">
                    Date
                </td>
                <td>
                    <input type="text" name="Date" class="form-control" style="width: 30%">
                    <br><br>
                </td>
            </tr>

        </div>

    </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>
