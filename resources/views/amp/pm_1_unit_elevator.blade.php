@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>14. Unit Elevator / Conveyor Campuran Aspal Panas (Untuk Tipe Continuos)</h3>
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
                    <li class="active">Unit Elevator - {{$no_permohonan}}</li>
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
    $mangkok_check = '';
    $mangkok_ket = '';
    $mangkok_foto = '';
    $rantai_pemutar_check = '';
    $rantai_pemutar_ket = '';
    $rantai_pemutar_foto = '';
    $sprocket_pemutar_check = '';
    $sprocket_pemutar_ket = '';
    $sprocket_pemutar_foto = '';
    $sprocket_pembantu_check = '';
    $sprocket_pembantu_ket = '';
    $sprocket_pembantu_foto = '';
    $ban_berjalan_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $roll_pemutar_check = '';
    $roll_pemutar_ket = '';
    $roll_pemutar_foto = '';
    $bearing_check = '';
    $bearing_ket = '';
    $bearing_foto = '';
    $roller_check = '';
    $roller_ket = '';
    $roller_foto = '';
    $chain_check = '';
    $chain_ket = '';
    $chain_foto = '';
    $pelindung_elevator_check = '';
    $pelindung_elevator_ket = '';
    $pelindung_elevator_foto = '';
    $vbelt_check = '';
    $vbelt_ket = '';
    $vbelt_foto = '';
    $motor_pemutar_check = '';
    $motor_pemutar_ket = '';
    $motor_pemutar_foto = '';
    $konstruksi_pelindung_check = '';
    $konstruksi_pelindung_ket = '';
    $konstruksi_pelindung_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_elevator)) {
    if($pm_satu_amp_elevator->kode_periksa){
        $kode_periksa = $pm_satu_amp_elevator->kode_periksa;
        $mangkok_check = $pm_satu_amp_elevator->mangkok_check;
        $mangkok_ket = $pm_satu_amp_elevator->mangkok_ket;
        $mangkok_foto = $pm_satu_amp_elevator->mangkok_foto;
        $rantai_pemutar_check = $pm_satu_amp_elevator->rantai_pemutar_check;
        $rantai_pemutar_ket = $pm_satu_amp_elevator->rantai_pemutar_ket;
        $rantai_pemutar_foto = $pm_satu_amp_elevator->rantai_pemutar_foto;
        $sprocket_pemutar_check = $pm_satu_amp_elevator->sprocket_pemutar_check;
        $sprocket_pemutar_ket = $pm_satu_amp_elevator->sprocket_pemutar_ket;
        $sprocket_pemutar_foto = $pm_satu_amp_elevator->sprocket_pemutar_foto;
        $sprocket_pembantu_check = $pm_satu_amp_elevator->sprocket_pembantu_check;
        $sprocket_pembantu_ket = $pm_satu_amp_elevator->sprocket_pembantu_ket;
        $sprocket_pembantu_foto = $pm_satu_amp_elevator->sprocket_pembantu_foto;
        $ban_berjalan_check = $pm_satu_amp_elevator->ban_berjalan_check;
        $ban_berjalan_ket = $pm_satu_amp_elevator->ban_berjalan_ket;
        $ban_berjalan_foto = $pm_satu_amp_elevator->ban_berjalan_foto;
        $roll_pemutar_check = $pm_satu_amp_elevator->roll_pemutar_check;
        $roll_pemutar_ket = $pm_satu_amp_elevator->roll_pemutar_ket;
        $roll_pemutar_foto = $pm_satu_amp_elevator->roll_pemutar_foto;
        $bearing_check = $pm_satu_amp_elevator->bearing_check;
        $bearing_ket = $pm_satu_amp_elevator->bearing_ket;
        $bearing_foto = $pm_satu_amp_elevator->bearing_foto;
        $roller_check = $pm_satu_amp_elevator->roller_check;
        $roller_ket = $pm_satu_amp_elevator->roller_ket;
        $roller_foto = $pm_satu_amp_elevator->roller_foto;
        $chain_check = $pm_satu_amp_elevator->chain_check;
        $chain_ket = $pm_satu_amp_elevator->chain_ket;
        $chain_foto = $pm_satu_amp_elevator->chain_foto;
        $pelindung_elevator_check = $pm_satu_amp_elevator->pelindung_elevator_check;
        $pelindung_elevator_ket = $pm_satu_amp_elevator->pelindung_elevator_ket;
        $pelindung_elevator_foto = $pm_satu_amp_elevator->pelindung_elevator_foto;
        $vbelt_check = $pm_satu_amp_elevator->vbelt_check;
        $vbelt_ket = $pm_satu_amp_elevator->vbelt_ket;
        $vbelt_foto = $pm_satu_amp_elevator->vbelt_foto;
        $motor_pemutar_check = $pm_satu_amp_elevator->motor_pemutar_check;
        $motor_pemutar_ket = $pm_satu_amp_elevator->motor_pemutar_ket;
        $motor_pemutar_foto = $pm_satu_amp_elevator->motor_pemutar_foto;
        $konstruksi_pelindung_check = $pm_satu_amp_elevator->konstruksi_pelindung_check;
        $konstruksi_pelindung_ket = $pm_satu_amp_elevator->konstruksi_pelindung_ket;
        $konstruksi_pelindung_foto = $pm_satu_amp_elevator->konstruksi_pelindung_foto;
       
        $catatan_pemeriksa = $pm_satu_amp_elevator->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_elevator->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_elevator->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_elevator->foto_unit;
        $kesimpulan_check = $pm_satu_amp_elevator->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_elevator->kesimpulan_ket;

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
                    <th width=20>Rusak Lengkap</th>
                    <th width=20>Tidak Lengkap</th>
                    <th width=20>Tidak Ada</th>
					<th width=20>Tidak Digunakan</th>
                    <th width=300>Keterangan</th>
                    <th></th>
                </tr>
                                
                <tr class="1_check">
                    <input type="hidden" name="kode_periksa" value="{{ $no_permohonan }}">
					<td>1</td>
                    <td>Mangkok (Bucket)</td>
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
                    <td><input type="file" class="styled" name="mangkok_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Rantai Pemutar (Chain)</td>
                    @if($rantai_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5"></td>
                    @elseif($rantai_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5"></td>
                    @elseif($rantai_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5"></td>
                    @elseif($rantai_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5"></td>
                    @elseif($rantai_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="rantai_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="rantai_pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="rantai_pemutar_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Sprocket Pemutar</td>
                    @if($sprocket_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5"></td>
                    @elseif($sprocket_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5"></td>
                    @elseif($sprocket_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5"></td>
                    @elseif($sprocket_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="sprocket_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5"></td>
                    @elseif($sprocket_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_pemutar_ket" class="form-control"
                    value="{{ $sprocket_pemutar_ket }}"></td>

                    <td><input type="file" class="styled" name="sprocket_pemutar_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Sprocket Pembantu</td>
                    @if($sprocket_pembantu_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5"></td>
                    @elseif($sprocket_pembantu_check == '2')
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5"></td>
                    @elseif($sprocket_pembantu_check == '3')
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5"></td>
                    @elseif($sprocket_pembantu_check == '4')
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5"></td>
                    @elseif($sprocket_pembantu_check == '5')
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_pembantu_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_pembantu_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="sprocket_pembantu_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Ban Berjalan (Belt Elevator)</td>
                    @if($ban_berjalan_check == '1')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '2')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '3')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '4')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5"></td>
                    @elseif($ban_berjalan_check == '5')
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ban_berjalan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ban_berjalan_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ban_berjalan_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Roll Pemutar</td>
                    @if($roll_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5"></td>
                    @elseif($roll_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5"></td>
                    @elseif($roll_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5"></td>
                    @elseif($roll_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5"></td>
                    @elseif($roll_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roll_pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="roll_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="roll_pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="roll_pemutar_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
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
                    <td><input type="text" size="50" name="bearing_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="bearing_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
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
                    <td><input type="file" class="styled" name="roller_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
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
                <tr class="10_check">
					<td>10</td>
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
                <tr class="11_check">
                    <td>11</td>
                    <td>Pelindung (Penutup) Elevator / Conveyor</td>
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
                    <td><input type="text" size="50" name="pelindung_elevator_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pelindung_elevator_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
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
                    <td><input type="text" size="50" name="motor_pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_pemutar_foto" value=""></td>
                </tr>
                <tr class="13_check">
                    <td>13</td>
                    <td>Konstruksi Pendukung / Rangka</td>
                    @if($konstruksi_pelindung_check == '1')
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5"></td>
                    @elseif($konstruksi_pelindung_check == '2')
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5"></td>
                    @elseif($konstruksi_pelindung_check == '3')
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5"></td>
                    @elseif($konstruksi_pelindung_check == '4')
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5"></td>
                    @elseif($konstruksi_pelindung_check == '5')
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pelindung_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_pelindung_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="konstruksi_pelindung_foto" value=""></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitbinfiller') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitsilo') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop