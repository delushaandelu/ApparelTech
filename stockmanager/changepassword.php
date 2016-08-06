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
        <div id="changepwd">
        <form method="post">
            <table id="pwdtb" border="0" width="400" height="400">

            <tr>

                <td id="table_font">User Name*</td>

                <td>
                    <input type="text" name="username"  class="form-control">
                </td>



            </tr>
            <tr>

                <td id="table_font">New Password*</td>

                <td>
                    <input type="text" name="newpassword"  class="form-control">
                </td>
            </tr>

            <tr>

                <td id="table_font">Conform Password*</td>

                <td>
                    <input type="text" name="conformpassword"  class="form-control">
                </td>
            </tr>

            </table>
        </form>
        </div>
        <div id="pwd_button_sec">

        <div id="pwd_button_panel">

            <button type="button" id="button_effect">Change</button><br><br>
            <button type="button" id="button_effect">Clear</button>

        </div>
        </div>
</div>

   
    <div id="footer">
    	
    </div>
</div>
</body>
</html>
