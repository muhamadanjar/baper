@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Data Perusahaan</h3>
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
                    <li class="active">Perusahaan</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
			<form class="form-horizontal form-bordered" method="post" action="{{ url('master/perusahaan/tambah') }}" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h6 class="panel-title"><i class="icon-menu"></i> Tambah Perusahaan</h6>
	                	<a href="{{ url('master/perusahaan/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode perusahaan:</label>
				            <div class="col-sm-2">
				            	<input type="text" class="form-control" readonly name="kode_perusahaan" value="{{ $kode }}">
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Nama perusahaan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="nama_perusahaan">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">PIC:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="pic">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Telp:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="telp">
				            </div>
				        </div>
						
						<div class="form-group">
				            <label class="col-sm-2 control-label">Alamat:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="alamat">
				            </div>
				        </div>
				        
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('master/perusahaan/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop