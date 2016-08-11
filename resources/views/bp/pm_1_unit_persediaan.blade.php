@extends('app_backend')
@section('content')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('amp/pemeriksa/unitpersediaan') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <b>1. Persediaan Material</b>
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
                                    <td>Bin</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Pintu Pengeluaran</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Roll Pemutar</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>4</td>
                                    <td>Motor Pemutar</td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="B"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RL"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RT"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>5</td>
                                    <td>Rantai / V-Belt Pemutar</td>
                                    <td><input type="checkbox" name="skala_meter" value="B"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RL"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RT"></td>
                                    <td><input type="checkbox" name="skala_meter" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>6</td>
                                    <td>Roll Penyangga Belt Conveyor</td>
                                    <td><input type="checkbox" name="motor_penggerak" value="B"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RL"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RT"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>7</td>
                                    <td>Belt Conveyor Pemasok Ke Timbangan</td>
                                    <td><input type="checkbox" name="penggetar" value="B"></td>
                                    <td><input type="checkbox" name="penggetar" value="RL"></td>
                                    <td><input type="checkbox" name="penggetar" value="RT"></td>
                                    <td><input type="checkbox" name="penggetar" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>8</td>
                                    <td>Konstruksi Penyangga Conveyor Pemasok</td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="B"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="RL"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="RT"></td>
                                    <td><input type="checkbox" name="pengatur_kecepatan" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>9</td>
                                    <td>Roll Conveyor Pemasok</td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="B"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="RL"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="RT"></td>
                                    <td><input type="checkbox" name="konstruksi_pendukung" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>10</td>
                                    <td>Motor Pemutar</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>11</td>
                                    <td>Dinding Pemisah</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
								<tr>
									<td>12</td>
                                    <td>Sekop Pengangkat</td>
                                    <td><input type="checkbox" name="pelindung_bin" value="B"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RL"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="RT"></td>
                                    <td><input type="checkbox" name="pelindung_bin" value="TA"></td>
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
                                    <td>Silo</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Pipa Penyalur Pengisian</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Silinder Pengisian</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>4</td>
                                    <td>Kompresor Pengisian</td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="B"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RL"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RT"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>5</td>
                                    <td>Pipa Penyalur Penimbangan</td>
                                    <td><input type="checkbox" name="skala_meter" value="B"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RL"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RT"></td>
                                    <td><input type="checkbox" name="skala_meter" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>6</td>
                                    <td>Motor Penggerak Penyalur</td>
                                    <td><input type="checkbox" name="motor_penggerak" value="B"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RL"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="RT"></td>
                                    <td><input type="checkbox" name="motor_penggerak" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>7</td>
                                    <td>Indikator Volume Silo</td>
                                    <td><input type="checkbox" name="penggetar" value="B"></td>
                                    <td><input type="checkbox" name="penggetar" value="RL"></td>
                                    <td><input type="checkbox" name="penggetar" value="RT"></td>
                                    <td><input type="checkbox" name="penggetar" value="TA"></td>
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
                                    <td>Tangki Air</td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="B"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RL"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="RT"></td>
                                    <td><input type="checkbox" name="pelat_pemisah" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>								
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Kran Penyalur Pengisian</td>
                                    <td><input type="checkbox" name="dinding_bin" value="B"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RL"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="RT"></td>
                                    <td><input type="checkbox" name="dinding_bin" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>Pipa Penyalur</td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="B"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RL"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="RT"></td>
                                    <td><input type="checkbox" name="bukaan_pintu" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>4</td>
                                    <td>Pipa Pengisian</td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="B"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RL"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="RT"></td>
                                    <td><input type="checkbox" name="pintu_pengatur" value="TA"></td>
									<td><input type="checkbox" name="pelat_pemisah" value="TG"></td>
                                    <td><input type="text" size="50" name="keterangan" value=""></td>
                                </tr>
                                <tr>
									<td>5</td>
                                    <td>Indikator / Meter Volume Isi</td>
                                    <td><input type="checkbox" name="skala_meter" value="B"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RL"></td>
                                    <td><input type="checkbox" name="skala_meter" value="RT"></td>
                                    <td><input type="checkbox" name="skala_meter" value="TA"></td>
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
                                    <td>Penyimpanan / Bin</td>
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
					<td width=360>Persediaan Material</td>
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