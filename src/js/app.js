import 'js-animate-scroll/dist/animate-scroll.min.js';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.js';

jQuery(document).ready( function($) {

	//Google Analytics

	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-126194309-1');


	// Api connection
	
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
		    padding: 30,
		    align: 'top',
		    onFinish: function () {
		    }
		};
		new AnimateScroll('#servicios-fp', options);
	});


	// Dirección

	$( ".custom-select" ).change(function(data) {

		var position;
		var title;
		if( this.value == 1 ){
			position = {lat: -33.433509, lng: -70.659983};
			title = 'Manuel Rodríguez 867. Ofic. 708';

		}

		if( this.value == 2 ){
			position = {lat: -33.453576, lng: -70.654362};
			title = 'Lord Cochrane 635. Ofic. 1409A';
		}

	  // Crear nuevo marker
	  var marker = new google.maps.Marker({position: position, map: map});
	   var infowindow = new google.maps.InfoWindow({
          content: title
        });
        
        infowindow.open(map, marker);

	  // Movimiento para mostrar el siguiente marker
      map.panTo(position);

      // Limpia markers
	  setMapClear(null);

	  // Guarda markers activos (1)
	  markers.push(marker)

	});



	function setMapClear(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }

        markers = [];
     }




});