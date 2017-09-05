var distance_title = document.getElementById("distance_title");

var vectorLayer = new ol.layer.Vector({
  source: new ol.source.Vector()
});

var measurementRadios = $('[type=radio]');
var resultElement = $('#js-result');
var measuringTool;

var geometryType = 'Off';

$('#measure').change(function() {
	var checked = ($(this).prop('checked'));
	if (checked) {
		geometryType = 'LineString';
	}
	else {
		geometryType = 'Off';
	}
	
	enableMeasuringTool();
})

var enableMeasuringTool = function() {
	
  map.removeInteraction(measuringTool);
  console.log(geometryType)
  
  if (geometryType == 'Off') {
  	vectorLayer.getSource().clear();
  	return;
  }

  measuringTool = new ol.interaction.Draw({
    type: geometryType,
    source: vectorLayer.getSource()
  });

  measuringTool.on('drawstart', function(event) {
    vectorLayer.getSource().clear();

    event.feature.on('change', function(event) {
      var measurement = geometryType === 'Polygon' ? event.target.getGeometry().getArea() : event.target.getGeometry().getLength();
	  
	  measurement = measurement * ratio;
	  measurement = measurement; // Converting from meters to miles
	  
      var measurementFormatted = measurement < 10 ? measurement.toFixed(2) + ' miles' : measurement.toFixed(0) + ' miles';

	var n = measurementFormatted.indexOf(" ");
	distance = measurementFormatted.substring(0,n);
	distance = parseInt(distance);
	distance_title.innerHTML = 'Distance : ' +measurementFormatted + ' miles';
      console.log(measurementFormatted);
    });
  });

  map.addInteraction(measuringTool);
};

enableMeasuringTool();

