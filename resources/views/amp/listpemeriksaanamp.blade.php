@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Pemeriksaan AMP Tahap 1</h3>
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
                    <li><a href="forms.html">AMP</a></li>
                    <li class="active">Pemeriksaan Tahap 1</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List Pemeriksaan AMP Tahap 1</h6></div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Permohonan</th>
                            <th>Tanggal</th>
							<th>Nama Perusahaan</th>
							<th>Nama Pemohon</th>
							<th>Merk</th>
							<th>Tipe</th>
							<th>Tgl-Expose</th>
							<th>Tgl-Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datpermohonan as $key => $v)
                        <tr>
                            <td>
                                <!--<div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle" type="button"><i class="icon-cog4"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                                        <li><a href="{{ route('pm_1_unit_menu', ['id' => $v->no_permohonan]) }}"><i class="icon-quill2"></i>Pemeriksaan Tahap I</a></li>            
                                        <li><a href="{{ route('pm_2_unit_menu', ['id' => $v->no_permohonan]) }}"><i class="icon-quill2"></i>Pemeriksaan Tahap II</a></li>            
                                    </ul>
                                </div-->
                                <div data-title="Pemeriksaan {{ $v->no_permohonan }}" 
                                    data-message="Pemeriksaan {{ $v->no_permohonan }}"
                                    data-kodeperiksa="{{ $v->no_permohonan }}"
                                    data-namaperusahaan="{{ $v->nama_perusahaan }}"
                                    data-namapemohon="{{ $v->nama_pemohon }}"
                                    data-tglpermphonan="{{ $v->tanggal_permohonan }}"
                                    data-jenisperalatan="{{ $v->jenis_peralatan }}"
                                    data-statusterakhir="{{ \AHelper::status_permohonan($v->status_terakhir) }}"
                                    
                                    >
                                    <a class="formHistoryPemeriksaan btn btn-default btn-xs btn-icon">
                                        <i class="icon-file6"></i>
                                    </a>        
                                </div>
                                
                            </td>
                            <td>{{$v->no_permohonan}}</td>
							<td>{{ date("d M Y", strtotime($v->tanggal_permohonan)) }}</td>
							<td>{{$v->nama_perusahaan}}</td>
							<td>{{$v->nama_pemohon}}</td>
							<td>{{$v->merk}}</td>
							<td>{{$v->tipe}}</td>
							<td>{{ date("d M Y", strtotime($v->tanggal_expose)) }}</td>
							<td>{{ date("d M Y", strtotime($v->tanggal_pemeriksaan)) }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

    @include('vendor.modalPemeriksaan')
	
@stop