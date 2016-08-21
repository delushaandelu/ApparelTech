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

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manager-Customer</h1>
        </div>
        
    </div>
    <div class="row">
    <div id="content">
		<div id="top1">
        	<div id="top-left1">
				<form method="post">
					<table border="0">
						<tr></tr>
						<tr>
							<td id="table-font" width="60%">
								First Name
							</td>
							<td>
								<input type="text" name="First Name" class="form-control">
								<br><br>
							</td>
						</tr>

						<tr>
							<td id="table-font" width="60%">
								Last Name
							</td>
							<td>
								<input type="text" name="Last Name" class="form-control">
								<br><br>
							</td>
						</tr>

						<tr>
							<td id="table-font" width="60%">
								NIC Number
							</td>
							<td>
								<input type="text" name="NIC Number" class="form-control" required>
								<br><br>
							</td>
						</tr>

						<tr>
							<td id="table-font" width="60%">
								Company
                                <br><br>
							</td>
							<td>
								<input type="text" name="Company" class="form-control" required>
								<br><br>
							</td>
						</tr>
					</table>
				</form>
			</div>

			<div id="top-right1">
                <form>
                    <tr>
                        <label>Customer ID</label>
                        <br><br>
                        <td>
                            <input type="" name="Search by id" placeholder="Attach Here!!" class="form-control" size="60%" required><br><br>
                            <br><br>
                        </td>
                    </tr>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Approve</button>
                    <br><br>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Reject</button>
                    <br><br>
                </form>
			</div>
		</div>

		<div id="mid1">
			<div id="mid-left1">
                <form method="post">
                    <table border="0">
                        <tr></tr>
                        <tr>
                            <td id="table-font" width="60%">
                                First Name
                            </td>
                            <td>
                                <input type="text" name="First Name" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                Last Name
                            </td>
                            <td>
                                <input type="text" name="Last Name" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                NIC Number
                            </td>
                            <td>
                                <input type="text" name="NIC Number" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                Company
                                <br><br>
                            </td>
                            <td>
                                <input type="text" name="Company" class="form-control">
                                <br><br>
                            </td>
                        </tr>
                    </table>
                </form>
			</div>

			<div id="mid-right1">
                <form>
                    <tr>
                        <label>Customer ID</label>
                        <br><br>
                        <td>
                            <input type="" name="Search by id" placeholder="Attach Here!!" class="form-control" size="60%"><br><br>
                            <br><br>
                        </td>
                    </tr>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Approve</button>
                    <br><br>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Reject</button>
                    <br><br>
                </form>
			</div>
		</div>

		<div id="bottom1">
			<div id="bottom-left1">
                <form method="post">
                    <table border="0">
                        <tr></tr>
                        <tr>
                            <td id="table-font" width="60%">
                                First Name
                            </td>
                            <td>
                                <input type="text" name="First Name" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                Last Name
                            </td>
                            <td>
                                <input type="text" name="Last Name" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                NIC Number
                            </td>
                            <td>
                                <input type="text" name="NIC Number" class="form-control">
                                <br><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                Company
                                <br><br>
                            </td>
                            <td>
                                <input type="text" name="Company" class="form-control">
                                <br><br>
                            </td>
                        </tr>
                    </table>
                </form>
			</div>

			<div id="bottom-right1">
                <form>
                    <tr>
                        <label>Customer ID</label>
                        <br><br>
                        <td>
                            <input type="" name="Search by id" placeholder="Attach Here!!" class="form-control" size="60%"><br><br>
                            <br><br>
                        </td>
                    </tr>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Approve</button>
                    <br><br>
                    <button type="button" id="button1" class="btn btn-default btn-lg active">Reject</button>
                    <div data-role="popup" id="myPopup1">
                    <br><br>
                </form>
			</div>
		</div>
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
