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
         .panel-body{
                background-color: white;
            }
    </style>
	</head>
	
	<body>
    <?php
        include("../config/stockmgrmenu.php");
    ?>
    <ul class="breadcrumb">
    <h4>Search Rent</li></h4>
    </ul>
<div class="content">
    <div class="panel-heading">
        <div class="panel-body">
<?php
   
	$post_at = "";
	$post_at_to_date = "";
	
	
	if(!empty($_POST["submit"])) {			// query for selecting rent orders between dates
		$post_at = $_POST["post_at"];
		$post_at_todate =$_POST["post_at_to_date"];
        $sql="SELECT * from rentorders,customer WHERE customer.customer_id=rentorders.customer_id AND created >= '$post_at' AND created < '$post_at_todate'";
	   $result = mysqli_query($dbcon,$sql);
    }
?>
  
<div class="demo-content">
     
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
		<input type="text" placeholder="From Date" id="post_at" name="post_at"  value="<?php echo $post_at; ?>" class="input-control" />
	    <input type="text" placeholder="To Date" id="post_at_to_date" name="post_at_to_date" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>" class="input-control"  />			 
		<input type="submit" class="search" name="submit" value="Search" >
	</p>
      <?php if(!empty($result))	 { ?>
      <br>
      
<table class="table datatable">     
        <thead>
            <tr class='success'>
            <th width="20%"><span>rentid</span></th>           
            <th width="30%"><span>customer id</span></th>
            <th width="50%"><span>customer name</span></th>  
            <th width="20%"><span>Amount</span></th>
            </tr>
        </thead>
        <tbody>
	       <?php
		      while($row = mysqli_fetch_assoc($result)) {
	       ?>
        <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["customer_id"]; ?></td>
        <td><?php echo $row["fullname"]; ?></td>
        <td><?php echo $row["total_price"]; ?></td>
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
            
<!-------------date picker--------------------------------------------->
            
<script>
        $.datepicker.setDefaults({
        showOn: "button",
        buttonImage: "img/datepicker.png",
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
</div>

</body>
</html>
