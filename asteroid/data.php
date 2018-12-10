<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fetch Data</title>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  	$(document).ready(function(){
$("button").click( function() {
 $.getJSON( fetch("https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-09&end_date=2015-09-09&api_key=t24wnzBt8LHLX3TYbJyHWsoyZ3qWVXlzyCwMLGDp&type=json"), function(obj) { 
  $.each(obj, function(key, value) { 
         $("ul").append("<li>"+value.near_earth_objects+"</li>");
  });
 });
});
});
</script>
</head>
<body>
<ul></ul>
 
<button>Users</button>
 
</body>
</html>
</body>
</html>