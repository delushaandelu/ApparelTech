<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>

	<!--handle validation-->
	<script language="javascript">
		function check()
		{
			//validation for name
			if(document.form1.name.value==""){
				window.alert("Plese Enter your name");
				document.form1.name.focus();
				return false;
			}

			//validation for location
			if(document.form1.location.value==""){
				window.alert("Plese Enter Your location");
				document.form1.location.focus();
				return false;
			}

			//validation for address
			if(document.form1.address.value==""){
				window.alert("Plese Enter an address");
				document.form1.address.focus();
				return false;
			}

			//validation for email
			if(document.form1.email.value==""){
				window.alert("Plese Enter your Email Address");
				document.form1.email.focus();
				return false;
			}
			e=document.form1.email.value;
			f1=e.indexOf('@');
			f2=e.indexOf('@',f1+1);
			e1=e.indexOf('.');
			e2=e.indexOf('.',e1+1);
			n=e.length;

			if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1)){
				window.alert("Please Enter valid Email");
				document.form1.email.focus();
				return false;
			}
			return true;
		}
	</script>
	<!-- css , sweetalert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
	<link rel="stylesheet" href="../config/styles.css" type="text/css" />
   
    <style type="text/css">
        #top-left{
           /* border: solid 1px;*/
            width: 100%;
            height: 110%;
        }
        .suptb{
            margin-top: 3%;
            margin-left: 15%;
            width: 70%;
        }
    
    </style>
</head>

<body>

<?php
	//manager's menu
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
			<!--page heading-->
            <h4 class="">Manage Supplier</h4>
        </div>
        
    </div>
    <div class="row">
        <div id="content">
		<div id="top">
        	<div id="top-left">
				<!--handle form-->
            	<form name="form1" method="post" action="supplier.php" onsubmit="return check();">
                	<table  class="ui definition table" border="0" class="suptb">
                        <tr>
                       	  <td id="table-font" width="60%">Supplier name</td>
                            <td><input type="text" name="name" class="form-control" required placeholder="supplier name"></td>
                            <td
                        </tr>
                         <tr>
                       	   <td id="table-font" width="60%">Location</td>
                            <td><input type="text" name="location" class="form-control" required placeholder="Location"></td>
                         </tr>
                         <tr>
                         	<td id="table_font" width="60%">Contact</td> 
                                      
							<td><input type="tel" name="tele" class="form-control" required placeholder="Telephone"></td>
                        </tr>       
                        <tr>        
							<td id="table_font" width="60%" align="left">mobile </td>             
							<td><input type="tel" name="mobile" class="form-control" required placeholder="Mobile"></td>
						  </tr>
						  <tr>
                        	<td id="table-font" width="60%">Address</td>
                            <td><input type="text" name="address" class="form-control" required placeholder="Address"></td>
						  </tr>
                          <tr>
                       	   <td id="table-font" width="60%">E-mail address</td>
                            <td><input type="email" name="email" class="form-control" required placeholder="E-mail"></td>
                         </tr>
                        <tr>
                        <td>
                            <button type="submit" id="button1"  name="insert" >Add</button> 
                        </td>
                        </tr>

                         
                        </table>
                      </form>
		</div>
		</div>
</div>

			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>
    <div id="footer"></div>

    </div>      
</div>


<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>






