<!DOCTYPE html>
</html>
<head>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>

<link rel="stylesheet" href="style.css"/>
 
<script>
	$(document).ready(function(){
		$('#areaGreen1').load('red.php', function() {
			$(".se-pre-con").fadeOut("slow");
			});
		
	});
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
</head>

<body>

<div class="se-pre-con">
	<div><p>Loading histogram...</p></div>
</div>
<div id='menuTop'>
<a class='buttonLink' href='green1vista.php'><p>Green 1</p></a>
<a class='buttonLink' href='green2vista.php'><p>Green 2</p></a>
<a class='buttonLink' href='redvista.php'><p>Red</p></a>
<a class='buttonLink' href='bluevista.php'><p>Blue</p></a>
<a class='buttonIndex' href='index.php'><p>Index</p></a>
</div>

<div id="areaGreen1"></div>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto; "></div>

</body>
</html>
