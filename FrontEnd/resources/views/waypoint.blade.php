
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDOiNCULeeGLt_n_J6smNM_5xX7gf_YoXA&sensor=false"></script>
		<script type="text/javascript">
			
			var locations = <?php print_r(json_encode($listWaypoint)) ?>;
				
			var map = new google.maps.Map(document.getElementById('mymap'), {
			  zoom: 13,
			  center: new google.maps.LatLng(16.1184076,108.0909378),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}); 
			
//			var infowindow = new google.maps.InfoWindow();
//
//			var marker, i;
//			$.each( locations, function( index, value ){
//					var way = value.waypoint;
//					var lat = (way.split(",",2))[0];
//					var lng = (way.split(",",2))[1];
//					marker = new google.maps.Marker({
//						position: new google.maps.LatLng(lat, lng),
//						map: map
//					  });
//					google.maps.event.addListener(marker, 'click', (function(marker) {
//						return function() {
//						  infowindow.setContent('<p><a href= "/place/' + value.placeID+'">'+value.placeName+ ' </a><br/>'+value.description+'</p>');
//						  infowindow.open(map, marker);
//						}
//					  })(marker));
//			});
			
		</script>
