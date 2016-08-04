<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ApperalTec</title>
    <link rel="stylesheet" href="designs/sheet.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

        <div data-role="page">
            <div data-role="header">
                <h1>Welcome To ApperalTec</h1>
            </div>
        <div id="sys">
            </br></br></br>
            <div id="login">
                <div id="frm">
        <form method="post">
                <table border="0" align="center">
                    <tr>
                        <td align="center" colspan="2"><b><h3>Login Here!</h3></b></td>
                    </tr>
                    <tr>
                        <td>Username :</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input type="submit" name="login" value="Login"></td>
                    </tr>
        </form>
                    <tr>
                        <td colspan="2" align="center">
                            <div data-role="main" class="ui-content">
                                <a href="#myPopup1" data-rel="popup">Forgot Password!</a>

                                <div data-role="popup" id="myPopup1">
                                    <form method="post">
                                    <table border="0">
                                        <tr>
                                            <td>Username </td>
                                            <td><input type="text" name="fusername" required></td>
                                        </tr>
                                        <tr>
                                            <td>Email </td>
                                            <td><input type="email" name="femail" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" name="fsend" value="Recover Password"></td>
                                        </tr>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <br/>
                    <tr>
                        <td colspan="2" align="center">Don't Have an Account!</td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">

                            <div data-role="sign" class="ui-content">
                                <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Create Your Account Today!</a>
                                <div data-role="popup" id="myPopup">
                                    <form method="post">
                                    <table border="0">
                                        <tr>
                                            <td>Full Name</td>
                                            <td>Designation</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="fname" required></td>
                                            <td><input type="text" name="lname" required></td>
                                        </tr>
                                        <td colspan="2">Address <input type="text" name="address" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">NIC Number<input type="text" name="nic" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><b>Contact</b></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone <input type="text" name="tele" required></td>
                                            <td>Mobile <input type="text" name="mob" required></td>
                                        </tr>
                                        </tr>
                                        <td colspan="2">Email <input type="email" name="address" required></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>Conform Password</td>
                                        </tr>
                                        <tr>
                                            <td><input type="password" name="pass" required></td>
                                            <td><input type="password" name="cpass" required></td>
                                        </tr>
                                        </tr>
                                        <td colspan="2">Company Name <input type="text" name="company" required></td>
                                        </tr>
                                        <tr>
                                            <td>Customer Photo
                                            <input type="file" name="pto" required></td>
                                            <td><input type="submit" name="ok" value="I Agree. Register"></td>
                                        </tr>
                                    </table>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                </table>
                    </div>
                <p>&nbsp;</p>
            </div>
            <br><br>
                <div align="center" data-role="footer">
                    <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow  ui-btn-icon-left">Home</a>
                    <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow  ui-btn-icon-left">Contact</a>
                    <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow  ui-btn-icon-left">About</a>
                </div>
        </div>
</body>
</html>