<!DOCTYPE html>
<html>
<head>
	<title> Asteroid Stats</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/Chart.min.js"></script>

</head>
<script type="text/javascript">
	$(document).ready(function(){
    $("button").click(function(){
        var startdate= $("#startdate").val();
         var enddate= $("#enddate").val();
         $.ajax({
                type: "POST",
                url: "fetch.php",
                data: "&startdate="+startdate+"&enddate="+enddate,
                dataType: "json",
                success: function (data)
                {
                    console.log(data);
                     var aste_date= [];
                    var  numb= [];

                    for (var i in data) {

                        aste_date.push(data[i].near_earth_objects);
                        numb.push(data[i].numb);
                    }

                    var chartdata = {
                        labels: std_name,
                        datasets: [
                            {
                                label: 'Mysql based Bar Graph',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: numb
                            }
                        ]
                    };

                    var graphTarget = $("#bargraph");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    }

                   
            } 
            error: function (data) {
                alert("ERROR: ");
                }
                    });
                });
            });
        
    
</script>
<body>
<div class="well">
	<h1>Asteroid Stats</h1>
  <label>From </label>
  <input type="date" class="span3" id="startdate" name="startdate"><br>
 
  <label>To </label>
  <input type="date" class="span3" id="enddate" name="enddate"><br>
<button type="submit" class="btn">Submit</button>

</div>
<ul id= "showdata"></ul>
<canvas id="bargraph"></canvas>

</body>
</html>