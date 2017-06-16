// Loading the add map icon 
var prevX = -1;
var prevY = -1;

map.on("click", function(e) {
	if (devEnabled) {
		console.log("clicked!");
		$('#addFeatureModal').modal('show');
		
		document.getElementById("xval").value = e.coordinate[0];
		document.getElementById("yval").value = e.coordinate[1];
		
		document.getElementById("x2val").value = prevX;
		document.getElementById("y2val").value = prevY;
		
		prevX = e.coordinate[0];
		prevY = e.coordinate[1];
	}
});


// Handing zooming in to keep icons from disappearing

map.on("moveend", function(e) {

	var newZoomLevel = map.getView().getZoom();
	
	if (newZoomLevel != prevZoom) {
		prevZoom = newZoomLevel;
		
		adjustIconScale(prevZoom);
		
			if (prevZoom == 1) {
				fontScale = 25;
				fontOffset = 20;
				roadWidth = 0.2;
			}
			if (prevZoom == 2) {
				fontScale = 40;
				fontOffset = 20;
				roadWidth = 1.2;
			}
			if (prevZoom == 3) {
				fontScale = 50;
				fontOffset = 20;
				roadWidth = 2;
			}
			if (prevZoom == 4) {
				fontScale = 95;
				fontOffset = 16;
				roadWidth = 3.6;
			}
			if (prevZoom == 5) {
				fontScale = 100;
				fontOffset = 13;
				roadWidth = 5;
			}
			if (prevZoom == 6) {
				fontScale = 180;
				fontOffset = 12;
				roadWidth = 8;
			}
			if (prevZoom == 7) {
				fontScale = 200;
				fontOffset = 13;
				roadWidth = 12;
			}
			if (prevZoom == 8) {
				fontScale = 300;
				fontOffset = 15;
				roadWidth = 18;
			}	
			if (prevZoom == 9) {
				fontScale = 700;
				fontOffset = 10;
				roadWidth = 20;
			}
	}
});