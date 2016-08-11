@extends('app')
@section('content')
	<head>
	<title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 89%;
      }
	  
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }
	  
	  #origin {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }
	  
	  

     
    </style>
  	</head>
	<input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div class="form-group rute" id="rute">
		<input type="text" class="controls" id="origin" class="origin" placeholder="Masukan Tempat Awal" />
        <br><input type="text" class="controls" id="destination" class="destination" placeholder="Masukan Tempat Awal" />

    </div>
    
    <div id="map"></div>
    <script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-1.10.2.js') }}"></script>
	<script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-ui-1.10.4.custom.js') }}"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap"
        async defer></script>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	var map;
	var ampMarker = [];
	var storeMarker = [];
	var infowindow;
	var marker;
	$.extend({
    	getMarker: function(url) {
        	var result = null;
			$.ajax({
				url: url,
				type: 'get',
				dataType: 'json',
				async: false,
				success: function(data) {
					result = data;
				}
			});
			return result;
		}
	});
	
	
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.4765194, lng: 107.0231146},
          zoom: 10
        });
        var input =(document.getElementById('pac-input'));
		var rute = (document.getElementById('rute'));
        var types = document.getElementById('type-selector');
        
		map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		map.controls[google.maps.ControlPosition.TOP_LEFT].push(rute);
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        infowindow = new google.maps.InfoWindow();

		ampget();		
		setMarkers(map,storeMarker);
        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });
		
	   	//directionService();
      }

	
	function ampget(){
		var image = '../images/amp.png';
		storeMarker = getjson('http://localhost/baper/public/map/amp/google');
		/*$.ajax({
			url: 'http://localhost/baper/public/map/amp/google',
			dataType : 'json',
			error:function (argument) {
				console.log(argument)
			},
			success:function (argument) {
				storeMarker = argument;
			},
			beforeSend: function() {
				$('#loading').html("<img src='images/ajax-loader.gif' />");
			},
		});*/
		
	}
	
	function getjson(url){
		var result = null;
			$.ajax({
				url: url,
				type: 'get',
				dataType: 'json',
				async: false,
				success: function(data) {
					result = data;
				}
		});
		return result;
	}
	
	function popupContent(title,content){
		var popup = "<div class='panel panel-default'>";
			popup += "<div class='panel-heading'><h6 class='panel-title'><i class='icon-accessibility'></i><b><u>"+title+"</u></b></h6></div>";
			popup += "<div class='panel-body'>";
			popup += "<table class='table table-bordered'>";
			for (var name in content) {
				if (name == 'image_link' || name == 'IMAGE_LINK' || name == 'foto' || name == 'FOTO') {
            	popup += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td><image class='img-responsive' src='" + feature.properties[name] + "' width='100'/></td></tr>";
				}else if (name == 'geometry' || name == 'geom') {
				}else{
				popup += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td>" + content[name] + "</td></tr>";
				}
			}
			popup += '</div>';
          	popup += '</div>';
        	popup += '</div>';

		return popup;
	}
	
	function setMarkers(map,locations){
		
		for (var i = 0; i < locations.length; i++){  

			var loan = locations[i]['pengelola'];
			var lat = locations[i]['y'];
		 	var long = locations[i]['x'];
		 	var add =  locations[i]['pengelola'];
			latlngset = new google.maps.LatLng(lat, long);
			marker = new google.maps.Marker({  
				map: map, title: loan , position: latlngset , html: popupContent('',locations[i]) 
		 	});
		 	map.setCenter(marker.getPosition());
			marker.content = "<h3>Loan Number: " + loan +  '</h3>' + "Address: " + add;
			google.maps.event.addListener(marker, "click", function () {
                //alert(this.html);
                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });
		
		 }
	}
	
	function directionService(){
		var chicago = {lng: 106.842960, lat: -6.524136};
		var indianapolis = {lng: 106.840374, lat: -6.520608};
		var directionsDisplay = new google.maps.DirectionsRenderer({
			map: map
		});
		// Set destination, origin and travel mode.
		var request = {
			destination: indianapolis,
			origin: chicago,
			travelMode: google.maps.TravelMode.DRIVING
		};
		
		// Pass the directions request to the directions service.
		var directionsService = new google.maps.DirectionsService();
		directionsService.route(request, function(response, status) {
			if (status == google.maps.DirectionsStatus.OK) {
			  	// Display the route on the map.
				directionsDisplay.setDirections(response);
			}
		});
	}
	
	function createInfoWindowContent(latLng, zoom) {
	  var scale = 1 << zoom;
	
	  var worldCoordinate = project(latLng);
	
	  var pixelCoordinate = new google.maps.Point(
		  Math.floor(worldCoordinate.x * scale),
		  Math.floor(worldCoordinate.y * scale));
	
	  var tileCoordinate = new google.maps.Point(
		  Math.floor(worldCoordinate.x * scale / TILE_SIZE),
		  Math.floor(worldCoordinate.y * scale / TILE_SIZE));
	
	  return [
		'Chicago, IL',
		'LatLng: ' + latLng,
		'Zoom level: ' + zoom,
		'World Coordinate: ' + worldCoordinate,
		'Pixel Coordinate: ' + pixelCoordinate,
		'Tile Coordinate: ' + tileCoordinate
	  ].join('<br>');
	}
	
	function project(latLng) {
	  var siny = Math.sin(latLng.lat() * Math.PI / 180);
	
	  // Truncating to 0.9999 effectively limits latitude to 89.189. This is
	  // about a third of a tile past the edge of the world tile.
	  siny = Math.min(Math.max(siny, -0.9999), 0.9999);
	
	  return new google.maps.Point(
		  TILE_SIZE * (0.5 + latLng.lng() / 360),
		  TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
	}
		
    </script>
    
 
@stop
