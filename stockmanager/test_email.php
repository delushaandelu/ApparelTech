<?php
 require("database_connection.php");

$result = mysqli_query($dbcon, "SELECT stockQty FROM item WHERE itemName= 'Bulbs'");
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$no_of_bulbs = $result[0] ["stockQty"];

$result = mysqli_query($dbcon,"SELECT stockQty FROM item WHERE itemName = 'Belts'");
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$no_of_belts = $result[0] ["stockQty"];



?>

<html>
<head>
<script src="./code/highcharts.js" ></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>   
<script type="text/javascript" src="css/bootstrap/bootstrap.min.css"></script> 
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>
</head>
<body>
    
<div style="position: fixed; width: 700px; height: 500px; margin-top: 40px;margin-left: 120px">
    <div>
        <div style="text-align: center" id="mychart1"></div>
    </div>
</div>    
</body>
</html>

<script type="text/javascript">
    

    
    function createGraph(no_of_bulbs,no_of_belts){
        
        $('#mychart1').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Job Applications'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Number of Applicants'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },

            tooltip: {
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> <br/>'
            },

            series: [{
                colorByPoint: true,
                data: [{
                    name: 'Driver',
                    y: no_of_bulbs,
                }, {
                    name: 'Doctor',
                    y: no_of_belts ,
                }]
            }]
        });

    }

var no_of_bulbs = parseInt('<?php echo $no_of_bulbs; ?>');
var no_of_belts = parseInt('<?php echo $no_of_belts; ?>');
createGraph(no_of_bulbs,no_of_belts);  

</script>
