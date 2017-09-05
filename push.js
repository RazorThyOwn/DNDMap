function addData(table, name, x, y, x2, y2, type) {
	
	// ID is used for helping us determine exactly what functionality is 
	// going to be used from the table that we pull
	
	// -1 is marker (ie, cities, labels...)
	// 0 is marker_label (ie, pull the table but place only makers not icon
	// 1 is vector based image (roads, political maps, etc)
	// 2 is both marker_label AND marker (usual option)
	
	console.log("AJAX push...");

	var output = $.ajax({
			url: 'push.php',
			data: {table: table, name: name, x: x, y: y, x2: x2, y2: y2, type: type},
			success:function(data) {
				console.log(data);
			}
		});
}
