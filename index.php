 <!DOCTYPE html>
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
<script type="text/javascript" src="scripts/charts.js"></script>
</head>
<body>

  <header>
    <nav>
      <img src="images/menu.png">
      <img src="images/logo.png">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Announcements</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
  </header>



<div id="map_div">
  
</div>


<div id="other-holder">
	<div id="drop_down_menu">
		<form>
			<select style="">
				<option>Ovitrap Status</option>
				<option>All</option>
				<option>Negative</option>
				<option>Positive Density 1 to 5</option>
				<option>Positive Density > 5</option>
			</select>
			<select>
				<option>All Communities</option>
				<option>Westmeade</option>
				<option>Bridgeport</option>
				<option>Edgewater</option>
			</select>
			<select>
				<option>Current</option>
				<option>Week One</option>
				<option>Week Two</option>
				<option>Week Three</option>
				<option>Week Four</option>
			</select>
		</form>
	</div>
</div>


<div id="left_div">
  <div id="left_div-holder">
    <h1>Vector Summary</h1>
    <img src="images/pretty-pretty-line.png" class="pretty_line">
    <h4>Trap Locations</h4>
    <p class="yellow_text">15</p>

    <h4>Communities Served</h4>
    <p class="yellow_text">5</p>
      <div id="chart_div"></div>


    <div class="key">
      <h3>Key</h3>
      <ul>
        <li><svg height="20" width="20">
          <circle cx="10" cy="10" r="10" fill="#56D568">
        </svg> Negative Ovitrap</li>
        <li><svg height="20" width="20">
          <circle cx="10" cy="10" r="10" fill="#E7DB56">
        </svg> Positive Ovitrap Egg Density 1 - 5</li>
        <li><svg height="20" width="20">
          <circle cx="10" cy="10" r="10" fill="#DE7353">
        </svg> Positive Ovitrap Density > 5</li>
      </ul>
    </div>
  </div>
</div>







<script>
function oviMap() {
//These are the properties of the map below	
var mapProp= {
  center: new google.maps.LatLng(18.034500438373414, -76.8313190673622),
  zoom: 12,
  panControl: true,
  zoomControl: true,
  mapTypeControl: 0,
  scaleControl: 0,
  streetViewControl: 0,
  overviewMapControl: 0,
  rotateControl: true,
  styles: <?php include("db_stuff/dark_map.php"); ?>,
};

//Putting the Map in the Page
var oviMap = new google.maps.Map(document.getElementById("map_div"),mapProp);
var infoWindow = new google.maps.InfoWindow();


//Putting the Point int the map, below here is where all the points will be inserted
var negativePoint1 = new google.maps.Marker({
	position: {lat: 17.965746582847853, lng: -76.87833543636043},
	map: oviMap,
	icon: {
		url:'images/icons/key-element-negative.png',
		scaledSize: new google.maps.Size(10, 10),
		origin: new google.maps.Point(0, 0),
		anchorPoint: new google.maps.Point(17.965746582847853, -76.87833543636043),
	},
	title: "Westmeade-01",
});



//Positive Points less than 5 here
var PositivePoint1 = new google.maps.Marker({
	position: {lat: 18.007973, lng: -76.74473},
	map: oviMap,
	icon: {
		url:'images/icons/key-element-positive1to5.png',
		scaledSize: new google.maps.Size(10, 10),
		origin: new google.maps.Point(0, 0),
		anchorPoint: new google.maps.Point(18.007973, -76.74473),
	},
	title: "Mona-01",
});

//Positive Points 5 or More here
var PositivePoint2 = new google.maps.Marker({
	position: {lat: 18.077684, lng: -76.801409},
	map: oviMap,
	icon: {
		url:'images/icons/key-element-positive5+.png',
		scaledSize: new google.maps.Size(10, 10),
		origin: new google.maps.Point(0, 0),
		anchorPoint: new google.maps.Point(18.077684, -76.801409),
	},
	title: "Old Stony Hill-01",
});

//setting the link for the info page in a variable so I can use the marker
// to link to it. 
//Will Use PHP to add the points for the event listener

var WindowLink = 'marker-data-display.php';
[negativePoint1, PositivePoint1, PositivePoint2].forEach((element)=>{
	element.addListener('click', (e)=> {
		window.location.href= WindowLink + '?serial_number='; //php will append necessary thing here
	});
});

}




</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM3mvBn2TXTjOkWonZ6jaGxu6vFXoz-Xc&callback=oviMap"></script>
</body>
</html>

