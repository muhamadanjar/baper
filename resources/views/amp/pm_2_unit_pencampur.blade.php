@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>10. Unit Pencampur Atau Pugmill (Mixer)</h3>
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
                    <li class="active">Unit Pencampur Atau Pugmill (Mixer)</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('amp/pemeriksa/unitbindingin') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
		<div class="table-responsive">
                            <table class="table table-bordered" fixed-header>                               
                                <tr>
									<th>No</th>
                                    <th>Komponen Yang Diperiksa</th>
                                    <th width=20>Baik </th>
                                    <th width=20>Rusak</th>
                                    <th width=20>Tidak Hidup</th>
                                    <th width=20>Tidak Digunakan</th>
                                    <th width=300>Keterangan</th>
                                </tr>
                                
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Pintu Bukaan Mixer</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Poros Pugmil</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Roda Gigi (Gear)</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>4</td>
                                    <td>Sprocket</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>5</td>
                                    <td>Chain</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>6</td>
                                    <td>Penggerak Pugmil</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>7</td>
                                    <td>Bearing-Bearing</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>8</td>
                                    <td>Sistem Hidrolis / Pneumatik Bukaan Pedal Pugmil</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
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
				<tr>
					<td>Siap Pemeriksaan Tahap III</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_2"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				
				<tr>
					<td width=360>Kesimpulan</td>
					<td><input type="checkbox" name="pelat_pemisah" value="HB"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="HR"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TH"></td>
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
				<a href="{{ url('amp/pemeriksaan2/unittimbangan') }}" class="btn btn-info">Balik</a>
				<a href="{{ url('amp/pemeriksaan2/unitpemasokaspal') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop