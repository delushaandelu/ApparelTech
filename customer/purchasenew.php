<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
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

    <div id="menu"></br>
        <h1>Table here</h1>
        <div class="box">
            <a class="button" href="#popup1">Let me Pop up</a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Conform Item</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="post">
                        <table border="2">
                            <tr>
                                <td>Item id :</td>
                                <td><input type="text"> </td>
                            </tr>
                        </table>
                    </form>
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
