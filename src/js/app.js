jQuery(document).ready( function($) {

	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-126194309-1');


	// Initialize and add the map
	function initMap() {

	// The location of Uluru
	var uluru = {lat: -25.344, lng: 131.036};

	// The map, centered at Uluru
	var map = new google.maps.Map(
    	document.getElementById('map'), {zoom: 8, center: uluru});

	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({position: uluru, map: map});

	}


	$.get( "https://jsonip.com", function( data ) {
			
			var url = "https://api.ip2country.info/ip?" + data.ip;
			console.log(url);
			$.get( url, function( result ) {
		  		var text = result.countryName + ' ' + result.countryEmoji;
		  		$("#country").html(text)
			});
	});


	/*var options = {
	    duration: 200,
	    easing: 'linear',
	    padding: 0,
	    align: 'top',
	    onFinish: function () {}
	};*/
	
	new AnimateScroll('#dev21', options);

	/*$( ".circulo" ).click(function() {
		$('#dev21').animatescroll({
			duration: 2500,
			easing: 'easeInOutQuint',
			padding: 10,
			align: top,
			onFinish: 'onFinish'});
	});*/

});