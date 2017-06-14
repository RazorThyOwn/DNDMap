<!DOCTYPE html>
<html>
  <head>
    <title>Accessible Map</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v4.2.0/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.2.0/build/ol.js"></script>
    <style>
      a.skiplink {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        padding: 0;
        border: 0;
        height: 1px;
        width: 1px;
        overflow: hidden;
      }
      a.skiplink:focus {
        clip: auto;
        height: auto;
        width: auto;
        background-color: #fff;
        padding: 0.3em;
      }
      #map:focus {
        outline: #4A74A8 solid 0.15em;
      }
    </style>
  </head>
  <body>
	<div id="container" style="width: 99vw; height: 98vh; overflow: hidden;">
		<div id="map" style="width: 79%; float: left; height: 100%;">
		</div>
		<div style="width: 20%; float: left;">
			<h1>Terra</h1>
			<input id="clickMe" type="button" value="clickme" onclick="removeLayer_main();" />
			<input id="clickMe" type="button" value="clickme" onclick="addLayer_main();" />
			<input id="clickMe" type="button" value="clickme" onclick="removeLayer_second();" />
			<input id="clickMe" type="button" value="clickme" onclick="addLayer_second();" />
		</div>
	</div>
		
    <script>
		var extent = [0, 0, 1024, 968];
		var projection = new ol.proj.Projection({
		  code: 'xkcd-image',
		  units: 'pixels',
		  extent: extent
		});
		
		mainLayer1 = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				attributions: [
				  new ol.Attribution({
					html: '&copy; <a href="http://xkcd.com/license.html">xkcd</a>'
				  })
				],
				url: 'https://pmcdeadline2.files.wordpress.com/2016/07/logo-tv-logo.png',
				projection: projection,
				imageExtent: extent
			  })
		})
		
		mainLayer2 = new ol.layer.Image({
			  source: new ol.source.ImageStatic({
				attributions: [
				  new ol.Attribution({
					html: '&copy; <a href="http://xkcd.com/license.html">xkcd</a>'
				  })
				],
				url: 'http://geology.com/world/world-map-clickable.gif',
				projection: projection,
				imageExtent: extent
			  })
		})
		
		var map = new ol.Map({
		  layers: [mainLayer2,mainLayer1],
		  target: 'map',
		  view: new ol.View({
			projection: projection,
			center: ol.extent.getCenter(extent),
			zoom: 2
		  })
		});
		
		function removeLayer_main() {
			map.removeLayer(mainLayer1);
		}
		function addLayer_main() {
			map.addLayer(mainLayer1);
		}
		function removeLayer_second() {
			map.removeLayer(mainLayer2);
		}
		function addLayer_second() {
			map.addLayer(mainLayer2);
		}
    </script>
  </body>
</html>