@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Data BP</h3>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="forms.html">Forms</a></li>
                    <li class="active">BP</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
			<form class="form-horizontal form-bordered" method="post" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h6 class="panel-title"><i class="icon-menu"></i> Ubah BP</h6>
	                	<a href="{{ url('master/bp/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode BP:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kode_bp" value="{{ $bp->kode_bp}}">
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Merk:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="merk" value="{{ $bp->merk }}">
				            </div>
				        </div>
				        
						<div class="form-group">
				            <label class="col-sm-2 control-label">Tipe:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tipe" value="{{ $bp->tipe }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Tahun Buat:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tahun_buat" value="{{ $bp->tahun_buat }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kapasitas:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kapasitas" value="{{ $bp->kapasitas }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Lokasi:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="lokasi" value="{{ $bp->lokasi }}">
				            </div>
				        </div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Provinsi:</label>
							<div class="col-sm-10">
								<select class="form-control" name="kode_provinsi">
									<option value="">Nama Provinsi</option>
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
												
						<div class="form-group">
				            <label class="col-sm-2 control-label">Longtitude:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="longtitude" value="{{ $bp->longtitude }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Latitude:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="latitude" value="{{ $bp->latitude }}">
				            </div>
				        </div>
											
						<div class="form-group">
							<label class="col-sm-2 control-label">Perusahaan:</label>
							<div class="col-sm-10">
								<select class="form-control" name="kode_perusahaan">
									<option value="">Nama Perusahaan</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kondisi:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kondisi" value="{{ $bp->kondisi }}">
				            </div>
				        </div>
						
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('master/bp/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop