<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery formToWizard Plugin Example</title>
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
    
</head>

<body>

<h1 style="margin:150px auto 30px auto;" class="text-center">Priyntha Enterprices - Lets talk business</h1>
<div class="row wrap"><div class="col-lg-12">

    <div id='progress'><div id='progress-complete'></div></div>

    <form method="POST" id="SignupForm" action="signup.php">
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

</div></div>

</body>
</html>
<?php
include('dbConfig.php');
if(isset($_POST["sumbit"])){
    $fname = $_POST['fullname'];
    $desi = $_POST['desi'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pword'];
    $password = md5($pass);
    
    // customer image uploading process
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql="INSERT INTO customer (nic,fullname,designation,companyName,address,email,mobile,tele,username,password, status, image) VALUES ('$nic','$fname','$desi','$cname','$address','$email','$mob','$tele','$uname','$password', 'false', '$target_file')";
    

if (mysqli_query($db, $sql) === TRUE) {
        echo'<script>';
        echo"alert('We will give your account authentication soon! Thank you')";
        echo'</script>';
        header('location:index.php');
    } else {

        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
        
    }

    mysqli_close($db);
    }

    ?>