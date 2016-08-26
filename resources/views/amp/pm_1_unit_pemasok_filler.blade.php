@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>12. Unit Pemasok Filler</h3>
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
                    <li class="active">Unit Pemasok Filler - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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

    $rantai_elevator_check = '';
    $rantai_elevator_ket = '';
    $rantai_elevator_foto = '';
    $mangkok_check = '';
    $mangkok_ket = '';
    $mangkok_foto = '';
    $sprocket_check = '';
    $sprocket_ket = '';
    $sprocket_foto = '';
    $bearing_check = '';
    $bearing_ket = '';
    $bearing_foto = '';
    $motor_penggerak_check = '';
    $motor_penggerak_ket = '';
    $motor_penggerak_foto = '';
    $ulir_pengalir_check = '';
    $ulir_pengalir_ket = '';
    $ulir_pengalir_foto = '';
    $pelindung_elevator_check = '';
    $pelindung_elevator_ket = '';
    $pelindung_elevator_foto = '';
    $konstruksi_check = '';
    $konstruksi_ket = '';
    $konstruksi_foto = '';
    $corong_pengisi_check = '';
    $corong_pengisi_ket = '';
    $corong_pengisi_foto = '';
        
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_pemasokfiller)) {
    if($pm_satu_amp_pemasokfiller->kode_periksa){
        $no_id = $pm_satu_amp_pemasokfiller->no_id;
        $kode_periksa = $pm_satu_amp_pemasokfiller->kode_periksa;

        $rantai_elevator_check = $pm_satu_amp_pemasokfiller->rantai_elevator_check;
        $rantai_elevator_ket = $pm_satu_amp_pemasokfiller->rantai_elevator_ket;
        $rantai_elevator_foto = $pm_satu_amp_pemasokfiller->rantai_elevator_foto;
        $mangkok_check = $pm_satu_amp_pemasokfiller->mangkok_check;
        $mangkok_ket = $pm_satu_amp_pemasokfiller->mangkok_ket;
        $mangkok_foto = $pm_satu_amp_pemasokfiller->mangkok_foto;
        $sprocket_check = $pm_satu_amp_pemasokfiller->sprocket_check;
        $sprocket_ket = $pm_satu_amp_pemasokfiller->sprocket_ket;
        $sprocket_foto = $pm_satu_amp_pemasokfiller->sprocket_foto;
        $bearing_check = $pm_satu_amp_pemasokfiller->bearing_check;
        $bearing_ket = $pm_satu_amp_pemasokfiller->bearing_ket;
        $bearing_foto = $pm_satu_amp_pemasokfiller->bearing_foto;
        $motor_penggerak_check = $pm_satu_amp_pemasokfiller->motor_penggerak_check;
        $motor_penggerak_ket = $pm_satu_amp_pemasokfiller->motor_penggerak_ket;
        $motor_penggerak_foto = $pm_satu_amp_pemasokfiller->motor_penggerak_foto;
        $ulir_pengalir_check = $pm_satu_amp_pemasokfiller->ulir_pengalir_check;
        $ulir_pengalir_ket = $pm_satu_amp_pemasokfiller->ulir_pengalir_ket;
        $ulir_pengalir_foto = $pm_satu_amp_pemasokfiller->ulir_pengalir_foto;
        $pelindung_elevator_check = $pm_satu_amp_pemasokfiller->pelindung_elevator_check;
        $pelindung_elevator_ket = $pm_satu_amp_pemasokfiller->pelindung_elevator_ket;
        $pelindung_elevator_foto = $pm_satu_amp_pemasokfiller->pelindung_elevator_foto;
        $konstruksi_check = $pm_satu_amp_pemasokfiller->konstruksi_check;
        $konstruksi_ket = $pm_satu_amp_pemasokfiller->konstruksi_ket;
        $konstruksi_foto = $pm_satu_amp_pemasokfiller->konstruksi_foto;
        $corong_pengisi_check = $pm_satu_amp_pemasokfiller->corong_pengisi_check;
        $corong_pengisi_ket = $pm_satu_amp_pemasokfiller->corong_pengisi_ket;
        $corong_pengisi_foto = $pm_satu_amp_pemasokfiller->corong_pengisi_foto;
                
        $catatan_pemeriksa = $pm_satu_amp_pemasokfiller->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_pemasokfiller->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_pemasokfiller->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_pemasokfiller->foto_unit;
        $kesimpulan_check = $pm_satu_amp_pemasokfiller->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_pemasokfiller->kesimpulan_ket;

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
                    <td>Rantai (Chain) Elevator</td>
                    @if($rantai_elevator_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5"></td>	
                    @elseif($rantai_elevator_check == '2')
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5"></td>
                    @elseif($rantai_elevator_check == '3')
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5"></td>
                    @elseif($rantai_elevator_check == '4')
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5"></td>
                    @elseif($rantai_elevator_check == '5')
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_elevator_check" value="5"></td>                  

                    @endif
                    <td><input type="text" size="50" name="rantai_elevator_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="rantai_elevator_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Mangkok (BucKet)</td>
                    @if($mangkok_check == '1')
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="5"></td>
                    @elseif($mangkok_check == '2')
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="5"></td>
                    @elseif($mangkok_check == '3')
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="5"></td>
                    @elseif($mangkok_check == '4')
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="5"></td>
                    @elseif($mangkok_check == '5')
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mangkok_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="mangkok_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="mangkok_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="mangkok_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
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
                    <td><input type="checkbox" class="styled"name="sprocket_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '5')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_ket" class="form-control"
                    value="{{ $sprocket_ket }}"></td>

                    <td><input type="file" class="styled" name="sprocket_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Bearing</td>
                    @if($bearing_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="bearing_check" value="1" checked="checked"></td>
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
                    <td><input type="text" size="50" name="bearing_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bearing_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
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
                    <td><input type="text" size="50" name="motor_penggerak_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_penggerak_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Ulir Pengalir Filler</td>
                    @if($ulir_pengalir_check == '1')
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5"></td>
                    @elseif($ulir_pengalir_check == '2')
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5"></td>
                    @elseif($ulir_pengalir_check == '3')
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5"></td>
                    @elseif($ulir_pengalir_check == '4')
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5"></td>
                    @elseif($ulir_pengalir_check == '5')
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ulir_pengalir_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ulir_pengalir_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ulir_pengalir_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Pelindung Elevator</td>
                    @if($pelindung_elevator_check == '1')
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5"></td>
                    @elseif($pelindung_elevator_check == '2')
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5"></td>
                    @elseif($pelindung_elevator_check == '3')
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5"></td>
                    @elseif($pelindung_elevator_check == '4')
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5"></td>
                    @elseif($pelindung_elevator_check == '5')
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pelindung_elevator_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="pelindung_elevator_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Konstruksi / Rangka</td>
                    @if($konstruksi_check == '1')
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="konstruksi_check" value="5"></td>
                    @elseif($konstruksi_check == '2')
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="5"></td>
                    @elseif($konstruksi_check == '3')
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="5"></td>
                    @elseif($konstruksi_check == '4')
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="5"></td>
                    @elseif($konstruksi_check == '5')
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="konstruksi_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Corong Pengisi Filler</td>
                    @if($corong_pengisi_check == '1')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '2')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '3')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '4')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '5')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="corong_pengisi_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="corong_pengisi_foto" value=""></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpemasokaspal') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unittenagapenggerak') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop