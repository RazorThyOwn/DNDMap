// Class for setting up and loading cookies

function saveCookies() {
	
	var coded = "";
	
	if (yuan) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	if (elvania) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	if (valdrimm) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	if (choria) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	if (ocean) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	if (misc) {
		coded = coded + 1;
	}
	else {
		coded = coded + 0;
	}
	
	console.log("6:"+coded.length);
	// Code for handling zoom level, positioning
	
	// Zoom Level
	var binZoom = (prevZoom >>> 0).toString(2);
	
	while(binZoom.length < 4) {
		binZoom = '0' + binZoom;
	}
	
	coded = coded + binZoom;
	
	console.log("10:"+coded.length);
	
	// Position
	
	var center = map.getView().getCenter();
	var x = Math.trunc(center[0]);
	var y = Math.trunc(center[1]);
	
	x = Math.abs(x);
	y = Math.abs(y);
	
	x = x.toString();
	y = y.toString();
	
	while(x.length < 4) {
		x = '0' + x;
	}
	
	while(y.length < 4) {
		y = '0' + y;
	}
	
	coded = coded + "00";
	coded = coded + x + y;
	coded = coded + "00";
	
	console.log(x+","+y);
	
	console.log("22:"+coded.length);
	
	// Yuan
	if (city_yuan_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_yuan_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_yuan_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_yuan_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_yuan_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_yuan_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_yuan_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_yuan_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_yuan_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("31:"+coded.length);
	
	// elvania
	if (city_elvania_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_elvania_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_elvania_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_elvania_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_elvania_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_elvania_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_elvania_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_elvania_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_elvania_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("40:"+coded.length);
	
	// valdrimm
	if (city_valdrimm_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_valdrimm_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_valdrimm_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_valdrimm_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_valdrimm_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_valdrimm_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_valdrimm_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_valdrimm_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_valdrimm_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("49:"+coded.length);
	
	// choria
	if (city_choria_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_choria_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_choria_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_choria_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_choria_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_choria_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_choria_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_choria_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_choria_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("58:"+coded.length);
	
	// ocean
	if (city_ocean_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_ocean_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_ocean_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_ocean_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_ocean_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_ocean_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_ocean_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_ocean_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_ocean_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("67:"+coded.length);
	
	// misc
	if (city_misc_capitals) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_misc_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (city_misc_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (road_misc_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (road_misc_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (titles_misc_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (titles_misc_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (terrain_misc_greater) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (terrain_misc_lesser) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	console.log("76:"+coded.length);
	
	if (secretOn) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	secretString = (secretId >>> 0).toString(2);
	while (secretString.length < 4) {
		secretString = '0'+secretString;
	}
	
	coded = coded + secretString;
	
	console.log("81:"+coded.length);
	
	if (polG) {
		coded = coded + 1;
	} else {coded = coded + 0};
	if (polL) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	if (movement) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	// We now have our binary encoding
	var output = "";
	
	for (var i = 0; i < 3; i++) {
		var binSelect = "0100" + coded.substring(0 + i*4, 4 + i*4);
		console.log(binSelect);
		output += String.fromCharCode(parseInt(binSelect, 2));
	}
	
	output += coded.substring(12,20);
	
	for (var i = 0; i < 3; i++) {
		var binSelect = "0100" + coded.substring(0 + i*4, 4 + i*4);
		console.log(binSelect);
		output += String.fromCharCode(parseInt(binSelect, 2));
	}
	
	for (var i = 5; i < 21; i++) {
		var binSelect = "0100" + coded.substring(0 + i*4, 4 + i*4);
		console.log(binSelect);
		output += String.fromCharCode(parseInt(binSelect, 2));
	}
	
	console.log(coded);
	console.log(output);
	
	document.cookie = "map="+output;
}