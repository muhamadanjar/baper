@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Jadwal Expose</h3>
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
                    <li class="active">Jadwal Expose</li>
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
	                	<h6 class="panel-title"><i class="icon-menu"></i>Input Jadwal Expose</h6>
	                	<a href="{{ url('jadwal/jadwal_expose/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">
										
				       
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat Undangan:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_undangan" value="@if(isset($jadwal_expose->no_undangan)){{$jadwal_expose->no_undangan}}@endif" maxlength="60">
                            </div>
                            <label class="col-sm-2 control-label">Tanggal Undangan:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control datepicker" name="tgl_undangan" value="@if(isset($jadwal_expose->tgl_undangan)){{$jadwal_expose->tgl_undangan}}@endif">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hasil Expose:</label>
                            <div class="col-sm-10">
                               <textarea name="hasil_expose" class="editor">
                                    @if(isset($jadwal_expose->hasil_expose)){{$jadwal_expose->hasil_expose}}@endif    
                                </textarea>
                            </div>
                        </div>
						<div class="form-group">
				            <label class="col-sm-2 control-label">Kondisi Saat Ini: </label>
				            <div class="col-sm-10">
				            
				            	<label>
				            		<input type="radio" class="styled" name="kondisi_pemeriksaan" value="1" @if(isset($jadwal_expose->kondisi_pemeriksaan)) @if($jadwal_expose->kondisi_pemeriksaan==1) checked="checked" @endif @endif />
				            		Laik
				            	</label>
				            	<label>
				            		<input type="radio" class="styled" name="kondisi_pemeriksaan" value="2" @if(isset($jadwal_expose->kondisi_pemeriksaan)) @if($jadwal_expose->kondisi_pemeriksaan==2) checked="checked" @endif @endif />Tidak Laik
				            	</label>
				            
				            </div>

				        </div>
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('jadwal/jadwal_expose/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop