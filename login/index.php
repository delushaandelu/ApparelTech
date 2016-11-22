<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">ApperalTech</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form method="POST">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password">
			<br/>
			<button type="submit" name="signin">Sign In</button>
            <button type="submit" name="signup">Sign Up</button>
			<br/>
			</form>
			<a href="#"><p class="small">Forgot your password?</p></a>
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
       ob_start();
       session_start();
       require_once ('../config/database.php');
       
       if ( isset($_SESSION['user'])!="" ) {
        header("Location: forgot.php");
        exit;
       }
       
       if( isset($_POST['signin']) ) { 
        
        $uname = $_POST['username'];
        $upass = $_POST['password'];
        
        $uname = strip_tags(trim($uname));
        $upass = strip_tags(trim($upass));
        
        $password = hash('sha256', $upass);
        
        $res=mysqli_query($conn,"SELECT * FROM customer WHERE username='$uname'");
        
        $row=mysqli_fetch_array($res);
        
        $count = mysqli_num_rows($res);
        
        if( $count == 1 && $row['password']==$password ) {
        $_SESSION['user'] = $row['customer_id'];
         header("Location: forgot.php");
        } else {
        $errMSG = "Wrong Credentials, Try again...";
        }
       }
?>
</html>