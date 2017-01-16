<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css"  href="manage_stock_design1.css"/>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">

        tab2 { padding-left: 6em; }
        tab3 { padding-left: 12em; }
        tab4 { padding-left: 20em; }
    </style>
    
     <script>
           
    // This function is written to get item names from the database according to the user selected category name
    $(document).ready(function(){
        $('#categoryname').change(function(){
           

            
            var categoryName = $(this).val();

            if(categoryName){

                $.ajax({
                    
                    type : 'GET',
                    url : '/GroupProject/manager/dropdown.php?categoryname='+categoryName,
                    //data : 'categoryname=' + categoryName,
                    dataType:'json',
                    success : function(data){
                        $('#itemname').empty();
                        $('#itemname').append("<option value = '0'> Select Item Name </option>");
                        //$('#itemname').html(html);
                        data.forEach(function(data){
                            $('#itemname').append('<option>'+data+'</option>');

                        });
                        
                        
                    }
                });
            }
        });
    });
       </script>




       <script type="text/javascript">
       //This function is written to get brand names from the database according to the user selected item name.
           
        $(document).ready(function(){

        $('#itemname').change(function(){

            
            var itemName = $(this).val();

            if(itemName){

                $.ajax({
                    type : 'GET',
                    url : '/GroupProject/manager/dropdown2.php?itemname='+itemName,
                    
                   
                    dataType:'json',
                    success : function(data){
                         $('#brandname').empty();
                        $('#brandname').append("<option value = '0'> Select Brand Name </option>");
                        $('#brandname').append("<option> All </option>");
                        //$('#itemname').html(html);
                        data.forEach(function(data){
                            alert(data);
                            $('#brandname').append('<option>'+data+'</option>');
                            
                        });
                        
                        
                    }
                });
            }
        });
    });

    </script>

    
       
       <script type="text/javascript">
       //This is the validation checking part
           function check(){
                if(document.form.categoryname.value == "Select Category Name"){
                    alert("Please select a Category Name");
                    document.form.categoryname.focus();
                    return false;
                }
                 if(document.form.itemname.value == ""){
                    alert("Please select a Item Name");
                    document.form.itemname.focus();
                    return false;
                }
                if(document.form.brandname.value == ""){
                    alert("Please select a Brand Name");
                    document.form.brandname.focus();
                    return false;
                }
           }

       </script>
       
                  
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">

        

        <div class="col-lg-12">
            <h3 class="page-header">Stock</h3>
        </div>
        
    </div>

        <div id="container">
            <div id="top">
                
                <form method="post" name="form" onSubmit="return check();">    
            <div class="upper_panel_search_item">
            
                <div class="col-sm-4">

                    <!-- This is the interface design for search items from the stock -->
                    <tab1><select id = "categoryname" name="categoryname" class="btn btn-default dropdown-toggle" width="200px">
                        <option value = "0"> Select Category Name</option><br><br><br><br>
                        <option value="Sewing Machines">Sewing Machines</option>
                        <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                        <option value="Tools">Tools</option>
                    </select></tab1>
                </div>
                <div class="col-sm-4">       
                    <tab2><select id = "itemname" name="itemname" class="btn btn-default dropdown-toggle" width="200px"></select>
                    </tab2>
                </div>
      
                <div class="col-sm-4">        
                    <tab3><select id = "brandname" name="brandname" class="btn btn-default dropdown-toggle" width="200px"></select>
                    </tab3>
                </div>
            </div>
                   
            <div  id="scrh" class="col-sm-10">
                <tab4><input type="submit" class="myButton" id="btnManageStockSearch2" name="btnManageStockSearch2" value="Search"  /></tab4>
            </div>
            <br><br><br>
        </form>
        
        <div class = "below_panel_search_item">
           <!-- This php code will output the data about stock items according to the user's selection-->

            <?php
                

                   
                if(isset($_POST['btnManageStockSearch2'])){
                    
                    $categoryname = $_POST['categoryname'];
                    $itemname = $_POST['itemname'];
                    $brandname = $_POST['brandname'];
                    if($brandname == "All"){
                         $sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname'";
                         
                    }
                    else{
                         $sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname' AND brand = '$brandname'";
                         
                    }
                   
                    if($result = mysqli_query($dbcon, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        
                        echo "<table border = '0' class='table table-hover'>";
                            echo "<tr bgcolor='#C0C0C0' width = '10px' >";
                            
                                echo "<th width='10px' style='text-align:center'>Item ID</th>";
                                echo "<th width='10px' style='text-align:center'>Item Name</th>";
                                echo "<th width='150px' style='text-align:center'>Category</th>";
                                echo "<th width='10px' style='text-align:center'>Brand</th>";
                                echo "<th width='10px' style='text-align:center'>Buying Price(Rs)</th>";
                                echo "<th width='70px' style='text-align:center'>Selling Price(Rs)</th>";
                                echo "<th width='60px' style='text-align:center'>Quantity</th>";
                                
                            echo "</tr>";
                            
                         
                        while($row = mysqli_fetch_array($result)){
                            //echo '<form action = "UpdateItem.php" method="post">';
                            echo "<div id='".$row['item_id']."'>";
                            echo "<tr>";
                                
                                echo "<td width='10px' style='text-align:center'>" . $row['item_id'] . "</td>"; 
                                echo "<td width = '10px' style='text-align:center'>" . $row['itemName'] . "</td>";
                                echo "<td width='150px' style='text-align:center'>" . $row['catagery'] . "</td>";
                                echo "<td width='10px' style='text-align:center'>" . $row['brand'] . "</td>";
                                echo "<td width='10px' style='text-align:center'>" . $row['buyingPrice'] . "</td>";
                                
                                echo "<td style='text-align:center'>" . $row['sellingPrice'] .  "</td>";
                               
                                echo "<td style='text-align:center'>" . $row['stockQty'] .  "</td>";
                                

                               /* echo "<td>"."<input type ='text' name = \"sellingPrice".$count."\" value ='".$sellingPrice."'>"."</td>";*/
                                
                                
                                

                                
                           
                            echo "</tr>";
                            echo "</div>";
                           
                        }
                         
                        echo "</table>";
                        
                        // Close result set
                        mysqli_free_result($result);
                    } else{
                        echo'<script language ="javascript">';
                        echo "swal({  title: 'No records found!', text: '', type: 'error', confirmButtonText: 'OK!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
                        echo'</script>';
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
            }
            mysqli_close($dbcon);
                }

            ?>

                </div>
            </div>
        </div>    
    </div>      

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>
    

</body>

</html>
