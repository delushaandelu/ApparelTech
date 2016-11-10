<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
</head>

<body>


            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Change-Password</h2>
        </div>
        
    </div>
    <div class="row">

        <div id="content">
        <div id="top">
            <h5>
                <font color="#a52a2a" size="+2">Change Password!</font>
            </h5>
            <br><br>
            <form method="post" action="password.php">
            <tr>
                <td id="table-font" width="30" >
                    Password*
                </td>
                <td>
                    <input type="password" name="oldpwd" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    New Password*
                </td>
                <td>
                    <input type="password" name="Newpwd1" class="form-control" required>
                    <!--<label class="active">atleast 6 charactors with numbers and letters</label>-->
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    Confirm new Password*
                </td>
                <td>
                    <input type="password" name="Newpwd2" class="form-control" required>
                </td>
            </tr>
            <br><br>
            <button type="submit" id="button1" class="" name="pwd">Change</button>
            <button type="button" id="button1" class="" onclick="location.href='Settings-Change_username.php'">Back</button>
            
            <br><br>
            </form>
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
            
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
