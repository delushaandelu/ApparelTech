<?php
include ("../config/database.php");
?>

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

<?php
$userName=$_POST['username'];
$password=$_POST['password'];
$passWord=md5($password); // Encrypted Password

//*********retrieving data from Database**********

$query = "SELECT * FROM cutomer WHERE username='$userName' and password='$passWord'";
//$login = mysqli_query("SELECT userName,password FROM 'member' WHERE userName=          $_post['username'] AND passWord= $_post['password'])");
// Check username and password match
$res = mysql_query($query);

$rows = mysqli_num_rows($res);
if ($rows==1) {
    // Set username session variable

    $_SESSION['userName'] = $_POST['username'];

    // Jump to secured page
    header("Location: index.php");
}
else {
    // Jump to login page
    echo "user name and password not found";
}
exit;
?>
