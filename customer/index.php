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
            
			<br/>
			</form>
            Dont't have an account!<a href="signup.php"> Signup </a> Now    
            </br>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>


<?php
session_start();
if(isset($_POST['signin'])){
    require ('../config/database.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $result = mysqli_query($con, 'select * from customer where username="'.$username.'" and password="'.$password.'"');
    if (mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header('location: ../customer/home.php');
    }else
        echo "<script>";
        echo "alert('ERROR| Your are not an authoriezed user! Cheack your information again')";
        echo "</script>";
}
?>
</html>