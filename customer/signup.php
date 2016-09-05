<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>
    <?php
        include ("../config/database.php");
    ?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style2.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">    
			<div class="box-header">
				<h2 align="center">Sign up Here! </h2>
			</div>

        <form method="POST" action="classSignup.php">
            <table>
                <tr>
                    <td><label for="text">Full Name</label></td>
                    <td><input type="text" name="fullname" required></td>

                    <td><label for="text">Designation</label></td>
                    <td><input type="text" name="desi" required></td>
                </tr>
            
                <tr>
                    <td><label for="text">Address</label></td>
                    <td><input type="text" name="address" required></td>
                    
                    <td><label for="text">NIC Number</label></td>
                    <td><input type="text" name="nic" required></td>
                </tr>
        
                <tr>
                    <td><label for="text">Mobile</label></td>
                    <td><input type="text" name="mob" required></td>
                    
                    <td><label for="text">Telephone</label></td>
                    <td><input type="text" name="tele" required></td>
                </tr>
    
                <tr>
                    <td><label for="text">Email</label></td>
                    <td><input type="email" name="email" required></td>
                    
                    <td><label for="text">Company Name</label></td>
                    <td><input type="text" name="cname" required></td>
                </tr>

                <tr>
                    <td><label for="text">Username</label></td>
                    <td><input type="text" name="uname" required></td>
                    
                    <td><label for="text">Password</label></td>
                    <td><input type="password" name="pword" required></td>
                </tr>

                <tr>
                    <td><label for="text">Your id Photo </label></td>
                    <td colspan="2"><input type="file" name="file"></td>
                </tr>
			<br/>
            </table>
            <center>
                <button type="sumbit" name="sumbit" value="submit">Submit to Finish</button></br>
                <a href="index.php">Login!</a> Now
            </center>
        </form>

		</div>
	</div>
</body>
</html>