
@extends('app_backend')
@section('content')
<style type="text/css">
  .gm-style-iw {
  width: 350px !important;
  top: 15px !important;
  left: 0px !important;
  background-color: #fff;
  box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
  border: 1px solid rgba(72, 181, 233, 0.6);
  border-radius: 2px 2px 10px 10px;
}
#iw-container {
  margin-bottom: 10px;
}
#iw-container .iw-title {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 22px;
  font-weight: 400;
  padding: 10px;
  background-color: #48b5e9;
  color: white;
  margin: 0;
  border-radius: 2px 2px 0 0;
}
#iw-container .iw-content {
  font-size: 13px;
  line-height: 18px;
  font-weight: 400;
  margin-right: 1px;
  padding: 15px 5px 20px 15px;
  max-height: 140px;
  max-width: 350px;
  width: 350px;
  overflow-y: auto;
  overflow-x: hidden;
}
.iw-content img {
  float: right;
  margin: 0 5px 5px 10px; 
}
.iw-subTitle {
  font-size: 16px;
  font-weight: 700;
  padding: 5px 0;
}
.iw-bottom-gradient {
  position: absolute;
  width: 326px;
  height: 25px;
  bottom: 10px;
  right: 18px;
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
}
</style>
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
                            <select name="kapasitas" class="form-control">
                              <option value="all">--Kapasitas--</option>
                              @foreach($kapasitas as $k => $v)
                              <option value="{{ $v->kapasitas }}">{{$v->kapasitas}}</option>
                              @endforeach
                            </select>  
                          </div>

                          <div class="col-md-2">
                            <select name="kondisi" class="form-control">
                              <option value="all">--Kondisi--</option>
                              <option value="1">Laik Operasi</option>
                              <option value="2">Tidak Laik</option>
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
    				                <table class="table table-amp">
    				                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th colspan="2">Tgl Sertifikat</th>
                                        <th></th>
                                    </tr>
    				                        <tr>
    				                            <th>Merk</th>
    				                            <th>Tipe</th>
    				                            <th>Tahun Buat</th>
    				                            <th>Perusahaan</th>
    				                            <th>Tgl Sertifikat Mulai</th>
                                        <th>Tgl Sertifikat Akhir</th>
                                        <th>Kondisi</th>
    				                        </tr>
    				                    </thead>

    				                    <tbody>

    				                    @foreach($amp as $k =>$va)
                                <?php
                                  $kondisi = ($va->kondisi == '1') ? 'Laik' : 'Tidak Laik';
                                  $merah = (date('Y-m-d') > $va->tgl_sertifikat_akhir) ? 'bg-warning':'';
                                ?>
    				                        <tr class="{{$merah}}">
    				                            <td class="merk">{{ $va->merk }}</td>
    				                            <td class="tipe">{{ $va->tipe }}</td>
    				                            <td class="tahun_buat">{{ $va->tahun_buat }}</td>
    				                            <td class="nama_perusahaan">{{ $va->nama_perusahaan }}</td>
                                        <td class="tgl_mulai">{{ $va->tgl_mulai }}</td>
                                        <td class="tgl_akhir">{{ $va->tgl_akhir }}</td>
    				                            <td class="kondisi">{{ $kondisi }}</td>
    				                        </tr>
    				                        
    				                    @endforeach 
                                <tr>
                                    <td><a href="{{ url('laporan/excel-amp') }}">
                                    <button class="btn btn-success">Cetak</button></a></td>
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
                                        <th>Perusahaan</th>
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
                                        <td>{{ $va->nama_perusahaan }}</td>
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