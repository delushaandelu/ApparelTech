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
 <!--       <script type="text/javascript">
    $(document).ready(function(){
        $("input[type='button']").click(function(){
            var radioValue = $("input[name='gender']:checked").val();
            if(radioValue){
                alert("Your are a - " + radioValue);
            }
        });
        
    });
</script> -->
      <!--  <script type="text/javascript" src = "js/chart.js"></script> -->
       <script type="text/javascript" src = "js/Chart.min.js"></script>
       <script type="text/javascript">

           $(document).ready(function(){

            
            $("#btnNewReportGenerateReport").click(function(){
                //alert("correct");
                var value = $('input[name="type"]:checked').val();

               // alert ("caf");
             if(value){
                alert(value);
                $.ajax({
                    url: 'Stock_NewReport_GraphData.php',
                    
                    type : 'POST',
                    data: 'categoryname=' + value,

                
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
              /*  $.ajax({
                    alert(value);
                    type : 'GET',
                    url : 'Stock_NewReport_GraphData.php?categoryname='+value,
                    //data : 'categoryname=' + categoryName,
                    dataType:'json',
                    success : function(data){
                        
                        alert("adffd");
                        
                        
                    }
                });*/
            }
                });
        });
            //alert $selector;
            //var data = 'categoryname=' + categoryname;
            //alert(categoryname);

         /*   if(selector){
                alert("sfefef");
                $.ajax({
                method : 'GET',
                dataType:'json',
                url : 'Stock_NewReport_GraphData.php',

                
                success : function(data){
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
*/
    

       </script>
 <link rel="stylesheet" href="js/sweetalert.css">

                  
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Graphical Reports</h2>
                </ul>

                
    <form method="get">
    <div class="upper_panel_new_report">
      

       <div class="col-md-2"></div>
    
        <div class="col-md-5" id="drop_down" >       
    
    
            <ul class="drop_down_ul">
                  <li>
                    <input type="radio" id="f-option" name="type" value="Sewing Machines">
                    <label for="f-option">Sewing Machines</label>
                    
                    <div class="check"></div>
                  </li>
                  
                  <li>
                    <input type="radio" id="s-option" name="type" value="Sewing Machine Spare Parts">
                    <label for="s-option">Sewing Machine Spare Parts</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
                  
                  <li>
                    <input type="radio" id="t-option" name="type" value="Tools">
                    <label for="t-option">Tools</label>
                    
                    <div class="check"><div class="inside"></div></div>

                   <!--  <h4>Please select your gender.</h4> -->
     <!-- <p> 
        <label><input type="radio" name="gender" value="male">Male</label> 
        <label><input type="radio" name="gender" value="female">Female</label>
    </p>
    <p><input type="button" value="Get Value"></p>  -->
                  </li>
            </ul>
        </div>

        <div class="col-md-5" id="button_effect">
            <input type="submit" id="btnNewReportGenerateReport" name="btnNewReportGenerateReport" value="Generate Report"  />
        </div>
        
    </div>
</form>

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






