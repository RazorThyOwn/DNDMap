// Enabling / Disabling developer mode

$('#dev').change(function() {
	var checked = ($(this).prop('checked'));
	devEnabled = checked;
	
	if (devEnabled) {
		alert("Deverloper mode: " + devEnabled);
	}
})

// Adjusting the values of the terrain options...

$('#y_t').change(function() {
	var checked = ($(this).prop('checked'));
	yuan = checked;
	
	if (devEnabled) {
		alert(yuan);
	}
})

$('#e_t').change(function() {
	var checked = ($(this).prop('checked'));
	elvania = checked;
	
	if (devEnabled) {
		alert(elvania);
	}
})

$('#v_t').change(function() {
	var checked = ($(this).prop('checked'));
	valdrimm = checked;
	
	if (devEnabled) {
		alert(valdrimm);
	}
})

$('#c_t').change(function() {
	var checked = ($(this).prop('checked'));
	choria = checked;
	
	if (devEnabled) {
		alert(choria);
	}
})

$('#o_t').change(function() {
	var checked = ($(this).prop('checked'));
	ocean = checked;
	
	if (devEnabled) {
		alert(ocean);
	}
})

$('#m_t').change(function() {
	var checked = ($(this).prop('checked'));
	misc = checked;
	
	if (devEnabled) {
		alert(misc);
	}
})

// Yuan Specific

$('#y_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_yuan_capitals = checked;
	
	if (devEnabled) {
		alert(city_yuan_capitals);
	}
})

// Elvania Specific

// Valdrimm Specific

// Choria Specific

// Ocean Specific

// Misc Specific