$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
});
var rootURL = 'http://'+window.location.hostname+':'+window.location.port;
var monthNames = [
  "January", "February", "March",
  "April", "May", "June", "July",
  "August", "September", "October",
  "November", "December"
];
function numeralsOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
    ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Hanya Nomor yang bisa di input pada kolom ini.");
            return false;
        }
    return true;
}

function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        alert("Enter letters only.");
        return false;
    }
    return true;
}

function ynOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if (charCode > 31 && charCode != 78 && charCode != 89 && charCode != 110 && charCode != 121) {
    alert("Enter \"Y\" or \"N\" only.");
    return false;
    }
    return true;
}
    function status_permohonan(id=''){
        if(id == '1'){
            isi = 'Baik';
        }else if(id == '2'){
            isi = 'Rusak Lengkap';
        }else if(id == '3'){
            isi = 'Tidak Lengkap';
        }else if(id == '4'){
            isi = 'Tidak Ada';
        }else{
            isi = 'Tidak Digunakan';
        }

        return isi;
    }

    function makeTable_origin(container, data) {
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

    function makeTablePemeriksaanTahap1(container, data) {
        var table = $("<table/>").addClass('table table-striped table-bordered');
        var id = '';
        $.each(data, function(rowIndex, r) {
            var row = $("<tr/>");
            $.each(r, function(colIndex, c) { 
                if (rowIndex == 0) {
                    row.append($("<th/>").text(c));    
                }else{
                    if (colIndex == 'id_periksa') {
                        row.append( 
                            $("<td/>").append( 
                                $("<a>").attr('href',rootURL+'/amp/listpemeriksaanamp/ubah-'+c).append( 
                                    $("<b>").text('Link') 
                                )
                            ) 
                        );
                    }else if (colIndex == 'kesimpulan') {
                        row.append($("<td/>").append( $("<span>").attr("class","label label-danger").text(status_permohonan(c)) ));    
                    }else if (colIndex == 'tgl_periksa') {
                        var date = new Date(c);
                        var day = date.getDate();
                        var monthIndex = date.getMonth();
                        var year = date.getFullYear();
                        row.append($("<td/>").text(day + ' ' + monthNames[monthIndex] + ' ' + year));
                    }else{
                        row.append($("<td/>").text(c));
                    }

                }
                
            });
            table.append(row);
        });
        return container.append(table);
    }

    function makeTablePemeriksaanTahap2(container, data) {
        var table = $("<table/>").addClass('table table-striped table-bordered');
        var id = '';
        $.each(data, function(rowIndex, r) {
            var row = $("<tr/>");
            $.each(r, function(colIndex, c) { 
                if (rowIndex == 0) {
                    row.append($("<th/>").text(c));    
                }else{
                    if (colIndex == 'id_periksa') {
                        row.append( 
                            $("<td/>").append( 
                                $("<a>").attr('href',rootURL+'/amp/listpemeriksaanamp2/ubah-'+c).append( 
                                    $("<b>").text('Link') 
                                )
                            ) 
                        );
                    }else if (colIndex == 'kesimpulan') {
                        row.append($("<td/>").append( $("<span>").attr("class","label label-danger").text(status_permohonan(c)) ));    
                    }else if (colIndex == 'tgl_periksa') {
                        var date = new Date(c);
                        var day = date.getDate();
                        var monthIndex = date.getMonth();
                        var year = date.getFullYear();
                        row.append($("<td/>").text(day + ' ' + monthNames[monthIndex] + ' ' + year));
                    }else{
                        row.append($("<td/>").text(c));
                    }

                }
                
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
    function getTableData(table) {
        var data = [];
        table.find('tr').each(function (rowIndex, r) {
            var cols = [];
            $(this).find('th,td').each(function (colIndex, c) {
                cols.push(c.textContent);
            });
            data.push(cols);
        });
        return data;
    }
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

    $('.formHistoryPemeriksaan').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        var tahap = el.attr('data-tahap');
        var tahaptext = el.attr('data-tahaptext');
        var kode_periksa = el.attr('data-kodeperiksa');
        var namaperusahaan = el.attr('data-namaperusahaan');
        var namapemohon = el.attr('data-namapemohon');
        var statusterakhir = el.attr('data-statusterakhir');
        var jenisperalatan = el.attr('data-jenisperalatan');
        var url;
        if (tahap == '1') {
            url = rootURL+"/api/getpemeriksaan_satu_amp-"+kode_periksa;
        } else {
            url = rootURL+"/api/getpemeriksaan_dua_amp-"+kode_periksa;
        }
        
        console.log(url);
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                $('.table-pemeriksaan').html('');
                if (tahap == 1) {
                    makeTablePemeriksaanTahap1($('.table-pemeriksaan'),data)
                } else {
                    makeTablePemeriksaanTahap2($('.table-pemeriksaan'),data)
                }
                
                
            }
        });
        $('#pemeriksaan-modal')
        .find('#frm_body').html('<h6>'+msg+'</h6>')
        .end().find('input[name="kode_periksa"]').val(kode_periksa)
        .end().find('#frm_title').html(title)
        .end().find('#namaperusahaan').html(namaperusahaan)
        .end().find('#namapemohon').html(namapemohon)
        .end().find('#kodeperiksa').html(kode_periksa)
        .end().find('.statusterakhir').text(statusterakhir)
        .end().find('#jenisperalatan').text(jenisperalatan)
        .end().find('.tahap').text(tahaptext)
        .end().find('input[name="tahap"]').val(tahap)
        .end().modal('show');
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

    $('.1_check input:checkbox').click(function(e) {
        $('.1_check').find('td span').removeClass( "checked" );
        $('.1_check').find('td input:checkbox').not(this).prop('checked', false);
    });
    
    $('.2_check input:checkbox').click(function(e) {
        $('.2_check').find('td span').removeClass( "checked" );
        $('.2_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.3_check input:checkbox').click(function(e) {
        $('.3_check').find('td span').removeClass( "checked" );
        $('.3_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.4_check input:checkbox').click(function(e) {
        $('.4_check').find('td span').removeClass( "checked" );
        $('.4_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.5_check input:checkbox').click(function(e) {
        $('.5_check').find('td span').removeClass( "checked" );
        $('.5_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.6_check input:checkbox').click(function(e) {
        $('.6_check').find('td span').removeClass( "checked" );
        $('.6_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.7_check input:checkbox').click(function(e) {
        $('.7_check').find('td span').removeClass( "checked" );
        $('.7_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.8_check input:checkbox').click(function(e) {
        $('.8_check').find('td span').removeClass( "checked" );
        $('.8_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.9_check input:checkbox').click(function(e) {
        $('.9_check').find('td span').removeClass( "checked" );
        $('.9_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.10_check input:checkbox').click(function(e) {
        $('.10_check').find('td span').removeClass( "checked" );
        $('.10_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.11_check input:checkbox').click(function(e) {
        $('.11_check').find('td span').removeClass( "checked" );
        $('.11_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.12_check input:checkbox').click(function(e) {
        $('.12_check').find('td span').removeClass( "checked" );
        $('.12_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.13_check input:checkbox').click(function(e) {
        $('.13_check').find('td span').removeClass( "checked" );
        $('.13_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.14_check input:checkbox').click(function(e) {
        $('.14_check').find('td span').removeClass( "checked" );
        $('.14_check').find('td input:checkbox').not(this).prop('checked', false);
    });
    $('.15_check input:checkbox').click(function(e) {
        $('.15_check').find('td span').removeClass( "checked" );
        $('.15_check').find('td input:checkbox').not(this).prop('checked', false);
    });

    $('.kesimpulan_check input:checkbox').click(function(e) {
        $('.kesimpulan_check').find('td span').removeClass( "checked" );
        $('.kesimpulan_check').find('td input:checkbox').not(this).prop('checked', false);
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
        $("select[name='jenis_peralatan']").first().focus();
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
        var kode_perusahaan = $('select[name="kode_perusahaan"]').val();
        $.ajax({
            url: rootURL+"/api/getkodeperalatan-"+jenis_peralatan+"-"+kode_perusahaan,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                $('select[name="kode_peralatan"]').html('');
                $('select[name="kode_peralatan"]').append($("<option></option>")
                    .attr("value",'0')
                    .text('-------------')); 
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
                var kondisi = $('input[name="kondisi"]');
                if( merk.length > 0 ){
                    merk.val(data.merk +'/' + data.tipe);
                }

                if( tahun_buat.length > 0 ){
                    tahun_buat.val(data.tahun_buat);
                }

                if( kapasitas.length > 0 ){
                    kapasitas.val(data.kapasitas);
                }
                
                if (data.kondisi == '1') {
                    $("#laik_check").prop("checked",true);
                    $("#laik_check").closest('span').addClass('checked')
                }else{
                    $("#tlaik_check").prop("checked",true);
                    $("#tlaik_check").closest('span').addClass('checked')
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

    $('select[name="kode_provinsi"]').change(function() {
        $.ajax({
            url: rootURL+"/api/getkab-"+$(this).val(),
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                $('select[name="kode_kabupaten"]').html('');
                $('select[name="kode_kabupaten"]').append($("<option></option>")
                .attr("value",'all')
                .text("--------------")); 
                $.each(data, function(key, value) {
                    console.log(value);
                    $('select[name="kode_kabupaten"]').append($("<option></option>")
                    .attr("value",value.kode_kabupaten)
                    .text(value.kode_kabupaten+" - "+value.nama_kabupaten)); 
                });
            }
        });
    });

   
    

  
    

}(jQuery, window, document));


