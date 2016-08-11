@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>14. Bin Filler</h3>
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
                    <li class="active">Bin Filler</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>

            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('amp/pemeriksa/unitbinfiller') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="table-responsive">
                            <table class="table table-bordered" fixed-header>                               
                                <tr>
									<th>No</th>
                                    <th>Komponen Yang Diperiksa</th>
                                    <th width=20>Baik </th>
                                    <th width=20>Rusak LKP</th>
                                    <th width=20>Tidak LKP</th>
                                    <th width=20>Tidak Ada</th>
									<th width=20>Tidak Digunakan</th>
                                    <th width=300>Keterangan</th>
                                </tr>
                                
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Pintu Bukaan Filler</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Konstruksi / Rangka</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Hopper Bin</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                
							</table>
		</div>				
		
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 
				<tr>
					<td width=360>Catatan Pemeriksa</td>
					<td colspan="5"><textarea name="catatan_pemeriksa" style="width:100%;height:150px"></textarea></td>
				</tr>
				
				<tr>
					<td>Saran Pemeriksa, Harus Diperbaiki</td>
					<td colspan="5"><input type="text" size="110%" name="harus_diperbaiki"/></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap II</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_2"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				
				<tr>
					<td width=360>Kesimpulan</td>
					<td><input type="checkbox" name="pelindung_bin" value="B"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RL"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RT"></td>
					<td><input type="checkbox" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
					<td><input type="text" size="50" name="keterangan" value=""></td>
				</tr>
			</table>
		</div>
		<table>
			<tr>
			<td>&nbsp;</td>
			</tr>
		</table>
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 
				<tr>
					<td>Foto Unit</td>
					<td><input type="file" name="foto_unit"></td>
				</tr> 
								
			</table>
		</div>
		<table>
			<tr>
			<td>&nbsp;</td>
			</tr>
		</table>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="{{ url('amp/pemeriksaan1/unittenagapenggerak') }}" class="btn btn-info">Balik</a>
				<a href="{{ url('amp/pemeriksaan1/unitelevator') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop