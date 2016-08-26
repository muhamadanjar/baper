@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>6. Unit Elevator Panas Atau Hot Elevator</h3>
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
                    <li class="active">Unit Elevator Panas - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $motor_pemutar_check = '';
    $motor_pemutar_ket = '';
    $motor_pemutar_foto = '';
    $pelindung_elevator_check = '';
    $pelindung_elevator_ket = '';
    $pelindung_elevator_foto = '';
    $konstruksi_pendukung_check = '';
    $konstruksi_pendukung_ket = '';
    $konstruksi_pendukung_foto = '';
    $pipa_pengeluaran_check = '';
    $pipa_pengeluaran_ket = '';
    $pipa_pengeluaran_foto = '';
            
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_elevatorpanas)) {
    if($pm_satu_amp_elevatorpanas->kode_periksa){
        $kode_periksa = $pm_satu_amp_elevatorpanas->kode_periksa;
        $no_id = $pm_satu_amp_elevatorpanas->no_id;
        $id_periksa = $pm_satu_amp_elevatorpanas->id_periksa;

        $mangkok_check = $pm_satu_amp_elevatorpanas->mangkok_check;
        $mangkok_ket = $pm_satu_amp_elevatorpanas->mangkok_ket;
        $mangkok_foto = $pm_satu_amp_elevatorpanas->mangkok_foto;
        $rantai_pemutar_check = $pm_satu_amp_elevatorpanas->rantai_pemutar_check;
        $rantai_pemutar_ket = $pm_satu_amp_elevatorpanas->rantai_pemutar_ket;
        $rantai_pemutar_foto = $pm_satu_amp_elevatorpanas->rantai_pemutar_foto;
        $sprocket_pemutar_check = $pm_satu_amp_elevatorpanas->sprocket_pemutar_check;
        $sprocket_pemutar_ket = $pm_satu_amp_elevatorpanas->sprocket_pemutar_ket;
        $sprocket_pemutar_foto = $pm_satu_amp_elevatorpanas->sprocket_pemutar_foto;
        $sprocket_pembantu_check = $pm_satu_amp_elevatorpanas->sprocket_pembantu_check;
        $sprocket_pembantu_ket = $pm_satu_amp_elevatorpanas->sprocket_pembantu_ket;
        $sprocket_pembantu_foto = $pm_satu_amp_elevatorpanas->sprocket_pembantu_foto;
        $motor_pemutar_check = $pm_satu_amp_elevatorpanas->motor_pemutar_check;
        $motor_pemutar_ket = $pm_satu_amp_elevatorpanas->motor_pemutar_ket;
        $motor_pemutar_foto = $pm_satu_amp_elevatorpanas->motor_pemutar_foto;
        $pelindung_elevator_check = $pm_satu_amp_elevatorpanas->pelindung_elevator_check;
        $pelindung_elevator_ket = $pm_satu_amp_elevatorpanas->pelindung_elevator_ket;
        $pelindung_elevator_foto = $pm_satu_amp_elevatorpanas->pelindung_elevator_foto;
        $konstruksi_pendukung_check = $pm_satu_amp_elevatorpanas->konstruksi_pendukung_check;
        $konstruksi_pendukung_ket = $pm_satu_amp_elevatorpanas->konstruksi_pendukung_ket;
        $konstruksi_pendukung_foto = $pm_satu_amp_elevatorpanas->konstruksi_pendukung_foto;
        $pipa_pengeluaran_check = $pm_satu_amp_elevatorpanas->pipa_pengeluaran_check;
        $pipa_pengeluaran_ket = $pm_satu_amp_elevatorpanas->pipa_pengeluaran_ket;
        $pipa_pengeluaran_foto = $pm_satu_amp_elevatorpanas->pipa_pengeluaran_foto;
                        
        $catatan_pemeriksa = $pm_satu_amp_elevatorpanas->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_elevatorpanas->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_elevatorpanas->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_elevatorpanas->foto_unit;
        $kesimpulan_check = $pm_satu_amp_elevatorpanas->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_elevatorpanas->kesimpulan_ket;

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
                    <td><input type="text" size="50" name="motor_pemutar_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_pemutar_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Pelindung (Penutup) Elevator</td>
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
                    <td><input type="checkbox" class="styled" name="pelindung_elevator_check" value="3"  checked="checked"></td>
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
                    <td><input type="file" class="styled" name="pelindung_elevator_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
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
                    <td><input type="text" size="50" name="konstruksi_pendukung_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="konstruksi_pendukung_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Pipa Pengeluaran Material Overflow</td>
                    @if($pipa_pengeluaran_check == '1')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5"></td>
                    @elseif($pipa_pengeluaran_check == '2')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5"></td>
                    @elseif($pipa_pengeluaran_check == '3')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5"></td>
                    @elseif($pipa_pengeluaran_check == '4')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5"></td>
                    @elseif($pipa_pengeluaran_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pengeluaran_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pipa_pengeluaran_foto"></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpengumpuldebu') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitsaringanbergetar') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop