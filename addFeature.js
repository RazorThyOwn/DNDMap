function addFeature() {
	// Hiding the modal
	$('#addFeatureModal').modal('hide');
	
	var name = document.getElementById("fa_nameForm").value;
	var x = Math.trunc(document.getElementById("xval").value);
	var y = map_height - Math.trunc(document.getElementById("yval").value);
	
	var x2 = Math.trunc(document.getElementById("x2val").value);
	var y2 = map_height - Math.trunc(document.getElementById("y2val").value);
	
	var t1 = document.getElementById("fa_g1").value.toLowerCase();
	var t2 = document.getElementById("fa_g2").value.toLowerCase();
	var t3 = document.getElementById("fa_g3").value.toLowerCase();
	
	var secret = document.getElementById("secretbox").value;
	
	var table = t2+"_"+t1+"_"+t3;
	
	var type = "UNDEFINED";
	
	if (t2 == "road") {
		console.log("Pushing road feature");
		type = "road";
		name = "road";
	}
	
	else if (t2 == "city") {
		console.log("Pushing city feature");
		type = "city";
	}
	else {
		console.log("Pushing terrain feature");
		type = "terrain";
	}

	console.log("Adding feature with name of "+name+" at a position of ("+x+","+y+"), in the table of "+table);
	addData(table,name,x,y,x2,y2,type);
}
