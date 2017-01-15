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
        $sql="SELECT * from rentorders WHERE created >= '$post_at' AND created < '$post_at_todate'";
	   $result = mysqli_query($dbcon,$sql);
    }
?>
   
    <div class="demo-content">
		<h2 class="title_with_link">Recent Articles</h2>
     
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
		<input type="text" placeholder="From Date" id="post_at" name="post_at"  value="<?php echo $post_at; ?>" class="input-control" />
	    <input type="text" placeholder="To Date" id="post_at_to_date" name="post_at_to_date" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>" class="input-control"  />			 
		<input type="submit" name="submit" value="Search" >
	</p>
      <?php if(!empty($result))	 { ?>
<table class="table-content">
          <thead>
        <tr>
                      
          <th width="30%"><span>Post Title</span></th>
          <th width="50%"><span>Description</span></th>          
          <th width="20%"><span>Post Date</span></th>	  
        </tr>
      </thead>
    <tbody>
	<?php
		while($row = mysqli_fetch_assoc($result)) {
	?>
        <tr>
			<td><?php echo $row["customer_id"]; ?></td>
			<td><?php echo $row["total_price"]; ?></td>
			<td><?php echo $row["id"]; ?></td>

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
<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'yy-mm-dd'  
});
$(function() {
$("#post_at").datepicker();
$("#post_at_to_date").datepicker();
});
</script>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
