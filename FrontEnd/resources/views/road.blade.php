
		<div id="mymap" style="float: right ; width: 400px; height: 400px;">Google Map</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDOiNCULeeGLt_n_J6smNM_5xX7gf_YoXA&callback=initMap"></script>
		<script type="text/javascript">
				
			  function initMap() {
				 var map, infoWindow;
				  
				// map = new google.maps.Map(document.getElementById('mymap'), {
				  // center: {lat: 16.062, lng: 108.152},
				  // zoom: 13
				// });
				infoWindow = new google.maps.InfoWindow;
				
				//get location destination
				var locations = <?php print_r(json_encode($address)) ?>;
				var way = locations.waypoint;
				var dlat = (way.split(",",2))[0];
				var dlng = (way.split(",",2))[1];
				
				var pointB = new google.maps.LatLng(dlat,dlng );
				
				// Try HTML5 geolocation.
				
				if (navigator.geolocation) {
				  navigator.geolocation.getCurrentPosition(function(position) {
					pos = {
					  lat: position.coords.latitude,
					  lng: position.coords.longitude
					};
				
					// infoWindow.setPosition(pos);
					// infoWindow.setContent("you are here");
					// infoWindow.open(map);
					//map.setCenter(pos);
					
					
					
					//tao duong di
					
				    var pointA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
					 myOptions = {
						zoom: 13,
						center: pointA
					},
					map = new google.maps.Map(document.getElementById('mymap'), myOptions),
					// Instantiate a directions service.
						directionsService = new google.maps.DirectionsService,
						directionsDisplay = new google.maps.DirectionsRenderer({
						map: map
					});
					// markerA = new google.maps.Marker({
						// position: pointA,
						// title: "point A",
						// map: map
					// }),
					// markerB = new google.maps.Marker({
						// position: pointB,
						// title: "point B",
						// map: map
					// });

				// get route from A to B
				calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
					
				  }, function() {
					handleLocationError(true, infoWindow, map.getCenter());	
				  }	);
					  
				} else {
				  // Browser doesn't support Geolocation
				  handleLocationError(false, infoWindow, map.getCenter());
				}
				
			
							
			  }
			  
			  
			  
			  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
				infoWindow.setPosition(pos);
				infoWindow.setContent(browserHasGeolocation ?
									  'Error: The Geolocation service failed.' :
									  'Error: Your browser doesn\'t support geolocation.');
				infoWindow.open(map);
			  }
			  
			  //ham tinh khoang cach va hien thi map
			  function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
				directionsService.route({
					origin: pointA,
					destination: pointB,
					avoidTolls: true,
					avoidHighways: false,
					travelMode: google.maps.TravelMode.DRIVING
				}, function (response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(response);
					} else {
						window.alert('Directions request failed due to ' + status);
					}
				});
				}
				
				initMap();
		</script>
