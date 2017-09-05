// Enabling / Disabling developer mode

$('#dev').change(function() {
	var checked = ($(this).prop('checked'));
	devEnabled = checked;
	
	if (devEnabled) {
		alert("Deverloper mode: " + devEnabled);
	}
})

$('#freeze').change(function() {
	var checked = ($(this).prop('checked'));
	movement = !checked;
	
	if (devEnabled) {
		alert("Movement: " + movement);
	}
})

// Adjusting the values of the terrain options...

$('#full_t').change(function() {
	var checked = ($(this).prop('checked'));
	full = checked;

	if (devEnabled) {
		alert(full);
	}
})

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

$('#y_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_yuan_greater = checked;
	
	if (devEnabled) {
		alert(city_yuan_greater);
	}
})

$('#y_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_yuan_lesser = checked;
	
	if (devEnabled) {
		alert(city_yuan_lesser);
	}
})

$('#y_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_yuan_greater = checked;
	
	if (devEnabled) {
		alert(road_yuan_greater);
	}
})

$('#y_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_yuan_lesser = checked;
	
	if (devEnabled) {
		alert(road_yuan_lesser);
	}
})

$('#y_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_yuan_greater = checked;
	
	if (devEnabled) {
		alert(titles_yuan_greater);
	}
})

$('#y_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_yuan_lesser = checked;
	
	if (devEnabled) {
		alert(titles_yuan_lesser);
	}
})

$('#y_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_yuan_greater = checked;
	
	if (devEnabled) {
		alert(terrain_yuan_greater);
	}
})

$('#y_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_yuan_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_yuan_lesser);
	}
})

// Elvania Specific

$('#e_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_elvania_capitals = checked;
	
	if (devEnabled) {
		alert(city_elvania_capitals);
	}
})

$('#e_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_elvania_greater = checked;
	
	if (devEnabled) {
		alert(city_elvania_greater);
	}
})

$('#e_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_elvania_lesser = checked;
	
	if (devEnabled) {
		alert(city_elvania_lesser);
	}
})

$('#e_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_elvania_greater = checked;
	
	if (devEnabled) {
		alert(road_elvania_greater);
	}
})

$('#e_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_elvania_lesser = checked;
	
	if (devEnabled) {
		alert(road_elvania_lesser);
	}
})

$('#e_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_elvania_greater = checked;
	
	if (devEnabled) {
		alert(titles_elvania_greater);
	}
})

$('#e_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_elvania_lesser = checked;
	
	if (devEnabled) {
		alert(titles_elvania_lesser);
	}
})

$('#e_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_elvania_greater = checked;
	
	if (devEnabled) {
		alert(terrain_elvania_greater);
	}
})

$('#e_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_elvania_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_elvania_lesser);
	}
})
// Valdrimm Specific

$('#v_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_valdrimm_capitals = checked;
	
	if (devEnabled) {
		alert(city_valdrimm_capitals);
	}
})

$('#v_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_valdrimm_greater = checked;
	
	if (devEnabled) {
		alert(city_valdrimm_greater);
	}
})

$('#v_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_valdrimm_lesser = checked;
	
	if (devEnabled) {
		alert(city_valdrimm_lesser);
	}
})

$('#v_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_valdrimm_greater = checked;
	
	if (devEnabled) {
		alert(road_valdrimm_greater);
	}
})

$('#v_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_valdrimm_lesser = checked;
	
	if (devEnabled) {
		alert(road_valdrimm_lesser);
	}
})

$('#v_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_valdrimm_greater = checked;
	
	if (devEnabled) {
		alert(titles_valdrimm_greater);
	}
})

$('#v_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_valdrimm_lesser = checked;
	
	if (devEnabled) {
		alert(titles_valdrimm_lesser);
	}
})

$('#v_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_valdrimm_greater = checked;
	
	if (devEnabled) {
		alert(terrain_valdrimm_greater);
	}
})

$('#v_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_valdrimm_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_valdrimm_lesser);
	}
})
// Choria Specific

$('#c_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_choria_capitals = checked;
	
	if (devEnabled) {
		alert(city_choria_capitals);
	}
})

$('#c_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_choria_greater = checked;
	
	if (devEnabled) {
		alert(city_choria_greater);
	}
})

$('#c_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_choria_lesser = checked;
	
	if (devEnabled) {
		alert(city_choria_lesser);
	}
})

$('#c_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_choria_greater = checked;
	
	if (devEnabled) {
		alert(road_choria_greater);
	}
})

$('#c_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_choria_lesser = checked;
	
	if (devEnabled) {
		alert(road_choria_lesser);
	}
})

$('#c_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_choria_greater = checked;
	
	if (devEnabled) {
		alert(titles_choria_greater);
	}
})

$('#c_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_choria_lesser = checked;
	
	if (devEnabled) {
		alert(titles_choria_lesser);
	}
})

$('#c_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_choria_greater = checked;
	
	if (devEnabled) {
		alert(terrain_choria_greater);
	}
})

$('#c_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_choria_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_choria_lesser);
	}
})
// Ocean Specific

$('#o_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_ocean_capitals = checked;
	
	if (devEnabled) {
		alert(city_ocean_capitals);
	}
})

$('#o_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_ocean_greater = checked;
	
	if (devEnabled) {
		alert(city_ocean_greater);
	}
})

$('#o_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_ocean_lesser = checked;
	
	if (devEnabled) {
		alert(city_ocean_lesser);
	}
})

$('#o_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_ocean_greater = checked;
	
	if (devEnabled) {
		alert(road_ocean_greater);
	}
})

$('#o_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_ocean_lesser = checked;
	
	if (devEnabled) {
		alert(road_ocean_lesser);
	}
})

$('#o_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_ocean_greater = checked;
	
	if (devEnabled) {
		alert(titles_ocean_greater);
	}
})

$('#o_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_ocean_lesser = checked;
	
	if (devEnabled) {
		alert(titles_ocean_lesser);
	}
})

$('#o_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_ocean_greater = checked;
	
	if (devEnabled) {
		alert(terrain_ocean_greater);
	}
})

$('#o_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_ocean_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_ocean_lesser);
	}
})
// Misc Specific

$('#m_cc').change(function() {
	var checked = ($(this).prop('checked'));
	city_misc_capitals = checked;
	
	if (devEnabled) {
		alert(city_misc_capitals);
	}
})

$('#m_cg').change(function() {
	var checked = ($(this).prop('checked'));
	city_misc_greater = checked;
	
	if (devEnabled) {
		alert(city_misc_greater);
	}
})

$('#m_cl').change(function() {
	var checked = ($(this).prop('checked'));
	city_misc_lesser = checked;
	
	if (devEnabled) {
		alert(city_misc_lesser);
	}
})

$('#m_rg').change(function() {
	var checked = ($(this).prop('checked'));
	road_misc_greater = checked;
	
	if (devEnabled) {
		alert(road_misc_greater);
	}
})

$('#m_rl').change(function() {
	var checked = ($(this).prop('checked'));
	road_misc_lesser = checked;
	
	if (devEnabled) {
		alert(road_misc_lesser);
	}
})

$('#m_tg').change(function() {
	var checked = ($(this).prop('checked'));
	titles_misc_greater = checked;
	
	if (devEnabled) {
		alert(titles_misc_greater);
	}
})

$('#m_tl').change(function() {
	var checked = ($(this).prop('checked'));
	titles_misc_lesser = checked;
	
	if (devEnabled) {
		alert(titles_misc_lesser);
	}
})

$('#m_ttg').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_misc_greater = checked;
	
	if (devEnabled) {
		alert(terrain_misc_greater);
	}
})

$('#m_ttl').change(function() {
	var checked = ($(this).prop('checked'));
	terrain_misc_lesser = checked;
	
	if (devEnabled) {
		alert(terrain_misc_lesser);
	}
})
