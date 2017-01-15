

        

<html>
	<head>
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>        
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	
	</head>
	
	<body>
    <?php
            include("../config/stockmgrmenu.php");
        ?>
    <ul class="breadcrumb">
    <h4>Vehicle Details</li></h4>
</ul>
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
		<h4 class="title_with_link">Recent Articles</h4>
     
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
</body></html>
