
@extends('app_frontend')
@section('content')

<!-- Page tabs -->
            <div class="tabbable page-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#amp" data-toggle="tab"><i class="icon-table2"></i> AMP</a></li>
                    <li><a href="#bp" data-toggle="tab"><i class="icon-checkbox-partial"></i> BP</a></li>
                    <li><a href="#quary" data-toggle="tab"><i class="icon-hammer"></i> Quary</a></li>
                    
                </ul>
                <div class="tab-content">

                	<!-- First tab -->
                    <div class="tab-pane active fade in" id="amp">
                        <div class="row">
                          <div class="col-md-2">
                            <select name="provinsi" class="form-control">
                              <option>--Provinsi--</option>
                              @foreach($provinsi as $pk => $pv)
                                <option value="{{ $pv->kode_provinsi }}">{{$pv->nama_provinsi}}</option>
                              @endforeach 
                            </select>  
                          </div>
                          <div class="col-md-2">
                            <select name="kabupaten" class="form-control">
                              <option>--Kabupaten--</option>
                            </select>  
                          </div>
                          <div class="col-md-2">
                            <select name="kondisi" class="form-control">
                              <option value="">--Kondisi--</option>
                              <option value="baik">Baik</option>
                              <option value="rusak">Kondisi</option>
                            </select>  
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12"><div id="map"></div></div>
                            
                        </div>
				                
    				            <!-- Default table -->
    			              <div class="panel panel-default">
    			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Tabel AMP</h6></div>
    			                <div class="table-responsive">
    				                <table class="table">
    				                    <thead>
    				                        <tr>
    				                            <th>Kode AMP</th>
    				                            <th>Merk</th>
    				                            <th>Tipe</th>
    				                            <th>Tahun Buat</th>
    				                            <th>Kapasitas</th>
    				                            <th>Lokasi</th>
    				                            <th>Kondisi</th>
    				                        </tr>
    				                    </thead>

    				                    <tbody>

    				                    @foreach($amp as $k =>$va)
    				                        <tr>
    				                            <td>{{ $va->kode_amp }}</td>
    				                            <td>{{ $va->merk }}</td>
    				                            <td>{{ $va->tipe }}</td>
    				                            <td>{{ $va->tahun_buat }}</td>
    				                            <td>{{ $va->kapasitas }}</td>
    				                            <td>{{ $va->lokasi }}</td>
    				                            <td>{{ $va->kondisi }}</td>
    				                        </tr>
    				                        
    				                    @endforeach 
    				                    </tbody>
    				                </table>
    			                </div>
    				            </div>
                        <!-- /default table -->
                    </div>
                  <!-- /first tab -->

                	<!-- Second tab -->
                    <div class="tab-pane fade" id="bp">
                    	<div id="map-bp"></div>

                    <!-- Default table -->
                      <div class="panel panel-default">
                          <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Tabel BP</h6></div>
                          <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode AMP</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Tahun Buat</th>
                                        <th>Kapasitas</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                @foreach($bp as $k =>$va)
                                    <tr>
                                        <td>{{ $va->kode_bp }}</td>
                                        <td>{{ $va->merk }}</td>
                                        <td>{{ $va->tipe }}</td>
                                        <td>{{ $va->tahun_buat }}</td>
                                        <td>{{ $va->kapasitas }}</td>
                                        <td>{{ $va->lokasi }}</td>
                                        <td>{{ $va->kondisi }}</td>
                                    </tr>
                                    
                                @endforeach 
                                </tbody>
                            </table>
                          </div>
                      </div>
                    <!-- /default table -->
				    	

                    </div>
                    <!-- /second tab -->

                	<!-- Third tab -->
                    <div class="tab-pane fade" id="quary">
                    	<div id="map-quary"></div>
				    	        <!-- Default table -->
                      <div class="panel panel-default">
                          <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Tabel Quary</h6></div>
                          <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode Quary</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Tahun Buat</th>
                                        <th>Kapasitas</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                @foreach($quary as $k =>$va)
                                    <tr>
                                        <td>{{ $va->kode_quary }}</td>
                                        <td>{{ $va->merk }}</td>
                                        <td>{{ $va->tipe }}</td>
                                        <td>{{ $va->tahun_buat }}</td>
                                        <td>{{ $va->kapasitas }}</td>
                                        <td>{{ $va->lokasi }}</td>
                                        <td>{{ $va->kondisi }}</td>
                                    </tr>
                                    
                                @endforeach 
                                </tbody>
                            </table>
                          </div>
                      </div>
                      <!-- /default table -->

                    </div>
                    <!-- /third tab -->

                </div>

            </div>
            <!-- /page tabs -->

<style type="text/css">
	html, body, #map,#map-bp,#map-quary { margin: 0; padding: 0; height: 500px }
</style>

<script>
      var map,mapbp,mapquary;
      var infowindow;
      var ampMarker,bpMarker,quaryMarker;
      var marker;
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

        ampMarker = getjson('http://localhost/baper/public/api/getamp-null');
        setMarkers(map,ampMarker);
        bpMarker = getjson('http://localhost/baper/public/api/getbp');
        setMarkers(mapbp,bpMarker);
        quaryMarker = getjson('http://localhost/baper/public/api/getquary');
        setMarkers(mapquary,quaryMarker);
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
          console.log(locations);
          var loan = locations[i]['kode_amp'];
          var lat = locations[i]['longtitude'];
          var long = locations[i]['latitude'];
          var add =  locations[i]['merk'];
          latlngset = new google.maps.LatLng(lat, long);
          marker = new google.maps.Marker({  
            map: map, title: loan , position: latlngset , html: popupContent('',locations[i]) 
          });
          map.setCenter(marker.getPosition());
          //marker.content = "<h3>Loan Number: " + loan +  '</h3>' + "Address: " + add;
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApmd32zjXiNfF1dLG44UzwsSOSou0O00k&callback=initMap"
    async defer></script>
@stop