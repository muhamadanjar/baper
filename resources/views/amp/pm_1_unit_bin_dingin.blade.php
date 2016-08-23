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
                    <li class="active">Unit Bin Dingin - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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
    $pelat_pemisah_check = '';
    $pelat_pemisah_ket = '';
    $pelat_pemisah_foto = '';
    $dinding_bin_check = '';
    $dinding_bin_ket = '';
    $dinding_bin_foto = '';
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
    $konstruksi_pendukung_check = '';
    $konstruksi_pendukung_ket = '';
    $konstruksi_pendukung_foto = '';
    $pelindung_bin_check = '';
    $pelindung_bin_ket = '';
    $pelindung_bin_foto = '';
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = '';
    $id_periksa = ''; 
if (isset($pm_satu_amp_bindingin)) {
    if($pm_satu_amp_bindingin->kode_periksa){
        $kode_periksa = $pm_satu_amp_bindingin->kode_periksa;
        $pelat_pemisah_check = $pm_satu_amp_bindingin->pelat_pemisah_check;
        $pelat_pemisah_ket = $pm_satu_amp_bindingin->pelat_pemisah_ket;
        $pelat_pemisah_foto = $pm_satu_amp_bindingin->pelat_pemisah_foto;
        $dinding_bin_check = $pm_satu_amp_bindingin->dinding_bin_check;
        $dinding_bin_ket = $pm_satu_amp_bindingin->dinding_bin_ket;
        $dinding_bin_foto = $pm_satu_amp_bindingin->dinding_bin_foto;
        $bukaan_pintu_check = $pm_satu_amp_bindingin->bukaan_pintu_check;
        $bukaan_pintu_ket = $pm_satu_amp_bindingin->bukaan_pintu_ket;
        $bukaan_pintu_foto = $pm_satu_amp_bindingin->bukaan_pintu_foto;
        $pintu_pengatur_check = $pm_satu_amp_bindingin->pintu_pengatur_check;
        $pintu_pengatur_ket = $pm_satu_amp_bindingin->pintu_pengatur_ket;
        $pintu_pengatur_foto = $pm_satu_amp_bindingin->pintu_pengatur_foto;
        $skala_meter_check = $pm_satu_amp_bindingin->skala_meter_check;
        $skala_meter_ket = $pm_satu_amp_bindingin->skala_meter_ket;
        $skala_meter_foto = $pm_satu_amp_bindingin->skala_meter_foto;
        $motor_penggerak_check = $pm_satu_amp_bindingin->motor_penggerak_check;
        $motor_penggerak_ket = $pm_satu_amp_bindingin->motor_penggerak_ket;
        $motor_penggerak_foto = $pm_satu_amp_bindingin->motor_penggerak_foto;
        $penggetar_check = $pm_satu_amp_bindingin->penggetar_check;
        $penggetar_ket = $pm_satu_amp_bindingin->penggetar_ket;
        $penggetar_foto = $pm_satu_amp_bindingin->penggetar_foto;
        $pengatur_kecepatan_check = $pm_satu_amp_bindingin->pengatur_kecepatan_check;
        $pengatur_kecepatan_ket = $pm_satu_amp_bindingin->pengatur_kecepatan_ket;
        $pengatur_kecepatan_foto = $pm_satu_amp_bindingin->pengatur_kecepatan_foto;
        $konstruksi_pendukung_check = $pm_satu_amp_bindingin->konstruksi_pendukung_check;
        $konstruksi_pendukung_ket = $pm_satu_amp_bindingin->konstruksi_pendukung_ket;
        $konstruksi_pendukung_foto = $pm_satu_amp_bindingin->konstruksi_pendukung_foto;
        $pelindung_bin_check = $pm_satu_amp_bindingin->pelindung_bin_check;
        $pelindung_bin_ket = $pm_satu_amp_bindingin->pelindung_bin_ket;
        $pelindung_bin_foto = $pm_satu_amp_bindingin->pelindung_bin_foto;

        $catatan_pemeriksa = $pm_satu_amp_bindingin->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_bindingin->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_bindingin->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_bindingin->foto_unit;
        $kesimpulan_check = $pm_satu_amp_bindingin->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_bindingin->kesimpulan_ket;

        $no_id = $pm_satu_amp_bindingin->no_id;
        $id_periksa = $pm_satu_amp_bindingin->id_periksa;

    }
}
?>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="foto_unit_" value="{{$foto_unit}}" />
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
                    <th></th>
                </tr>
                                
                <tr class="1_check">
                    
					<td>1</td>
                    <td>Pelat Pemisah Antar Bin</td>
                    @if($pelat_pemisah_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5"></td>	
                    @elseif($pelat_pemisah_check == '2')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5"></td>
                    @elseif($pelat_pemisah_check == '3')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5"></td>
                    @elseif($pelat_pemisah_check == '4')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5"></td>
                    @elseif($pelat_pemisah_check == '5')
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelat_pemisah_check" value="5"></td>
                       
                    @endif
                    <td>
                        <input type="text" size="50" name="pelat_pemisah_ket" class="form-control" value="">
                    </td>
                    <td>
                        <div class="col-md-1">
                            <a href="{{ asset('files') }}/{{$pelat_pemisah_foto}}" class="lightbox">
                                <img src="{{ asset('files') }}/{{$pelat_pemisah_foto}}" class="img-media" alt="">
                            </a>   
                        </div>
                        <div class="col-md-11">
                            <input type="hidden" name="pelat_pemisah_foto_" value="{{$pelat_pemisah_foto}}" /> 
                            <input type="file" class="styled" name="pelat_pemisah_foto" value="">    
                        </div>
                        

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Dinding Bin/ Hopper</td>
                    @if($dinding_bin_check == '1')
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5"></td>    
                    @elseif($dinding_bin_check == '2')
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5"></td>
                    @elseif($dinding_bin_check == '3')
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5"></td>
                    @elseif($dinding_bin_check == '4')
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5"></td>
                    @elseif($dinding_bin_check == '5')
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dinding_bin_check" value="5"></td>
                       
                    @endif
                    <td><input type="text" size="50" name="dinding_bin_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="dinding_bin_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Bukaan Pintu Bin</td>
                    @if($bukaan_pintu_check == '1')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5"></td>    
                    @elseif($bukaan_pintu_check == '2')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '3')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '4')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5"></td>
                    @elseif($bukaan_pintu_check == '5')
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bukaan_pintu_check" value="5"></td>
                       
                    @endif
                    <td><input type="text" size="50" name="bukaan_pintu_ket" class="form-control"
                    value="{{ $bukaan_pintu_ket}}"></td>

                    <td><input type="file" class="styled" name="bukaan_pintu_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Pintu Pengatur Bukaan dan Penguncinya</td>
                    @if($pintu_pengatur_check == '1')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5"></td>    
                    @elseif($pintu_pengatur_check == '2')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '3')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '4')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5"></td>
                    @elseif($pintu_pengatur_check == '5')
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengatur_check" value="5"></td>
                       
                    @endif
                    <td><input type="text" size="50" name="pintu_pengatur_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pintu_pengatur_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Skala Meter Bukaan</td>
                    @if($skala_meter_check == '1')
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5"></td>    
                    @elseif($skala_meter_check == '2')
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '3')
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '4')
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5"></td>
                    @elseif($skala_meter_check == '5')
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="skala_meter_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="skala_meter_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="skala_meter_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Motor Penggerak</td>
                    @if($motor_penggerak_check == '1')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>    
                    @elseif($motor_penggerak_check == '2')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '3')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '4')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '5')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="motor_penggerak_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_penggerak_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Penggetar</td>
                    @if($penggetar_check == '1')
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5"></td>    
                    @elseif($penggetar_check == '2')
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '3')
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '4')
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5"></td>
                    @elseif($penggetar_check == '5')
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggetar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penggetar_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="penggetar_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Pengatur Kecepatan</td>
                    @if($pengatur_kecepatan_check == '1')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5"></td>    
                    @elseif($pengatur_kecepatan_check == '2')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '3')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '4')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5"></td>
                    @elseif($pengatur_kecepatan_check == '5')
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pengatur_kecepatan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pengatur_kecepatan_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pengatur_kecepatan_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Kontruksi Pendukung / Rangka</td>
                    @if($konstruksi_pendukung_check == '1')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5"></td>    
                    @elseif($konstruksi_pendukung_check == '2')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5"></td>
                    @elseif($konstruksi_pendukung_check == '3')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5"></td>
                    @elseif($konstruksi_pendukung_check == '4')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5"></td>
                    @elseif($konstruksi_pendukung_check == '5')
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pendukung_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_pendukung_ket" class="form-control" value=""></td>
                    <td>
                        <div class="col-md-1">
                            <a href="{{ asset('files') }}/{{$foto_unit}}" class="lightbox">
                                <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media" alt="">
                            </a>   
                        </div>
                        <div class="col-md-11">
                            <input type="file" class="styled" name="konstruksi_pendukung_foto" value="">    
                        </div>
                        
                    </td>
                </tr>
                <tr class="10_check">
					<td>10</td>
                    <td>Pelindung Bin</td>
                    @if($pelindung_bin_check == '1')
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5"></td>    
                    @elseif($pelindung_bin_check == '2')
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5"></td>
                    @elseif($pelindung_bin_check == '3')
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5"></td>
                    @elseif($pelindung_bin_check == '4')
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5"></td>
                    @elseif($pelindung_bin_check == '5')
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_bin_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pelindung_bin_ket" class="form-control" value=""></td>
                    <td>
                        <div class="col-md-1">
                            <a href="{{ asset('files') }}/{{$foto_unit}}" class="lightbox">
                                <img src="{{ asset('files') }}/{{$foto_unit}}" class="img-media" alt="">
                            </a>   
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
				
				<tr class="kesimpulan_check">
                    <td width=360>Kesimpulan</td>
                    @if($kesimpulan_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_check" value="5"></td>
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
				<a href="{{ url('amp/pemeriksaan1/unitbanberjalan') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop