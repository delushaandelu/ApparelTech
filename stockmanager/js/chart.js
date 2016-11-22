$(document).ready(function(){
	$.ajax({
		url : "/GroupProject/stockmanager/Stock_NewReport_GraphData.php",
		method : "GET",
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
});