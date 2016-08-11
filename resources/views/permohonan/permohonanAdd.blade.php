@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Permohonan Pemeriksaan</h3>
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
                    <li class="active">Permohonan</li>
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
	                	<h6 class="panel-title"><i class="icon-menu"></i>Tambah Permohonan Pemeriksaan</h6>
	                	<a href="{{ url('permohonan/permohonan/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">
										
				        <div class="form-group">
							<label class="col-sm-2 control-label">No Permohonan:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control" name="no_permohonan" value="">
				            </div>
							
						</div>
						
				        <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Permohonan:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control datepicker" name="tanggal_permohonan" value="">
				            </div>
						</div>
							 
						<div class="form-group">
				            <label class="col-sm-2 control-label">Pemeriksaan Ulang:</label>
				            <div class="col-sm-10">
				            	
				            	<input type="checkbox" class="styled" name="pemeriksaan_ulang" value="1">
				            	
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Nama Perusahaan:</label>
				            <div class="col-sm-10">
				            	
				            	<select name="kode_perusahaan" class="form-control">
				            		<option value="0">-----</option>
				            		@foreach($perusahaan as $kp => $vp)
				            			<option value="{{$vp->kode_perusahaan}}">{{$vp->nama_perusahaan}}</option>
				            		@endforeach
				            	</select>
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Alamat Perusahaan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control alamat" name="alamat_perusahaan" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Telp/HP:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control telp" name="telp" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Nama Pemohon:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="nama_pemohon" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Jabatan Pemohon:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="jabatan" value="">
				            </div>
				        </div>
												
						<div class="form-group">
				            <label class="col-sm-2 control-label">Jenis Peralatan:</label>
				            <div class="col-sm-5">
				            	<select name="jenis_peralatan" class="form-control">
				            		<option value="-------">---------</option>
				            		
				            		<option value="amp">AMP</option>
				            		<option value="bp">Baching Plant</option>
				            		<option value="quary">Quary</option>
				            		
				            	</select>

				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode Peralatan:</label>
				            <div class="col-sm-5">
				            	<select name="kode_peralatan" class="form-control">
				            		<option value="0">-------</option>
				            		
				            	</select>
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Merk/Type:</label>
				            <div class="col-sm-5">
				            	<input type="text" class="form-control" name="merktype" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kapasitas:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kapasitas" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Tahun Pembuatan:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control" name="tahun_buat" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">No Register:</label>
				            <div class="col-sm-3">
				            	<input type="text" class="form-control" name="no_register" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Lokasi Saat Ini:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="lokasi" value="">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kondisi Saat Ini:</label>
				            <div class="col-sm-10">
				            
				            	<label>
				            		<input type="checkbox" class="styled" name="kondisi" value="1">
				            		Laik
				            	</label>
				            	<label>
				            		<input type="checkbox" class="styled" name="kondisi" value="2">Tidak Laik
				            	</label>
				            
				            </div>

				        </div>
				        
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('permohonan/permohonan/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop