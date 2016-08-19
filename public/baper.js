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


    $( ".btn-location" ).click(function(e) { 
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position);
                $("input[name='latitude']").val(position.coords.latitude);
                $("input[name='longtitude']").val(position.coords.longitude);
            });
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
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
                $('select[name="kabupaten"]').html('');
                $('select[name="kabupaten"]').append($("<option></option>")
                .attr("value",'all')
                .text("--------------")); 
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


