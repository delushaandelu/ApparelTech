<!DOCTYPE html>
<html lang="en">
    <head>        
        
        
       
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <script type="text/javascript" src = "js/Chart.min.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
</head>
        
   

                  
   
    <body>
        
     <?php
            include("../config/managermenu.php");
        ?> 

<div id="page-wrapper">

                <ul class="breadcrumb">
                    <h3>Graphical Reports</h3>
                    <h4 align='center'>Priyantha Enterprises</h4>

                </ul>

                <h4 align="center">Purchase Orders per day</h4>  
<div id>
    <canvas id="myChart" width="250" height="120"></canvas>

</div>
<style>
    /*#myChart{
        box-shadow:3px 3px 5px 200px #ccc;
    }*/
</style>

       





<script>
$.ajax({
    url : "lineGraphData.php",
})
.done(function(data){
        
                   //console.log(data);
                    var date = [];
                    var count = [];
                    var itemList = jQuery.parseJSON(data);

                    for(var i in itemList){

                        date.push(itemList[i][0]);

                        
                        count.push(itemList[i][1]);
                        
                    }
                

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: date,//x axis
            datasets: [{

              label: 'date',
              data: count,//y axis
              backgroundColor: "rgba(0,128,128,0.8)"
            }]
          }
        });
    });

</script>


    

</div>
        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






