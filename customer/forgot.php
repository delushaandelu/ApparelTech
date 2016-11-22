<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style3.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<?php
 ob_start();
 session_start();
 require_once ('../config/database.php');
 
 if( !isset($_SESSION['user']) ) {
  header("Location: tet.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM customer_id WHERE username=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">    
			<div class="box-header">
				<h2 align="center">Recover Your password Here!</h2>
			</div>
            <table>
                <tr>
                    <td><label for="text">Username</label></td>
                    <td><input type="text" name="fullname"></td>

                    <td><label for="text">Email</label></td>
                    <td><input type="text" name="desi"></td>
                </tr>
            </table>
            <center>
            <button type="submit">Recover</button>
            <button type="submit">Login</button>
            </center>
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

</html>