$(document).ready(function(){

	var lng = '';
	var lat = '';
	
	function initialize() {
		getLocation();	
	}
	
	function getLocation(){
		if (navigator.geolocation){	
			navigator.geolocation.getCurrentPosition(showPosition);
		}
	}
	
	function showPosition(position){
	  	 position.coords.latitude;
	  	 position.coords.longitude;
	}
		
	function showPosition(position){
		
		lat = position.coords.latitude;
	  	lng = position.coords.longitude;
	  		  	
	    var mapOptions = {
	      center: new google.maps.LatLng(lat,lng),
	      zoom: 18,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        mapOptions);
		
		var marker = new google.maps.Marker({    
	       position: new google.maps.LatLng(lat, lng),
	       map: map,
	    });
		
		var bikeroutes = [
		  ['Downtown Orlando', 28.53834, -81.37924, 2],
		  ['Caddy Way Trail', 28.60741, -81.28865, 1]
		];     
	}
	  
	// Google Maps API v3 options center: for map centering location / Zoom: For zoom level / MapTypeId: for map view type
	
	$('.toggle').bind('click',function(){
		var state = $(this).attr('rel');
		var $url = 'save_location.php';
		var $title = $('.trail_title').val();
		var $description = $('.trail_description').val();
		
		var $data = 'type='+ state + '&lng=' + lng + '&lat=' + lat + '&title=' + $title + '&description=' + $description;
		
		$.ajax({
			url: $url,
			data: $data,
			type: 'post',
			success: function(res){
				if(state == 'Start') {
					$('.toggle').attr('rel','Stop');
					$('.toggle').val('Stop');
				} else {
					$('.toggle').attr('rel','Start');
					$('.toggle').val('Start');	
				}
			}
		})
		return false;			
	})
	
	initialize();
})