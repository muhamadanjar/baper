///MAp Google
(function($, window, document){
    var map,mapbp,mapquary;
    var infowindow;
    var ampMarker,bpMarker,quaryMarker;
    var marker;var markers = [];
    function initMap() {
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.4765194, lng: 107.0231146},
          zoom: 10
        });
        mapbp = new google.maps.Map(document.getElementById('map-bp'), {
          center: {lat: -6.4765194, lng: 107.0231146},
          zoom: 10
        });
        mapquary = new google.maps.Map(document.getElementById('map-quary'), {
          center: {lat: -6.4765194, lng: 107.0231146},
          zoom: 10
        });

        ampMarker = getjson('/api/getamp-null');
        setMarkers(map,ampMarker);
        /*bpMarker = getjson('http://localhost/baper/public/api/getbp');
        setMarkers(mapbp,bpMarker);
        quaryMarker = getjson('http://localhost/baper/public/api/getquary');
        setMarkers(mapquary,quaryMarker);*/
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

    function setMarkers(map,locations){
        for (var i = 0; i < locations.length; i++){  
            var loan = locations[i]['kode_amp'];
            var lat = locations[i]['longtitude'];
            var long = locations[i]['latitude'];
            var add =  locations[i]['merk'];
            latlngset = new google.maps.LatLng(lat, long);
            marker = new google.maps.Marker({  
                map: map, title: loan , position: latlngset , html: popupContent('',locations[i]) 
            });
            markers.push(marker);
            map.setCenter(marker.getPosition());
          
            google.maps.event.addListener(marker, "click", function () {
                    //alert(this.html);
                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });
        
        }
    }

    function popupContent(title,content){
        var popup = "<div class='panel panel-default'>";
        popup += "<div class='panel-heading'><h6 class='panel-title'><i class='icon-accessibility'></i><b><u>"+title+"</u></b></h6></div>";
        popup += "<div class='panel-body'>";
        popup += "<table class='table table-bordered'>";
        for (var name in content) {
            if (name == 'image_link' || name == 'IMAGE_LINK' || name == 'foto' || name == 'FOTO') {
                  popup += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td><image class='img-responsive' src='" + content[name] + "' width='100'/></td></tr>";
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
    function popupContentAMP(title,content){
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

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
    }
    
    function clearMarkers() {
        setMapOnAll(null);
    }
    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    initMap();
    
    $( "#btn-map-filter" ).click(function(e) {
        alert( "Handler for .click() called." );
        var merk = $("select[name='merk']").val();
        var tipe = $("select[name='tipe']").val();
        var kode_provinsi = $("select[name='provinsi']").val();
        var kondisi = $("select[name='kondisi']").val();
        var urlmarker = rootURL+"/api/getampmap&merk="+merk+"&tipe="+tipe+"&kode_provinsi="+kode_provinsi+"&kondisi="+kondisi;
        console.log(urlmarker)
        deleteMarkers();
        ampMarker = getjson(urlmarker);
        setMarkers(map,ampMarker);
        
    });

}(jQuery, window, document));