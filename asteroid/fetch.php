<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<!DOCTYPE html>
<html>
<head>
    <title> Asteroid Stats</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/Chart.min.js"></script>

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script>
  $( function() {
    $( "#start_date").datepicker();
    $( "#end_date").datepicker();
      $( "#start_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
      $( "#end_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    
  } );

</script>

</head>
<body>
    
    <div class="well">
    <h1>Asteroid Stats</h1>
  <label>From </label>
  <input type="date" class="span3" id="start_date" name="start_date">
 
  <label>To </label>
  <input type="date" class="span3" id="end_date" name="end_date"><br>
<button type="submit" id="submit" class="btn">Submit</button> 
</div> 
    <br>
    <div id="chart-container" >
        <canvas id="graphCanvas" style="float: right"></canvas>
    </div>
      <div id="chart-container" >
        <canvas id="graphCanvas1" style="float: right"></canvas>
    </div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function () {
            $("#submit").click(function(){
            showGraph1();
        });
        });


        function showGraph1()
        {
            {
                $.post("data2.php",
                function (data)
                {
                    console.log(data);
                     var std_name= [];
                    var  numb= [];

                    for (var i in data) {
                        std_name.push(data[i].std_name);
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

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
        <script>
        $(document).ready(function () {
        	$("#submit").click(function(){
            showGraph();
        });
        });


        function showGraph()
        {
            {
                $.post("data1.php",
                function (data)
                {
                    console.log(data);
                     var std_name= [];
                    var  numb= [];

                    for (var i in data) {
                        std_name.push(data[i].std_name);
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

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
        
