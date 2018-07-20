function getCity(table, id) {
	
	// ID is used for helping us determine exactly what functionality is 
	// going to be used from the table that we pull
	
	// -1 is marker (ie, cities, labels...)
	// 0 is marker_label (ie, pull the table but place only makers not icon
	// 1 is vector based image (roads, political maps, etc)
	// 2 is both marker_label AND marker (usual option)
	
	console.log("AJAX pull of "+table);

	var output = $.ajax({
			url: 'pull.php',
			data: {table: table},
			success:function(data) {
				console.log("Reulstant data ("+id+"): " + data);
				parseMarkerAdd(data,id);
			}
		});
}
