<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>
    <?php
        include ("../config/database.php");
    ?>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style2.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">    
			<div class="box-header">
				<h2 align="center">Sign up Here! </h2>
			</div>
            <form method="POST">
            <table>
                <tr>
                    <td><label for="text">Full Name</label></td>
                    <td><input type="text" name="fullname"></td>

                    <td><label for="text">Designation</label></td>
                    <td><input type="text" name="desi"></td>
                </tr>
            
                <tr>
                    <td><label for="text">Address</label></td>
                    <td><input type="text" name="address"></td>
                    
                    <td><label for="text">NIC Number</label></td>
                    <td><input type="text" name="nic"></td>
                </tr>
        
                <tr>
                    <td><label for="text">Mobile</label></td>
                    <td><input type="text" name="mob"></td>
                    
                    <td><label for="text">Telephone</label></td>
                    <td><input type="text" name="tele"></td>
                </tr>
    
                <tr>
                    <td><label for="text">Email</label></td>
                    <td><input type="email" name="email"></td>
                    
                    <td><label for="text">Company Name</label></td>
                    <td><input type="text" name="cname"></td>
                </tr>

                <tr>
                    <td><label for="text">Username</label></td>
                    <td><input type="text" name="uname"></td>
                    
                    <td><label for="text">Password</label></td>
                    <td><input type="password" name="pword"></td>
                </tr>

                <tr>
                    <td><label for="text">Your id Photo </label></td>
                    <td colspan="2"><input type="file" name="file"></td>
                </tr>

        
			<br/>
            </table>
            <center>
            <button type="submit" name="sumbit">Submit to Finish</button>
            <button type="submit" name="forgot">Login</button>
            </center>
            </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

<?php

    $fname = $_POST['fullname'];
    $desi = $_POST['desi'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

if(isset($_POST['submit'])) {
    $sql = "INSERT INTO customer (fullname, designation, companyName, address, email, mob, tele, username, password, nic, )
VALUES ('$fname', '$desi', '$cname', '$address', '$email', '$mob', '$tele' '$uname', '$pword', '$nic',)";

    if ($conn->query($sql) === TRUE) {

        echo "<script>";
        echo "alert('Your information sent for approvel! have a gud day')";
        echo "</script>";
    } else {

        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
    }

    $conn->close();
}
?>

</html>