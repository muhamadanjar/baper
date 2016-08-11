@extends('app_backend')
@section('content')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('amp/pemeriksa/unitpenimbangan') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <b>2. Penimbangan</b>
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
									<td><b>A</b></td>
                                    <td><b>Agregat</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
									<td></td>								
                                    <td></td>
                                </tr>
								
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Skala Penimbangan</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Pengatur Otomatis Timbangan</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Pintu - Pintu Bukaan</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                
								<tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td><b>B</b></td>
                                    <td><b>Semen</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
									<td></td>								
                                    <td></td>
                                </tr>
								
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Skala Timbangan</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Pintu / Kran bukaan</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Pengatur Otomatis Timbangan</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                
								<tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td><b>C</b></td>
                                    <td><b>Air</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
									<td></td>								
                                    <td></td>
                                </tr>
								
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Skala Timbangan</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Pintu / Kran Bukaan</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Pengatur Otomatis Timbangan</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                
								<tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td><b>D</b></td>
                                    <td><b>Additive</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
									<td></td>								
                                    <td></td>
                                </tr>
								
                                <tr>
                                	<input type="hidden" name="kode_periksa" value="{{ date('YdH')}}">
									<td>1</td>
                                    <td>Skala Timbangan</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
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
					<td><b>Kesimpulan</b></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>								
				</tr>
				<tr>
					<td width=360>Penimbangan</td>
					<td><input type="checkbox" name="pelindung_bin" value="B"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RL"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RT"></td>
					<td><input type="checkbox" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
					<td><input type="text" size="50" name="keterangan" value=""></td>
				</tr>
				<tr>
					<td width=360>a. Agregat</td>
					<td><input type="checkbox" name="pelindung_bin" value="B"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RL"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RT"></td>
					<td><input type="checkbox" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
					<td><input type="text" size="50" name="keterangan" value=""></td>
				</tr>
				<tr>
					<td width=360>b. Semen</td>
					<td><input type="checkbox" name="pelindung_bin" value="B"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RL"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RT"></td>
					<td><input type="checkbox" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
					<td><input type="text" size="50" name="keterangan" value=""></td>
				</tr>
				<tr>
					<td width=360>c. Air</td>
					<td><input type="checkbox" name="pelindung_bin" value="B"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RL"></td>
					<td><input type="checkbox" name="pelindung_bin" value="RT"></td>
					<td><input type="checkbox" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
					<td><input type="text" size="50" name="keterangan" value=""></td>
				</tr>
				<tr>
					<td width=360>d. Additive</td>
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
					<td>Foto Persediaan Material</td>
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
				<a href="#" class="btn btn-default">Batal</a>
			</div>
		</div>
	</form>
	
@stop