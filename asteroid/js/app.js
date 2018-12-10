$(document).ready(function(){

$.ajax({
		url:"http://localhost/asteroid/data.php",
		method="GET",
		success: function(data){
			console.log(data);
			var id = [];
			var number=[];
			for(var i in data){
				id.push("id "+data[i].id);
				number.push(data[i].number)
			}

			var chartdata = {
					labels: 'number',
					datasets :[{


					backgroundColor:'rgba(200,200,200,0.75)',
					borderColor:'rgba(200,200,200,0.75)',
					hoverBackgroundColor:'rgba(200,200,200,1)',
					hoverBorderColor:'rgba(200,200,200,0.75)',
					data:number
}
					]

			};
var ctx =$("#myChart");
var barGraph = new Chart(ctx,{ 

type:'bar',
data:chardata
});

		},
		error: function(data){

			console.log(data);
		}



})



});