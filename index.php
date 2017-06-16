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
		<div id="container" style="width: 99vw; height: 98vh; overflow: hidden;">
			<div id="map" style="width: 77%; float: left; height: 100%; background-color: #8DA9B2;">
			</div>
			<div style="width: 20%; float: left; text-align: center;">
				<!--- Options menu --->
	
				<h1 style="font-weight: bold;">Map of Terra</h1>
				
				<br>
				
				<input style="width: 100%; margin-left: 1vw;" id="reloadButton" class="btn btn-danger" type="button" value="Reload Map" onClick="reloadMap()"/>
				
				<br>
				<br>
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#mapOptions">Map Options</button>
				<div id="mapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Map Options</h4>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#yuanOptions">Hide/Show Yuan Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#elvaniaOptions">Hide/Show Elvania Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#valdrimmOptions">Hide/Show Valdrimm Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#choriaOptions">Hide/Show Choria Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#oceanOptions">Hide/Show Ocean Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#miscOptions">Hide/Show Misc Options</button>
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
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#admapOptions">Additional Map Options</button>
				<div id="admapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Additional Map Options</h4>
					<label style="padding-left: 1vw;"><input id="x_names" type="checkbox" value="">Display Titles as Names</label><br>
					<label style="padding-left: 1vw;"><input id="x_tags" type="checkbox" value="">Display Titles as Tags</label><br>			 
					<label style="padding-left: 1vw;"><input id="dev" type="checkbox" value="">Developer Mode</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 100%; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#saveLoad">Save/Load</button>
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

		<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
		<script src="https://openlayers.org/en/v4.2.0/build/ol.js"></script>

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
	<script src="updateMap.js"></script>
	<script src="checkbox.js"></script>
	<script src="pull.js"></script>
	<script src="push.js"></script>
	<script src="click.js"></script>
	<script src="cookies.js"></script>
	<script src="addFeature.js"></script>
	
<script>

// Loading stylesets for entire load

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
				<option>Other</option>
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

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>