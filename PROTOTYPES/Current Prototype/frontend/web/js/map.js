var labels = '';
var labelIndex = 0;
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();

function initialize() {
    var manila = {lat: 14.5995124, lng: 120.9842195};
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 12,
        center: manila
    });
    google.maps.event.addListener(map, 'click', function (event) {
        addMarker(event.latLng, map);
    });
}

function addMarker(location, map) {
    var marker = new google.maps.Marker({
        position: location,
        label: labels[labelIndex++ % labels.length],
        map: map,
        draggable: true
    });
}
google.maps.event.addDomListener(window, 'load', initialize);