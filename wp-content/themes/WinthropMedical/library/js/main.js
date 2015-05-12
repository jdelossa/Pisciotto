// File: library/main.js

// MAP STYLES

var myOptions = {
    zoom: 11,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]
  };

// OFFICE ONE && OFFICE TWO

var officeOneLat = 40.701894,
    officeOneLng = -73.883348,
    officeTwoLat = 40.7237881,
    officeTwoLng = -73.6321029,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		center: new google.maps.LatLng(40.715,-73.75),
		options: myOptions
	});

  map.addMarker ({
  	lat: officeOneLat,
  	lng: officeOneLng,
  	title: 'Glendale Office',
  	infoWindow: {
  		content: '<p>Glendale Office</p>'
  	}
  });

  map.addMarker ({
    lat: officeTwoLat,
    lng: officeTwoLng,
    title: 'Mineola Office',
    infoWindow: {
      content: '<p>Mineola Office</p>'
    }
  });


// PAN TO MARKER

$(document).on('click', 'pan-to-marker', function(e){
    e.preventDefault();

    var lat, lng;

    var $index = $(this).data('marker-index');
    var $lat = $(this).data('marker-lat');
    var $lng = $(this).data('marker-lng');

    if($index != undefined) {

        var position = map.markers[$index].getPosition();
        lat = position.lat();
        lng = position.lng();
    }
    else {
        lat = $lat;
        lng = $lng;
    }
    map.setCenter(lat, lng);
});