<?php

	// Loading the cookie!
	
	if (isset($_GET['map'])) {
		$mapCookie = $_GET['map'];
		$cookieName = "map";
		setcookie($cookieName, $mapCookie, time() + 86400);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Map of Terra</title>
		
		<!--- Loading bootstrap --->
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
	</head>

	<body>
	

	<div id="overlayHolder">
	
	</div>
	
	<script>
		// Loading the overlay holder...
		var overlayHolder = document.getElementById("overlayHolder");
		
	</script>
	
	
		<!--- Main loading of the div elements --->
		<div id="container" style="width: 99vw; height: 98vh; overflow-y: auto;">
			<div id="map" style="width: 80%; float: left; height: 100%; background-color: #8DA9B2; position: fixed;">
			</div>
			<div style="width: 20%; float: right; text-align: center;">
				<!--- Options menu --->
	
				<h1 style="font-weight: bold;">Map of Terra</h1>
				
				<br>
				
				<input style="width: 90%; margin-left: 1vw;" id="reloadButton" class="btn btn-danger" type="button" value="Reload Map" onClick="reloadMap(0)"/>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#mapOptions">Map Options</button>
				<div id="mapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Map Options</h4>
					<label style="padding-left: 1vw;"><input id="full_t" type="checkbox" value="">Display Full Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="y_t" type="checkbox" value="">Display Yuan Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="e_t" type="checkbox" value="">Display Elvania Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="v_t" type="checkbox" value="">Display Valdrimm Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="c_t" type="checkbox" value="">Display Choria Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="o_t" type="checkbox" value="">Display Islands Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="m_t" type="checkbox" value="">Display Misc Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="pol_g" type="checkbox" value="">Display Politic Mapmode (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="pol_l" type="checkbox" value="">Display Politic Mapmode (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#yuanOptions">Hide/Show Yuan Options</button>
				<div id="yuanOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Yuan Options</h4>
					<label style="padding-left: 1vw;"><input id="y_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="y_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="y_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="y_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="y_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="y_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="y_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="y_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="y_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#elvaniaOptions">Hide/Show Elvania Options</button>
				<div id="elvaniaOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Elvania Options</h4>
					<label style="padding-left: 1vw;"><input id="e_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="e_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="e_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="e_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="e_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="e_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="e_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="e_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="e_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#valdrimmOptions">Hide/Show Valdrimm Options</button>
				<div id="valdrimmOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Valdrimm Options</h4>
					<label style="padding-left: 1vw;"><input id="v_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="v_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="v_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="v_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="v_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="v_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="v_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="v_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="v_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#choriaOptions">Hide/Show Choria Options</button>
				<div id="choriaOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Choria Options</h4>
					<label style="padding-left: 1vw;"><input id="c_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="c_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="c_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="c_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="c_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="c_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="c_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="c_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="c_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#oceanOptions">Hide/Show Ocean Options</button>
				<div id="oceanOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Ocean Options</h4>
					<label style="padding-left: 1vw;"><input id="o_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="o_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="o_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="o_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="o_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="o_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="o_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="o_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="o_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#miscOptions">Hide/Show Misc Options</button>
				<div id="miscOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Misc Options</h4>
					<label style="padding-left: 1vw;"><input id="m_cc" type="checkbox" value="">Cities (Capital)</label><br>
					<label style="padding-left: 1vw;"><input id="m_cg" type="checkbox" value="">Cities (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="m_cl" type="checkbox" value="">Cities (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="m_rg" type="checkbox" value="">Roads (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="m_rl" type="checkbox" value="">Roads (Lesser)</label><br>
					<br>
					<label style="padding-left: 1vw;"><input id="m_tg" type="checkbox" value="">Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="m_tl" type="checkbox" value="">Titles (Lesser)</label><br>
					<label style="padding-left: 1vw;"><input id="m_ttg" type="checkbox" value="">Terrain Titles (Greater)</label><br>
					<label style="padding-left: 1vw;"><input id="m_ttl" type="checkbox" value="">Terrain Titles (Lesser)</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#admapOptions">Additional Map Options</button>
				<div id="admapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Additional Map Options</h4>
					<label style="padding-left: 1vw;"><input id="measure" name="measurement" type="checkbox" value="LineString">Measure Distance</label><br>
					<div id = "distance_title" style = "padding-left: 1vw;">Distance: 0 miles</div>;
					<button class= "btn btn-warning" style = "padding-left: 1vw;" id="showDistance">Show Distance Information</button>
					<label style="padding-left: 1vw;"><input id="x_names" type="checkbox" value="">Display Titles as Names</label><br>
					<label style="padding-left: 1vw;"><input id="x_tags" type="checkbox" value="">Display Titles as Tags</label><br>			 
					<label style="padding-left: 1vw;"><input id="dev" type="checkbox" value="">Developer Mode</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 90%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#saveLoad">Save/Load</button>
				<div id="saveLoad" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Save/Load</h4>
					<label style="padding-left: 1vw;"><input id="freeze" type="checkbox" value="">Freeze Map</label><br>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!--- End Options Menu --->
			</div>
		</div>
	</body>
</html>

<!--- Loading core JS for the application... --->

		<script src="ol.js"></script>

<script>
	// Primary functionality
	
	// Default setting initialization
	var map_width = 10000
	var map_height = 6923;
	var full_extent = [0,0,map_width,map_height];
	
	
	// Initializing the project
	var projection = new ol.proj.Projection({
	  code: 'mainImage',
	  units: 'pixels',
	  extent: full_extent
	});

	// Final set of map initialization
	
	var map = new ol.Map({
	  layers: [],
	  target: 'map',
	  view: new ol.View({
		projection: projection,
		center: ol.extent.getCenter(full_extent),
		zoom: 3,
		maxZoom: 9,
		minZoom: 1
	  })
	});

</script>

	<!--- Loading variety of helper scripts --->

	<script src="jquery-3.2.1.min.js"></script>
	<script src="var.js"></script>
	<script src="distance.js"></script>
	<script src="updateMap.js"></script>
	<script src="checkbox.js"></script>
	<script src="pull.js"></script>
	<script src="push.js"></script>
	<script src="click.js"></script>
	<script src="cookies.js"></script>
	<script src="addFeature.js"></script>
	
<script>

// Loading stylesets for entire load

var style_terrain_lesser = new ol.style.Style({
        image: new ol.style.Icon(({
                src: 'MapFiles/Icons/ico_terrain.png',
                scale: 0.7
        }))
});


var style_terrain = new ol.style.Style({
		image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_terrain.png',
		scale: 1.2
	}))
});

var style_city_capital = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_1.png',
		scale: 1.2
	}))
});

var style_city_greater = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_2.png',
		scale: 0.9
	}))
});

var style_city_lesser = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_3.png',
		scale: 0.7
	}))
});

function adjustIconScale(scale) {
	
	console.log("ZOOM IS NOW AT:"+scale);

if (scale == 1) {
	scaleNum = 0.3;
}
if (scale == 2) {
	scaleNum = 0.4;
}
if (scale == 3) {
	scaleNum = 0.6;
}
if (scale == 4) {
	scaleNum = 0.8;
}
if (scale == 5) {
	scaleNum = 1.2;
}
if (scale == 6) {
	scaleNum = 1.9;
}
if (scale == 7) {
	scaleNum = 3.5;
}
if (scale == 8) {
	scaleNum = 7;
}	
if (scale == 9) {
	scaleNum = 11;
}

var scaleDat01 = 1.2 * scaleNum;
var scaleDat02 = 0.7 * scaleNum;
var scaleDat03 = 0.6 * scaleNum;
	
style_terrain_lesser = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_terrain.png',
		scale: scaleDat02
	}))
});

style_terrain = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_terrain.png',
		scale: scaleDat01 * 2
	}))
});

style_city_capital = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_1.png',
		scale: scaleDat01,
	}))
});

style_city_greater = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_2.png',
		scale: scaleDat02
	}))
});

style_city_lesser = new ol.style.Style({
	image: new ol.style.Icon(({
		src: 'MapFiles/Icons/ico_city_3.png',
		scale: scaleDat03
	}))
});

}

</script>

<script>
// Attempting to load saved cookie...
loadCookie();
</script>




<!--- Modal for adding cities on the map! --->

<div class="modal fade" id="addFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feature Adder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
		<form class="form-inline">
			<div class="input-group" style="width: 49%;">
				<div class="input-group-addon" style="width: 10%;">X1:</div>
				<input type="text" class="form-control" id="xval" placeholder="X-Value:">
			</div>
			<div class="input-group" style="width: 49%;">
				<div class="input-group-addon" style="width: 10%;">Y1:</div>
				<input type="text" class="form-control" id="yval" placeholder="Y-Value:">
			</div>
		</form>
		
		<br>
		
		<form class="form-inline">
			<div class="input-group" style="width: 49%;">
				<div class="input-group-addon" style="width: 10%;">X2:</div>
				<input type="text" class="form-control" id="x2val" placeholder="X-Value:">
			</div>
			<div class="input-group" style="width: 49%;">
				<div class="input-group-addon" style="width: 10%;">Y2:</div>
				<input type="text" class="form-control" id="y2val" placeholder="Y-Value:">
			</div>
		</form>
		  
		 <br>
	  
		<div class="form-group">
			<input type="name" class="form-control" id="fa_nameForm" aria-describedby="emailHelp" placeholder="Feature Title (Blank for fillers)">
		</div>	
		
		<br>
		
		<div class="form-group">
			<label for="fa_g1">Primary Group</label>
			<select class="form-control" id="fa_g1">
				<option>Yuan</option>
				<option>Elvania</option>
				<option>Valdrimm</option>
				<option>Choria</option>
				<option>Ocean</option>
				<option>Misc</option>
			</select>
		 </div>
		
		<div class="form-group">
			<label for="exampleSelect1">Type</label>
			<select class="form-control" id="fa_g2">
				<option>City</option>
				<option>Road</option>
				<option>Terrain</option>
				<option>Title</option>
			</select>
		 </div>
		 
		<div class="form-group">
			<label for="exampleSelect1">Tier</label>
			<select class="form-control" id="fa_g3">
				<option>Capitals</option>
				<option>Greater</option>
				<option>Lesser</option>
			</select>
			
		 </div>
		 
		 <div class="form-check">
		  <label class="form-check-label">
			<input id="secretbox" class="form-check-input" type="checkbox" value="0">
			Secret
		  </label>
		</div>
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="addFeature()">Commit Feature</button>
      </div>
    </div>
  </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="Bootstrap/tether.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>



<script>
var distance = 0;
var speed = 0;
var travel_type = '';
var travel_terrain_type = 0;
var travel_terrain_roadtype = 0;

var travel_terrain_mod = 0;
var travel_terrain_roadtype_mod = 0;

var forced = 0;
var numchecks;

var footspeeds = [];
footspeeds[15] = 16;	// Index is walking speed
footspeeds[20] = 24;
footspeeds[30] = 32;
footspeeds[40] = 36;

var horsespeeds = [];
horsespeeds[0] = 32; 	// Pony
horsespeeds[1] = 40; 	// Lighthorse
horsespeeds[2] = 40; 	// Heavy Horse
horsespeeds[3] = 24;	// Pony (Overloaded)
horsespeeds[4] = 28;	// Lighthorse (Overloaded)
horsespeeds[5] = 28;	// Heavy Horse (Overloaded)

var shipspeeds = [];
shipspeeds[0] = 5;		// Raft
shipspeeds[1] = 10;		// Keelboat
shipspeeds[2] = 15;		// Rowboat
shipspeeds[3] = 48;		// Sailing Ship
shipspeeds[4] = 60;		// Warship
shipspeeds[5] = 72;		// Longship
shipspeeds[6] = 96;		// Galley

var airspeeds = [];
airspeeds[0] = 5;		// Balloon
airspeeds[1] = 40;		// Light Airship (Less than 4 Engines)
airspeeds[2] = 110;		// Heavy Airship (More than 4 Engines)

var terrain_mod = [];
terrain_mod[0] = [];
terrain_mod[1] = [];
terrain_mod[2] = [];
terrain_mod[3] = [];
terrain_mod[4] = [];
terrain_mod[5] = [];
terrain_mod[6] = [];
terrain_mod[7] = [];
terrain_mod[8] = [];

// Sand
terrain_mod[0][0] = 1;terrain_mod[0][1] = 0.5;terrain_mod[0][2] = 0.5; 

// Forest
terrain_mod[1][0] = 1;terrain_mod[1][1] = 1;terrain_mod[1][2] = 0.5;
 
// Hills
terrain_mod[2][0] = 1;terrain_mod[2][1] = 0.75;terrain_mod[2][2] = 0.5; 

// Jungle
terrain_mod[3][0] = 1;terrain_mod[3][1] = 0.75;terrain_mod[3][2] = 0.25; 

// Moor
terrain_mod[4][0] = 1;terrain_mod[4][1] = 1;terrain_mod[4][2] = 0.75; 

// Mountains
terrain_mod[5][0] = 0.75;terrain_mod[5][1] = 0.75;terrain_mod[5][2] = 0.5; 

// Plains
terrain_mod[6][0] = 1;terrain_mod[6][1] = 1;terrain_mod[6][2] = 0.75; 

// Swamp
terrain_mod[7][0] = 1;terrain_mod[7][1] = 0.75;terrain_mod[7][2] = 0.5; 

// Tundra
terrain_mod[8][0] = 1;terrain_mod[8][1] = 0.75;terrain_mod[8][2] = 0.75; 

function init() {
	
	document.getElementById("speed").style.display = 'none';
	document.getElementById("terrain_modifier").style.display = 'none';
	document.getElementById("ground_modifier").style.display = 'none';
	document.getElementById("final_speed").style.display = 'none';
		
	foot_type.style.display = 'none';
	horse_type.style.display = 'none';
	boat_type.style.display = 'none';
	air_type.style.display = 'none';
	other.style.display = 'none';
}

function set_travel(type) {

	var foot_type = document.getElementById("foot_type");
	var horse_type = document.getElementById("horse_type");
	var boat_type = document.getElementById("boat_type");
	var air_type = document.getElementById("air_type");
	var other = document.getElementById("other");
	
	foot_type.style.display = 'none';
	horse_type.style.display = 'none';
	boat_type.style.display = 'none';
	air_type.style.display = 'none';
	other.style.display = 'none';
	
	if (type == 'x') {
		return;
	}
	
	if (type == 'Foot') {
		
		foot_type.style.display = 'block';
	}
	else if (type == 'Horse') {
		
		horse_type.style.display = 'block';	
	}
	else if (type == 'Boat') {
		
		boat_type.style.display = 'block';		
	}
	else if (type == 'Airship') {
		
		air_type.style.display = 'block';		
	}
	else if (type == 'Other') {
		
		other.style.display = 'block';		
	}
	
	travel_type = type;
	var travel_method = document.getElementById("travel_method");
	travel_method.innerHTML = 'By ' + type;
}

function set_terrain(type,indexing) {
	
	travel_terrain_type = type;
	var travel_terrain = document.getElementById("travel_terrain");
	travel_terrain.innerHTML = 'Through ' + type;
	
	if (indexing == 8 || indexing == 9) {
		travel_terrain_mod = 100;
		showTerrainMod();
		showGroundMod();
		return;
	}
	travel_terrain_type = indexing;
	travel_terrain_roadtype_mod = 100 * terrain_mod[travel_terrain_type][travel_terrain_roadtype];
	travel_terrain_mod = 100 * terrain_mod[travel_terrain_type][0];
	
	showTerrainMod();
	showGroundMod();
}

function set_road(type,indexing) {
	travel_terrain_roadtype = indexing;
	
	var terrain_traveltype = document.getElementById("terrain_traveltype");
	
	if (type == 'N/A') {
		terrain_traveltype.innerHTML = type;
		travel_terrain_roadtype_mod	= 100;
		showTerrainMod();
		showGroundMod();
	}
	else {
		travel_terrain_roadtype_mod = 100 * terrain_mod[travel_terrain_type][travel_terrain_roadtype];
		travel_terrain_mod = 100 * terrain_mod[travel_terrain_type][0];
		terrain_traveltype.innerHTML = 'On ' + type;
		showTerrainMod();
		showGroundMod();
	}
}

function set_speeds(array,index) {

	var array_to_use = null;
	
	if (array == 'foot') {
		array_to_use = footspeeds;
	}
	
	else if (array == 'horse') {
		array_to_use = horsespeeds;
	}
	
	else if (array == 'boat') {
		array_to_use = shipspeeds;
	}
	
	else if (array == 'airship') {
		array_to_use = airspeeds;
	}
	
	else if (array == 'other') {
		speed = document.getElementById("other_speed").value;
		show_speeds();
		return;
	}
	
	speed = array_to_use[index];
	show_speeds();
	
	foot_type.style.display = 'none';
	horse_type.style.display = 'none';
	boat_type.style.display = 'none';
	air_type.style.display = 'none';
	other.style.display = 'none';
	
}

function show_speeds() {
	document.getElementById("speed").innerHTML = "Your Default Speed: " + speed + " miles/day";
	document.getElementById("speed").style.display = 'block';
}

function showTerrainMod() {
	document.getElementById("terrain_modifier").innerHTML = "Your Default Terrain Modifier: " + travel_terrain_mod + "%";
	document.getElementById("terrain_modifier").style.display = 'block';	
}

function showGroundMod() {
	document.getElementById("ground_modifier").innerHTML = "Your Final Modifier: " + travel_terrain_roadtype_mod + "%";
	document.getElementById("ground_modifier").style.display = 'block';		
}

function showFinal() {
	var final_speed = speed * (travel_terrain_roadtype_mod/100);
	var units = "day(s)";
	
	var total_time = distance / final_speed;
	if (total_time < 1.0) {
		total_time = total_time * 24;
		units = "hour(s)";
	}
	total_time = Math.round(total_time);
	final_speed = Math.round(final_speed);
	
	document.getElementById("final_speed").innerHTML = "Your Final Speed is: "+final_speed+" miles per day. It will take you "+total_time+" "+units+" to reach your destination";
	document.getElementById("final_speed").style.display = 'block';
}
</script>


<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content-->
			<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Distance Calculator</h4>
			</div>
			<div class="modal-body">
				<div id = "d_fulld">Distance: </div>
				
				<br>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "travel_method" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Traveling Method
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_travel('Foot')">By Foot</a></li>
					<li><a href="#" onclick="set_travel('Horse')">By Horse</a></li>
					<li><a href="#" onclick="set_travel('Boat')">By Boat</a></li>
					<li><a href="#" onclick="set_travel('Airship')">By Airship</a></li>
					<li><a href="#" onclick="set_travel('Other')">By Other</a></li>
					</ul>
				</div>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "travel_terrain" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Terrain Type
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_terrain('Desert',0)">Desert</a></li>
					<li><a href="#" onclick="set_terrain('Forest',1)">Forest</a></li>
					<li><a href="#" onclick="set_terrain('Hills',2)">Hills</a></li>
					<li><a href="#" onclick="set_terrain('Jungle',3)">Jungle</a></li>
					<li><a href="#" onclick="set_terrain('Moor',4)">Moor</a></li>
					<li><a href="#" onclick="set_terrain('Mountains',5)">Mountains</a></li>
					<li><a href="#" onclick="set_terrain('Plains',6)">Plains</a></li>
					<li><a href="#" onclick="set_terrain('Tundra',7)">Tundra</a></li>
					<li><a href="#" onclick="set_terrain('Ocean',8)">Ocean</a></li>
					<li><a href="#" onclick="set_terrain('Air',9)">Air</a></li>
					</ul>
				</div>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "terrain_traveltype" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ground Type
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_road('Highway',0)">Highway</a></li>
					<li><a href="#" onclick="set_road('Road',1)">Road or Trail</a></li>
					<li><a href="#" onclick="set_road('Off-Trail',2)">Offroad</a></li>
					<li><a href="#" onclick="set_road('N/A',3)">Not Applicable</a></li>
					</ul>
				</div>
				
				<br>
				<br>
				<br>
				
				
				
				
				
				
				
				
				
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "foot_type" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Slowest Member of the Party
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_speeds('foot',15)">15ft / round</a></li>
					<li><a href="#" onclick="set_speeds('foot',20)">20ft / round</a></li>
					<li><a href="#" onclick="set_speeds('foot',30)">30ft / round</a></li>
					<li><a href="#" onclick="set_speeds('foot',40)">40ft / round</a></li>
					</ul>
				</div>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "horse_type" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Horse Type
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_speeds('horse',0)">Pony</a></li>
					<li><a href="#" onclick="set_speeds('horse',3)">Pony (Overburdened by 151lbs)</a></li>
					<li><a href="#" onclick="set_speeds('horse',1)">Lighthorse</a></li>
					<li><a href="#" onclick="set_speeds('horse',4)">Lighthorse (Overburdened by 175lbs)</a></li>
					<li><a href="#" onclick="set_speeds('horse',2)">Heavyhorse</a></li>
					<li><a href="#" onclick="set_speeds('horse',5)">Heavyhorse (Overburdened by 229lbs)</a></li>
					</ul>
				</div>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "boat_type" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Boat Type
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_speeds('boat',0)">Raft</a></li>
					<li><a href="#" onclick="set_speeds('boat',1)">Keelboat</a></li>
					<li><a href="#" onclick="set_speeds('boat',2)">Rowboat</a></li>
					<li><a href="#" onclick="set_speeds('boat',3)">Sailing Ship</a></li>
					<li><a href="#" onclick="set_speeds('boat',4)">Warship</a></li>
					<li><a href="#" onclick="set_speeds('boat',5)">Longship</a></li>
					<li><a href="#" onclick="set_speeds('boat',6)">Galley</a></li>
					</ul>
				</div>
				
				<div class="dropdown" style = "float: left; margin-right: 2vw;">
					<button id = "air_type" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Airship Type
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#" onclick="set_speeds('airship',0)">Balloon</a></li>
					<li><a href="#" onclick="set_speeds('airship',1)">Light Airship</a></li>
					<li><a href="#" onclick="set_speeds('airship',2)">Heavy Airship</a></li>
					</ul>
				</div>
				
				<div id = "other">
					<!--- Manually enter travel speeed per day --->
					<input type="text" class="form-control" id="other_speed" style = "width: 20%; float: left;"></input>
					<h5 style = "float: left;">&nbsp; miles/day</h5>
				</div>
				
				<br>
				<br>
				
				<div id = "speed">Your Default Speed:</div>
				<div id = "terrain_modifier">Your Terrain Modifier:</div>
				<div id = "ground_modifier">Your Final Modifier:</div>
				
				<h5 id = "final_speed" style = "font-weight: bold;">Your final speed is: $$$, it will take you $$$ to complete your journey</h5>
				
				<br>
				<br>
				
				<button class = "btn btn-primary" onclick="showFinal()">Show Final</button>

			</div>
			
			<br>
			<br>
			
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>

		</div>
</div>	

<script>

init();

$(document).ready(function(){
    $("#showDistance").click(function(){
	console.log("Showing distance modal...");
        $("#myModal").modal();
	document.getElementById("d_fulld").innerHTML = "Distance: " + distance + " miles";
    });
});
</script>
