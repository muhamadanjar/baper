$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
});
var rootURL = 'http://'+window.location.hostname+':'+window.location.port;
$.extend({
    getValues: function(url) {
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

(function($, window, document){
    $('.formConfirm').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html('<h6>'+msg+'</h6>')
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
    });

    $('#formConfirm').on('click', '#frm_submit', function(e) {
        var id = $(this).attr('data-form');
        console.log(id);
        $(id).submit();
    });
  

}(jQuery, window, document));


(function($, window, document){
   
    $('.selectme input:checkbox').click(function() {
        $('.selectme input:checkbox').not(this).prop('checked', false);
    });

    $('.jenis_peralatan input:checkbox').click(function() {
        $('.jenis_peralatan input:checkbox').not(this).prop('checked', false);
    });


    $('.pelat_pemisah input:checkbox').click(function(e) {
        $('.pelat_pemisah').find('td span').removeClass( "checked" );
        $('.pelat_pemisah').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.dinding_bin input:checkbox').click(function(e) {
        $('.dinding_bin').find('td span').removeClass( "checked" );
        $('.dinding_bin').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.bukaan_pintu input:checkbox').click(function(e) {
        $('.bukaan_pintu').find('td span').removeClass( "checked" );
        $('.bukaan_pintu').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.pintu_pengatur input:checkbox').click(function(e) {
        $('.pintu_pengatur').find('td span').removeClass( "checked" );
        $('.pintu_pengatur').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.skala_meter input:checkbox').click(function(e) {
        $('.skala_meter').find('td span').removeClass( "checked" );
        $('.skala_meter').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.motor_penggerak input:checkbox').click(function(e) {
        $('.motor_penggerak').find('td span').removeClass( "checked" );
        $('.motor_penggerak').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.penggetar input:checkbox').click(function(e) {
        $('.penggetar').find('td span').removeClass( "checked" );
        $('.penggetar').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.pengatur_kecepatan input:checkbox').click(function(e) {
        $('.pengatur_kecepatan').find('td span').removeClass( "checked" );
        $('.pengatur_kecepatan').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.konstruksi_pendukung input:checkbox').click(function(e) {
        $('.konstruksi_pendukung').find('td span').removeClass( "checked" );
        $('.konstruksi_pendukung').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.pelindung_bin input:checkbox').click(function(e) {
        $('.pelindung_bin').find('td span').removeClass( "checked" );
        $('.pelindung_bin').find('td input:checkbox').not(this).prop('checked', false);
    });
    
    
    




    $('.myCheckbox__').click(function() {
        $(this).siblings('input:checkbox').prop('checked', false);
    });





    $('select[name="kode_perusahaan"]').change(function() {
        var kode_perusahaan = $(this).val();

        $.ajax({
            url: rootURL+"/api/getperusahaan-"+kode_perusahaan,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                
                var telp = $('.telp');
                var alamat = $('.alamat');
                if( telp.length > 0 ){
                    telp.val(data.telp);
                }

                if( alamat.length > 0 ){
                    alamat.val(data.alamat);
                }
            }
        });
        
    });

    $('select[name="jenis_peralatan"]').change(function() {
        var jenis_peralatan = $(this).val();
        $.ajax({
            url: rootURL+"/api/getkodeperalatan-"+jenis_peralatan,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                $('select[name="kode_peralatan"]').html('');
                $.each(data, function(key, value) {
                   
                    $('select[name="kode_peralatan"]').append($("<option></option>")
                    .attr("value",value.kode_amp)
                    .text(value.kode_amp+" - "+value.merk+"/"+value.tipe)); 
                });
                
                
            }
        });
    });

    $('select[name="kode_peralatan"]').change(function() {
        var jenis_peralatan = $(this).val();
        $.ajax({
            url: rootURL+"/api/getamp-"+jenis_peralatan,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                console.log(data);
                var merk = $('input[name="merktype"]');
                
                var tahun_buat = $('input[name="tahun_buat"]');
                var kapasitas = $('input[name="kapasitas"]');
                var lokasi = $('input[name="lokasi"]');

                if( merk.length > 0 ){
                    merk.val(data.merk +'/' + data.tipe);
                }

                if( tahun_buat.length > 0 ){
                    tahun_buat.val(data.tahun_buat);
                }

                if( kapasitas.length > 0 ){
                    kapasitas.val(data.kapasitas);
                }

                
                
            }
        });
    });

    $('select[name="provinsi"]').change(function() {
        $.ajax({
            url: rootURL+"/api/getkab-"+$(this).val(),
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                
                $.each(data, function(key, value) {
                    console.log(value);
                    $('select[name="kabupaten"]').append($("<option></option>")
                    .attr("value",value.kode_kabupaten)
                    .text(value.kode_kabupaten+" - "+value.nama_kabupaten)); 
                });
            }
        });
    });

   
    

  
    

}(jQuery, window, document));


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