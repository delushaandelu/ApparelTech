<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/home.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <link rel="stylesheet" href="designs/dsgn.css" type="text/css">
    <meta charset="utf-8">
    <?php
    include ("../config/headercustomer.html");
    ?>
</head>
<body>
</br></br>
<div id="main">
    <div id="header">
        <?php
            include("slide/slides.html");
        ?>
    </div>

    <div id="menu">
        <div id = info>
                <div class="panel panel-primary">
                    <div class="panel-heading" align="center">Welcome!</div>
                    <div class="panel-body">
                        <table>
                            <form method="get">
                                <tr>
                                    <td>Customer name : </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Customer ID : </td>
                                </tr>
                                <tr>
                                    <td>Company name : </td>
                                    <td></td>
                                </tr>

                            </form>
                        </table>
                    </div>
                </div>

        </div>

    </div>

    <div id="content">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</body>
</html>
