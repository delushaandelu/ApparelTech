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
        <img src="images/managing1.jpg">
    </div>

    <div id="menu">
        <h2>
            <font color="white" size="+1">Change Username</font>
        </h2>
    </div>

    <div id="content">
        <div id="top">
            <h5>
                <font color="#a52a2a" size="+2">Change Username?</font>
            </h5>
            <br><br>
            <tr>
                <td id="table-font" width="30" >
                    Username
                </td>
                <td>
                    <input type="text" name="Username" class="form-control">
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    New Username
                </td>
                <td>
                    <input type="text" name="New Username" class="form-control">
                </td>
            </tr>
            <br><br>
            <button type="button" id="button2" class="btn btn-default btn-lg active">Change</button>
            <br><br>

            <h5>
                <font color="#a52a2a" size="+2">Change Password?</font>
            </h5>
            
            <br><br>
            
            <button type="button" id="button2" class="btn btn-default btn-lg active" onclick="location.href='Settings-Change_password.php'">Change Password</button>
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>
