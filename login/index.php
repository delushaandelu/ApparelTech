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
    <?php
        include ("../config/database.php");
    ?>
</head>
<body>

        <div data-role="page">
            <div data-role="header">
                <h1>Welcome To Apperal<span style="color:#FF4500">Tech</span> </h1>
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
                                            <td><input type="text" name="des" required></td>
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
                                        <td colspan="2">Email <input type="email" name="mail" required></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>Password</td>
                                        </tr>
                                        <tr>
                                            <td><input type="password" name="user" required></td>
                                            <td><input type="password" name="pass" required></td>
                                        </tr>
                                        </tr>
                                        <td colspan="2">Company Name <input type="text" name="company" required></td>
                                        </tr>
                                        <tr>
                                            <td>Customer Photo
                                            <input type="file" name="pto"></td>
                                            <td><input type="submit" name="signup" value="I Agree. Register"></td>
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

<?php
if(isset($_POST['signup']))
{
    $fname = $_POST['fname'];
    $des = $_POST['des'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $tele = $_POST['tele'];
    $mob = $_POST['mob'];
    $mail = $_POST['mail'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $company = $_POST['company'];

    $sql = "INSERT INTO customer(fullname,designation,address,nic,tele,mob,email,username,password,companyName)VALUE ('$fname','$des','$address','$nic','$tele','$mob','$mail','$user','$pass','$company')";
    mysqli_query($conn,$sql);

    echo '<script language="javascript">';
    echo 'alert("Your request sent for the approvel! Have a good day")';
    echo '</script>';
}
?>

<?php
if(isset($_POST['login']))
{
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    if($name!=''&&$pwd!='')
    {
        $sql = "select * from customer where username='".$name."' and password='".$pwd."'";
        $query=mysqli_query($conn,$sql) or die("Not user found");
        $res=mysqli_fetch_row($query);

        if($res)
        {
            $_SESSION['name']=$name;
            header('location:signup.php');
        }
        else
        {
            echo'You entered username or password is incorrect';
        }
    }
    else
    {
        echo'Enter both username and password';
    }
}
?>

</html>