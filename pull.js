function getCity(table, id) {

	var returnData;

	var output = $.ajax({
			url: 'pull.php',
			data: {table: table},
			success:function(data) {
				returnData = data;
			}
		});
}