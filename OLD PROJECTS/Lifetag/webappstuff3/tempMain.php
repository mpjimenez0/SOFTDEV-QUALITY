<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="style.css"> <!-- Resource style -->
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" type="text/css" href="jquery.dataTables.css" />
	<script src="modernizr.js"></script>	<!-- Modernizr -->
	<script type="text/javascript" src="built_rt.min.js"></script>
	<script src="log-out.js"></script>	
  	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>

	<title>Welcome to LifeTag!</title>
</head>
	<body>

		<div class="topBar">
			<img src="LifeTagLogo.png" height="100"/>
				<div>
					<input type="button" class="submit" id= "log-out" value="Log-out" onClick="log_out()" />
				</div>
		</div>
	
	<div class="cd-tabs">
		<nav>
			<ul class="cd-tabs-navigation">
				<li><a data-content="inbox" class="selected" href="#0">Map </a></li>
				<li><a data-content="new" href="#0">Account Overview</a></li>
				<li><a data-content="gallery" href="#0">Device Configuration</a></li>
			</ul> <!-- cd-tabs-navigation -->
		</nav>
	
		<ul class="cd-tabs-content">
			<li data-content="inbox" class="selected">
				<div id="result"></div>
				<div id="map"></div>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1w5UbLX-7GhpoyHaeFehwTyDDko_r8h4&callback=initMap&libraries=geometry,places">
				</script>
			</li>
			</li>
			

			<li data-content="new">
			<div class ="patientA">
						<form class="patientFormA">
							Patient's Information
							<hr>
							<input type="text" size="35" class="pBlockA" placeholder="Last Name">
							<input type="text" size="35" class="BdayBlockA" placeholder="Birthday (MM/DD/YY)">
							<br> 
							<br>
							<input type="text" size="35" class="pBlockA" placeholder="First Name">
							<input type="text" size="35" class="BdayBlockA" placeholder="Contact number">
							<br> 
							<br>
							<input type="text" size="35" class="AdBlockA" placeholder="Complete Address">
							<br>
								<input type="button" id="edit" value="Edit" onClick="get_patient();" />
						</form> 
				</div>
				<div class ="patientB">
						<form class="patientFormA">
							Guardian's Information
							<hr>
							<input type="text" size="35" class="pBlockA" id = "glname" placeholder="Last Name">
							<input type="text" size="35" class="BdayBlockA" id = "gbday" placeholder="Birthday (MM/DD/YY)">
							<br> 
							<br>
							<input type="text" size="35" class="pBlockA" id = "gfname" placeholder="First Name">
							<input type="text" size="35" class="BdayBlockA" id = "gcn" placeholder="Contact number">
							<br> 
							<br>
							<input type="text" size="35" class="AdBlockA" id="gUserName" placeholder="User Name">
							<br> 
							<br>
							<input type="password" size="35" class="AdBlockA" id="gPW" placeholder="Enter Old Password">
							<br> 
							<br>
							<input type="password" size="35" class="AdBlockA" id="gPW2" placeholder="Enter New Password">
							<br> 
							<br>
							<input type="text" size="35" class="AdBlockA" id = "gca" placeholder="Complete Address">
								
								<input type="button" class="edit" id="edit" value="Edit"  onClick="edit_fields()" />
								<input type="button" class="edit" id="saveButton" value="Save"  onClick="update_info()" />
						</form> 
				</div>	

			</li>

			<li data-content="gallery">
				<div class ="DeviceConfig">
						Device Configuration
						<form class="DeviceConfigForm">
							<hr>
							<h1 class="tag" id= "homeN">Home Network</h1>
							<h1 class="tag" id= "pocketN">Pocket Wi-Fi Network</h1>
							<br>
							<input type="text" size="35" id="DCblock" placeholder="Complete Address">
							<br> 
							<br>
							<input type="text" size="35" id="DCblock" placeholder="Complete Address">
							<br>
							<input type="text" size="35" id="DCblock2" placeholder="Complete Address">
							<br> 
							<br>
							<input type="text" size="35" id="DCblock2" placeholder="Complete Address">
							<br>
								<input type="submit" id="save" value="Save"  />
								<input type="submit" id="edit2" value="Edit"  />
						</form> 
				</div>
			</li>
		</ul> <!-- cd-tabs-content -->
	</div>
		<script src="jquery-1.11.3.js"></script>
		<script src="jquery.dataTables.js"></script>
		<script src="main.js"></script> <!-- Resource jQuery -->
		
		<script type="text/javascript">
			var gln = "";
			var gbd = "";
			var gfn = "";
			var gcnum = "";
			var gun = "";
			var gadd = "";
			var gmail = "";
			var id = localStorage.getItem("guardianID");
			$( document ).ready(function() {
				
				var Query = Built.App('blt5ac96291778cf429').Class('guardian').Query;
				var query = Query();
				query     = query.where('uid',id);
				query     = query.only(['guardian_lname','guardian_fname','username',"guardian_birthdate",
				"guardian_email","guardian_cnum"]);
				query.exec()
				.then(function(res){
				  // The response will only have the username field
				  console.log(res);
				  var arr = $.map(res[0].toJSON(), function(el){ return el; });
				  console.log(arr);
				
				gln = arr[0];
				gfn = arr[1];
				gun = arr[2];
				gadd = arr[3];
				gbd = arr[4];
				gcnum = arr[6];
			
				
				document.getElementById("glname").value = gln;
				document.getElementById("glname").disabled = true;
				document.getElementById("gfname").value = gfn;
				document.getElementById("gfname").disabled = true;
				document.getElementById("gUserName").value = gun;
				document.getElementById("gUserName").disabled = true;
				document.getElementById("gca").value = gadd;
				document.getElementById("gca").disabled = true;
				document.getElementById("gbday").value = gbd;
				document.getElementById("gbday").disabled = true;
				document.getElementById("gcn").value = gcnum;
				document.getElementById("gcn").disabled = true;
				});
				
								
				
			});
				
			function edit_fields(){
				document.getElementById("glname").disabled = false;
				document.getElementById("gfname").disabled = false;
				document.getElementById("gUserName").disabled = false;
				document.getElementById("gca").disabled = false;
				document.getElementById("gbday").disabled = false;
				document.getElementById("gcn").disabled = false;
			}
			
			function update_info(){
				
				var ln = document.getElementById("glname");
				var fn = document.getElementById("gfname");
				var un = document.getElementById("gUserName");
				var cn = document.getElementById("gcn");
				var bday = document.getElementById("gbday");
				
				// 'blt5d4sample2633b' is a dummy Application API key
				// 'Class('class_name').Object returns an 'Object' constructor
				// 'project' is a uid of a class on Built.io Backend
				var Update = Built.App('blt5ac96291778cf429').Class('Guardian').Object;
				 
				// When a object is initiated using a uid, save method will make an update call instead of create.
				var update = Update(id);
				 
				update = update.set('guardian_lname', 'ln');
				update = update.set('guardian_fname', 'fn');
				update = update.set('username', 'un');
				update = update.set('guardian_cnum', 'cn');
				update = update.set('guardian_birthdate', 'bday');
				 
				update
				.save()
				.then(function(update) {
					// object updated successfully
					console.log(project.toJSON())
				}, function(error) {
					// some error has occurred
					// refer to the 'error' object for more details
				});
								
			}
			
		</script>
		<script type="text/javascript">
			var arr = [];
			var Lat;
			var Lng;
			var speed;
			var distance;
				
			var map;
			var marker;
			var placesService;
			var infoWindow;
			var contentString;
			
			//$(document).ready(function(){
				
				function initMap() {
					var Query = Built.App('blt5ac96291778cf429').Class('patient').Query;
					var query = Query();
					query = query.where('guardian_ref','bltc6b71c8408d57393');
					query = query.only(['uid']);
					query.exec()
					.then(function(res){
						var arr = $.map(res[0].toJSON(), function(el){ return el; })
						
						//console.log(arr[0]);
						//console.log(arr[1]);
						//console.log(arr[2]);
					});
					
					var Query2 = Built.App('blt5ac96291778cf429').Class('patientlocation').Query;
					var query2 = Query2();
					query2 = query2.where('patient_ref','bltdc8697471e2912f8');
					query2.exec()
					.then(function(res){
						//var arr = $.map(res[0].toJSON(), function(el){ return el; })

						var obj;
						for (i=res.length-1; i >= 0 ; i--) {
							//console.log(i);
							arr.push(res[i].toJSON());
							//console.log(arr[i]);
						}
						Lat = arr[23].ploc_lat;
						Lng = arr[23].ploc_long;
						
						//console.log(Lat + " " + Lng);
						
						map = new google.maps.Map(document.getElementById('map'), {
							center: {lat: parseFloat(Lat), lng: parseFloat(Lng)},
							zoom: 19,
							mapTypeId: google.maps.MapTypeId.SATELLITE
						});
				  
						/* marker = new google.maps.Marker({
							position: {lat: parseFloat(Lat), lng: parseFloat(Lng)},
							map: map,
							title: 'Hello World!'
						}); */
						
						autoRefresh(map);
					});	
				}
				
				function moveMarker(map, marker, latlng) {
					marker.setPosition(latlng);
					map.panTo(latlng);
				}
				
				function moveInfoWindow(map, infoWindow, marker, latlng, speed, distance){
					contentString = '<p>speed: ' + speed + ' km/h</p>' +
									'<p>distance: ' + distance + ' km</p>';
					infoWindow.setContent(contentString);
					infoWindow.open(map, marker);
				}
				
				function autoRefresh(map) {
					var i, route, marker;
					
					route = new google.maps.Polyline({
						path: [],
						geodesic : true,
						strokeColor: '#FF0000',
						strokeOpacity: 1.0,
						strokeWeight: 2,
						editable: false,
						map:map
					});
					
					marker=new google.maps.Marker({map:map,icon:"http://maps.google.com/mapfiles/ms/micons/blue.png"});
					
					infowindow = new google.maps.InfoWindow({
						content: contentString
					});
					
						
					for (i = arr.length-1; i >= 0; i--) {
						setTimeout(function (coords)
						{
							//console.log(i);
							//console.log(coords);
							var latlng = new google.maps.LatLng(coords.ploc_lat, coords.ploc_long);
							speed = coords.p_speed;
							distance = coords.p_distance;
							
							var placesService = new google.maps.places.PlacesService(map);
							placesService.nearbySearch({
							location: latlng,
							radius: 10000,
							types: ['police']
							}, callback);
							
							route.getPath().push(latlng);
							moveInfoWindow(map, infowindow, marker, latlng, speed, distance);
							moveMarker(map, marker, latlng);
						}, 1000 * i, arr[i]);
					}
				}
				
				function callback(results, status) {
				  if (status === google.maps.places.PlacesServiceStatus.OK) {
					for (var i = 0; i < results.length; i++) {
					  createMarker(results[i]);
					}
				  }
				}
				
				function createMarker(place) {
				  var placeLoc = place.geometry.location;
				  var marker = new google.maps.Marker({
					map: map,
					position: place.geometry.location
				  });

				  google.maps.event.addListener(marker, 'click', function() {
					infowindow.setContent('<p>' + place.name + '</p>');
					infowindow.open(map, this);
				  });
				}
			//});
			
		</script>
	</body>
	</html>
	
	
	