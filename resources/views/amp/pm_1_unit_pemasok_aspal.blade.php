@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>11. Unit Pemasok Aspal</h3>
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
                    <li class="active">Unit Pemasok Aspal - {{$no_permohonan}}</li>
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
    $termometer_check = '';
    $termometer_ket = '';
    $termometer_foto = '';
    $pompa_penyemprot_check = '';
    $pompa_penyemprot_ket = '';
    $pompa_penyemprot_foto = '';
    $pompa_transfer_check = '';
    $pompa_transfer_ket = '';
    $pompa_transfer_foto = '';
    $pompa_oli_check = '';
    $pompa_oli_ket = '';
    $pompa_oli_foto = '';
    $flow_meter_check = '';
    $flow_meter_ket = '';
    $flow_meter_foto = '';
    $pressure_meter_check = '';
    $pressure_meter_ket = '';
    $pressure_meter_foto = '';
    $valve_valve_check = '';
    $valve_valve_ket = '';
    $valve_valve_foto = '';
    $penyembur_api_check = '';
    $penyembur_api_ket = '';
    $penyembur_api_foto = '';
    $blower_burner_check = '';
    $blower_burner_ket = '';
    $blower_burner_foto = '';
    $ketel_tangki_aspal_check = '';
    $ketel_tangki_aspal_ket = '';
    $ketel_tangki_aspal_foto = '';
    $pipa_pipa_aspal_check = '';
    $pipa_pipa_aspal_ket = '';
    $pipa_pipa_aspal_foto = '';
    $ketel_tangki_minyak_check = '';
    $ketel_tangki_minyak_ket = '';
    $ketel_tangki_minyak_foto = '';
    $ketel_penimbang_check = '';
    $ketel_penimbang_ket = '';
    $ketel_penimbang_foto = '';
    $konstruksi_pendukung_check = '';
    $konstruksi_pendukung_ket = '';
    $konstruksi_pendukung_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_pemasokaspal)) {
    if($pm_satu_amp_pemasokaspal->kode_periksa){
        $kode_periksa = $pm_satu_amp_pemasokaspal->kode_periksa;
        $termometer_check = $pm_satu_amp_pemasokaspal->termometer_check;
        $termometer_ket = $pm_satu_amp_pemasokaspal->termometer_ket;
        $termometer_foto = $pm_satu_amp_pemasokaspal->termometer_foto;
        $pompa_penyemprot_check = $pm_satu_amp_pemasokaspal->pompa_penyemprot_check;
        $pompa_penyemprot_ket = $pm_satu_amp_pemasokaspal->pompa_penyemprot_ket;
        $pompa_penyemprot_foto = $pm_satu_amp_pemasokaspal->pompa_penyemprot_foto;
        $pompa_transfer_check = $pm_satu_amp_pemasokaspal->pompa_transfer_check;
        $pompa_transfer_ket = $pm_satu_amp_pemasokaspal->pompa_transfer_ket;
        $pompa_transfer_foto = $pm_satu_amp_pemasokaspal->pompa_transfer_foto;
        $pompa_oli_check = $pm_satu_amp_pemasokaspal->pompa_oli_check;
        $pompa_oli_ket = $pm_satu_amp_pemasokaspal->pompa_oli_ket;
        $pompa_oli_foto = $pm_satu_amp_pemasokaspal->pompa_oli_foto;
        $flow_meter_check = $pm_satu_amp_pemasokaspal->flow_meter_check;
        $flow_meter_ket = $pm_satu_amp_pemasokaspal->flow_meter_ket;
        $flow_meter_foto = $pm_satu_amp_pemasokaspal->flow_meter_foto;
        $pressure_meter_check = $pm_satu_amp_pemasokaspal->pressure_meter_check;
        $pressure_meter_ket = $pm_satu_amp_pemasokaspal->pressure_meter_ket;
        $pressure_meter_foto = $pm_satu_amp_pemasokaspal->pressure_meter_foto;
        $valve_valve_check = $pm_satu_amp_pemasokaspal->valve_valve_check;
        $valve_valve_ket = $pm_satu_amp_pemasokaspal->valve_valve_ket;
        $valve_valve_foto = $pm_satu_amp_pemasokaspal->valve_valve_foto;
        $penyembur_api_check = $pm_satu_amp_pemasokaspal->penyembur_api_check;
        $penyembur_api_ket = $pm_satu_amp_pemasokaspal->penyembur_api_ket;
        $penyembur_api_foto = $pm_satu_amp_pemasokaspal->penyembur_api_foto;
        $blower_burner_check = $pm_satu_amp_pemasokaspal->blower_burner_check;
        $blower_burner_ket = $pm_satu_amp_pemasokaspal->blower_burner_ket;
        $blower_burner_foto = $pm_satu_amp_pemasokaspal->blower_burner_foto;
        $ketel_tangki_aspal_check = $pm_satu_amp_pemasokaspal->ketel_tangki_aspal_check;
        $ketel_tangki_aspal_ket = $pm_satu_amp_pemasokaspal->ketel_tangki_aspal_ket;
        $ketel_tangki_aspal_foto = $pm_satu_amp_pemasokaspal->ketel_tangki_aspal_foto;
        $pipa_pipa_aspal_check = $pm_satu_amp_pemasokaspal->pipa_pipa_aspal_check;
        $pipa_pipa_aspal_ket = $pm_satu_amp_pemasokaspal->pipa_pipa_aspal_ket;
        $pipa_pipa_aspal_foto = $pm_satu_amp_pemasokaspal->pipa_pipa_aspal_foto;
        $ketel_tangki_minyak_check = $pm_satu_amp_pemasokaspal->ketel_tangki_minyak_check;
        $ketel_tangki_minyak_ket = $pm_satu_amp_pemasokaspal->ketel_tangki_minyak_ket;
        $ketel_tangki_minyak_foto = $pm_satu_amp_pemasokaspal->ketel_tangki_minyak_foto;
        $ketel_penimbang_check = $pm_satu_amp_pemasokaspal->ketel_penimbang_check;
        $ketel_penimbang_ket = $pm_satu_amp_pemasokaspal->ketel_penimbang_ket;
        $ketel_penimbang_foto = $pm_satu_amp_pemasokaspal->ketel_penimbang_foto;
        $konstruksi_pendukung_check = $pm_satu_amp_pemasokaspal->konstruksi_pendukung_check;
        $konstruksi_pendukung_ket = $pm_satu_amp_pemasokaspal->konstruksi_pendukung_ket;
        $konstruksi_pendukung_foto = $pm_satu_amp_pemasokaspal->konstruksi_pendukung_foto;
        
        $catatan_pemeriksa = $pm_satu_amp_pemasokaspal->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_pemasokaspal->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_pemasokaspal->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_pemasokaspal->foto_unit;
        $kesimpulan_check = $pm_satu_amp_pemasokaspal->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_pemasokaspal->kesimpulan_ket;

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
                    <td>Termometer</td>
                    @if($termometer_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="termometer_check" value="5"></td>	
                    @elseif($termometer_check == '2')
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="5"></td>
                    @elseif($termometer_check == '3')
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="5"></td>
                    @elseif($termometer_check == '4')
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="5"></td>
                    @elseif($termometer_check == '5')
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="termometer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="termometer_check" value="5"></td>                  

                    @endif
                    <td><input type="text" size="50" name="termometer_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="termometer_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Pompa Penyemprot (Spray) Aspal</td>
                    @if($pompa_penyemprot_check == '1')
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5"></td>
                    @elseif($pompa_penyemprot_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5"></td>
                    @elseif($pompa_penyemprot_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5"></td>
                    @elseif($pompa_penyemprot_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5"></td>
                    @elseif($pompa_penyemprot_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_penyemprot_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_penyemprot_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pompa_penyemprot_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Pompa Transfer Aspal</td>
                    @if($pompa_transfer_check == '1')
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5"></td>
                    @elseif($pompa_transfer_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5"></td>
                    @elseif($pompa_transfer_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5"></td>
                    @elseif($pompa_transfer_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="pompa_transfer_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5"></td>
                    @elseif($pompa_transfer_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_transfer_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_transfer_ket" class="form-control"
                    value="{{ $pompa_transfer_ket }}"></td>

                    <td><input type="file" class="styled" name="pompa_transfer_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Pompa Oli Pemanas Aspal</td>
                    @if($pompa_oli_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="pompa_oli_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_oli_check" value="5"></td>
                    @elseif($pompa_oli_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="5"></td>
                    @elseif($pompa_oli_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="5"></td>
                    @elseif($pompa_oli_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="5"></td>
                    @elseif($pompa_oli_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_oli_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_oli_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pompa_oli_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Flow Meter</td>
                    @if($flow_meter_check == '1')
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="flow_meter_check" value="5"></td>
                    @elseif($flow_meter_check == '2')
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="5"></td>
                    @elseif($flow_meter_check == '3')
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="5"></td>
                    @elseif($flow_meter_check == '4')
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="5"></td>
                    @elseif($flow_meter_check == '5')
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="flow_meter_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="flow_meter_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="flow_meter_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Pressure Meter</td>
                    @if($pressure_meter_check == '1')
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="5"></td>
                    @elseif($pressure_meter_check == '2')
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="5"></td>
                    @elseif($pressure_meter_check == '3')
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="5"></td>
                    @elseif($pressure_meter_check == '4')
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="5"></td>
                    @elseif($pressure_meter_check == '5')
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pressure_meter_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pressure_meter_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pressure_meter_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pressure_meter_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Valve-valve</td>
                    @if($valve_valve_check == '1')
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5"></td>
                    @elseif($valve_valve_check == '2')
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5"></td>
                    @elseif($valve_valve_check == '3')
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5"></td>
                    @elseif($valve_valve_check == '4')
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5"></td>
                    @elseif($valve_valve_check == '5')
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="valve_valve_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="valve_valve_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="valve_valve_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="valve_valve_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Penyembur Api (Burner Aspal)</td>
                    @if($penyembur_api_check == '1')
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="penyembur_api_check" value="5"></td>
                    @elseif($penyembur_api_check == '2')
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="5"></td>
                    @elseif($penyembur_api_check == '3')
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="5"></td>
                    @elseif($penyembur_api_check == '4')
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="5"></td>
                    @elseif($penyembur_api_check == '5')
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyembur_api_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penyembur_api_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="penyembur_api_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Blower Burner Aspal</td>
                    @if($blower_burner_check == '1')
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="blower_burner_check" value="5"></td>
                    @elseif($blower_burner_check == '2')
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="5"></td>
                    @elseif($blower_burner_check == '3')
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="5"></td>
                    @elseif($blower_burner_check == '4')
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="5"></td>
                    @elseif($blower_burner_check == '5')
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_burner_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="blower_burner_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="blower_burner_foto" value=""></td>
                </tr>
                <tr class="10_check">
					<td>10</td>
                    <td>Pipa-Pipa Aspal (Transfer Pump)</td>
                    @if($pipa_pipa_aspal_check == '1')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5"></td>
                    @elseif($pipa_pipa_aspal_check == '2')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5"></td>
                    @elseif($pipa_pipa_aspal_check == '3')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5"></td>
                    @elseif($pipa_pipa_aspal_check == '4')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5"></td>
                    @elseif($pipa_pipa_aspal_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pipa_pipa_aspal_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pipa_aspal_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pipa_pipa_aspal_foto" value=""></td>
                </tr>
                <tr class="11_check">
                    <td>11</td>
                    <td>Ketel Tangki Aspal</td>
                    @if($ketel_tangki_aspal_check == '1')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5"></td>
                    @elseif($ketel_tangki_aspal_check == '2')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5"></td>
                    @elseif($ketel_tangki_aspal_check == '3')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5"></td>
                    @elseif($ketel_tangki_aspal_check == '4')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5"></td>
                    @elseif($ketel_tangki_aspal_check == '5')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_aspal_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ketel_tangki_aspal_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ketel_tangki_aspal_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
                    <td>Ketel Tengki Minyak Pemanasr</td>
                    @if($ketel_tangki_minyak_check == '1')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5"></td>
                    @elseif($ketel_tangki_minyak_check == '2')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5"></td>
                    @elseif($ketel_tangki_minyak_check == '3')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5"></td>
                    @elseif($ketel_tangki_minyak_check == '4')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5"></td>
                    @elseif($ketel_tangki_minyak_check == '5')
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_tangki_minyak_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ketel_tangki_minyak_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ketel_tangki_minyak_foto" value=""></td>
                </tr>
                <tr class="13_check">
                    <td>13</td>
                    <td>Ketel Penimbang Aspal Panas</td>
                    @if($ketel_penimbang_check == '1')
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5"></td>
                    @elseif($ketel_penimbang_check == '2')
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5"></td>
                    @elseif($ketel_penimbang_check == '3')
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5"></td>
                    @elseif($ketel_penimbang_check == '4')
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5"></td>
                    @elseif($ketel_penimbang_check == '5')
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="ketel_penimbang_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="ketel_penimbang_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="ketel_penimbang_foto" value=""></td>
                </tr>
                 <tr class="14_check">
                    <td>14</td>
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
                    <td><input type="file" class="styled" name="konstruksi_pendukung_foto" value=""></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpencampur') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpemasokfiller') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop