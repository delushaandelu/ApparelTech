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
       <!-- <script type="text/javascript">

       alert("hii");
               
                $.ajax({
                    alert("hii");
                    url: 'lineGraphData.php',
                    
                    //type : 'POST',
                    //data: {"categoryname" : value},
                   

                
               success : function(data){
                     
                    alert(data);
                    console.log(data);
                    var Name = [];
                    var qty = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        Name.push(itemList[i][0]);

                        //alert(data[i]);
                        //alert(itemList[i].itemName);
                        qty.push(itemList[i][1]);
                        
                    }
                    alert(Name);


                    var chartdata = {

                        labels : Name,
                        datasets : [
                            {
                              //  label : 'Quantity',
                                fillColor: "#79D1CF",
                                strokeColor: "#79D1CF",
                                data : qty

                            }
                        ]
                    };
                    //window.location.href = "Stock_NewReport_GraphReportDisplay.php";
                    var ctx = $ ('#mycanvas');
                    var barGraph = new Chart(ctx, {
                        type : 'line',
                        data : chartdata
                    });
                },

                error : function(data){
                    console.log(data);
                }

            });
              
         
       
            
    

       </script>  -->
      
 <link rel="stylesheet" href="js/sweetalert.css">

                  
    </head>
    <body>
        
     <?php
            include("../config/stockmgrmenu.php");
        ?> 


        
    
            
<!-- 
            <script>
                
                display_graph();
            </script> -->

      

                <!-- <ul class="breadcrumb">

                    <h3>Priyantha Enterprises</h3>
                    <h4>Graphical Reports</h4>
                </ul>

                <h4 align="center"> Stock Quantity Report</h4> -->



    <!-- <div id="chart-container"> -->
            

<canvas id="myChart" width="600" height="400"></canvas>


       <!--  </div> -->






<script>
$.ajax({
    url : "lineGraphData.php",
})
.done(function(data){
        
                   //console.log(data);
                    var Name = [];
                    var qty = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        Name.push(itemList[i][0]);

                        //alert(data[i]);
                        //alert(itemList[i].itemName);
                        qty.push(itemList[i][1]);
                        
                    }
                    alert(Name);

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: Name,
            datasets: [{
              label: 'date',
              data: qty,
              backgroundColor: "rgba(153,255,51,0.4)"
            }]
          }
        });
    });

</script>


    


        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






