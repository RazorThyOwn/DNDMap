<!DOCTYPE html>
<html>
	<head>
		<title>Map of Terra</title>
		
		<!--- Loading bootstrap --->
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
	</head>

	<body>
		<!--- Main loading of the div elements --->
		<div id="container" style="width: 99vw; height: 98vh; overflow: hidden;">
			<div id="map" style="width: 77%; float: left; height: 100%; background-color: #8DA9B2;">
			</div>
			<div style="width: 20%; float: left; text-align: center;">
				<!--- Options menu --->
	
				<h1 style="font-weight: bold;">Map of Terra</h1>
				
				<br>
				
				<input style="width: 400px; margin-left: 1vw;" id="reloadButton" class="btn btn-danger" type="button" value="Reload Map" onClick="reloadMap()"/>
				
				<br>
				<br>
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#mapOptions">Map Options</button>
				<div id="mapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Map Options</h4>
					<label style="padding-left: 1vw;"><input id="y_t" type="checkbox" value="">Display Yuan Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="e_t" type="checkbox" value="">Display Elvania Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="v_t" type="checkbox" value="">Display Valdrimm Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="c_t" type="checkbox" value="">Display Choria Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="o_t" type="checkbox" value="">Display Islands Terrain</label><br>
					<label style="padding-left: 1vw;"><input id="m_t" type="checkbox" value="">Display Misc Terrain</label><br>
				</div>
				
				<br>
				<br>
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#yuanOptions">Hide/Show Yuan Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#elvaniaOptions">Hide/Show Elvania Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#valdrimmOptions">Hide/Show Valdrimm Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#choriaOptions">Hide/Show Choria Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#oceanOptions">Hide/Show Ocean Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-primary" data-toggle="collapse" data-target="#miscOptions">Hide/Show Misc Options</button>
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
				
				<button style="width: 400px; margin-left: 1vw;" class="btn btn-success" data-toggle="collapse" data-target="#admapOptions">Additional Map Options</button>
				<div id="admapOptions" style="text-align: left; margin-left: 2vw;" class="collapse">
					<h4 style="font-weight: bold; text-decoration: underline;">Additional Map Options</h4>
					<label style="padding-left: 1vw;"><input id="x_names" type="checkbox" value="">Display Titles as Names</label><br>
					<label style="padding-left: 1vw;"><input id="x_tags" type="checkbox" value="">Display Titles as Tags</label><br>
					<label style="padding-left: 1vw;"><input id="dev" type="checkbox" value="">Developer Mode</label><br>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!--- End Options Menu --->
			</div>
		</div>
	</body>
</html>

<!--- Loading variety of helper scripts --->

	<script src="jquery-3.2.1.min.js"></script>
	<script src="updateMap.js"></script>
	<script src="var.js"></script>
	<script src="checkbox.js"></script>
	<script src="pull.js"></script>


<!--- Loading core JS for the application... --->

		<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
		<script src="https://openlayers.org/en/v4.2.0/build/ol.js"></script>

<script>
	// Primary functionality
	
	// Default setting initialization
	var full_extent = [0,0,10000,6923];
	
	
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
	

<!-- Bootstrap core JavaScript
    ================================================== -->

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>