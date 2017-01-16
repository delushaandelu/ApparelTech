<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">     
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <style type="text/css">
        .search_input{
            margin-left: 30%;
        }    
        .search{
            background-color: #1caf9a;
            color: aliceblue;
            width: 100px;
            height: 25px;
            border: none;
        }
    </style>
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Rented Details</h4>
        </div>
        
    </div>
    <div class="row">
        
       <?php
   // require("database_connection.php");
	$post_at = "";
	$post_at_to_date = "";
	
	//$queryCondition = "";
	if(!empty($_POST["submit"])) {			
		$post_at = $_POST["post_at"];
		$post_at_todate =$_POST["post_at_to_date"];
		/*$sql = "SELECT total_price from rentorders WHERE created >= $post_at  AND created < $post_at_todate ";*/
        $sql="SELECT * from rentorders,customer WHERE customer.customer_id=rentorders.customer_id AND created >= '$post_at' AND created < '$post_at_todate'";
	   $result = mysqli_query($dbcon,$sql);
    }
?>
   <div class="content">
    <div class="demo-content">
     
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
         <div class="col-sm-3">
		<input type="text" placeholder="From Date" id="post_at" name="post_at" class="form-control"  value="<?php echo $post_at; ?>" />
      </div>
        <div class="col-sm-3">
	    <input type="text" placeholder="To Date" id="post_at_to_date" name="post_at_to_date" class="form-control" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>"  />
      </div>
      <div class="col-sm-3"></div>
        <div class="col-sm-3">
		<input type="submit" class="search" name="submit" value="Search" >
      </div>
	</p>
        <br><br><br>
      <?php if(!empty($result))	 { ?>
      <br>
      
<table class="table datatable">
          <thead>
        <tr class='success'>
            <th><span>rentid</span></th>           
            <th><span>customer id</span></th>
            <th width="30%"><span>customer name</span></th>
            <th><span>created date</span></th>
            <th><span>price</span></th>
            <th><span>payment</span></th>
            <th><span>Amount</span></th>
        
        </tr>
      </thead>
    <tbody>
	<?php
		while($row = mysqli_fetch_assoc($result)) {
	?>
        <tr>
            <td><h5 align='center'><?php echo $row["id"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["customer_id"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["fullname"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["created"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["total_price"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["payment"]; ?></h5></td>
            <td><h5 align='center'><?php echo $row["amount"]; ?></h5></td>
			
		</tr>
   <?php
		}
   ?>
   <tbody>
  </table>
<?php } ?>
  </form>
  </div>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
