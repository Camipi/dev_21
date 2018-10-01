import 'js-animate-scroll/dist/animate-scroll.min.js';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.js';

jQuery(document).ready( function($) {

	//Google Analytics

	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-126194309-1');


	//Google Maps

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


	
	
	// jQuery Plugin AnimateScroll

	$( ".circulo" ).click(function() {
		console.log("entra a onclick");

		var options = {
		    duration: 600,
		    easing: 'easeInOutQuad',
		    padding: 300,
		    align: 'top',
		    onFinish: function () {
		    }
		};
		new AnimateScroll('#dev21', options);
	});


	$( ".circulo2" ).click(function() {
		console.log("entra a onclick");

		var options = {
		    duration: 600,
		    easing: 'easeInOutQuad',
		    padding: 50,
		    align: 'top',
		    onFinish: function () {
		    }
		};
		new AnimateScroll('#servicios-fp', options);
	});




});