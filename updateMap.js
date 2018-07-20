var globlMarkerArray = [];
var globlVectorArray = [];

function getStyle(icon) {

	console.log("Checking style of " + icon);

	if (icon === 'ico_city_1.png') {
		return style_city_capital;
	}
	else if (icon === 'ico_city_2.png') {
		return style_city_greater;
	}
	else if (icon === 'ico_city_3.png') {
		return style_city_lesser;
	}
	else if (icon === 'ico_terrain.png') {
		console.log("Loading greater terrain style");
		return style_terrain;
	}
	else if (icon === 'ico_terrain_1.png') {
		console.log("Loading lesser terrain style");
		return style_terrain_lesser;
	}
}

function parseMarkerAdd(data,id) {

	//console.log(data);
	// Function will take in all of the data returned by the Ajax and add it into the variable for marker addition

	// ID is used for helping us determine exactly what functionality is
	// going to be used from the table that we pull

	// -1 is icon (ie, cities, labels...)
	// 1 is label (and only label)
	// 2 is pull both marker and image

	// Loading the feature...
	var feature;

	// Loading the JSON
	// Checking if the size of data is meaningful
	if (data.length < 20) {
		return;
	}

	var dat = JSON.parse(data);

	console.log(dat);

	dat.forEach(function(obj) {

		if (id == -1) {

			// Parsing

			var x = obj.position_x;
			var y = map_height - obj.position_y;
			var icon = obj.icon;

			feature = new ol.Feature({
				geometry: new ol.geom.Point([x,y])
			});


			var style = getStyle(icon);

			feature.setStyle(style);
			globlMarkerArray.push(feature);
			return;
		}

		else if (id == 0) {
			console.log("loading vector data...");

			var x1 = obj.x1;
			var y1 = map_height - obj.y1;
			var x2 = obj.x2;
			var y2 = map_height - obj.y2;

			var points = [[x1,y1],[x2,y2]];

			var featureLine = new ol.Feature({
				geometry: new ol.geom.LineString(points)
			});

			globlVectorArray.push(featureLine);

			return;
		}

		else if (id == 1) {

			var x = obj.position_x;
			var y = map_height - obj.position_y;

			var name = obj.title;

			var label_elm = document.getElementById(name);
			if (label_elm == null) {
				// Going to create the document element...

				// Loading the DOM element into the node
				var topX = document.createElement("a");
				var node = document.createTextNode(name);

				topX.appendChild(node);

				// Adding style and class :p

				topX.style.color = "black";
				topX.style.fontWeight = "bold";
				topX.style.fontSize = ""+fontScale+"%";
				topX.style.textShadow = "-1px 0 #ffffff,0 1px #ffffff,1px 0 #ffffff,0 -1px #ffffff";
				topX.className="textLabel";

				var newName = "";
				// Removing all spaces from the name...
				for (var i = 0; i < name.length; i++) {
					var letter = name.substring(i,i+1);
					if (letter == " ") {
						letter = "_";
					}
					newName = newName + letter;
				}
				
				topX.href = "http://13.56.163.208/index.php/" + newName;
				
				overlayHolder.appendChild(topX);
				
				label_elm = topX;
			}
			
			var label_tmp = new ol.Overlay({
			  position: [x,y],
			  element: label_elm
			});
			map.addOverlay(label_tmp);
		}
		
		else if (id == 2) {
			
			// Parsing

			var x = parseInt(obj.position_x);
			var y = map_height - obj.position_y;
			var icon = obj.icon;

			feature = new ol.Feature({
				geometry: new ol.geom.Point([x,y])
			});
			
			var style = getStyle(icon);
			
			feature.setStyle(style);
			globlMarkerArray.push(feature);
			
			// Loading label...
			
			var name = obj.title;
			
			var label_elm = document.getElementById(name);
			if (label_elm == null) {
				// Going to create the document element...
				
				// Loading the DOM element into the node
				var topX = document.createElement("a");
				var node = document.createTextNode(name);
				
				topX.appendChild(node);
				
				// Adding style and class :p

				topX.style.color = "black";
				topX.style.fontWeight = "bold";
				topX.style.fontSize = ""+fontScale+"%";
				topX.style.textShadow = "-1px 0 #ffffff,0 1px #ffffff,1px 0 #ffffff,0 -1px #ffffff";
				topX.className="textLabel";

				var newName = "";
				// Removing all spaces from the name...
				for (var i = 0; i < name.length; i++) {
					var letter = name.substring(i,i+1);
					if (letter == " ") {
						letter = "_";
					}
					newName = newName + letter;
				}
				
				topX.href = "http://www.awalexweber.com/dndwiki/index.php/" + newName;
				
				overlayHolder.appendChild(topX);
				
				label_elm = topX;
			}
			
			var label_tmp = new ol.Overlay({
			  position: [x + fontOffset,y],
			  element: label_elm
			});
			map.addOverlay(label_tmp);
		}	
	});
}

function setMovement(val) {
	map.getInteractions().forEach(function(interaction) {
	if (interaction instanceof ol.interaction.DragPan) {
		interaction.setActive(val);
		}
	}, this);
	
	map.getInteractions().forEach(function(interaction) {
	if (interaction instanceof ol.interaction.MouseWheelZoom) {
		interaction.setActive(val);
		}
	}, this);
}

function removeAllLayers() {
	map.setLayerGroup(new ol.layer.Group());
}

function insertLayers(layerArray) {
	for (var layer = 0; layer < layerArray.length; layer++) {
		map.addLayer(layerArray[layer]);
	}
}

function finalizeMarkers() {
	
	// Loading vectors...
	
	var vector_source = new ol.source.Vector({
	});
	
	globlVectorArray.forEach(function(entry) {
		vector_source.addFeature(entry);
	});
	
	var vectorLineLayer = new ol.layer.Vector({
    source: vector_source,
    style: new ol.style.Style({
        fill: new ol.style.Fill({ color: '#A8968A', weight: 4 }),
        stroke: new ol.style.Stroke({ color: '#7F3300', width: roadWidth })
		})
	});
	
	map.addLayer(vectorLineLayer);
	
	// Loading markers...
	
	var marker_source = new ol.source.Vector({
	});
	
	globlMarkerArray.forEach(function(entry) {
		marker_source.addFeature(entry);
	});
	
	var marker_layer = new ol.layer.Vector({
		source: marker_source
	});
		
	map.addLayer(marker_layer);
}

function reloadMap(id) {
	scaleAdjust();
	// Doing a bit of messing around to ensure labels loading correctly...
	if (!id) {
		reloadMap_main();
	}
	else {
		// Main reload
		reloadMap_main();
		map.getView().setZoom(prevZoom);
	}
}

function reloadMap_main() {
	
	// First we remove all layers to preserve ordering
	removeAllLayers();
	
	// Removing all overlays...
	map.getOverlays().clear() 
	
	// Also reinitializing the globlMarkerArray
	globlMarkerArray = [];
	
	// Initializing the layer
	
	layerArray = [];

	// Checking for terrain options
	
	var yuan_extent = [1695,2891,4217,5480];
	var elvania_extent = [5107, 4274, 7959, 5922];
	var valdrimm_extent;
	var choria_extent = [945,1869,2477,3330];
	var ocean_extent;
	var misc_extent = [2678,5449,3783,5923];

	// Full Map
	var full_extent = [0,0,10000,6923];

	if (full) {
		var map_full = new ol.layer.Image({
			source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Full.png',
				projection: projection,
				imageExtent: full_extent
			})
		})
		layerArray.push(map_full);
	}

	if (!full && yuan) {

		var map_yuan = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Yuan.png',
				projection: projection,
				imageExtent: yuan_extent
			  })
		})
		layerArray.push(map_yuan);
		
	}
	
	if (!full && elvania) {
		var map_elvania = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Elvania.png',
				projection: projection,
				imageExtent: elvania_extent
			  })
		})
		layerArray.push(map_elvania);
	}
	
	if (!full && valdrimm) {
		var map_valdrimm = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Valdrimm.png',
				projection: projection,
				imageExtent: valdrimm_extent
			  })
		})
		layerArray.push(map_valdrimm);
	}
	
	if (!full && choria) {
		var map_choria = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Choria.png',
				projection: projection,
				imageExtent: choria_extent
			  })
		})
		layerArray.push(map_choria);
	}
	
	if (!full && ocean) {
		var map_ocean = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Orion.png',
				projection: projection,
				imageExtent: ocean_extent
			  })
		})
		layerArray.push(map_ocean);
	}
	
	if (!full && misc) {
		var map_misc = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Orion.png',
				projection: projection,
				imageExtent: misc_extent
			  })
		})
		layerArray.push(map_misc);
	}
	
	// Checking for yuan options
	// Beginning of ajax
	
	/////////////////////////////////////
	
	// YUAN //
	
		// Cities
	if (yuan && city_yuan_capitals) {
		if (titles_yuan_greater) {
			getCity("city_yuan_capitals",2);
		}
		else {
			getCity("city_yuan_capitals",-1);
		}
	}
	if (yuan && city_yuan_greater) {
		if (titles_yuan_greater) {
			getCity("city_yuan_greater",2);
		}
		else {
			getCity("city_yuan_greater",-1);
		}
	}
	if (yuan && city_yuan_lesser) {
		if (titles_yuan_greater) {
			getCity("city_yuan_lesser",2);
		}
		else {
			getCity("city_yuan_lesser",-1);
		}
	}
		// Roads
	if (yuan && road_yuan_greater) {
		
		var map_yuan_roadg = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Yuan_Roads_Greater.png',
				projection: projection,
				imageExtent: yuan_extent
			  })
		})
		layerArray.push(map_yuan_roadg);
	}
	if (yuan && road_yuan_lesser) {
		var map_yuan_roadl = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Yuan_Roads_Lesser.png',
				projection: projection,
				imageExtent: yuan_extent
			  })
		})
		layerArray.push(map_yuan_roadl);
	}
		// Terrain and titles
	if (yuan && terrain_yuan_greater) {
		getCity("terrain_yuan_greater",2);
	}
	if (yuan && terrain_yuan_lesser) {
		getCity("terrain_yuan_lesser",2);
	}

		// Lesser titles
	if (yuan && titles_yuan_lesser) {
		getCity("titles_yuan_lesser",1);
	}
	
	/////////////////////////////////////
	
	/////////////////////////////////////
	
	// Elvania //
	
		// Cities
	if (elvania && city_elvania_capitals) {
		if (titles_elvania_greater) {
			getCity("city_elvania_capitals",2);
		}
		else {
			getCity("city_elvania_capitals",-1);
		}
	}
	if (elvania && city_elvania_greater) {
		if (titles_elvania_greater) {
			getCity("city_elvania_greater",2);
		}
		else {
			getCity("city_elvania_greater",-1);
		}
	}
	if (elvania && city_elvania_lesser) {
		if (titles_elvania_greater) {
			getCity("city_elvania_lesser",2);
		}
		else {
			getCity("city_elvania_lesser",-1);
		}
	}
		// Roads
	if (elvania && road_elvania_greater) {
		getCity("road_elvania_greater",0);
	}
	if (elvania && road_elvania_lesser) {
		getCity("road_elvania_lesser",0);
	}
		// Terrain and titles
	if (elvania && terrain_elvania_greater) {
		getCity("terrain_elvania_greater",2);
	}
	if (elvania && terrain_elvania_lesser) {
		getCity("terrain_elvania_lesser",2);
	}

		// Lesser titles
	if (elvania && titles_elvania_lesser) {
		getCity("titles_elvania_lesser",1);
	}
	
	/////////////////////////////////////
	
	/////////////////////////////////////
	
	// Valdrimm //
	
		// Cities
	if (valdrimm && city_valdrimm_capitals) {
		if (titles_valdrimm_greater) {
			getCity("city_valdrimm_capitals",2);
		}
		else {
			getCity("city_valdrimm_capitals",-1);
		}
	}
	if (valdrimm && city_valdrimm_greater) {
		if (titles_valdrimm_greater) {
			getCity("city_valdrimm_greater",2);
		}
		else {
			getCity("city_valdrimm_greater",-1);
		}
	}
	if (valdrimm && city_valdrimm_lesser) {
		if (titles_valdrimm_greater) {
			getCity("city_valdrimm_lesser",2);
		}
		else {
			getCity("city_valdrimm_lesser",-1);
		}
	}
		// Roads
	if (valdrimm && road_valdrimm_greater) {
		getCity("road_valdrimm_greater",0);
	}
	if (valdrimm && road_valdrimm_lesser) {
		getCity("road_valdrimm_lesser",0);
	}
		// Terrain and titles
	if (valdrimm && terrain_valdrimm_greater) {
		getCity("terrain_valdrimm_greater",2);
	}
	if (valdrimm && terrain_valdrimm_lesser) {
		getCity("terrain_valdrimm_lesser",2);
	}

		// Lesser titles		
	if (valdrimm && titles_valdrimm_lesser) {
		getCity("titles_valdrimm_lesser",1);
	}
	
	/////////////////////////////////////
	
	/////////////////////////////////////
	
	// choria //
	
		// Cities
	if (choria && city_choria_capitals) {
		if (titles_choria_greater) {
			getCity("city_choria_capitals",2);
		}
		else {
			getCity("city_choria_capitals",-1);
		}
	}
	if (choria && city_choria_greater) {
		if (titles_choria_greater) {
			getCity("city_choria_greater",2);
		}
		else {
			getCity("city_choria_greater",-1);
		}
	}
	if (choria && city_choria_lesser) {
		if (titles_choria_greater) {
			getCity("city_choria_lesser",2);
		}
		else {
			getCity("city_choria_lesser",-1);
		}
	}
		// Roads
	if (choria && road_choria_greater) {
		var map_choria_roadg = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Choria_Roads_Greater.png',
				projection: projection,
				imageExtent: choria_extent
			  })
		})
		layerArray.push(map_choria_roadg);
	}
	if (choria && road_choria_lesser) {
	}
		// Terrain and titles
	if (choria && terrain_choria_greater) {
		getCity("terrain_choria_greater",2);
	}
	if (choria && terrain_choria_lesser) {
		getCity("terrain_choria_lesser",2);
	}
	
		// Lesser titles
	if (choria && titles_choria_lesser) {
		getCity("titles_choria_lesser",1);
	}
	
	/////////////////////////////////////
	
	/////////////////////////////////////
	
	// ocean //
	
		// Cities
	if (ocean && city_ocean_capitals) {
		if (titles_ocean_greater) {
			getCity("city_ocean_capitals",2);
		}
		else {
			getCity("city_ocean_capitals",-1);
		}
	}
	if (ocean && city_ocean_greater) {
		if (titles_ocean_greater) {
			getCity("city_ocean_greater",2);
		}
		else {
			getCity("city_ocean_greater",-1);
		}
	}
	if (ocean && city_ocean_lesser) {
		if (titles_ocean_greater) {
			getCity("city_ocean_lesser",2);
		}
		else {
			getCity("city_ocean_lesser",-1);
		}
	}
		// Roads
	if (ocean && road_ocean_greater) {
		getCity("road_ocean_greater",0);
	}
	if (ocean && road_ocean_lesser) {
		getCity("road_ocean_lesser",0);
	}
		// Terrain and titles
	if (ocean && terrain_ocean_greater) {
		getCity("terrain_ocean_greater",2);
	}
	if (ocean && terrain_ocean_lesser) {
		getCity("terrain_ocean_lesser",2);
	}
	
		// Lesser titles
	if (ocean && titles_ocean_lesser) {
		getCity("titles_ocean_lesser",1);
	}
	
	/////////////////////////////////////
	
	/////////////////////////////////////
	
	// Misc //
	
		// Cities
	if (misc && city_misc_capitals) {
		if (titles_misc_greater) {
			getCity("city_misc_capitals",2);
		}
		else {
			getCity("city_misc_capitals",-1);
		}
	}
	if (misc && city_misc_greater) {
		if (titles_misc_greater) {
			getCity("city_misc_greater",2);
		}
		else {
			getCity("city_misc_greater",-1);
		}
	}
	if (misc && city_misc_lesser) {
		if (titles_misc_greater) {
			getCity("city_misc_lesser",2);
		}
		else {
			getCity("city_misc_lesser",-1);
		}
	}
		// Roads
	if (misc && road_misc_greater) {
		getCity("road_misc_greater",0);
	}
	if (misc && road_misc_lesser) {
		getCity("road_misc_lesser",0);
	}
		// Terrain and titles
	if (misc && terrain_misc_greater) {
		getCity("terrain_misc_greater",2);
	}
	if (misc && terrain_misc_lesser) {
		getCity("terrain_misc_lesser",2);
	}
	
		// Lesser titles
	if (misc && titles_misc_lesser) {
		getCity("titles_misc_lesser",1);
	}
	
	/////////////////////////////////////
	
	// Now we re insert the layers
	insertLayers(layerArray);
	
	setMovement(movement);
	
	// AJAX for checking when all AJAX requests have finished...
	$(document).ajaxStop(function () {
		finalizeMarkers();
  })
  
	// Saving world into cookies
	saveCookies()

	// Loading measuring tool
	map.addLayer(vectorLayer);
}
