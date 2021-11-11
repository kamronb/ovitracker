<!DOCTYPE HTML>
<!--
Author: Kamron Bennett
Email: kamron@cmit.com.jm
Date: 02.11.21
Website: www.cmit.com.jm
-->
<html>
<head>
<title>Ovitracker Version 0.0.1 - Alpha Test</title>
<meta name="viewport" content="initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style_responsive.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Kamron J. Bennett" />
<meta name="CONTENT-LANGUAGE" content="EN" />
<meta name="copyright" content="2018, Kamron J. Bennett" />



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    	// Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Negative', 30],
          ['Positive 1 to 5', 4],
          ['Positive > 5', 16]
        ]);

        // Set chart options
        var options = {'backgroundColor': 'transparent',
                       'width': 200,
                       'height': 200,
                       'is3D': 1,
                       'legend': 'none',
                       'pieHole': 0, /*Value between 0 and 1*/
                       'colors': ['#56D568','#E7DB56', '#DE7353']};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


</head>
<body>
	<header>
		<nav>
			<img src="images/menu.png">
			<img src="images/logo.png">
		</nav>
	</header>




	<div id="left_div">
		<div id="left_div-holder">
			<h1>Input Page</h1>
			<img src="images/pretty-pretty-line.png" class="pretty_line">
			<h4>Trap Name and Number</h4>
			<p class="yellow_text">WMeade Trap-O-01</p>

			<h4>Community Served</h4>
			<p class="yellow_text">Westmeade - Zone 1</p>

			<h4>Location</h4>
			<p><span class="blue_text">Outside</span><br>
				Lat: <span class="coords">17.965783628617835</span><br>
				Lon: <span class="coords">-76.8782312518246</span></p>

			<h4>Monitor</h4>
			<p>Kamron Bennett</p>

			<h4>Previous Entry</h4>
			<p>Date: November 7, 2021<br>
			Total Eggs: 50<br>
			Egg Density: 5/Square Inch</p>

			<h4 class="chart-heading">52 Week Summary</h4>
				<div id="chart_div"></div>
		</div>
	</div>





<div id="other-holder">
	<div id="form_div">
		<h2>Ovitrap Reporting Form</h2>
		<form>
			<input class="text_box" type="number" name=""><br>
			<input class="text_box" type="text" name=""><br>
			<input class="text_box" type="text" name=""><br>
			<input class="submit_button" type="submit" name="" value="Enter Data">
			<input class="reset_button" type="reset" name="" value="Clear Form">
			<div class="clearthis"></div>
		</form>
		
	</div>
	
</div>
</body>
</html>