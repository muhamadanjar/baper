@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>2. Unit Ban Berjalan Agregat Dingin Atau Cold Conveyor</h3>
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

    $ban_berjalan_penampung_check = '';
    $ban_berjalan_penampung_ket = '';
    $ban_berjalan_penampung_foto = '';

    $alat_penimbang_check ='';
    $alat_penimbang_ket ='';
    $alat_penimbang_foto ='';

    $ban_berjalan_colector_check = '';
    $ban_berjalan_colector_ket = '';
    $ban_berjalan_colector_foto = '';

    $ban_berjalan_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';

    $ban_berjalan_feeder_check = '';
    $ban_berjalan_feeder_ket = '';
    $ban_berjalan_feeder_foto = '';

    $rol_pemutar_check  = '';
    $rol_pemutar_ket = '';
    $rol_pemutar_foto  = '';

    $motor_pemutar_check = '';
    $motor_pemutar_ket = '';
    $motor_pemutar_foto = '';

    $bearing_check = '';
    $bearing_ket = '';
    $bearing_foto = '';

    $sprocket_check = '';
    $sprocket_ket = '';
    $sprocket_foto = '';

    $roller_check = '';$roller_ket = '';$roller_foto = '';
    $gear_check ='';$gear_ket ='';$gear_foto ='';
    $v_belt_check ='';$v_belt_ket ='';$v_belt_foto ='';
    $chain_check  ='';$chain_ket  ='';$chain_foto  ='';

    $kesimpulan_check ='';
    $kesimpulan_ket ='';

    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_1 = '';
    $pemeriksaan_tahap_2 = '';

    $foto_unit = '';

if (isset($periksaduabanberjalan)) {
    if ($periksaduabanberjalan->kode_periksa) {
        $kode_periksa = $periksaduabanberjalan->kode_periksa;
        $no_id = $periksaduabanberjalan->no_id;
        $id_periksa = $periksaduabanberjalan->id_periksa;

        $ban_berjalan_penampung_check = $periksaduabanberjalan->ban_berjalan_penampung_check;
        $ban_berjalan_penampung_ket = $periksaduabanberjalan->ban_berjalan_penampung_ket;
        $ban_berjalan_penampung_foto = $periksaduabanberjalan->ban_berjalan_penampung_foto;

        $alat_penimbang_check = $periksaduabanberjalan->alat_penimbang_check;
        $alat_penimbang_ket = $periksaduabanberjalan->alat_penimbang_ket;
        $alat_penimbang_foto = $periksaduabanberjalan->alat_penimbang_foto;

        $ban_berjalan_colector_check = $periksaduabanberjalan->ban_berjalan_colector_check;
        $ban_berjalan_colector_ket = $periksaduabanberjalan->ban_berjalan_colector_ket;
        $ban_berjalan_colector_foto = $periksaduabanberjalan->ban_berjalan_colector_foto;

        $ban_berjalan_check = $periksaduabanberjalan->ban_berjalan_check;
        $ban_berjalan_ket = $periksaduabanberjalan->ban_berjalan_ket;
        $ban_berjalan_foto = $periksaduabanberjalan->ban_berjalan_foto;

        $ban_berjalan_feeder_check = $periksaduabanberjalan->ban_berjalan_feeder_check;
        $ban_berjalan_feeder_ket = $periksaduabanberjalan->ban_berjalan_feeder_ket;
        $ban_berjalan_feeder_foto = $periksaduabanberjalan->ban_berjalan_feeder_foto;

        $rol_pemutar_check = $periksaduabanberjalan->rol_pemutar_check;
        $rol_pemutar_ket = $periksaduabanberjalan->rol_pemutar_ket;
        $rol_pemutar_foto = $periksaduabanberjalan->rol_pemutar_foto;

        $motor_pemutar_check = $periksaduabanberjalan->motor_pemutar_check;
        $motor_pemutar_ket = $periksaduabanberjalan->motor_pemutar_ket;
        $motor_pemutar_foto = $periksaduabanberjalan->motor_pemutar_foto;

        $bearing_check = $periksaduabanberjalan->bearing_check;
        $bearing_ket = $periksaduabanberjalan->bearing_ket;
        $bearing_foto = $periksaduabanberjalan->bearing_foto;

        $sprocket_check = $periksaduabanberjalan->sprocket_check;
        $sprocket_ket = $periksaduabanberjalan->sprocket_ket;
        $sprocket_foto = $periksaduabanberjalan->sprocket_foto;

        $roller_check = $periksaduabanberjalan->roller_check;
        $roller_ket = $periksaduabanberjalan->roller_check;
        $roller_foto = $periksaduabanberjalan->roller_foto;

        $gear_check = $periksaduabanberjalan->gear_check;
        $gear_ket = $periksaduabanberjalan->gear_ket;
        $gear_foto = $periksaduabanberjalan->gear_foto;

        $v_belt_check = $periksaduabanberjalan->v_belt_check;
        $v_belt_ket = $periksaduabanberjalan->v_belt_ket;
        $v_belt_foto = $periksaduabanberjalan->v_belt_foto;
        $chain_check  = $periksaduabanberjalan->chain_check;
        $chain_ket  = $periksaduabanberjalan->chain_ket;
        $chain_foto  = $periksaduabanberjalan->chain_foto;

        $kesimpulan_check = $periksaduabanberjalan->kesimpulan_check;
        $kesimpulan_ket = $periksaduabanberjalan->kesimpulan_ket;

        $catatan_pemeriksa = $periksaduabanberjalan->catatan_pemeriksa;
        $harus_diperbaiki = $periksaduabanberjalan->harus_diperbaiki;
        $pemeriksaan_tahap_1 = $periksaduabanberjalan->pemeriksaan_tahap_1;
        $pemeriksaan_tahap_2 = $periksaduabanberjalan->pemeriksaan_tahap_2;

        $foto_unit = $periksaduabanberjalan->foto_unit;
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
                                
                <tr>
					<td>1</td>
                    <td>Ban Berjalan (Belt Conveyor) Penampung dari Bukaan Bin Dingin</td>
                    @if($ban_berjalan_penampung_check == '1')
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '2')
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '3')
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '4')
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5"></td>
                    @elseif($ban_berjalan_penampung_check == '5')
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_penampung_check" value="5"></td>
                    @endif								
                    <td><input type="text" size="50" name="ban_berjalan_penampung_ket" value="{{$ban_berjalan_penampung_ket}}"></td>
                </tr>
                <tr>
					<td>2</td>
                    <td>Alat Penimbang Berat Agregat</td>
                    @if($alat_penimbang_check == '1')
                    <td><input type="checkbox" name="alat_penimbang_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '2')
                    <td><input type="checkbox" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '3')
                    <td><input type="checkbox" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '4')
                    <td><input type="checkbox" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5"></td>
                    @elseif($alat_penimbang_check == '5')
                    <td><input type="checkbox" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="alat_penimbang_check" value="1"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="2"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="3"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="4"></td>
                    <td><input type="checkbox" name="alat_penimbang_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="alat_penimbang_ket" value="{{ $alat_penimbang_ket }}"></td>
                </tr>
                <tr>
					<td>3</td>
                    <td>Ban Berjalan (Belt Conveyor) Colector</td>
                    @if($ban_berjalan_colector_check == '1')
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '2')
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '3')
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '4')
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5"></td>
                    @elseif($ban_berjalan_colector_check == '5')
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_colector_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_colector_ket" 
                    value="{{$ban_berjalan_colector_ket}}"></td>
                </tr>
                <tr>
					<td>4</td>
                    <td>Ban Berjalan (Belt Conveyor) Pengantar ke Dryer</td>
                    @if($ban_berjalan_check == '1')
                    <td><input type="checkbox" name="ban_berjalan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5"></td>        
                    @elseif($ban_berjalan_check == '2')
                    <td><input type="checkbox" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '3')
                    <td><input type="checkbox" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '4')
                    <td><input type="checkbox" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '5')
                    <td><input type="checkbox" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5" checked="checked"></td>        
                    @else
                    <td><input type="checkbox" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_check" value="5"></td>		
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_ket" value="{{ $ban_berjalan_ket }}"></td>
                </tr>
                <tr>
					<td>5</td>
                    <td>Ban Berjalan (Belt Conveyor) Feeder Penuang (ke Dalam Dryer)</td>
                    @if($ban_berjalan_feeder_check == '1')
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '2')
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '3')
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '4')
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5"></td>
                    @elseif($ban_berjalan_feeder_check == '5')
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="1"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="2"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="3"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="4"></td>
                    <td><input type="checkbox" name="ban_berjalan_feeder_check" value="5"></td>
                    @endif				
                    <td><input type="text" size="50" name="ban_berjalan_feeder_ket" 
                    value="{{ $ban_berjalan_feeder_ket}}"></td>
                </tr>
                <tr>
					<td>6</td>
                    <td>Rol Pemutar</td>
                    @if($rol_pemutar_check == '1')
                    <td><input type="checkbox" name="rol_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '2')
                    <td><input type="checkbox" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '3')
                    <td><input type="checkbox" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '4')
                    <td><input type="checkbox" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5"></td>
                    @elseif($rol_pemutar_check == '5')
                    <td><input type="checkbox" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="rol_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="rol_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="rol_pemutar_ket" 
                    value="{{$rol_pemutar_ket}}"></td>
                </tr>
				<tr>
					<td>7</td>
                    <td>Motor Pemutar</td>
                    @if($motor_pemutar_check == '1')
                    <td><input type="checkbox" name="motor_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '2')
                    <td><input type="checkbox" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '3')
                    <td><input type="checkbox" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '4')
                    <td><input type="checkbox" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5"></td>
                    @elseif($motor_pemutar_check == '5')
                    <td><input type="checkbox" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="motor_pemutar_check" value="1"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="2"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="3"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="4"></td>
                    <td><input type="checkbox" name="motor_pemutar_check" value="5"></td>
                    @endif					
                    <td><input type="text" size="50" name="motor_pemutar_ket" value="{{$motor_pemutar_ket}}"></td>
                </tr>
				<tr>
					<td>8</td>
                    <td>Bearing</td>
                    @if($bearing_check == '1')
                    <td><input type="checkbox" name="bearing_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '2')
                    <td><input type="checkbox" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" name="bearing_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '3')
                    <td><input type="checkbox" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" name="bearing_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '4')
                    <td><input type="checkbox" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" name="bearing_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="bearing_check" value="5"></td>
                    @elseif($bearing_check == '5')
                    <td><input type="checkbox" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" name="bearing_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="bearing_check" value="1"></td>
                    <td><input type="checkbox" name="bearing_check" value="2"></td>
                    <td><input type="checkbox" name="bearing_check" value="3"></td>
                    <td><input type="checkbox" name="bearing_check" value="4"></td>
                    <td><input type="checkbox" name="bearing_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bearing_ket" value="{{$bearing_ket}}"></td>
                </tr>
				<tr>
					<td>9</td>
                    <td>Sprocket</td>
                    @if($sprocket_check == '1')
                    <td><input type="checkbox" name="sprocket_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '2')
                    <td><input type="checkbox" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '3')
                    <td><input type="checkbox" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '4')
                    <td><input type="checkbox" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '5')
                    <td><input type="checkbox" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" name="sprocket_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_ket" value="{{$sprocket_ket}}"></td>
                </tr>
				<tr>
					<td>10</td>
                    <td>Roller</td>
                    @if($roller_check == '1')
                    <td><input type="checkbox" name="roller_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="roller_check" value="2"></td>
                    <td><input type="checkbox" name="roller_check" value="3"></td>
                    <td><input type="checkbox" name="roller_check" value="4"></td>
                    <td><input type="checkbox" name="roller_check" value="5"></td>
                    @elseif($roller_check == '2')
                    <td><input type="checkbox" name="roller_check" value="1"></td>
                    <td><input type="checkbox" name="roller_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="roller_check" value="3"></td>
                    <td><input type="checkbox" name="roller_check" value="4"></td>
                    <td><input type="checkbox" name="roller_check" value="5"></td>
                    @elseif($roller_check == '3')
                    <td><input type="checkbox" name="roller_check" value="1"></td>
                    <td><input type="checkbox" name="roller_check" value="2"></td>
                    <td><input type="checkbox" name="roller_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="roller_check" value="4"></td>
                    <td><input type="checkbox" name="roller_check" value="5"></td>
                    @elseif($roller_check == '4')
                    <td><input type="checkbox" name="roller_check" value="1"></td>
                    <td><input type="checkbox" name="roller_check" value="2"></td>
                    <td><input type="checkbox" name="roller_check" value="3"></td>
                    <td><input type="checkbox" name="roller_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="roller_check" value="5"></td>
                    @elseif($roller_check == '5')
                    <td><input type="checkbox" name="roller_check" value="1"></td>
                    <td><input type="checkbox" name="roller_check" value="2"></td>
                    <td><input type="checkbox" name="roller_check" value="3"></td>
                    <td><input type="checkbox" name="roller_check" value="4"></td>
                    <td><input type="checkbox" name="roller_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="roller_check" value="1"></td>
                    <td><input type="checkbox" name="roller_check" value="2"></td>
                    <td><input type="checkbox" name="roller_check" value="3"></td>
                    <td><input type="checkbox" name="roller_check" value="4"></td>
                    <td><input type="checkbox" name="roller_check" value="5"></td>
                    @endif				
                    <td><input type="text" size="50" name="roller_ket" value="{{$roller_ket}}"></td>
                </tr>
				<tr>
					<td>11</td>
                    <td>Gear</td>
                    @if($gear_check == '1')
                    <td><input type="checkbox" name="gear_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="gear_check" value="2"></td>
                    <td><input type="checkbox" name="gear_check" value="3"></td>
                    <td><input type="checkbox" name="gear_check" value="4"></td>
                    <td><input type="checkbox" name="gear_check" value="5"></td>
                    @elseif($gear_check == '2')
                    <td><input type="checkbox" name="gear_check" value="1"></td>
                    <td><input type="checkbox" name="gear_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="gear_check" value="3"></td>
                    <td><input type="checkbox" name="gear_check" value="4"></td>
                    <td><input type="checkbox" name="gear_check" value="5"></td>
                    @elseif($gear_check == '3')
                    <td><input type="checkbox" name="gear_check" value="1"></td>
                    <td><input type="checkbox" name="gear_check" value="2"></td>
                    <td><input type="checkbox" name="gear_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="gear_check" value="4"></td>
                    <td><input type="checkbox" name="gear_check" value="5"></td>
                    @elseif($gear_check == '4')
                    <td><input type="checkbox" name="gear_check" value="1"></td>
                    <td><input type="checkbox" name="gear_check" value="2"></td>
                    <td><input type="checkbox" name="gear_check" value="3"></td>
                    <td><input type="checkbox" name="gear_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="gear_check" value="5"></td>
                    @elseif($gear_check == '5')
                    <td><input type="checkbox" name="gear_check" value="1"></td>
                    <td><input type="checkbox" name="gear_check" value="2"></td>
                    <td><input type="checkbox" name="gear_check" value="3"></td>
                    <td><input type="checkbox" name="gear_check" value="4"></td>
                    <td><input type="checkbox" name="gear_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="gear_check" value="1"></td>
                    <td><input type="checkbox" name="gear_check" value="2"></td>
                    <td><input type="checkbox" name="gear_check" value="3"></td>
                    <td><input type="checkbox" name="gear_check" value="4"></td>
                    <td><input type="checkbox" name="gear_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="gear_ket" value="{{$gear_ket}}"></td>
                </tr>
				<tr>
					<td>12</td>
                    <td>V-Belt</td>
                    @if($v_belt_check == '1')
                    <td><input type="checkbox" name="v_belt_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5"></td>
                    @elseif($v_belt_check == '2')
                    <td><input type="checkbox" name="v_belt_check" value="1"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5"></td>
                    @elseif($v_belt_check == '3')
                    <td><input type="checkbox" name="v_belt_check" value="1"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5"></td>
                    @elseif($v_belt_check == '4')
                    <td><input type="checkbox" name="v_belt_check" value="1"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5"></td>
                    @elseif($v_belt_check == '5')
                    <td><input type="checkbox" name="v_belt_check" value="1"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="v_belt_check" value="1"></td>
                    <td><input type="checkbox" name="v_belt_check" value="2"></td>
                    <td><input type="checkbox" name="v_belt_check" value="3"></td>
                    <td><input type="checkbox" name="v_belt_check" value="4"></td>
                    <td><input type="checkbox" name="v_belt_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="v_belt_ket" value="{{$v_belt_ket}}"></td>
                </tr>
				<tr>
					<td>13</td>
                    <td>Chain</td>
                    @if($chain_check == '1')
                    <td><input type="checkbox" name="chain_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="chain_check" value="2"></td>
                    <td><input type="checkbox" name="chain_check" value="3"></td>
                    <td><input type="checkbox" name="chain_check" value="4"></td>
                    <td><input type="checkbox" name="chain_check" value="5"></td>
                    @elseif($chain_check == '2')
                    <td><input type="checkbox" name="chain_check" value="1"></td>
                    <td><input type="checkbox" name="chain_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="chain_check" value="3"></td>
                    <td><input type="checkbox" name="chain_check" value="4"></td>
                    <td><input type="checkbox" name="chain_check" value="5"></td>
                    @elseif($chain_check == '3')
                    <td><input type="checkbox" name="chain_check" value="1"></td>
                    <td><input type="checkbox" name="chain_check" value="2"></td>
                    <td><input type="checkbox" name="chain_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="chain_check" value="4"></td>
                    <td><input type="checkbox" name="chain_check" value="5"></td>
                    @elseif($chain_check == '4')
                    <td><input type="checkbox" name="chain_check" value="1"></td>
                    <td><input type="checkbox" name="chain_check" value="2"></td>
                    <td><input type="checkbox" name="chain_check" value="3"></td>
                    <td><input type="checkbox" name="chain_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="chain_check" value="5"></td>
                    @elseif($chain_check == '5')
                    <td><input type="checkbox" name="chain_check" value="1"></td>
                    <td><input type="checkbox" name="chain_check" value="2"></td>
                    <td><input type="checkbox" name="chain_check" value="3"></td>
                    <td><input type="checkbox" name="chain_check" value="4"></td>
                    <td><input type="checkbox" name="chain_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="chain_check" value="1"></td>
                    <td><input type="checkbox" name="chain_check" value="2"></td>
                    <td><input type="checkbox" name="chain_check" value="3"></td>
                    <td><input type="checkbox" name="chain_check" value="4"></td>
                    <td><input type="checkbox" name="chain_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="chain_ket" value="{{$chain_ket}}"></td>
                </tr>
			</table>
		</div>				
		
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 
				<tr>
					<td width=360>Catatan Pemeriksa</td>
					<td colspan="5"><textarea name="catatan_pemeriksa" class="editor">
                        {{ $catatan_pemeriksa }}               
                    </textarea></td>
				</tr>
				
				<tr>
					<td>Saran Pemeriksa, Harus Diperbaiki</td>
					<td colspan="5"><input type="text" size="110%" name="harus_diperbaiki" value="{{$harus_diperbaiki}}" /></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap II</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_1" 
                    value="{{$pemeriksaan_tahap_1}}"></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap III</td>
					<td colspan="5"><input type="text" size="110%" name="pemeriksaan_tahap_2" value="{{$pemeriksaan_tahap_2}}"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				<tr>
					<td width=360>Kesimpulan</td>
                    @if($chain_check == '1')
                    <td><input type="checkbox" name="kesimpulan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($chain_check == '2')
					<td><input type="checkbox" name="kesimpulan_check" value="1"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="2" checked="checked"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="3"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($chain_check == '3')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($chain_check == '4')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($chain_check == '5')
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
				<a href="{{ url('amp/pemeriksaan2/unitbindingin') }}" class="btn btn-info">Balik</a>
				<a href="{{ url('amp/pemeriksaan2/unitpengering') }}" class="btn btn-info">Lanjut</a>
			</div>
		</div>
	</form>
	
@stop