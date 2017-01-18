<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priyantha Enterprices</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .wrap { max-width: 980px; margin: 10px auto 0; }
        #steps { margin: 80px 0 0 0 }
        .commands { overflow: hidden; margin-top: 30px; }
        .prev {float:left}
        .next, .submit {float:right}
        .error { color: #b33; }
        #progress { position: relative; height: 5px; background-color: #eee; margin-bottom: 20px; }
        #progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #1caf9a; transition: width .2s ease-in-out; }

    </style>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="jquery.formtowizard.js"></script>
    
    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );
            
            $signupForm.validate({errorElement: 'em'});
            
            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-default next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                    
                    
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
    </script>
    <!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/signup.css">
    <style type="text/css">
        .btnsubmit{
            background-color: #1caf9a;
            color: aliceblue;
            border: none;
            width: 100px;
            height: 30px;
            font-size: 17px;
            margin-left: 89%;
            
        }
    </style>
</head>

<body background="../images/black_wall.jpg">
</br></br>

<div class="container">
        <div class="panel panel-default">

<div class="" style="background-color:#1caf9a"><h1 style="margin:-1px auto 3px auto;" class="text-center"><span style="color:white; font-size:30px">PRIYANTHA ENTERPRISES</span></h1></div>
<div class="row wrap"><div class="col-lg-12">
<div class="panel-body">
    <div id='progress'><div id='progress-complete'></div></div>

    <form method="POST" id="SignupForm" action="classSignup.php" name = "InputForm" onSubmit = "return validateform();">
        <fieldset>
            <legend>Your Identification</legend>
            <div class="form-group">
            <label for="Name">Full Name</label>
            <input name="fullname" type="text" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="Email">Company Name</label>
            <input name="cname" type="text" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="Email">Designation</label>
            <input name="desi" type="text" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="Email">NIC Number</label>
            <input name="nic" id="nic" type="text" class="form-control" onblur="validatenic()" required/>
            </div>
        </fieldset>

        <fieldset>
            <legend>Your Contact</legend>
            <div class="form-group">
            <label for="CompanyName">Address</label>
            <input name="address" type="text" class="form-control" required/>
            </div>
            <div class="form-group">
            <label for="Website">Mobile(xxx-xxx-xxxx)</label>
            <input name="mob" id="mob" type="number" class="form-control" required/>
            </div>
            <!--<div class="form-group">
            <label for="CompanyEmail">Telephone(xxx-xxx-xxxx)</label>
            <input name="tele" id="tele" type="number" class="form-control" required/>
            </div>-->
            <div class="form-group">
            <label for="Email">Email</label>
            <input name="email" type="email" class="form-control" required />
            </div>
        </fieldset>
        <fieldset class="form-horizontal" role="form">
            <legend>Your Account</legend>
            <div class="form-group">
            <label for="CompanyName">Username</label>
            <input name="uname" type="text" class="form-control"  />
            </div>
            <div class="form-group">
            <label for="CompanyName">Password</label>
            <input name="pword" type="password" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="CompanyName">ID Photo</label>
            <input name="word" id="word" type="file" class="form-control" required />
            </div>          
        </fieldset>
        <p>
            <button id="submit" class="btnsubmit">Submit</button>
        </p>
    </form>
</div>
</div></div>

</div>

</div>
<!--------------------------------------VALIDATION ---------------------------------------->

<script type="text/javascript">
function validateform(){
    
    var fullname = document.InputForm.fullname;
    var cname = document.InputForm.cname;
    var  desi = document.InputForm. desi;
    var nic = document.InputForm.nic;
    var addr =document.InputForm.address;
    var email= document.InputForm.email;
    var uname= document.InputForm.uname;
    var pword= document.InputForm.pword;
   
    // code to get File Extension..

    if (fullname.value == "")
            {
		    	window.alert("Please enter your First Name.");
		   		fullname.focus();
		    	return false;
			}
     
    if ( cname.value == "")
			{
		    	window.alert("Please enter your Company Name.");
		   		 cname.focus();
		    	return false;
			}
     if ( desi.value == "")
			{
		    	window.alert("Please enter your Designation Name.");
		          desi.focus();
		    	return false;
			}
     var RegEx =/^[0-9]{9}[VX]$/;
     if (nic.value == "")
			{
		    	window.alert("Please enter your NIC No.");
		          nic.focus();
		    	return false;
			}
    else if(!RegEx.test($("#nic").val())){
                window.alert("Please enter valid NIC No.");
                nic.focus();
		    	return false;
            }
    var phone=document.InputForm.mob;
    var phoneno =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (phone.value == "")
			{
		    	window.alert("Please enter your mobile No.");
		         phone.focus();
		    	return false;
			}
    else if(!phoneno.test($("#mob").val()))  
        {  
        window.alert("wrong mobile phone no");  
        return false;   
        }  
      else{
          return true;
      }
    
    if ( address.value == "")
			{
		    	window.alert("Please enter your Address.");
		          address.focus();
		    	return false;
			} 
    var phone1=document.InputForm.tele;
    var phoneno1 =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
     if (phone1.value == "")
			{
		    	window.alert("Please enter your telephone No.");
		         phone1.focus();
		    	return false;
			}
    else if(!phoneno1.test($("#tele").val()))  
        {  
        window.alert("wrong tele phone no");  
        return false;   
        }  
     
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (email.value == "")
			{
		    	window.alert("Please enter your email.");
		         email.focus();
		    	return false;
			}
    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        alert("Not a valid e-mail address");
        return false;
    }
    
   /* var imgpath =document.InputForm.word;
    var file= /\.(jpe?g|gif|bmp)$/;
    if(imgpath.value == "")
    {
    alert("upload your imagefile");
    word.focus();
    return false;
    }
   else if(!file.test($("#word").val()))  
        {  
        window.alert("wrong file extension");  
        return false;   
        }  */
    
    
   if ( uname.value == "")
			{
		    	window.alert("Please enter your user Name.");
		          uname.focus();
		    	return false;
			}
   
     if ( pword.value == "")
			{
		    	window.alert("Please enter your password.");
		          pword.focus();
		    	return false;
			}
    
    
   
    
}

</script>

<!-------------------------------- END VALIDATION ---------------------------------------------------->
</body>
</html>