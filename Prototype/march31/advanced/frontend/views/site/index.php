<?php

/* @var $this yii\web\View */

$this->title = 'NDRRMC Logistics System';
?>
<div class="site-index">
  <head>

          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSTRDm6eRdkpoVOB2VJVJgTCNgmcuDcq0&callback=initMap">
          </script>
          <script>
              function initMap() {
                  map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 10,
                      center: new google.maps.LatLng(14.529133, 121.021747),
                      mapTypeId: 'roadmap'
                  });

                  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                  var testIcon = 'http://maps.google.com/mapfiles/kml/paddle/';

                  var icons = {

                      evac: {
                          icon: iconBase + 'ranger_station.png'
                      },

                      warehouse: {
                          icon: iconBase + 'truck.png'
                      }
                  };

                  var features = [
                      {
                          position: new google.maps.LatLng(14.529133, 121.021747),
                          type: 'evac'
                      },
                      {
                          position: new google.maps.LatLng(14.557118, 121.064908),
                          type: 'evac'
                      },
                      {
                          position: new google.maps.LatLng(14.516798, 121.021070),
                          type: 'warehouse'
                      },
                      {
                          position: new google.maps.LatLng(14.529109, 121.070576),
                          type: 'warehouse'
                      },
                      {
                          position: new google.maps.LatLng(14.121533, 121.413430),
                          type: 'evac'
                      },
                      {
                          position: new google.maps.LatLng(11.237221, 125.001089)
                      }

                  ];

                  features.forEach(function(feature) {
                      var marker = new google.maps.Marker({
                          position: feature.position,
                          icon: icons[feature.type].icon,
                          map: map
                      });
                  });
              }
    </script>
  </head>
  <body onload="initMap()">
    <div id="map" style="width: 1100px; height: 625px"></div>
  </body>
</div>
