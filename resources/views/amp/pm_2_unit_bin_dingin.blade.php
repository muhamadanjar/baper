@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>1. Unit Bin Dingin Atau Cold Bin</h3>
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
                    <li><a href="forms.html">Pemeriksaan Tahap 2</a></li>
                    <li class="active">AMP</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
<?php
    $no_id = '';
    $kode_periksa = \Session::get('no_permohonan');
    $id_periksa = \Session::get('id_periksa');

    $bukaan_pintu_check = '';
    $bukaan_pintu_ket = '';
    $bukaan_pintu_foto = '';

    $pintu_pengatur_check = '';
    $pintu_pengatur_ket = '';
    $pintu_pengatur_foto = '';

    $skala_meter_check = '';
    $skala_meter_ket = '';
    $skala_meter_foto = '';

    $motor_penggerak_check = '';
    $motor_penggerak_ket = '';
    $motor_penggerak_foto = '';

    $penggetar_check = '';
    $penggetar_ket = '';
    $penggetar_foto = '';

    $pengatur_kecepatan_check = '';
    $pengatur_kecepatan_ket = '';
    $pengatur_kecepatan_foto = '';

    $kesimpulan_check ='';
    $kesimpulan_ket ='';

    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_1 = '';
    $pemeriksaan_tahap_2 = '';

    $foto_unit = '';

if (isset($periksaduabindingin)) {
    if ($periksaduabindingin->kode_periksa) {
        $kode_periksa = $periksaduabindingin->kode_periksa;
        $no_id = $periksaduabindingin->no_id;
        $id_periksa = $periksaduabindingin->id_periksa;

        $bukaan_pintu_check = $periksaduabindingin->bukaan_pintu_check;
        $bukaan_pintu_ket = $periksaduabindingin->bukaan_pintu_ket;
        $bukaan_pintu_foto = $periksaduabindingin->bukaan_pintu_foto;

        $pintu_pengatur_check = $periksaduabindingin->pintu_pengatur_check;
        $pintu_pengatur_ket = $periksaduabindingin->pintu_pengatur_ket;
        $pintu_pengatur_foto = $periksaduabindingin->pintu_pengatur_foto;

        $skala_meter_check = $periksaduabindingin->skala_meter_check;
        $skala_meter_ket = $periksaduabindingin->skala_meter_ket;
        $skala_meter_foto = $periksaduabindingin->skala_meter_foto;

        $motor_penggerak_check = $periksaduabindingin->motor_penggerak_check;
        $motor_penggerak_ket = $periksaduabindingin->motor_penggerak_ket;
        $motor_penggerak_foto = $periksaduabindingin->motor_penggerak_foto;

        $penggetar_check = $periksaduabindingin->penggetar_check;
        $penggetar_ket = $periksaduabindingin->penggetar_ket;
        $penggetar_foto = $periksaduabindingin->penggetar_foto;

        $pengatur_kecepatan_check = $periksaduabindingin->pengatur_kecepatan_check;
        $pengatur_kecepatan_ket = $periksaduabindingin->pengatur_kecepatan_ket;
        $pengatur_kecepatan_foto = $periksaduabindingin->pengatur_kecepatan_foto;

        $kesimpulan_check = $periksaduabindingin->kesimpulan_check;
        $kesimpulan_ket = $periksaduabindingin->kesimpulan_ket;

        $catatan_pemeriksa = $periksaduabindingin->catatan_pemeriksa;
        $harus_diperbaiki = $periksaduabindingin->harus_diperbaiki;
        $pemeriksaan_tahap_1 = $periksaduabindingin->pemeriksaan_tahap_1;
        $pemeriksaan_tahap_2 = $periksaduabindingin->pemeriksaan_tahap_2;

        $foto_unit = $periksaduabindingin->foto_unit;
    }
}
?>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id_periksa" value="{{$id_periksa}}" />
        <input type="hidden" name="no_id" value="{{$no_id}}" />
        <input type="hidden" name="kode_periksa" value="{{ $kode_periksa }}">

		<div class="table-responsive">
            <table class="table table-bordered" fixed-header>                               
                <tr>
					<th>No</th>
                    <th>Komponen Yang Diperiksa</th>
                    <th width=20>Baik </th>
                    <th width=20>Rusak Lengkap</th>
                    <th width=20>Tidak Lengkap</th>
                    <th width=20>Tidak Ada</th>
                    <th width=20>Tidak Digunakan</th>
                    <th width=300>Keterangan</th>
                </tr>
                                
                <tr class="1_check">
					<td>1</td>
                    <td>Bukaan Pintu Bin</td>
                    @if($bukaan_pintu_check == '1')
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '2')
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '3')
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '4')
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '5')
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" name="bukaan_pintu_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bukaan_pintu_ket" value="{{$bukaan_pintu_ket}}"></td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Pintu Pengatur Bukaan dan Penguncinya</td>
                    @if($pintu_pengatur_check == '1')
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4"></td>			
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '2')
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4"></td>          
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '3')
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4"></td>          
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '4')
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4" checked="checked"></td>          
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '5')
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4"></td>          
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" name="pintu_pengatur_check" value="4"></td>          
                    <td><input type="checkbox" name="pintu_pengatur_check" value="5"></td>
                    @endif		
                    <td><input type="text" size="50" name="pintu_pengatur_ket" value="{{$pintu_pengatur_ket}}"></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Skala Meter Bukaan</td>
                    @if($skala_meter_check == '1')
                    <td><input type="checkbox" name="skala_meter_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4"></td> 
                    <td><input type="checkbox" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '2')
                    <td><input type="checkbox" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4"></td> 
                    <td><input type="checkbox" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '3')
                    <td><input type="checkbox" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4"></td> 
                    <td><input type="checkbox" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '4')
                    <td><input type="checkbox" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4" checked="checked"></td> 
                    <td><input type="checkbox" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '5')
                    <td><input type="checkbox" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4"></td> 
                    <td><input type="checkbox" name="skala_meter_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" name="skala_meter_check" value="4"></td>	
                    <td><input type="checkbox" name="skala_meter_check" value="5"></td>
                    @endif  			
                    <td><input type="text" size="50" name="skala_meter_ket" value="{{$skala_meter_ket}}"></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Motor Penggerak</td>
                    @if($motor_penggerak_check == '1')
                    <td><input type="checkbox" name="motor_penggerak_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '2')
                    <td><input type="checkbox" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '3')
                    <td><input type="checkbox" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '4')
                    <td><input type="checkbox" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '5')
                    <td><input type="checkbox" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" name="motor_penggerak_check" value="5"></td>
                    @endif			
                    <td><input type="text" size="50" name="motor_penggerak_ket" value="{{$motor_penggerak_ket}}"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Penggetar</td>
                    @if($penggetar_check == '1')
                    <td><input type="checkbox" name="penggetar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '2')
                    <td><input type="checkbox" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '3')
                    <td><input type="checkbox" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '4')
                    <td><input type="checkbox" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '5')
                    <td><input type="checkbox" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" name="penggetar_check" value="5"></td>
                    @endif			
                    <td><input type="text" size="50" name="penggetar_ket" value="{{$penggetar_ket}}"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Pengatur Kecepatan</td>
                    @if($pengatur_kecepatan_check == '1')
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '2')
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '3')
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '4')
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '5')
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" name="pengatur_kecepatan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pengatur_kecepatan_ket" value="{{$pengatur_kecepatan_ket}}"></td>
                </tr>
                                
			</table>
		</div>				
		
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 
				<tr>
					<td width=360>Catatan Pemeriksa</td>
					<td colspan="5"><textarea name="catatan_pemeriksa" class="editor">{{$catatan_pemeriksa}}</textarea></td>
				</tr>
				
				<tr>
					<td>Saran Pemeriksa, Harus Diperbaiki</td>
					<td colspan="5"><input type="text" size="110%" name="harus_diperbaiki" 
                    value="{{ $harus_diperbaiki }}"/></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap I</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_1" 
                    value="{{ $pemeriksaan_tahap_1 }}"></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap II</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_2" 
                    value="{{ $pemeriksaan_tahap_2 }}"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				
				<tr>
					<td width=360>Kesimpulan</td>
                    @if($kesimpulan_check == 1)
					<td><input type="checkbox" name="kesimpulan_check" value="1" checked="checked"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="2"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="3"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == 2)
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == 3)
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == 4)
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == 5)
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @endif
					<td><input type="text" size="50" name="kesimpulan_ket" value="{{$kesimpulan_ket}}"></td>
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
                    <td>
                        <div class="col-md-1">
                            <a href="{{ asset('files') }}/{{$foto_unit}}" class="lightbox">
                                <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media" alt="">
                            </a>    
                        </div>
                        <div class="col-md-5">
                            <input type="file" name="foto_unit" class="styled">
                        </div>
                        
                        </td>
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
				<a href="{{ url('amp/pemeriksaan2/unitbanberjalan') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop