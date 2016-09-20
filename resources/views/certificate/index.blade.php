@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Certificate</h3>
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
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List Certificate</h6></div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                           
                            <th>No Permohonan</th>
                            <th>Tanggal</th>
							<th>Nama Perusahaan</th>
							<th>Nama Pemohon</th>
                            <th>Pemeriksaan II</th>
							
                        </tr>
                    </thead>
                    <tbody>
                    	@if(isset($data['certificate']))
                        	   @foreach($data['certificate'] as $key => $v)
                                <tr>
                              		 	<td>{{$v->no_permohonan}}</td>
                                        <td>{{$v->tanggal_permohonan}}</td>
                                        <td>{{$v->nama_perusahaan}}</td>
                                        <td>{{$v->nama_pemohon}}</td>
                                        <td>
                                        	@if($v->kesimpulan=='1')
                                            	Laik
                                            @else
                                            	Tidak Laik
                                            @endif
                                        </td>
                                        <td>
                                        	<a class="btn btn-default btn-small btn-sm" href="{{url('certificate/datas/'.$v->id)}}">
                                            	<i class="icon-print2"></i> Cetak
                                            </a>
                                        </td>
                                </tr>
                               @endforeach
                       
                        @endif
                    </tbody>
                </table>
            </div>
    </div>
    <!--- add tanggal expose -->  
	
@stop