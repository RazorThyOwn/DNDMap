function removeAllLayers() {
	map.setLayerGroup(new ol.layer.Group());
}

function insertLayers(layerArray) {
	for (var layer = 0; layer < layerArray.length; layer++) {
		map.addLayer(layerArray[layer]);
	}
}

function reloadMap() {
	
	// First we remove all layers to preserve ordering
	removeAllLayers();
	
	// Initializing the layer
	
	layerArray = [];

	// Checking for terrain options
	
	if (yuan) {
		var yuan_extent = [1695,2891,4217,5480];
		
		var map_yuan = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				url: 'MapFiles/Map_Yuan.png',
				projection: projection,
				imageExtent: yuan_extent
			  })
		})
		layerArray.push(map_yuan);
	}
	
	// Checking for yuan options
	
	if (city_yuan_capitals) {
		getCity("city_yuan_capitals",-1);
	}
	
	
	// Now we re insert the layers
	insertLayers(layerArray);
}