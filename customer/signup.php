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
        #progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #337ab7; transition: width .2s ease-in-out; }

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
                nextBtnClass: 'btn btn-primary next',
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
</head>

<body background="../images/black_wall.jpg">
</br></br>

<div class="container">
        <div class="panel panel-default">

<div class="panel-heading"><h1 style="margin:10px auto 3px auto;" class="text-center">Priyntha Enterprices - Lets talk business</h1></div>
<div class="row wrap"><div class="col-lg-12">
<div class="panel-body">
    <div id='progress'><div id='progress-complete'></div></div>

    <form method="POST" id="SignupForm" action="classSignup.php">
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
            <input name="nic" type="text" class="form-control" required />
            </div>
        </fieldset>

        <fieldset>
            <legend>Your Contect</legend>
            <div class="form-group">
            <label for="CompanyName">Address</label>
            <input name="address" type="text" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="Website">Mobile</label>
            <input name="mob" type="text" class="form-control" />
            </div>
            <div class="form-group">
            <label for="CompanyEmail">Telephone</label>
            <input name="tele" type="text" class="form-control" />
            </div>
            <div class="form-group">
            <label for="Email">Email</label>
            <input name="email" type="email" class="form-control" />
            </div>
        </fieldset>
        <fieldset class="form-horizontal" role="form">
            <legend>Your Account</legend>
            <div class="form-group">
            <label for="CompanyName">Username</label>
            <input name="uname" type="text" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="CompanyName">Password</label>
            <input name="pword" type="password" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="CompanyName">ID Photo</label>
            <input name="fileToUpload" id="fileToUpload" type="file" class="form-control" />
            </div>          
        </fieldset>
        <p>
            <button id="submit" class="btn btn-primary submit">Submit form</button>
        </p>
    </form>
</div>
</div></div>

</div>

</div>

</body>
</html>