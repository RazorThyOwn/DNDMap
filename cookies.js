// Class for setting up and loading cookies

function saveCookies() {
	
	//console.log("SAVING COOKIES...");
	
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
	
	//console.log("6:"+coded.length);
	// Code for handling zoom level, positioning
	
	// Zoom Level
	var binZoom = (prevZoom >>> 0).toString(2);
	
	while(binZoom.length < 4) {
		binZoom = '0' + binZoom;
	}
	
	coded = coded + binZoom;
	
	//console.log("10:"+coded.length);
	
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
	
	//console.log(x+","+y);
	
	//console.log("22:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("31:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("40:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("49:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("58:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("67:"+coded.length);
	//console.log(coded);
	
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
	
	//console.log("76:"+coded.length);
	//console.log(coded);
	
	if (secretOn) {
		coded = coded + 1;
	} else {coded = coded + 0};
	
	secretString = (secretId >>> 0).toString(2);
	while (secretString.length < 4) {
		secretString = '0'+secretString;
	}
	
	coded = coded + secretString;
	
	//console.log("81:"+coded.length);
	
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
		//console.log(binSelect);
		output += String.fromCharCode(parseInt(binSelect, 2));
	}
	
	//console.log(output);
	output += coded.substring(12,20);
	//console.log(output);
	
	for (var i = 5; i < 21; i++) {
		var binSelect = "0100" + coded.substring(0 + i*4, 4 + i*4);
		//console.log(binSelect);
		if (binSelect == "01000000") {
			binSelect = "01110111";
		}
		output += String.fromCharCode(parseInt(binSelect, 2));
	}
	
	//console.log(coded);
	console.log(output);
	document.cookie = "map="+output;
}

function loadCookie() {
	var cookie = document.cookie;
	
	// Checking if our cookie exists or not
	if (cookie == "") {
		// No cookie is saved, using default values...
		return;
	}
	else {
		decryptCookie(cookie);
		reloadMap(1);
	}
}






























































function decryptCookie(cookie) {
	
	//console.log("DECRYPTING COOKIES");
	// Decoding cookie
	cookie = cookie.substring(4);
	//console.log(cookie);

	// Initing the coded variable
	var coded = "";
	
	// Converting first three into what needs to be encoded
	
	for (var i = 0; i < 3; i++) {
		var currentLetter = cookie.charCodeAt(i);
		//console.log(currentLetter+","+cookie.substring(i,i+1));
		if (currentLetter == 119) {
			currentLetter = 64;
		}
		//console.log(currentLetter);
		var fullChar = '0' + (currentLetter >>> 0).toString(2);
		coded = coded + fullChar.substring(4);
	}
	
	// Getting the positional information
	//console.log(coded);
	coded = coded + cookie.substring(3,11);
	//console.log(coded);
	
	// Getting the rest of the information
	for (var i = 11; i < 27; i++) {
		var currentLetter = cookie.charCodeAt(i);
		//console.log(currentLetter+","+cookie.substring(i,i+1));
		if (currentLetter == 119) {
			currentLetter = 64;
		}
		//console.log(currentLetter);
		var fullChar = '0' + (currentLetter >>> 0).toString(2);
		coded = coded + fullChar.substring(4);
	}
	
	//console.log(coded);
	
	
	
	
	
	
	
	
	// Looping through coded and assigning variables
	
	var x = 0;
	
	if (coded.substring(x,x+1) == 1) {
		yuan = 1;
		document.getElementById("y_t").checked = true;
	} else { 
		yuan = 0; 
		document.getElementById("y_t").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		elvania = 1;
		document.getElementById("e_t").checked = true;
	} else { 
		elvania = 0; 
		document.getElementById("e_t").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		valdrimm = 1;
		document.getElementById("v_t").checked = true;
	} else { 
		valdrimm = 0; 
		document.getElementById("v_t").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		choria = 1;
		document.getElementById("c_t").checked = true;
	} else { 
		choria = 0; 
		document.getElementById("c_t").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		ocean = 1;
		document.getElementById("o_t").checked = true;
	} else { 
		ocean = 0; 
		document.getElementById("o_t").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		misc = 1;
		document.getElementById("m_t").checked = true;
	} else { 
		misc = 0; 
		document.getElementById("m_t").checked = false;
	}
	x++;
	
		
	// Getting the zoom value...

	var zoomVal = coded.substring(x,x+4);
	zoomVal = parseInt(zoomVal, 2);
	prevZoom = zoomVal;
	map.getView().setZoom(zoomVal);
	
	x = x+4;
	
	// Getting the positional value...
	
	var posX = cookie.substring(3,7);
	var posY = cookie.substring(7,11);
	
	x = x+4;
	x = x+4;
	
	//console.log(posX);
	//console.log(posY);
	
	posX = parseInt(posX);
	posY = parseInt(posY);
	
	//console.log(posX);
	//console.log(posY);
	
	map.getView().setCenter([posX,posY]);
	
	// Rest of the data...
	
	//console.log(coded);
	//console.log(x);
	
	x++;
	x++;
	x++;
	x++;
	
	//console.log(x);
	
	//Yuanstuff//
	
	////console.log("Value for getting Yuan Capitals: " + coded.substring(x,x+1) + ", "+x);
	
	if (coded.substring(x,x+1) == 1) {
		city_yuan_capitals = 1;
		document.getElementById("y_cc").checked = true;
	} else { 
		city_yuan_capitals = 0; 
		document.getElementById("y_cc").checked = false;
	}
	x++;
	
	////console.log("Value for getting Yuan Greater: " + coded.substring(x,x+1) + ", "+x);
	if (coded.substring(x,x+1) == 1) {
		city_yuan_greater = 1;
		document.getElementById("y_cg").checked = true;
	} else { 
		city_yuan_greater = 0; 
		document.getElementById("y_cg").checked = false;
	}
	x++;
	
	////console.log("Value for getting Yuan Lesser: " + coded.substring(x,x+1) + ", "+x);
	if (coded.substring(x,x+1) == 1) {
		city_yuan_lesser = 1;
		document.getElementById("y_cl").checked = true;
	} else { 
		city_yuan_lesser = 0; 
		document.getElementById("y_cl").checked = false;
	}
	x++;
	
	
	//console.log("Value for getting Yuan RoadG: " + coded.substring(x,x+1) + ", "+x);
	if (coded.substring(x,x+1) == 1) {
		road_yuan_greater = 1;
		document.getElementById("y_rg").checked = true;
	} else { 
		road_yuan_greater = 0; 
		document.getElementById("y_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_yuan_lesser = 1;
		document.getElementById("y_rl").checked = true;
	} else { 
		road_yuan_lesser = 0; 
		document.getElementById("y_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_yuan_greater = 1;
		document.getElementById("y_tg").checked = true;
	} else { 
		titles_yuan_greater = 0; 
		document.getElementById("y_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_yuan_lesser = 1;
		document.getElementById("y_tl").checked = true;
	} else { 
		titles_yuan_lesser = 0; 
		document.getElementById("y_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_yuan_greater = 1;
		document.getElementById("y_ttg").checked = true;
	} else { 
		terrain_yuan_greater = 0; 
		document.getElementById("y_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_yuan_lesser = 1;
		document.getElementById("y_ttl").checked = true;
	} else { 
		terrain_yuan_lesser = 0; 
		document.getElementById("y_ttl").checked = false;
	}
	x++;
	
	//elvaniastuff//
	
	if (coded.substring(x,x+1) == 1) {
		city_elvania_capitals = 1;
		document.getElementById("e_cc").checked = true;
	} else { 
		city_elvania_capitals = 0; 
		document.getElementById("e_cc").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_elvania_greater = 1;
		document.getElementById("e_cg").checked = true;
	} else { 
		city_elvania_greater = 0; 
		document.getElementById("e_cg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_elvania_lesser = 1;
		document.getElementById("e_cl").checked = true;
	} else { 
		city_elvania_lesser = 0; 
		document.getElementById("e_cl").checked = false;
	}
	x++;
	
	
	
	if (coded.substring(x,x+1) == 1) {
		road_elvania_greater = 1;
		document.getElementById("e_rg").checked = true;
	} else { 
		road_elvania_greater = 0; 
		document.getElementById("e_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_elvania_lesser = 1;
		document.getElementById("e_rl").checked = true;
	} else { 
		road_elvania_lesser = 0; 
		document.getElementById("e_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_elvania_greater = 1;
		document.getElementById("e_tg").checked = true;
	} else { 
		titles_elvania_greater = 0; 
		document.getElementById("e_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_elvania_lesser = 1;
		document.getElementById("e_tl").checked = true;
	} else { 
		titles_elvania_lesser = 0; 
		document.getElementById("e_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_elvania_greater = 1;
		document.getElementById("e_ttg").checked = true;
	} else { 
		terrain_elvania_greater = 0; 
		document.getElementById("e_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_elvania_lesser = 1;
		document.getElementById("e_ttl").checked = true;
	} else { 
		terrain_elvania_lesser = 0; 
		document.getElementById("e_ttl").checked = false;
	}
	x++;
	
	//valdrimmstuff//
	
	if (coded.substring(x,x+1) == 1) {
		city_valdrimm_capitals = 1;
		document.getElementById("v_cc").checked = true;
	} else { 
		city_valdrimm_capitals = 0; 
		document.getElementById("v_cc").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_valdrimm_greater = 1;
		document.getElementById("v_cg").checked = true;
	} else { 
		city_valdrimm_greater = 0; 
		document.getElementById("v_cg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_valdrimm_lesser = 1;
		document.getElementById("v_cl").checked = true;
	} else { 
		city_valdrimm_lesser = 0; 
		document.getElementById("v_cl").checked = false;
	}
	x++;
	
	
	
	if (coded.substring(x,x+1) == 1) {
		road_valdrimm_greater = 1;
		document.getElementById("v_rg").checked = true;
	} else { 
		road_valdrimm_greater = 0; 
		document.getElementById("v_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_valdrimm_lesser = 1;
		document.getElementById("v_rl").checked = true;
	} else { 
		road_valdrimm_lesser = 0; 
		document.getElementById("v_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_valdrimm_greater = 1;
		document.getElementById("v_tg").checked = true;
	} else { 
		titles_valdrimm_greater = 0; 
		document.getElementById("v_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_valdrimm_lesser = 1;
		document.getElementById("v_tl").checked = true;
	} else { 
		titles_valdrimm_lesser = 0; 
		document.getElementById("v_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_valdrimm_greater = 1;
		document.getElementById("v_ttg").checked = true;
	} else { 
		terrain_valdrimm_greater = 0; 
		document.getElementById("v_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_valdrimm_lesser = 1;
		document.getElementById("v_ttl").checked = true;
	} else { 
		terrain_valdrimm_lesser = 0; 
		document.getElementById("v_ttl").checked = false;
	}
	x++;
	
	//choriastuff//
	
	if (coded.substring(x,x+1) == 1) {
		city_choria_capitals = 1;
		document.getElementById("c_cc").checked = true;
	} else { 
		city_choria_capitals = 0; 
		document.getElementById("c_cc").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_choria_greater = 1;
		document.getElementById("c_cg").checked = true;
	} else { 
		city_choria_greater = 0; 
		document.getElementById("c_cg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_choria_lesser = 1;
		document.getElementById("c_cl").checked = true;
	} else { 
		city_choria_lesser = 0; 
		document.getElementById("c_cl").checked = false;
	}
	x++;
	
	
	
	if (coded.substring(x,x+1) == 1) {
		road_choria_greater = 1;
		document.getElementById("c_rg").checked = true;
	} else { 
		road_choria_greater = 0; 
		document.getElementById("c_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_choria_lesser = 1;
		document.getElementById("c_rl").checked = true;
	} else { 
		road_choria_lesser = 0; 
		document.getElementById("c_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_choria_greater = 1;
		document.getElementById("c_tg").checked = true;
	} else { 
		titles_choria_greater = 0; 
		document.getElementById("c_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_choria_lesser = 1;
		document.getElementById("c_tl").checked = true;
	} else { 
		titles_choria_lesser = 0; 
		document.getElementById("c_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_choria_greater = 1;
		document.getElementById("c_ttg").checked = true;
	} else { 
		terrain_choria_greater = 0; 
		document.getElementById("c_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_choria_lesser = 1;
		document.getElementById("c_ttl").checked = true;
	} else { 
		terrain_choria_lesser = 0; 
		document.getElementById("c_ttl").checked = false;
	}
	x++;
	
	//oceanstuff//
	
	if (coded.substring(x,x+1) == 1) {
		city_ocean_capitals = 1;
		document.getElementById("o_cc").checked = true;
	} else { 
		city_ocean_capitals = 0; 
		document.getElementById("o_cc").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_ocean_greater = 1;
		document.getElementById("o_cg").checked = true;
	} else { 
		city_ocean_greater = 0; 
		document.getElementById("o_cg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_ocean_lesser = 1;
		document.getElementById("o_cl").checked = true;
	} else { 
		city_ocean_lesser = 0; 
		document.getElementById("o_cl").checked = false;
	}
	x++;
	
	
	
	if (coded.substring(x,x+1) == 1) {
		road_ocean_greater = 1;
		document.getElementById("o_rg").checked = true;
	} else { 
		road_ocean_greater = 0; 
		document.getElementById("o_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_ocean_lesser = 1;
		document.getElementById("o_rl").checked = true;
	} else { 
		road_ocean_lesser = 0; 
		document.getElementById("o_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_ocean_greater = 1;
		document.getElementById("o_tg").checked = true;
	} else { 
		titles_ocean_greater = 0; 
		document.getElementById("o_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_ocean_lesser = 1;
		document.getElementById("o_tl").checked = true;
	} else { 
		titles_ocean_lesser = 0; 
		document.getElementById("o_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_ocean_greater = 1;
		document.getElementById("o_ttg").checked = true;
	} else { 
		terrain_ocean_greater = 0; 
		document.getElementById("o_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_ocean_lesser = 1;
		document.getElementById("o_ttl").checked = true;
	} else { 
		terrain_ocean_lesser = 0; 
		document.getElementById("o_ttl").checked = false;
	}
	x++;
	
	//miscstuff//
	
	if (coded.substring(x,x+1) == 1) {
		city_misc_capitals = 1;
		document.getElementById("m_cc").checked = true;
	} else { 
		city_misc_capitals = 0; 
		document.getElementById("m_cc").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_misc_greater = 1;
		document.getElementById("m_cg").checked = true;
	} else { 
		city_misc_greater = 0; 
		document.getElementById("m_cg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		city_misc_lesser = 1;
		document.getElementById("m_cl").checked = true;
	} else { 
		city_misc_lesser = 0; 
		document.getElementById("m_cl").checked = false;
	}
	x++;
	
	
	
	if (coded.substring(x,x+1) == 1) {
		road_misc_greater = 1;
		document.getElementById("m_rg").checked = true;
	} else { 
		road_misc_greater = 0; 
		document.getElementById("m_rg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		road_misc_lesser = 1;
		document.getElementById("m_rl").checked = true;
	} else { 
		road_misc_lesser = 0; 
		document.getElementById("m_rl").checked = false;
	}
	x++;
	
	
	
	
	if (coded.substring(x,x+1) == 1) {
		titles_misc_greater = 1;
		document.getElementById("m_tg").checked = true;
	} else { 
		titles_misc_greater = 0; 
		document.getElementById("m_tg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		titles_misc_lesser = 1;
		document.getElementById("m_tl").checked = true;
	} else { 
		titles_misc_lesser = 0; 
		document.getElementById("m_tl").checked = false;
	}
	x++;
	
	if (coded.substring(x,x+1) == 1) {
		terrain_misc_greater = 1;
		document.getElementById("m_ttg").checked = true;
	} else { 
		terrain_misc_greater = 0; 
		document.getElementById("m_ttg").checked = false;
	}
	x++;
	if (coded.substring(x,x+1) == 1) {
		terrain_misc_lesser = 1;
		document.getElementById("m_ttl").checked = true;
	} else { 
		terrain_misc_lesser = 0; 
		document.getElementById("m_ttl").checked = false;
	}
	x++;
}
