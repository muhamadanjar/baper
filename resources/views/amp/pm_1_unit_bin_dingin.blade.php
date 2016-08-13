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
                    <li><a href="{{ url('home')}}">Home</a></li>
                    <li><a href="{{ url('amp/listpemeriksaanamp/index') }}">Pemeriksaan</a></li>
                    <li class="active">Unit Bin Dingin - {{$no_permohonan}}</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
<?php
    $kode_periksa = $no_permohonan;
    $pelat_pemisah = '';
    $pelat_pemisah_keterangan = '';
    $dinding_bin = '';
    $bukaan_pintu = '';
    $bukaan_pintu_keterangan = '';
    $pintu_pengatur = '';
    $skala_meter = '';
    $motor_penggerak = '';
    $penggetar = '';
    $pengatur_kecepatan = '';
    $konstruksi_pendukung = '';
    $pelindung_bin = '';
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 
if (isset($pm_satu_amp_unitbindingin)) {
    if($pm_satu_amp_unitbindingin->kode_periksa){
        $kode_periksa = $pm_satu_amp_unitbindingin->kode_periksa;
        $pelat_pemisah = $pm_satu_amp_unitbindingin->pelat_pemisah;
        $pelat_pemisah_keterangan = $pm_satu_amp_unitbindingin->pelat_pemisah_keterangan;
        $dinding_bin = $pm_satu_amp_unitbindingin->dinding_bin;
        $bukaan_pintu = $pm_satu_amp_unitbindingin->bukaan_pintu;
        $pintu_pengatur = $pm_satu_amp_unitbindingin->pintu_pengatur;
        $skala_meter = $pm_satu_amp_unitbindingin->skala_meter;
        $motor_penggerak = $pm_satu_amp_unitbindingin->motor_penggerak;
        $penggetar = $pm_satu_amp_unitbindingin->penggetar;
        $pengatur_kecepatan = $pm_satu_amp_unitbindingin->pengatur_kecepatan;
        $konstruksi_pendukung = $pm_satu_amp_unitbindingin->konstruksi_pendukung;
        $pelindung_bin = $pm_satu_amp_unitbindingin->pelindung_bin;

        $catatan_pemeriksa = $pm_satu_amp_unitbindingin->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_unitbindingin->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_unitbindingin->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_unitbindingin->foto_unit;
        $kesimpulan_check = $pm_satu_amp_unitbindingin->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_unitbindingin->kesimpulan_ket;

    }
}
?>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="foto_unit_" value="{{$foto_unit}}" /> 
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
                    <th></th>
                </tr>
                                
                <tr class="pelat_pemisah">
                    <input type="hidden" name="kode_periksa" value="{{ $no_permohonan }}">
					<td>1</td>
                    <td>Pelat Pemisah Antar Bin</td>
                    @if($pelat_pemisah == 'B ')
                   
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA"></td>
					<td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG"></td>	
                    @elseif($pelat_pemisah == 'RL')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG"></td>
                    @elseif($pelat_pemisah == 'RT')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG"></td>
                    @elseif($pelat_pemisah == 'TA')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG"></td>
                    @elseif($pelat_pemisah == 'TG')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah" value="TG"></td>
                                        

                    @endif
                    <td>
                        <input type="text" size="50" name="pelat_pemisah_keterangan" class="form-control" value="">
                    </td>
                    <td>
                        <div class="col-md-1">
                            <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media">    
                        </div>
                        <div class="col-md-11">
                            <input type="file" class="styled" name="pelat_pemisah_foto" value="">    
                        </div>
                        

                    </td>
                </tr>
                <tr class="dinding_bin">
					<td>2</td>
                    <td>Dinding Bin/ Hopper</td>
                    @if($dinding_bin == 'B ')
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TG"></td>
                    @elseif($dinding_bin == 'RL')
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TG"></td>
                    @elseif($dinding_bin == 'RT')
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin" value="TG"></td>
                    @elseif($dinding_bin == 'TA')
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TG"></td>
                    @elseif($dinding_bin == 'TG')
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TA"></td>
					<td><input type="checkbox" class="styled" class="styled" name="dinding_bin" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="dinding_bin_keterangan" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="dinding_bin_foto" value=""></td>
                </tr>
                <tr class="bukaan_pintu">
					<td>3</td>
                    <td>Bukaan Pintu Bin</td>
                    @if($bukaan_pintu == 'B ')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TA"></td>
					<td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG"></td>
                    @elseif($bukaan_pintu == 'RL')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG"></td>
                    @elseif($bukaan_pintu == 'RT')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG"></td>
                    @elseif($bukaan_pintu == 'TA')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT"></td>
                    <td><input type="checkbox" class="styled"name="bukaan_pintu" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG"></td>
                    @elseif($bukaan_pintu == 'TG')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="B"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RL" ></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="bukaan_pintu_keterangan" class="form-control"
                    value="{{ $bukaan_pintu_keterangan }}"></td>

                    <td><input type="file" class="styled" name="bukaan_pintu_foto" 
                    ></td>
                </tr>
                <tr class="pintu_pengatur">
					<td>4</td>
                    <td>Pintu Pengatur Bukaan dan Penguncinya</td>
                    @if($pintu_pengatur == 'B ')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="pintu_pengatur" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA"></td>
					<td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG"></td>
                    @elseif($pintu_pengatur == 'RL')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG"></td>
                    @elseif($pintu_pengatur == 'RT')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG"></td>
                    @elseif($pintu_pengatur == 'TA')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG"></td>
                    @elseif($pintu_pengatur == 'TG')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="pintu_pengatur_keterangan" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pintu_pengatur_foto"></td>
                </tr>
                <tr class="skala_meter">
					<td>5</td>
                    <td>Skala Meter Bukaan</td>
                    @if($skala_meter == 'B ')
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA"></td>
					<td><input type="checkbox" class="styled" name="skala_meter" value="TG"></td>
                    @elseif($skala_meter == 'RL')
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TG"></td>
                    @elseif($skala_meter == 'RT')
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TG"></td>
                    @elseif($skala_meter == 'TA')
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TG"></td>
                    @elseif($skala_meter == 'TG')
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="skala_meter" value="B"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="skala_meter_keterangan" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="skala_meter_foto"></td>
                </tr>
                <tr class="motor_penggerak">
					<td>6</td>
                    <td>Motor Penggerak</td>
                    @if($motor_penggerak == 'B ')
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TG"></td>
                    @elseif($motor_penggerak == 'RL')
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TG"></td>
                    @elseif($motor_penggerak == 'RT')
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TG"></td>
                    @elseif($motor_penggerak == 'TA')
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TG"></td>
                    @elseif($motor_penggerak == 'TG')
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="B"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak" value="TA"></td>
					<td><input type="checkbox" class="styled" name="motor_penggerak" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="motor_penggerak_keterangan" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_penggerak_foto"></td>
                </tr>
                <tr class="penggetar">
				    <td>7</td>
                    <td>Penggetar</td>
                    @if($penggetar == 'B ')
                    <td><input type="checkbox" class="styled" name="penggetar" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TG"></td>
                    @elseif($penggetar == 'RL')
                    <td><input type="checkbox" class="styled" name="penggetar" value="B"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TG"></td>
                    @elseif($penggetar == 'RT')
                    <td><input type="checkbox" class="styled" name="penggetar" value="B"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TG"></td>
                    @elseif($penggetar == 'TA')
                    <td><input type="checkbox" class="styled" name="penggetar" value="B"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TG"></td>
                    @elseif($penggetar == 'TG')
                    <td><input type="checkbox" class="styled" name="penggetar" value="B"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penggetar" value="B"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="penggetar" value="TA"></td>
				    <td><input type="checkbox" class="styled" name="penggetar" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="penggetar_keterangan" class="form-control"></td>
                    <td><input type="file" class="styled" name="penggetar_foto"></td>
                </tr>
                <tr class="pengatur_kecepatan">
					<td>8</td>
                    <td>Pengatur Kecepatan</td>
                    @if($pengatur_kecepatan == 'B ')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA"></td>
					<td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG"></td>
                    @elseif($pengatur_kecepatan == 'RL')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG"></td>
                    @elseif($pengatur_kecepatan == 'RT')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG"></td>
                    @elseif($pengatur_kecepatan == 'TA')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG"></td>
                    @elseif($pengatur_kecepatan == 'TG')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="pengatur_kecepatan_keterangan" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pengatur_kecepatan_foto"></td>
                </tr>
                <tr class="konstruksi_pendukung">
					<td>9</td>
                    <td>Kontruksi Pendukung / Rangka</td>
                    @if($konstruksi_pendukung == 'B ')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA"></td>
					<td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TG"></td>
                    @elseif($konstruksi_pendukung == 'RL')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TG"></td>
                    @elseif($konstruksi_pendukung == 'RT')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TG"></td>
                    @elseif($konstruksi_pendukung == 'TA')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA" checked="checked"></td>
                    <td><input type="checkbox" name="konstruksi_pendukung" value="TG"></td>
                    @elseif($konstruksi_pendukung == 'TG')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="B"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_pendukung_keterangan" class="form-control" value=""></td>
                    <td>
                        <div class="col-md-1">
                            <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media">    
                        </div>
                        <div class="col-md-11">
                            <input type="file" class="styled" name="konstruksi_pendukung_foto" value="">    
                        </div>
                        
                    </td>
                </tr>
                <tr class="pelindung_bin">
					<td>10</td>
                    <td>Pelindung Bin</td>
                    @if($pelindung_bin == 'B ')
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TG"></td>
                    @elseif($pelindung_bin == 'RL')
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TG"></td>
                    @elseif($pelindung_bin == 'RT')
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TG"></td>
                    @elseif($pelindung_bin == 'TA')
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TG"></td>
                    @elseif($pelindung_bin == 'TG')
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="B"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RL"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="RT"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin" value="TA"></td>
					<td><input type="checkbox" class="styled" name="pelindung_bin" value="TG"></td>
                    @endif
                    <td><input type="text" size="50" name="pelindung_bin_keterangan" class="form-control" value=""></td>
                    <td>
                        <div class="col-md-1">
                            <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media">    
                        </div>
                        <div class="col-md-11">
                            <input type="file" class="styled" name="pelindung_bin_foto" value="">
                        </div>
                    </td>
                </tr>
			</table>
		</div>				
		
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 
				<tr>
					<td width=360>Catatan Pemeriksa</td>
					<td colspan="5">
                        <textarea name="catatan_pemeriksa" class="editor">
                            {{ $catatan_pemeriksa }}        
                        </textarea>
                    </td>
				</tr>
				
				<tr>
					<td>Saran Pemeriksa, Harus Diperbaiki</td>
					<td colspan="5"><input type="text" size="110%" name="harus_diperbaiki" 
                    value="{{ $harus_diperbaiki }}" /></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap II</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_2" value="{{ $pemeriksaan_tahap_2 }}"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				
				<tr>
					<td width=360>Kesimpulan</td>
                    @if($kesimpulan_check == 'B')
					<td><input type="checkbox" name="kesimpulan_check" value="B" checked="checked"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="RL"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="RT"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="TA"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="TG"></td>
                    @elseif($kesimpulan_check == 'RL')
                    <td><input type="checkbox" name="kesimpulan_check" value="B"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RL" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RT"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TA"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TG"></td>
                    @elseif($kesimpulan_check == 'RT')
                    <td><input type="checkbox" name="kesimpulan_check" value="B"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RL"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RT" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TA"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TG"></td>
                    @elseif($kesimpulan_check == 'TA')
                    <td><input type="checkbox" name="kesimpulan_check" value="B"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RL"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RT"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TA" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TG"></td>
                    @elseif($kesimpulan_check == 'TG')
                    <td><input type="checkbox" name="kesimpulan_check" value="B"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RL"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RT"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TA"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TG" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="kesimpulan_check" value="B"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RL"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="RT"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TA"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="TG"></td>
                    @endif
					<td><input type="text" size="50" name="kesimpulan_ket" class="form-control" value=""></td>
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
                            <a class="thumb-zoom lightbox"><img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media"></a>    
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
				<a href="{{ url('amp/pemeriksaan1/unitbanberjalan') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop