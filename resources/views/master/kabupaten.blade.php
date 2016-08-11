@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Master Kabupaten</h3>
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
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('master') }}">Master</a></li>
                    <li class="active">Kabupaten</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
						
@section('content')
	
					
    <div class="panel panel-default">
     	
        <div class="row">
            <div class="col-sm-2">
                <a href="{{ url('master/kabupaten/tambah') }}" class="btn btn-primary">Tambah</a>
            </div>
            
                <div class="form-group">
                    <label class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-5">
                        <select class="form-control kode_provinsi" name="kode_provinsi">
                            <option value="">Nama Provinsi</option>
                            @foreach($provinsi as $k => $v)
                                <option value="{{ $v->kode_provinsi }}">{{$v->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
        </div>
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Master Kabupaten</h6></div>

            <div class="table-responsive datatablecolumn">
                <table class="table table-kabupaten">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Kabupaten</th>
                            <th>Nama Kabupaten</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($kabupaten as $key => $v)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle" type="button"><i class="icon-cog4"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                                        <li><a href="{{ route('kabupatenedit', ['id' => $v->kode_kabupaten]) }}"><i class="icon-quill2"></i> Ubah</a></li>
                                        <li data-form="#frm-{{$v->kode_kabupaten}}" 
                                            data-title="Hapus {{ $v->kode_kabupaten }}" 
                                            data-message="Apa anda yakin menghapus {{ $v->kode_kabupaten }} ?">
                                            <a class= "formConfirm" href="#"><i class="fa fa-bell"></i> Hapus </a>
                                        </li>
                                        <form action="{{ route('kabupatendelete', array($v->kode_provinsi) ) }}" method="get" style="display:none" id="frm-{{$v->kode_kabupaten}}"></form>
                                        
                                                        
                                    </ul>
                                </div>

                            </td>
                            <td>{{$v->kode_kabupaten}}</td>
                            <td>{{$v->nama_kabupaten}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
	
@stop