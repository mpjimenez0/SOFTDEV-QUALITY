<?php

/* @var $this yii\web\View */
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
$this->title = 'Logistics Administration';
?>
<div class="site-index">


    <div class="body-content ">


        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16011019.364312863!2d113.5712581658412!3d11.556139415041866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x324053215f87de63%3A0x784790ef7a29da57!2sPhilippines!5e0!3m2!1sen!2sph!4v1489830859331"
                width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        <?php


        $coord = new LatLng(['lat' => 14.541049898060402, 'lng' => 120.992431640625]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 14,
        ]);

        // lets use the directions renderer
        $home = new LatLng(['lat' => 14.52817191193843, 'lng' => 121.01462960243225]);
        $school = new LatLng(['lat' => 14.5310612, 'lng' => 121.02121549999993]);
        $santo_domingo = new LatLng(['lat' => 14.5271244, 'lng' => 121.06145839999999]);

        // setup just one waypoint (Google allows a max of 8)
        $waypoints = [
            new DirectionsWayPoint(['location' => $santo_domingo])
        ];

        $directionsRequest = new DirectionsRequest([
            'origin' => $home,
            'destination' => $school,
            'waypoints' => $waypoints,
            'travelMode' => TravelMode::DRIVING
        ]);

        // Lets configure the polyline that renders the direction
        $polylineOptions = new PolylineOptions([
            'strokeColor' => '#FFAA00',
            'draggable' => true
        ]);

        // Now the renderer
        $directionsRenderer = new DirectionsRenderer([
            'map' => $map->getName(),
            'polylineOptions' => $polylineOptions
        ]);

        // Finally the directions service
        $directionsService = new DirectionsService([
            'directionsRenderer' => $directionsRenderer,
            'directionsRequest' => $directionsRequest
        ]);

        // Thats it, append the resulting script to the map
        $map->appendScript($directionsService->getJs());

        // Lets add a marker now
        $marker = new Marker([
            'position' => $coord,
            'title' => 'My Home Town',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => '<p>This is my super cool content</p>'
            ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Now lets write a polygon
        $coords = [
            new LatLng(['lat' => 25.774252, 'lng' => -80.190262]),
            new LatLng(['lat' => 18.466465, 'lng' => -66.118292]),
            new LatLng(['lat' => 32.321384, 'lng' => -64.75737]),
            new LatLng(['lat' => 25.774252, 'lng' => -80.190262])
        ];

        $polygon = new Polygon([
            'paths' => $coords
        ]);

        // Add a shared info window
        $polygon->attachInfoWindow(new InfoWindow([
            'content' => '<p>This is my super cool Polygon</p>'
        ]));

        // Add it now to the map
        $map->addOverlay($polygon);


        // Lets show the BicyclingLayer :)
        $bikeLayer = new BicyclingLayer(['map' => $map->getName()]);

        // Append its resulting script
        $map->appendScript($bikeLayer->getJs());

        // Display the map -finally :)
        echo $map->display();
        ?>

    </div>
</div>
