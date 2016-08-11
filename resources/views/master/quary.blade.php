@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Master Quary</h3>
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
                    <li class="active">---</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <div class="panel panel-default">
        
        <a href="{{ url('master/quary/tambah') }}" class="btn btn-primary">Tambah</a>
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List quary</h6></div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Quary</th>
                            <th>Jenis Quary</th>
							<th>Produksi Quary</th>
							<th>Agregat</th>
							<th>Lokasi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quary as $key => $v)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle" type="button"><i class="icon-cog4"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                                        <li><a href="{{ route('quaryedit', ['id' => $v->kode_quary]) }}"><i class="icon-quill2"></i> Ubah</a></li>
                                        <li data-form="#frm-{{$v->kode_quary}}" 
                                            data-title="Hapus {{ $v->kode_quary }}" 
                                            data-message="Apa anda yakin menghapus {{ $v->kode_quary }} ?">
                                            <a class= "formConfirm" href="#"><i class="fa fa-bell"></i> Hapus </a>
                                        </li>
                                        <form action="{{ route('quarydelete', array($v->kode_quary) ) }}" method="get" style="display:none" id="frm-{{$v->kode_quary}}"></form>
                                        
                                                        
                                    </ul>
                                </div>

                            </td>
                            <td>{{$v->kode_quary}}</td>
                            <td>{{$v->jenis_quary}}</td>
							<td>{{$v->produksi_quary}}</td>
							<td>{{$v->agregat}}</td>
							<td>{{$v->lokasi}}</td>
							
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
	
@stop