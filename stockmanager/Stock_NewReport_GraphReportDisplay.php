<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
        
       <script src="js/sweetalert-dev.js"></script>

       <script type="text/javascript" src = "js/Chart.min.js"></script>
       <script type="text/javascript">

          
               
        function display_graph(value){
                //alert("correct");
                //alert ("hiii");
                //var value = $('input[name="type"]:checked').val();
                alert(value);

               // alert ("caf");
             if(value){
               
                $.ajax({
                    url: 'Stock_NewReport_GraphData.php',
                    
                    type : 'POST',
                    data: {"categoryname" : value},
                    //alert ($value);

                
               success : function(data){
                     
                    alert(data);
                    console.log(data);
                    var Name = [];
                    var qty = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        Name.push(itemList[i].itemName + "(" + itemList[i].buyingPrice + ")");
                        //alert(data[i]);
                        //alert(itemList[i].itemName);
                        qty.push(itemList[i].stockQty);
                        
                    }


                    var chartdata = {
                         labels : Name,
                        datasets : [
                            {
                                label : 'Quantity',
                                backgroundColor : 'rgba(200,200,200,0.75)',
                                borderColor : 'rgba(200,200,200,0.75)',
                                hoverBackgroundColor : 'rgba(200,200,200,1)',
                                hoverBorderColor : 'rgba(200,200,200,1)',
                                data : qty

                            }
                        ]
                    };
                    //window.location.href = "Stock_NewReport_GraphReportDisplay.php";
                    var ctx = $ ('#mycanvas');
                    var barGraph = new Chart(ctx, {
                        type : 'bar',
                        data : chartdata
                    });
                },

                error : function(data){
                    console.log(data);
                }

            });
              
            }
              
       
            
    }

       </script> 
      
 <link rel="stylesheet" href="js/sweetalert.css">

                  
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>


        <?php
            $value = $_POST['type'];?>

    
            

            <script>
                var value = "<?php echo $value; ?>";
                display_graph(value);
            </script>

      

                <ul class="breadcrumb">
                    <h2>Graphical Reports</h2>
                </ul>



    <div id="chart-container">
            <canvas id = "mycanvas"></canvas>
        </div>





    


        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






