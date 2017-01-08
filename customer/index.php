<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <style type="text/css">
        .signin{
            width: 200px;
           
        }
        .signup{
            color: aliceblue;
            width: 200px;
            
        }
        .signup a{
            color: aliceblue;
        }
    </style>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Apparel<span style="color:#FF4500">Tech</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
                <h2><span style="color:#ffffff">Log In</span></h2>
			</div>
			<form name="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm()" method="POST">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password">
			<br/>
			<button type="submit" name="signin" class="signin">Sign In</button>
            
			<br/>
            </form></br>
           <button class="signup"><a href="signup.php"> Sign up </a></button>   
            </br>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
    
</body>


<?php
session_start();
if(isset($_POST['signin'])){
    require ('../config/database.php');
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
   // $password = md5($password);
    $_SESSION['username'] = $username;
    
    $res1 =  mysqli_fetch_assoc(mysqli_query($conn,"select fullname from customer where username = '$username' "));
    $_SESSION['fname']= $res1['fullname'];
    
    $res2 =  mysqli_fetch_assoc(mysqli_query($conn,"select companyName from customer where username = '$username' "));
    $_SESSION['company']= $res2['companyName'];
    
    $res3 =  mysqli_fetch_assoc(mysqli_query($conn,"select customer_id from customer where username = '$username' "));
    $_SESSION['csid']= $res3['customer_id'];
    
    $res4 =  mysqli_fetch_assoc(mysqli_query($conn,"select address from customer where username = '$username' "));
    $_SESSION['add']= $res4['address'];
    
    $res5 =  mysqli_fetch_assoc(mysqli_query($conn,"select email from customer where username = '$username' "));
    $_SESSION['email']= $res5['email'];
    
   
    $result = mysqli_query($conn, 'select * from user where username="'.$username.'" and password="'.$password.'" and accessLevel=0 ');
    if (mysqli_num_rows($result)==1){

		//$cst_id = $_SESSION['csid'];
		//$cst_name = $_SESSION['fname'];
		
		//$log = "INSERT INTO log(id, name, logtime) VALUES('$cst_id','$cst_name', 'sda')";

		//if (mysqli_query($con,$log) === TRUE) {
			header('location: ../customer/home.php');

			//}else{
			//echo "<script>";
			//echo "alert('ERROR| Log Time ERROR! Login Again!')";
			//echo "</script>";
			//}
    }else
        echo "<script>";
        echo "alert('ERROR| Your are not an authoriezed user! Check your information again')";
        echo "</script>";
}
?>
<script>
function validateForm() {
    var username = document.forms["login"]["username"].value;
    var password = document.forms["login"]["password"].value;
    
    if (username == "") {
        alert("Name must be filled out");
        return false;
    }
    if (password == "") {
        alert("password must be filled out");
        return false;
    }
}
</script>
</html>