@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>7. Unit Saringan Bergetar Atau Screen</h3>
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
                    <li class="active">Unit Saringan Bergetar - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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

    $saringan_check = '';
    $saringan_ket = '';
    $saringan_foto = '';
    $vbelt_check = '';
    $vbelt_ket = '';
    $vbelt_foto = '';
    $pegas_penggetar_check = '';
    $pegas_penggetar_ket = '';
    $pegas_penggetar_foto = '';
    $motor_penggetar_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $mekanisme_penggetar_check = '';
    $mekanisme_penggetar_ket = '';
    $mekanisme_penggetar_foto = '';
    $tutup_belt_check = '';
    $tutup_belt_ket = '';
    $tutup_belt_foto = '';
    $konstruksi_check = '';
    $konstruksi_ket = '';
    $konstruksi_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_saringanbergetar)) {
    if($pm_satu_amp_saringanbergetar->kode_periksa){
        $kode_periksa = $pm_satu_amp_saringanbergetar->kode_periksa;
        $id_periksa = $pm_satu_amp_saringanbergetar->id_periksa;

        $saringan_check = $pm_satu_amp_saringanbergetar->saringan_check;
        $saringan_ket = $pm_satu_amp_saringanbergetar->saringan_ket;
        $saringan_foto = $pm_satu_amp_saringanbergetar->saringan_foto;
        $vbelt_check = $pm_satu_amp_saringanbergetar->vbelt_check;
        $vbelt_ket = $pm_satu_amp_saringanbergetar->vbelt_ket;
        $vbelt_foto = $pm_satu_amp_saringanbergetar->vbelt_foto;
        $pegas_penggetar_check = $pm_satu_amp_saringanbergetar->pegas_penggetar_check;
        $pegas_penggetar_ket = $pm_satu_amp_saringanbergetar->pegas_penggetar_ket;
        $pegas_penggetar_foto = $pm_satu_amp_saringanbergetar->pegas_penggetar_foto;
        $motor_penggetar_check = $pm_satu_amp_saringanbergetar->motor_penggetar_check;
        $motor_penggetar_ket = $pm_satu_amp_saringanbergetar->motor_penggetar_ket;
        $motor_penggetar_foto = $pm_satu_amp_saringanbergetar->motor_penggetar_foto;
        $mekanisme_penggetar_check = $pm_satu_amp_saringanbergetar->mekanisme_penggetar_check;
        $mekanisme_penggetar_ket = $pm_satu_amp_saringanbergetar->mekanisme_penggetar_ket;
        $mekanisme_penggetar_foto = $pm_satu_amp_saringanbergetar->mekanisme_penggetar_foto;
        $tutup_belt_check = $pm_satu_amp_saringanbergetar->tutup_belt_check;
        $tutup_belt_ket = $pm_satu_amp_saringanbergetar->tutup_belt_ket;
        $tutup_belt_foto = $pm_satu_amp_saringanbergetar->tutup_belt_foto;
        $konstruksi_check = $pm_satu_amp_saringanbergetar->konstruksi_check;
        $konstruksi_ket = $pm_satu_amp_saringanbergetar->konstruksi_ket;
        $konstruksi_foto = $pm_satu_amp_saringanbergetar->konstruksi_foto;
                               
        $catatan_pemeriksa = $pm_satu_amp_saringanbergetar->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_saringanbergetar->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_saringanbergetar->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_saringanbergetar->foto_unit;
        $kesimpulan_check = $pm_satu_amp_saringanbergetar->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_saringanbergetar->kesimpulan_ket;

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
                    <td>Saringan (Screen Wire Net)</td>
                    @if($saringan_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="saringan_check" value="5"></td>	
                    @elseif($saringan_check == '2')
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="5"></td>
                    @elseif($saringan_check == '3')
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="5"></td>
                    @elseif($saringan_check == '4')
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="5"></td>
                    @elseif($saringan_check == '5')
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="saringan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="saringan_check" value="5"></td>            

                    @endif
                    <td><input type="text" size="50" name="saringan_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="saringan_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
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
                <tr class="3_check">
					<td>3</td>
                    <td>Pegas Penggetar</td>
                    @if($pegas_penggetar_check == '1')
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5"></td>
                    @elseif($pegas_penggetar_check == '2')
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5"></td>
                    @elseif($pegas_penggetar_check == '3')
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5"></td>
                    @elseif($pegas_penggetar_check == '4')
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="pegas_penggetar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5"></td>
                    @elseif($pegas_penggetar_check == '5')
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pegas_penggetar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pegas_penggetar_ket" class="form-control"
                    value="{{ $pegas_penggetar_ket }}"></td>

                    <td><input type="file" class="styled" name="pegas_penggetar_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Motor Penggetar</td>
                    @if($motor_penggetar_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="motor_penggetar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5"></td>
                    @elseif($motor_penggetar_check == '2')
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5"></td>
                    @elseif($motor_penggetar_check == '3')
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5"></td>
                    @elseif($motor_penggetar_check == '4')
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5"></td>
                    @elseif($motor_penggetar_check == '5')
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggetar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="motor_penggetar_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="motor_penggetar_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Mekanisme Penggetar</td>
                    @if($mekanisme_penggetar_check == '1')
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5"></td>
                    @elseif($mekanisme_penggetar_check == '2')
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5"></td>
                    @elseif($mekanisme_penggetar_check == '3')
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5"></td>
                    @elseif($mekanisme_penggetar_check == '4')
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5"></td>
                    @elseif($mekanisme_penggetar_check == '5')
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mekanisme_penggetar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="mekanisme_penggetar_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="mekanisme_penggetar_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Tutup Belt</td>
                    @if($tutup_belt_check == '1')
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="5"></td>
                    @elseif($tutup_belt_check == '2')
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="5"></td>
                    @elseif($tutup_belt_check == '3')
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="5"></td>
                    @elseif($tutup_belt_check == '4')
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="5"></td>
                    @elseif($tutup_belt_check == '5')
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tutup_belt_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="tutup_belt_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="tutup_belt_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="tutup_belt_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Kontruksi</td>
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
                    <td><input type="text" size="50" name="konstruksi_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="konstruksi_foto"></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitelevatorpanas') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitbinpanas') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop