// File: library/main.js

// MAP STYLES

var myOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"landscape","stylers":[{"hue":"#F1FF00"},{"saturation":-27.4},{"lightness":9.4},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#0099FF"},{"saturation":-20},{"lightness":36.4},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#00FF4F"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFB300"},{"saturation":-38},{"lightness":11.2},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00B6FF"},{"saturation":4.2},{"lightness":-63.4},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#9FFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]}]
};

// OFFICE ONE

var officeOneLat = 40.701894,
    officeOneLng = -73.883348,

	map = new GMaps({
		div: '#glendale-map',
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

// OFFICE TWO

var officeTwoLat = 40.7237881,
    officeTwoLng = -73.6321029,

  map = new GMaps({
    div: '#mineola-map',
    lat: officeTwoLat,
    lng: officeTwoLng,
    refresh: true,
    center: new google.maps.LatLng(40.7237881,-73.6321029),
    options: myOptions
  });

  map.addMarker ({
    lat: officeTwoLat,
    lng: officeTwoLng,
    title: 'Mineola Office',
    infoWindow: {
      content: '<p>Mineola Office</p>'
    }
  });
