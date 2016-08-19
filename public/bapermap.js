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

        ampMarker = getjson(rootURL+"/api/getampmap&merk=all&kapasitas=all&kode_provinsi=all&kondisi=all");
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
        for (var i = 0; i < locations.length; i++){  
            var loan = locations[i]['kode_amp'];
            var lat = locations[i]['longtitude'];
            var long = locations[i]['latitude'];
            var add =  locations[i]['merk'];
            latlngset = new google.maps.LatLng(lat, long);
            marker = new google.maps.Marker({  
                map: map, title: locations[i]['nama_perusahaan'] , position: latlngset , html: popupContentAMP('',locations[i]) 
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
        var kondisi = "";
        popup += "<div class='panel-heading'><h6 class='panel-title'><i class='icon-accessibility'></i><b><u>"+title+"</u></b></h6></div>";
        popup += "<div class='panel-body'>";
        popup += "<table class='table table-bordered'>";

        if (content['kondisi'] == '1') { kondisi = 'Laik'} else { kondisi = 'Tidak Laik'};
        popup += "<tr><td><b>Kode Amp</b></td><td><b>:</b> </td><td>" + content['kode_amp'] + "</td></tr>";
        popup += "<tr><td><b>Merk</b></td><td><b>:</b> </td><td>" + content['merk'] + "</td></tr>";
        popup += "<tr><td><b>Tipe</b></td><td><b>:</b> </td><td>" + content['tipe'] + "</td></tr>";
        popup += "<tr><td><b>Tahun Buat</b></td><td><b>:</b> </td><td>" + content['tahun_buat'] + "</td></tr>";
        popup += "<tr><td><b>Kapasitas</b></td><td><b>:</b> </td><td>" + content['kapasitas'] + "</td></tr>";
        
        popup += "<tr><td><b>Provinsi</b></td><td><b>:</b> </td><td>" + content['nama_provinsi'] + "</td></tr>";
        popup += "<tr><td><b>Kabupaten</b></td><td><b>:</b> </td><td>" + content['nama_kabupaten'] + "</td></tr>";
        popup += "<tr><td><b>Perusahaan</b></td><td><b>:</b> </td><td>" + content['nama_perusahaan'] + "</td></tr>";
        popup += "<tr><td><b>Kondisi</b></td><td><b>:</b> </td><td>" + kondisi + "</td></tr>";
        popup += "<tr><td><b>Foto</b></td><td><b>:</b> </td><td><img class='img-responsive' width='100' src='" + content['foto'] + "' /></td></tr>";
        
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

    function makeTable(container, data) {
        var table = $("<table/>").addClass('CSSTableGenerator');
        $.each(data, function(rowIndex, r) {
            var row = $("<tr/>");
            $.each(r, function(colIndex, c) { 
                row.append($("<t"+(rowIndex == 0 ?  "h" : "d")+"/>").text(c));
            });
            table.append(row);
        });
        return container.append(table);
    }

    function appendTableColumn(table, rowData) {
        var lastRow = $('<tr/>').appendTo(table.find('tbody:last'));
        $.each(rowData, function(colIndex, c) { 
            lastRow.append($('<td/>').text(c));
        });
       
        return lastRow;
    }

    initMap();
    
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
                    row.append($("<th/>").text('Awal'));
                    row.append($("<th/>").text('Akhir'));
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