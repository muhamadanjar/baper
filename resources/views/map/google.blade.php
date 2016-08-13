
@extends('app_backend')
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
                              <option value="all">--Provinsi--</option>
                              @foreach($provinsi as $pk => $pv)
                                <option value="{{ $pv->kode_provinsi }}">{{$pv->nama_provinsi}}</option>
                              @endforeach 
                            </select>  
                          </div>
                          <div class="col-md-2">
                            <select name="kabupaten" class="form-control">
                              <option value="all">--Kabupaten--</option>
                            </select>  
                          </div>
                          <div class="col-md-2">
                            <select name="merk" class="form-control">
                              <option value="all">--Merk--</option>
                              @foreach($merk as $k => $v)
                              <option value="{{ $v->merk }}">{{$v->merk}}</option>
                              @endforeach
                            </select>  
                          </div>
                          <div class="col-md-2">
                            <select name="tipe" class="form-control">
                              <option value="all">--Tipe--</option>
                              @foreach($tipe as $k => $v)
                              <option value="{{ $v->tipe }}">{{$v->tipe}}</option>
                              @endforeach
                            </select>  
                          </div>

                          <div class="col-md-2">
                            <select name="kondisi" class="form-control">
                              <option value="all">--Kondisi--</option>
                              <option value="1">Baik</option>
                              <option value="2">Rusak</option>
                            </select>  
                          </div>
                          <div class="col-md-1">
                            <button class="btn btn-success" id="btn-map-filter">Perbaharui</button> 
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
                                <?php
                                  $kondisi = ($va->kondisi == '1') ? 'Baik' : 'Rusak' ;
                                ?>
    				                        <tr>
    				                            <td>{{ $va->kode_amp }}</td>
    				                            <td>{{ $va->merk }}</td>
    				                            <td>{{ $va->tipe }}</td>
    				                            <td>{{ $va->tahun_buat }}</td>
    				                            <td>{{ $va->kapasitas }}</td>
    				                            <td>{{ $va->lokasi }}</td>
    				                            <td>{{ $kondisi }}</td>
    				                        </tr>
    				                        
    				                    @endforeach 
                                <tr>
                                    <td><button>Cetak</button></td>
                                </tr>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApmd32zjXiNfF1dLG44UzwsSOSou0O00k"
    async defer></script>
@section('map_jquery')

<script type="text/javascript" src="{{ asset('bapermap.js') }}"></script>
@endsection
@stop