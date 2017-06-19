// Tool for measuring the distance between points

function enableDistance() {

	// Creating the vector sources and layer
	var vectorLayer new ol.layer.Vector({
		source: new ol.source.Vector()
	});

	// Creating the actual tool
	measuringTool = new ol.interaction.draw({
		type: geometryType,
		source: vectorLayer.getSource()
	});
}

function disableDistance() {

}
