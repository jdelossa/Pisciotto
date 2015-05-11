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
    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]
  };

// OFFICE ONE

var officeOneLat = 40.701894,
    officeOneLng = -73.883348,
    officeTwoLat = 40.7237881,
    officeTwoLng = -73.6321029,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		center: new google.maps.LatLng(40.701894,-73.883348),
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
