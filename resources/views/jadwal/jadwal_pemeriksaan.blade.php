@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Jadwal Pemeriksaan</h3>
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
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List Jadwal Pemeriksaan</h6></div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Permohonan</th>
                            <th>Tanggal</th>
							<th>Nama Perusahaan</th>
							<th>Nama Pemohon</th>
							<th>Jns Alat</th>
							<th>Merk</th>
							<th>Tipe</th>
							<th>Tgl-Expose</th>
							<th>Tgl-Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal_pemeriksaan as $key => $v)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle" type="button"><i class="icon-cog4"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                                        <li><a href="{{ route('jadwal_pemeriksaanedit', ['id' => $v->no_permohonan]) }}"><i class="icon-quill2"></i>Jadwal Pemeriksaan</a></li>            
                                    </ul>
                                </div>

                            </td>
                            <td>{{$v->no_permohonan}}</td>
							<td>{{$v->tanggal_permohonan}}</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>{{$v->tanggal_expose}}</td>
							<td>{{$v->tanggal_pemeriksaan}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
	
@stop