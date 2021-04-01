$( function() {
    console.log("test");
	$.getJSON("Car.json", function(data) {
        console.log(data)
        autoComplete = [];
		for (var i = 0, len = data.cars.length; i < len; i++) {
			autoComplete.push(data[i].brand + ", " + data.cars[i].mode1);
		}
		$( "#search" ).autocomplete({
			source: autoComplete
		});
	});
});