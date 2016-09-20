@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Data AMP <small>----</small></h3>
                </div>
                <div id="reportrange" class="range">
                    <div class="visible-xs header-element-toggle">
                        <a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
                    </div>
                    <div class="date-range"></div>
                    <span class="label label-danger">9</span>
                </div>
            </div>
            <!-- /page header -->
@endsection
@section('breadcrumb')
            <!-- Breadcrumbs line -->
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="{{ url('home')}}">Home</a></li>
                    <li><a href="{{ url('master')}}">Forms</a></li>
                    <li class="active">Amp</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
			<form class="form-horizontal form-bordered" method="post" action="{{ url('master/amp/tambah') }}" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h6 class="panel-title"><i class="icon-menu"></i> Tambah AMP</h6>
	                	<a href="{{ url('master/amp/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode AMP:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control" readonly 
				            	name="kode_amp" value="{{$kode}}">
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Merk:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="merk">
				            </div>
				        </div>
						
				        <div class="form-group">
				            <label class="col-sm-2 control-label">Tipe:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tipe">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Tahun Buat:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tahun_buat">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kapasitas:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kapasitas">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Lokasi:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="lokasi">
				            </div>
				        </div>
											
						<div class="form-group">
							<label class="col-sm-2 control-label">Provinsi:</label>
							<div class="col-sm-10">
								<select class="form-control" name="kode_provinsi">
									<option value="">Nama Provinsi</option>
									@foreach($provinsi as $pk => $pv)
		                                <option value="{{ $pv->kode_provinsi }}">{{$pv->nama_provinsi}}</option>
		                            @endforeach 
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Kabupaten:</label>
							<div class="col-sm-10">
								<select class="form-control" name="kode_kabupaten">
									<option value="">Nama Kabupaten/Kota</option>
								</select>
							</div>
						</div>
						
						<!--<div class="form-group">
				            <label class="col-sm-2 control-label">Longtitude(X):</label>
				            <div class="col-sm-5">
				            	<input type="text" class="form-control" name="longtitude">
				            </div>
				            <div class="col-sm-2">
				            	<a class="btn btn-location btn-success"><i class="icon-location"></i></a>
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Latitude(Y):</label>
				            <div class="col-sm-5">
				            	<input type="text" class="form-control" name="latitude">
				            </div>
				        </div>-->
											
						<div class="form-group">
							<label class="col-sm-2 control-label">Perusahaan:</label>
							<div class="col-sm-10">
								<select class="form-control" name="kode_perusahaan">
									<option value="">Nama Perusahaan</option>
									@foreach($perusahaan as $pk => $pv)
		                                <option value="{{ $pv->kode_perusahaan }}">{{$pv->nama_perusahaan}}</option>
		                            @endforeach
								</select>
							</div>
						</div>
						
						
						
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('master/amp/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop