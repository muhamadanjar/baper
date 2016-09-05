///MAp Google
(function($, window, document){
    var map,mapbp,mapquary;
    var infowindow;
    var ampMarker,bpMarker,quaryMarker;
    var marker;var markers = [];
    function initMap() {
        infowindow = new google.maps.InfoWindow({
            maxWidth: 350
        });
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
        var url_amp = rootURL+"/api/getampmap&merk=all&kapasitas=all&kode_provinsi=all&kondisi=all";
        console.log(url_amp);
        ampMarker = getjson(url_amp);
        setMarkers(map,ampMarker);
        /*bpMarker = getjson('http://localhost/baper/public/api/getbp');
        setMarkers(mapbp,bpMarker);
        quaryMarker = getjson('http://localhost/baper/public/api/getquary');
        setMarkers(mapquary,quaryMarker);*/

        google.maps.event.addListener(infowindow, 'domready', function() {
            var iwOuter = $('.gm-style-iw');

            var iwBackground = iwOuter.prev();

            iwBackground.children(':nth-child(2)').css({'display' : 'none'});

            iwBackground.children(':nth-child(4)').css({'display' : 'none'});

            iwOuter.parent().parent().css({left: '115px'});

            iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

            iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

            iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

            var iwCloseBtn = iwOuter.next();

            iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

            if($('.iw-content').height() < 140){
              $('.iw-bottom-gradient').css({display: 'none'});
            }

            iwCloseBtn.mouseout(function(){
              $(this).css({opacity: '1'});
            });
        });


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

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude; 
    }

    function setMarkers(map,locations){
        //console.log(locations);
        for (var i = 0; i < locations.length; i++){  
            var loan = locations[i]['kode_amp'];
            var lat = (locations[i]['latitude']);
            var long = (locations[i]['longtitude']);
            var add =  locations[i]['merk'];
            latlngset = new google.maps.LatLng(lat, long);
            marker = new google.maps.Marker({  
                map: map, title: locations[i]['nama_perusahaan'] , 
                position: latlngset , html: popupContentAMP('',locations[i]) 
            });
            markers.push(marker);
            map.setCenter(marker.getPosition());
          
            google.maps.event.addListener(marker, "click", function () {
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
        
        var kondisi = "";
        var content_ = '<div id="iw-container">';
            content_ += '<div class="iw-title">AMP</div>';
            content_ += '<div class="iw-content">';
            content_ += '<table class="table table-bordered">';
            if (content['kondisi'] == '1') { kondisi = 'Laik'} else { kondisi = 'Tidak Laik'};
            content_ += '<tr><td><b>Kode Amp</b></td><td><b>:</b> </td><td>' + content['kode_amp'] + '</td></tr>';
            content_ += '<tr><td><b>Merk</b></td><td><b>:</b> </td><td>' + content['merk'] + '</td></tr>';
            content_ += '<tr><td><b>Tipe</b></td><td><b>:</b> </td><td>' + content['tipe'] + '</td></tr>';
            content_ += '<tr><td><b>Tahun Buat</b></td><td><b>:</b> </td><td>' + content['tahun_buat'] + '</td></tr>';
            content_ += '<tr><td><b>Kapasitas</b></td><td><b>:</b> </td><td>' + content['kapasitas'] + '</td></tr>';
                        
            content_ += '<tr><td><b>Provinsi</b></td><td><b>:</b> </td><td>' + content['nama_provinsi'] + '</td></tr>';
            content_ += '<tr><td><b>Kabupaten</b></td><td><b>:</b> </td><td>' + content['nama_kabupaten'] + '</td></tr>';
            content_ += '<tr><td><b>Perusahaan</b></td><td><b>:</b> </td><td>' + content['nama_perusahaan'] + '</td></tr>';
            content_ += '<tr><td><b>Kondisi</b></td><td><b>:</b> </td><td>' + kondisi + '</td></tr>';
            content_ += '<tr><td><b>Foto</b></td><td><b>:</b> </td><td><img class="img-responsive" width="100" src="' + content['foto'] + '" /></td></tr>';
            content_ += '</table>';

            content_ += '</div>';
            content_ += '<div class="iw-bottom-gradient"></div>';
            content_ += '</div>';

        return content_;
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

    
    google.maps.event.addDomListener(window, 'load', initMap);
    //initMap();
    
    $( "#btn-map-filter" ).click(function(e) {
        alert( "Handler for .click() called." );
        var merk = $("select[name='merk']").val();
        var kapasitas = $("select[name='kapasitas']").val();
        var kode_provinsi = $("select[name='provinsi']").val();
        var kondisi = $("select[name='kondisi']").val();
        var urlmarker = rootURL+"/api/getampmap&merk="+merk+"&kapasitas="+kapasitas+"&kode_provinsi="+kode_provinsi+"&kondisi="+kondisi;
        console.log(urlmarker);
        var table = $('.table-amp');
        $.ajax({
            url: urlmarker,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                table.html('');
                var row = $("<tr/>");
                    
                    row.append($("<th/>").text('Merk'));
                    row.append($("<th/>").text('Tipe'));
                    row.append($("<th/>").text('Tahun Buat'));
                    row.append($("<th/>").text('Perusahaan'));
                    row.append($("<th/>").text('Tgl Sertifikat Awal'));
                    row.append($("<th/>").text('Tgl Sertifikat Akhir'));
                    row.append($("<th/>").text('Kondisi'));
                    table.append(row);
                $.each(data, function(rowIndex, r) {
                    var row = $("<tr/>");
                    var kondisi = '';
                    
                    if (r.kondisi == '1') { kondisi = 'Laik'}else{ kondisi = 'Tidak Laik'};
                    row.append($("<td/>").text(r.merk));
                    row.append($("<td/>").text(r.tipe));
                    row.append($("<td/>").text(r.tahun_buat));
                    row.append($("<td/>").text(r.nama_perusahaan));
                    row.append($("<td/>").text(r.tgl_sertifikat_awal));
                    row.append($("<td/>").text(r.tgl_sertifikat_akhir));
                    row.append($("<td/>").text(kondisi));
                    table.append(row);
                });
                var lastRow = $('<tr/>').appendTo(table.find('tbody:last'));
                    
                    lastRow.append($('<a/>').attr('class','btn btn-success')
                        .attr('href','/laporan/excel-amp').text('Cetak'));

                
            }
        });
        
        deleteMarkers();
        ampMarker = getjson(urlmarker);
        setMarkers(map,ampMarker);
        
    });

}(jQuery, window, document));