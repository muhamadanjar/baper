@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Data Permohonan Pemeriksaan</h3>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms</a></li>
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
	                	<h6 class="panel-title"><i class="icon-menu"></i>Ubah Permohonan Pemeriksaan</h6>
	                	<a href="{{ url('permohonan/permohonan/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">
										
				        <div class="form-group">
							<label class="col-sm-2 control-label">No Permohonan:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control" name="no_permohonan" value="{{ $permohonan->no_permohonan }}" readonly maxlength="11">
				            </div>
				            <label class="col-sm-2 control-label">No Surat:</label>
				            <div class="col-sm-4">
				            	<input type="text" class="form-control" name="no_surat" value="{{ $permohonan->no_surat }}" maxlength="30">
				            </div>
							
						</div>
						
				        <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Surat:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control datepicker" name="tanggal_permohonan" value="{{ $permohonan->tanggal_permohonan }}">
				            </div>
				            <label class="col-sm-2 control-label">Tanggal Disposisi:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control datepicker" name="tgl_surat"  value="{{ $permohonan->tgl_surat }}">
				            </div>
						</div>
							 
						<div class="form-group">
				            <label class="col-sm-2 control-label">Pemeriksaan Ulang:</label>
				            <div class="col-sm-10">
				            	@if($permohonan->pemeriksaan_ulang == 1)
				            	<input type="checkbox" class="styled" name="pemeriksaan_ulang" value="1" checked="checked">
				            	@else
				            	<input type="checkbox" class="styled" name="pemeriksaan_ulang" value="1">
				            	@endif
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Nama Perusahaan:</label>
				            <div class="col-sm-10">
				            	
				            	<select name="kode_perusahaan" class="form-control">
				            		<option value="0">-----</option>
				            		@foreach($perusahaan as $kp => $vp)
				            			
				            			@if($permohonan->kode_perusahaan == $vp->kode_perusahaan)
                                        <option value="{{$vp->kode_perusahaan}}" selected="selected">{{$vp->nama_perusahaan}}</option>
                                        @else
				            			<option value="{{$vp->kode_perusahaan}}">{{$vp->nama_perusahaan}}</option>
				            			@endif
				            		@endforeach
				            	</select>
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Alamat Perusahaan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control alamat" name="alamat_perusahaan" value="{{ $permohonan->alamat }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Telp/HP:</label>
				            <div class="col-sm-5">
				            	<input type="text" class="form-control telp" name="telp" value="{{ $permohonan->telp }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Nama Pemohon:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="nama_pemohon" value="{{ $permohonan->nama_pemohon }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Jabatan Pemohon:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="jabatan" value="{{ $permohonan->jabatan }}">
				            </div>
				        </div>
												
						<div class="form-group">
				            <label class="col-sm-2 control-label">Jenis Peralatan:</label>
				            <div class="col-sm-5">
				            	<select name="jenis_peralatan" class="form-control">
				            		<option value="-------">---------</option>
				            		@if($permohonan->jenis_peralatan =='amp')
				            		<option value="amp" selected="selected">AMP</option>
				            		<option value="bp">Baching Plant</option>
				            		<option value="quary">Quary</option>
				            		@elseif($permohonan->jenis_peralatan =='bp')
				            		<option value="amp">AMP</option>
				            		<option value="bp" selected="selected">Baching Plant</option>
				            		<option value="quary">Quary</option>
				            		@elseif($permohonan->jenis_peralatan =='quary')
				            		<option value="amp">AMP</option>
				            		<option value="bp">Baching Plant</option>
				            		<option value="quary" selected="selected">Quary</option>
				            		@else
				            		<option value="amp">AMP</option>
				            		<option value="bp">Baching Plant</option>
				            		<option value="quary">Quary</option>
				            		@endif
				            	</select>
				            	
				            	
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode Peralatan:</label>
				            <div class="col-sm-5">
				            	<select name="kode_peralatan" class="form-control">
				            		<option value="0">-------</option>
				            		@foreach($kode_peralatan as $kv => $av)
				            			@if($permohonan->kode_peralatan == $av->kode_amp)
				            			<option value="{{ $av->kode_amp }}" selected="selected">{{$av->merk}}/{{$av->tipe}}</option>
				            			@else
				            			<option value="{{ $av->kode_amp }}">{{$av->merk}}/{{$av->tipe}}</option>
				            			@endif
				            		@endforeach
				            	</select>
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Merk/Type:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="merktype" value="{{ $permohonan->merk  }}/{{ $permohonan->tipe  }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kapasitas:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kapasitas" value="{{ $permohonan->kapasitas }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Tahun Pembuatan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tahun_buat" value="{{ $permohonan->tahun_buat }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">No Sertifikat:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="no_register" value="{{ $permohonan->no_register }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Lokasi Saat Ini:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="lokasi" value="{{ $permohonan->lokasi }}">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kondisi Saat Ini:</label>
				            <div class="col-sm-10">
				            @if($permohonan->kondisi == 1)
				            	<label>
				            		<input type="checkbox" id="laik_check" class="styled" name="kondisi" value="1" checked="checked">
				            		Laik
				            	</label>
				            	<label>
				            		<input type="checkbox" id="tlaik_check" class="styled" name="kondisi" value="2">Tidak Laik
				            	</label>
				            @elseif($permohonan->kondisi == 2)
				            	<label>
				            		<input type="checkbox" id="laik_check" class="styled" name="kondisi" value="1">
				            		Laik
				            	</label>
				            	<label>
				            		<input type="checkbox" id="tlaik_check" class="styled" name="kondisi" value="2" checked="checked">Tidak Laik
				            	</label>
				            @else
				            	<label>
				            		<input type="checkbox" id="laik_check" class="styled" name="kondisi" value="1">
				            		Laik
				            	</label>
				            	<label>
				            		<input type="checkbox" id="tlaik_check" class="styled" name="kondisi" value="2">Tidak Laik
				            	</label>
				            @endif
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