<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ApperalTech</title>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    <?php
        include ("../config/database.php");
    ?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style2.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <script type="text/javascript">
           function check(){
          
                if(document.form.fullname.value == ""){
                    alert("Please enter the full name");
                    document.form.fullname.focus();
                    return false;
                }
                 if(document.form.desi.value == ""){
                    alert("Please enter the address");
                    document.form.desi.focus();
                    return false;
                }
                if(document.form.nic.value == ""){
                    alert("Please enter the identity card number");
                    document.form.nic.focus();
                    return false;
                }

                 if(document.form.mob.value == ""){
                    alert("Please enter the mobile number");
                    document.form.mob.focus();
                    return false;
                }

                 if(document.form.tele.value == ""){
                    alert("Please enter the telephone number");
                    document.form.tele.focus();
                    return false;
                }

              
    

                if(document.form.email.value == ""){
                    alert("Please enter the email address");
                    document.form.email.focus();
                    return false;
                }else{
                    var x = document.forms["form"]["email"].value;
                    var atpos = x.indexOf("@");
                    var dotpos = x.lastIndexOf(".");
                    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                        alert("Not a valid e-mail address");
                        return false;}

                }

                if(document.form.cname.value == ""){
                    alert("Please enter the company name");
                    document.form.cname.focus();
                    return false;
                }

                if(document.form.uname.value == ""){
                    alert("Please enter the user name");
                    document.form.uname.focus();
                    return false;
                }

                if(document.form.pword.value == ""){
                    alert("Please enter the password");
                    document.form.pword.focus();
                    return false;
                }


           }

       </script> 

</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">    
			<div class="box-header">
				<h2 align="center">Sign up Here! </h2>
			</div>

        <form method="POST" name="form" onSubmit="return check();">
            <table>
                <tr>
                    <td><label for="text">Full Name</label></td>
<<<<<<< HEAD
                    <td><input type="text" name="fullname"></td>
=======
                    <td><input type="text" name="fullname" ></td>
>>>>>>> origin/master

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
                <button type="sumbit" name="sumbit" value="submit">Submit to Finish</button></br>
                <a href="index.php">Login!</a> Now
            </center>
        </form>

		</div>
	</div>
</body>
</html>