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
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
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
                            $('#brandname').append('<option>'+data+'</option>');
                            
                        });
                        
                        
                    }
                });
            }
        });
    });

    </script>

    <!--<script type="text/javascript">
        function delete_item(item_id){
            var item = item_id;
            var temp = "#"+item_id;
            var temp1 = "'"+temp+"'";
            alert(temp);
            if(confirm("Sure you want to delete this update? There is NO undo!")){
                $.ajax({
                    url : 'DeleteItem.php',
                    method : 'POST',
                    data : {item:item},
                      success : function(){
                    $(temp).fadeOut('fast', function(){
                           // function called after fadeout completes
                           // fadeOut does the animation you want.
                           // you can obtain ID before saving it as a variable
                    }),
                statusCode: {
                    200: function(){
                         // you can put the fadeOut code in here, as this guarantees that when the server responds accordingly you will then run your code, you can also set functions for other response codes.
                       }

                 }
            }
                    
                        
                           
                });
                   
            }
           
               
        }
    </script>
    <script type="text/javascript">

             function update_item(item_id, sellingPrice,stockQty){

               // alert (sellingPrice);
                var item_id = item_id;
                var sellingPrice = sellingPrice;
                var stockQty = stockQty;
               
                //var temp = "#"+item_id;
                //var temp1 = "'"+temp+"'";
                //alert ("hii");

                 $.ajax({


                            url : 'UpdateItem2.php',
                            method : 'POST',
                            data : {"item_id" : item_id , "sellingPrice" : sellingPrice , "stockQty" : stockQty},
                           //alert (item);
                            success : function($result){
                                alert("Stock upated successfully");
                                    
                                
                            }

                        });
               
            }
      
       </script> -->
    
       
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
                    <select id = "categoryname" name="categoryname" class="btn btn-default dropdown-toggle">
                        <option value = "0"> Select Category Name</option><br><br><br><br>
                        <option value="Sewing Machines">Sewing Machines</option>
                        <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                        <option value="Tools">Tools</option>
                    </select>
                </div>       
                <div class="col-sm-4">       
                    <select id = "itemname" name="itemname" class="btn btn-default dropdown-toggle"></select>

                </div>
                <div class="col-sm-4">        
                    <select id = "brandname" name="brandname" class="btn btn-default dropdown-toggle"></select>

                </div>
            </div>
                   
            <div  id="scrh" class="col-sm-10">
                <input type="submit" class="myButton" id="btnManageStockSearch2" name="btnManageStockSearch2" value="Search"  />
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
                                echo "<th width='10px' style='text-align:center'>Buying Price</th>";
                                echo "<th width='70px' style='text-align:center'>Selling Price</th>";
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
                        echo "No records matching your query were found.";
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
