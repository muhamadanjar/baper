@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>3. Unit Pengering</h3>
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
                    <li class="active">Unit Pengering</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('amp/pemeriksa/unitpengering') }}">
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
                                    <td>Corong Pengisi (Charging Cute)</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Corong Pengeluaran (Discharging Cute)</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Silinder Pengering (Drum Dryer)</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>4</td>
                                    <td>Sudu-Sudu (Flight Cup)</td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="B"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RL"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RT"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>5</td>
                                    <td>Roda Gigi Pemutar (Sprocket Wheel)</td>
                                    <td><input type="checkbox" name="skala_meter" value="B"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RL"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RT"></td>
                                    <td><input type="checkbox" name="skala_meter" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>6</td>
                                    <td>Roda Gigi Ring (Ring Gear)</td>
                                    <td><input type="checkbox" name="motor_penggerak" value="B"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RL"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RT"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>7</td>
                                    <td>Motor Penggerak (Pemutar)</td>
                                    <td><input type="checkbox" name="penggetar" value="B"></td>
                                    <td><input type="checkbox" name="penggetar" value="RL"></td>
                                    <td><input type="checkbox" name="penggetar" value="RT"></td>
                                    <td><input type="checkbox" name="penggetar" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>8</td>
                                    <td>Bantalan Rol (Turnmion Roler Bearing)</td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="B"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="RL"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="RT"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>9</td>
                                    <td>Bantalan Rol Penahan (Trust Roller Bearing)</td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="B"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="RL"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="RT"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>10</td>
                                    <td>Chain</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>11</td>
                                    <td>Bearing</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>12</td>
                                    <td>Kontruksi / Rangka</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
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
				<a href="{{ url('amp/pemeriksaan1/unitbanberjalan') }}" class="btn btn-info">Balik</a>
				<a href="{{ url('amp/pemeriksaan1/unitpemanas') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop