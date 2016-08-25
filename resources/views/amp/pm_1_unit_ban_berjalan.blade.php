@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>2. Unit Ban Berjalan Agregat Dingin atau Cold Conveyor</h3>
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
                    <li class="active">Unit Ban Berjalan - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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
    $ban_berjalan_penampung_check = '';
    $ban_berjalan_penampung_ket = '';
    $ban_berjalan_penampung_foto = '';
    $ban_berjalan_colector_check = '';
    $ban_berjalan_colector_ket = '';
    $ban_berjalan_colector_foto = '';
    $ban_berjalan_dryer_check = '';
    $ban_berjalan_dryer_ket = '';
    $ban_berjalan_dryer_foto = '';
    $ban_berjalan_feeder_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $alat_penimbang_check = '';
    $alat_penimbang_ket = '';
    $alat_penimbang_foto = '';
    $rol_pemutar_check = '';
    $rol_pemutar_ket = '';
    $rol_pemutar_foto = '';
    $motor_pemutar_check = '';
    $motor_pemutar_ket = '';
    $motor_pemutar_foto = '';
    $bearing_check = '';
    $bearing_ket = '';
    $bearing_foto = '';
    $sprocket_check = '';
    $sprocket_ket = '';
    $sprocket_foto = '';
    $roller_check = '';
    $roller_ket = '';
    $roller_foto = '';
    $gear_check = '';
    $gear_ket = '';
    $gear_foto = '';
    $chain_check = '';
    $chain_ket = '';
    $chain_foto = '';
    $vbelt_check = '';
    $vbelt_ket = '';
    $vbelt_foto = '';
    $kontruksi_pendukung_check = '';
    $kontruksi_pendukung_ket = '';
    $kontruksi_pendukung_foto = '';
    $pelindung_kontruksi_check = '';
    $pelindung_kontruksi_ket = '';
    $pelindung_kontruksi_foto= '';

    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = '';

      

if (isset($pm_satu_amp_unitbanberjalan)) {
    if($pm_satu_amp_unitbanberjalan->kode_periksa){
        $kode_periksa = $pm_satu_amp_unitbanberjalan->kode_periksa;
        $ban_berjalan_penampung_check = $pm_satu_amp_unitbanberjalan->ban_berjalan_penampung_check;
        $ban_berjalan_penampung_ket = $pm_satu_amp_unitbanberjalan->ban_berjalan_penampung_ket;
        $ban_berjalan_penampung_foto = $pm_satu_amp_unitbanberjalan->ban_berjalan_penampung_foto;
        $ban_berjalan_colector_check = $pm_satu_amp_unitbanberjalan->ban_berjalan_colector_check;
        $ban_berjalan_colector_ket = $pm_satu_amp_unitbanberjalan->ban_berjalan_colector_ket;
        $ban_berjalan_colector_foto = $pm_satu_amp_unitbanberjalan->ban_berjalan_colector_foto;
        $ban_berjalan_dryer_check = $pm_satu_amp_unitbanberjalan->ban_berjalan_dryer_check;
        $ban_berjalan_dryer_ket = $pm_satu_amp_unitbanberjalan->ban_berjalan_dryer_ket;
        $ban_berjalan_dryer_foto = $pm_satu_amp_unitbanberjalan->ban_berjalan_dryer_foto;
        $ban_berjalan_feeder_check = $pm_satu_amp_unitbanberjalan->ban_berjalan_feeder_check;
        $ban_berjalan_feeder_ket = $pm_satu_amp_unitbanberjalan->ban_berjalan_feeder_ket;
        $ban_berjalan_feeder_foto = $pm_satu_amp_unitbanberjalan->ban_berjalan_feeder_foto;
        $alat_penimbang_check = $pm_satu_amp_unitbanberjalan->alat_penimbang_check;
        $alat_penimbang_ket = $pm_satu_amp_unitbanberjalan->alat_penimbang_ket;
        $alat_penimbang_foto = $pm_satu_amp_unitbanberjalan->alat_penimbang_foto;
        $rol_pemutar_check = $pm_satu_amp_unitbanberjalan->rol_pemutar_check;
        $rol_pemutar_ket = $pm_satu_amp_unitbanberjalan->rol_pemutar_ket;
        $rol_pemutar_foto = $pm_satu_amp_unitbanberjalan->rol_pemutar_foto;
        $motor_pemutar_check = $pm_satu_amp_unitbanberjalan->motor_pemutar_check;
        $motor_pemutar_ket = $pm_satu_amp_unitbanberjalan->motor_pemutar_ket;
        $motor_pemutar_foto = $pm_satu_amp_unitbanberjalan->motor_pemutar_foto;
        $bearing_check = $pm_satu_amp_unitbanberjalan->bearing_check;
        $bearing_ket = $pm_satu_amp_unitbanberjalan->bearing_ket;
        $bearing_foto = $pm_satu_amp_unitbanberjalan->bearing_foto;
        $sprocket_check = $pm_satu_amp_unitbanberjalan->sprocket_check;
        $sprocket_ket = $pm_satu_amp_unitbanberjalan->sprocket_ket;
        $sprocket_foto = $pm_satu_amp_unitbanberjalan->sprocket_foto;
        $roller_check = $pm_satu_amp_unitbanberjalan->roller_check;
        $roller_ket = $pm_satu_amp_unitbanberjalan->roller_ket;
        $roller_foto = $pm_satu_amp_unitbanberjalan->roller_foto;
        $gear_check = $pm_satu_amp_unitbanberjalan->gear_check;
        $gear_ket = $pm_satu_amp_unitbanberjalan->gear_ket;
        $gear_foto = $pm_satu_amp_unitbanberjalan->gear_foto;
        $chain_check = $pm_satu_amp_unitbanberjalan->chain_check;
        $chain_ket = $pm_satu_amp_unitbanberjalan->chain_ket;
        $chain_foto = $pm_satu_amp_unitbanberjalan->chain_foto;
        $vbelt_check = $pm_satu_amp_unitbanberjalan->vbelt_check;
        $vbelt_ket = $pm_satu_amp_unitbanberjalan->vbelt_ket;
        $vbelt_foto = $pm_satu_amp_unitbanberjalan->vbelt_foto;
        $kontruksi_pendukung_check = $pm_satu_amp_unitbanberjalan->kontruksi_pendukung_check;
        $kontruksi_pendukung_ket = $pm_satu_amp_unitbanberjalan->kontruksi_pendukung_ket;
        $kontruksi_pendukung_foto = $pm_satu_amp_unitbanberjalan->kontruksi_pendukung_foto;
        $pelindung_kontruksi_check = $pm_satu_amp_unitbanberjalan->pelindung_kontruksi_check;
        $pelindung_kontruksi_ket = $pm_satu_amp_unitbanberjalan->pelindung_kontruksi_ket;
        $pelindung_kontruksi_foto = $pm_satu_amp_unitbanberjalan->pelindung_kontruksi_foto;

        $catatan_pemeriksa = $pm_satu_amp_unitbanberjalan->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_unitbanberjalan->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_unitbanberjalan->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_unitbanberjalan->foto_unit;
        $kesimpulan_check = $pm_satu_amp_unitbanberjalan->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_unitbanberjalan->kesimpulan_ket;

        $no_id = $pm_satu_amp_unitbanberjalan->no_id;
        $id_periksa = $pm_satu_amp_unitbanberjalan->id_periksa;

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
                    <input type="hidden" name="kode_periksa" value="{{ $kode_periksa }}">
					<td>1</td>
                    <td>Ban Berjalan (Belt Conveyor) Penampung dari Bukaan Bin Dingin</td>
                    @if($ban_berjalan_penampung_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5"></td>	
                    @elseif($ban_berjalan_penampung_check == '2')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '3')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '4')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '5')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_penampung_check" value="5"></td>
                                        

                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_penampung_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ban_berjalan_penampung_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Ban Berjalan (Belt Conveyor) Colector</td>
                    @if($ban_berjalan_colector_check == '1')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '2')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '3')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '4')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '5')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ban_berjalan_colector_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_colector_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ban_berjalan_colector_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Ban Berjalan (Belt Conveyor) Pengantar ke Dryer</td>
                    @if($ban_berjalan_dryer_check == '1')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5"></td>
                    @elseif($ban_berjalan_dryer_check == '2')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5"></td>
                    @elseif($ban_berjalan_dryer_check == '3')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5"></td>
                    @elseif($ban_berjalan_dryer_check == '4')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="ban_berjalan_dryer_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5"></td>
                    @elseif($ban_berjalan_dryer_check == '5')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_dryer_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_dryer_ket" class="form-control"
                    value="{{ $ban_berjalan_dryer_ket }}"></td>

                    <td><input type="file" class="styled" name="ban_berjalan_dryer_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Ban Berjalan (Belt Conveyor) Feeder Penuang (ke Dalam Dryer)</td>
                    @if($ban_berjalan_feeder_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '2')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '3')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '4')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '5')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_feeder_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_feeder_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ban_berjalan_feeder_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Alat Penimbang Berat Agregat</td>
                    @if($alat_penimbang_check == '1')
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '2')
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '3')
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '4')
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '5')
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_penimbang_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="alat_penimbang_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="alat_penimbang_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Rol Pemutar</td>
                    @if($rol_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rol_pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="rol_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="rol_pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="rol_pemutar_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Motor Pemutar</td>
                    @if($motor_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="motor_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="motor_pemutar_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="motor_pemutar_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Bearing</td>
                    @if($bearing_check == '1')
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '2')
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '3')
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '4')
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '5')
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bearing_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bearing_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Sprocket</td>
                    @if($sprocket_check == '1')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '2')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '3')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '4')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '5')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="sprocket_foto" value=""></td>
                </tr>
                <tr class="10_check">
					<td>10</td>
                    <td>Roller</td>
                    @if($roller_check == '1')
                    <td><input type="checkbox" class="styled" name="roller_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="5"></td>
                    @elseif($roller_check == '2')
                    <td><input type="checkbox" class="styled" name="roller_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="5"></td>
                    @elseif($roller_check == '3')
                    <td><input type="checkbox" class="styled" name="roller_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="5"></td>
                    @elseif($roller_check == '4')
                    <td><input type="checkbox" class="styled" name="roller_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="5"></td>
                    @elseif($roller_check == '5')
                    <td><input type="checkbox" class="styled" name="roller_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="roller_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roller_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="roller_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="roller_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="roller_foto" value=""></td>
                </tr>
                <tr class="11_check">
                    <td>11</td>
                    <td>Gear</td>
                    @if($gear_check == '1')
                    <td><input type="checkbox" class="styled" name="gear_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5"></td>
                    @elseif($gear_check == '2')
                    <td><input type="checkbox" class="styled" name="gear_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5"></td>
                    @elseif($gear_check == '3')
                    <td><input type="checkbox" class="styled" name="gear_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5"></td>
                    @elseif($gear_check == '4')
                    <td><input type="checkbox" class="styled" name="gear_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5"></td>
                    @elseif($gear_check == '5')
                    <td><input type="checkbox" class="styled" name="gear_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="gear_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="gear_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="gear_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="gear_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
                    <td>Chain</td>
                    @if($chain_check == '1')
                    <td><input type="checkbox" class="styled" name="chain_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5"></td>
                    @elseif($chain_check == '2')
                    <td><input type="checkbox" class="styled" name="chain_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5"></td>
                    @elseif($chain_check == '3')
                    <td><input type="checkbox" class="styled" name="chain_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5"></td>
                    @elseif($chain_check == '4')
                    <td><input type="checkbox" class="styled" name="chain_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5"></td>
                    @elseif($chain_check == '5')
                    <td><input type="checkbox" class="styled" name="chain_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="chain_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="chain_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="chain_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="chain_foto" value=""></td>
                </tr>
                <tr class="13_check">
                    <td>13</td>
                    <td>V-Belt</td>
                    @if($vbelt_check == '1')
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5"></td>
                    @elseif($vbelt_check == '2')
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5"></td>
                    @elseif($vbelt_check == '3')
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5"></td>
                    @elseif($vbelt_check == '4')
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5"></td>
                    @elseif($vbelt_check == '5')
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="vbelt_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="vbelt_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="vbelt_foto" value=""></td>
                </tr>
                <tr class="14_check">
                    <td>14</td>
                    <td>Kontruksi Pendukung / Rangka</td>
                    @if($kontruksi_pendukung_check == '1')
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5"></td>
                    @elseif($kontruksi_pendukung_check == '2')
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5"></td>
                    @elseif($kontruksi_pendukung_check == '3')
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5"></td>
                    @elseif($kontruksi_pendukung_check == '4')
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5"></td>
                    @elseif($kontruksi_pendukung_check == '5')
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontruksi_pendukung_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kontruksi_pendukung_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kontruksi_pendukung_foto" value=""></td>
                </tr>
                <tr class="15_check">
                    <td>15</td>
                    <td>Pelindung Kontruksi</td>
                    @if($pelindung_kontruksi_check == '1')
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5"></td>
                    @elseif($pelindung_kontruksi_check == '2')
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5"></td>
                    @elseif($pelindung_kontruksi_check == '3')
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5"></td>
                    @elseif($pelindung_kontruksi_check == '4')
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5"></td>
                    @elseif($pelindung_kontruksi_check == '5')
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_kontruksi_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pelindung_kontruksi_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pelindung_kontruksi_foto" value=""></td>
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
					<td><input type="checkbox" name="kesimpulan_check" value="1" checked="checked"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="2"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="3"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="4"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '2')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '3')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '4')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '5')
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
					<td><input type="file" name="foto_unit" class="styled"></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitbindingin') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpengering') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop