  

$(document).ready(function () {
 $.ajax({
   url: "http://localhost/groupproject/stockmanager/data.php",
    method: "GET",
    success:function(data){
        console.log(data);
        var item_id=[];
        var stockQty=[];
        
        for( var i in data){
            item_id.push("item_id"+data[i].item_id);
            stockQty.push(data[i].stockQty);
        }
        
        var chartdata={
            labels:item_id,
            datasets:[
                {
                    label:'item_id',
                    backgroundColor:'rgba(200,200,200,0.75)',
                    borderColor:'rgba(200,200,200,0.75)',
                    hoverBackgroundColor:'rgba(200,200,200,1)',
                    hoverBorderColor:'rgba(200,200,200,1)',
                    data:stockQty
                }
            ]
        };
        var ctx=$("#mycanvas");
        
        var barGraph =new Chart(ctx,{
           type:'bar',
            data:chartdata
        });
    },
    error:function(data){
        console.log(data);
    }
});                 
            
});