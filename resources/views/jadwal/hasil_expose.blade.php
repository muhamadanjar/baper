@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Hasil Expose</h3>
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
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>List Hasil Expose</h6></div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                           
                            <th>No Permohonan</th>
                            <th>Tanggal</th>
							<th>Nama Perusahaan</th>
							<th>Nama Pemohon</th>
							<th>Jns Alat</th>
							<th>Merk</th>
							<th>Tipe</th>
							<th>Tgl-Expose</th>
                             <th>Isi Hasil Expose</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal_expose as $key => $v)
                        <tr>
                           
                            <td>{{$v->no_permohonan}}</td>
							<td>{{$v->tanggal_permohonan}}</td>
							<td>{{$v->nama_perusahaan}}</td>
							<td>{{$v->nama_pemohon}}</td>
							<td>{{$v->jenis_alat}}</td>
							<td>{{$v->merk}}</td>
							<td>{{$v->tipe}}</td>
							<td> <input type="text" class="form-control datepickers" name="tanggal_expose" value="{{date('Y-m-d',strtotime($v->tanggal_expose))}}"  id="tanggalexpose{{$v->id}}" data-permohonan="{{$v->no_permohonan}}" onchange="javascript:getpostdata('{{$v->id}}');" /></td>
                            <td width="20%"> 
                                @if ($v->kondisi_pemeriksaan==1)
                                <a href="{{ route('jadwal_exposehasil', ['id' => $v->id]) }}" class="btn btn-sm btn-primary">
                                	<i class="icon-file7"></i> LAYAK
                                </a>

                                
                                @elseif ($v->kondisi_pemeriksaan==2)
								<a href="{{ route('jadwal_exposehasil', ['id' => $v->id]) }}" class="btn btn-sm btn-danger">
                                	<i class="icon-file7"></i> Tidak LAYAK
                                </a>
                                @else
                                <a href="{{ route('jadwal_exposehasil', ['id' => $v->id]) }}" class="btn btn-sm btn-warning">
                                	<i class="icon-file7"></i> 
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <!--- add tanggal expose -->  
	<script>
		$(function(){
			$('.datepickers').datepicker({ dateFormat: 'yy-mm-dd' });
		});
		
		function getpostdata(id){
			var datas = $("#tanggalexpose"+ id).val();
			var idperm = $("#tanggalexpose"+ id).attr("data-permohonan");
			
            var req = post("{{asset('jadwal/expose/tanggal')}}",{"tanggal":datas,"id":idperm});
			console.log(req);
            req.then(function(out){
                console.log(out)
				if(!out.error){
							
				}else{
					alert("error save data");	
				}
			});	
		}
	</script>
@stop