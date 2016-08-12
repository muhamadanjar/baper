@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Master AMP</h3>
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
                    <li class="active">AMP</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <div class="panel panel-default">
        
        <a href="{{ url('master/amp/tambah') }}" class="btn btn-primary">Tambah</a>
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List AMP</h6></div>

            <div class="table-responsive datatable">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode AMP</th>
                            <th>Merk</th>
							<th>Tipe</th>
							<th>Thn Buat</th>
							<th>Kapasitas</th>
							<th>Lokasi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($amp as $key => $v)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle" type="button"><i class="icon-cog4"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu icons-right dropdown-menu">
                                        <li><a href="{{ route('ampedit', ['id' => $v->kode_amp]) }}"><i class="icon-quill2"></i> Ubah</a></li>
                                        <li data-form="#frm-{{$v->kode_amp}}" 
                                            data-title="Hapus {{ $v->kode_amp }}" 
                                            data-message="Apa anda yakin menghapus {{ $v->kode_amp }} ?">
                                            <a class= "formConfirm" href="#"><i class="fa fa-bell"></i> Hapus </a>
                                        </li>
                                        <form action="{{ route('ampdelete', array($v->kode_amp) ) }}" method="get" style="display:none" id="frm-{{$v->kode_amp}}"></form>
                                        
                                                        
                                    </ul>
                                </div>

                            </td>
                            <td>{{$v->kode_amp}}</td>
                            <td>{{$v->merk}}</td>
							<td>{{$v->tipe}}</td>
							<td>{{$v->tahun_buat}}</td>
							<td>{{$v->kapasitas}}</td>
							<td>{{$v->lokasi}}</td>
							
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
	
@stop