@extends('app_backend')
@section('content')
			<form class="form-horizontal form-bordered" method="post" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h6 class="panel-title"><i class="icon-menu"></i> Ubah Kabupaten</h6>
	                	<a href="{{ url('master/kabupaten/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Kode Kabupaten:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kode_kabupaten" value="{{ $kabupaten->kode_kabupaten}}">
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Nama Kabupaten:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="nama_kabupaten" value="{{ $kabupaten->nama_kabupaten }}">
				            </div>
				        </div>
				        
                        <div class="form-actions text-right">
                        	<input type="submit" value="Simpan" class="btn btn-primary">
                        	<a href="{{ url('master/kabupaten/index') }}" class="btn btn-danger">Batal</a>
                        </div>

				    </div>
				</div>
			</form>


@stop