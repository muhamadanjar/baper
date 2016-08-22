@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>13. Unit Tenaga Penggerak</h3>
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
                    <li class="active">Unit Tenaga Penggerak - {{$no_permohonan}}</li>
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
    $generator_check = '';
    $generator_ket = '';
    $generator_foto = '';
    $mesin_check = '';
    $mesin_ket = '';
    $mesin_foto = '';
    $compressor_check = '';
    $compressor_ket = '';
    $compressor_foto = '';
    $silinder_udara_check = '';
    $silinder_udara_ket = '';
    $silinder_udara_foto = '';
    $kontrol_panel_check = '';
    $kontrol_panel_ket = '';
    $kontrol_panel_foto = '';
    $jaringan_kabel_check = '';
    $jaringan_kabel_ket = '';
    $jaringan_kabel_foto = '';
    $pipa_pipa_check = '';
    $pipa_pipa_ket = '';
    $pipa_pipa_foto = '';
    $filter_check = '';
    $filter_ket = '';
    $filter_foto = '';
    $pompa_hidrolik_check = '';
    $pompa_hidrolik_ket = '';
    $pompa_hidrolik_foto = '';
        
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_tenagapenggerak)) {
    if($pm_satu_amp_tenagapenggerak->kode_periksa){
        $kode_periksa = $pm_satu_amp_tenagapenggerak->kode_periksa;
        $generator_check = $pm_satu_amp_tenagapenggerak->generator_check;
        $generator_ket = $pm_satu_amp_tenagapenggerak->generator_ket;
        $generator_foto = $pm_satu_amp_tenagapenggerak->generator_foto;
        $mesin_check = $pm_satu_amp_tenagapenggerak->mesin_check;
        $mesin_ket = $pm_satu_amp_tenagapenggerak->mesin_ket;
        $mesin_foto = $pm_satu_amp_tenagapenggerak->mesin_foto;
        $compressor_check = $pm_satu_amp_tenagapenggerak->compressor_check;
        $compressor_ket = $pm_satu_amp_tenagapenggerak->compressor_ket;
        $compressor_foto = $pm_satu_amp_tenagapenggerak->compressor_foto;
        $silinder_udara_check = $pm_satu_amp_tenagapenggerak->silinder_udara_check;
        $silinder_udara_ket = $pm_satu_amp_tenagapenggerak->silinder_udara_ket;
        $silinder_udara_foto = $pm_satu_amp_tenagapenggerak->silinder_udara_foto;
        $kontrol_panel_check = $pm_satu_amp_tenagapenggerak->kontrol_panel_check;
        $kontrol_panel_ket = $pm_satu_amp_tenagapenggerak->kontrol_panel_ket;
        $kontrol_panel_foto = $pm_satu_amp_tenagapenggerak->kontrol_panel_foto;
        $jaringan_kabel_check = $pm_satu_amp_tenagapenggerak->jaringan_kabel_check;
        $jaringan_kabel_ket = $pm_satu_amp_tenagapenggerak->jaringan_kabel_ket;
        $jaringan_kabel_foto = $pm_satu_amp_tenagapenggerak->jaringan_kabel_foto;
        $pipa_pipa_check = $pm_satu_amp_tenagapenggerak->pipa_pipa_check;
        $pipa_pipa_ket = $pm_satu_amp_tenagapenggerak->pipa_pipa_ket;
        $pipa_pipa_foto = $pm_satu_amp_tenagapenggerak->pipa_pipa_foto;
        $filter_check = $pm_satu_amp_tenagapenggerak->filter_check;
        $filter_ket = $pm_satu_amp_tenagapenggerak->filter_ket;
        $filter_foto = $pm_satu_amp_tenagapenggerak->filter_foto;
        $pompa_hidrolik_check = $pm_satu_amp_tenagapenggerak->pompa_hidrolik_check;
        $pompa_hidrolik_ket = $pm_satu_amp_tenagapenggerak->pompa_hidrolik_ket;
        $pompa_hidrolik_foto = $pm_satu_amp_tenagapenggerak->pompa_hidrolik_foto;
                
        $catatan_pemeriksa = $pm_satu_amp_tenagapenggerak->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_tenagapenggerak->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_tenagapenggerak->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_tenagapenggerak->foto_unit;
        $kesimpulan_check = $pm_satu_amp_tenagapenggerak->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_tenagapenggerak->kesimpulan_ket;

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
                    <td>Generator</td>
                    @if($generator_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="generator_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="generator_check" value="5"></td>	
                    @elseif($generator_check == '2')
                    <td><input type="checkbox" class="styled" name="generator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="5"></td>
                    @elseif($generator_check == '3')
                    <td><input type="checkbox" class="styled" name="generator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="5"></td>
                    @elseif($generator_check == '4')
                    <td><input type="checkbox" class="styled" name="generator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="5"></td>
                    @elseif($generator_check == '5')
                    <td><input type="checkbox" class="styled" name="generator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="generator_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="generator_check" value="5"></td>                  

                    @endif
                    <td><input type="text" size="50" name="generator_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="generator_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Mesin (Enggine)</td>
                    @if($mesin_check == '1')
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="5"></td>
                    @elseif($mesin_check == '2')
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="5"></td>
                    @elseif($mesin_check == '3')
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="5"></td>
                    @elseif($mesin_check == '4')
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="5"></td>
                    @elseif($mesin_check == '5')
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="mesin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="mesin_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="mesin_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="mesin_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="mesin_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Compressor</td>
                    @if($compressor_check == '1')
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="compressor_check" value="5"></td>
                    @elseif($compressor_check == '2')
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="5"></td>
                    @elseif($compressor_check == '3')
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="5"></td>
                    @elseif($compressor_check == '4')
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="compressor_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="5"></td>
                    @elseif($compressor_check == '5')
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="compressor_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="compressor_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="compressor_ket" class="form-control"
                    value="{{ $compressor_ket }}"></td>

                    <td><input type="file" class="styled" name="compressor_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Silinder Udara</td>
                    @if($silinder_udara_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="silinder_udara_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="silinder_udara_check" value="5"></td>
                    @elseif($silinder_udara_check == '2')
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="5"></td>
                    @elseif($silinder_udara_check == '3')
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="5"></td>
                    @elseif($silinder_udara_check == '4')
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="5"></td>
                    @elseif($silinder_udara_check == '5')
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_udara_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="silinder_udara_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="silinder_udara_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Kontrol Panel</td>
                    @if($kontrol_panel_check == '1')
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5"></td>
                    @elseif($kontrol_panel_check == '2')
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5"></td>
                    @elseif($kontrol_panel_check == '3')
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5"></td>
                    @elseif($kontrol_panel_check == '4')
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5"></td>
                    @elseif($kontrol_panel_check == '5')
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kontrol_panel_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kontrol_panel_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kontrol_panel_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Jaringan Kabel</td>
                    @if($jaringan_kabel_check == '1')
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5"></td>
                    @elseif($jaringan_kabel_check == '2')
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5"></td>
                    @elseif($jaringan_kabel_check == '3')
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5"></td>
                    @elseif($jaringan_kabel_check == '4')
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5"></td>
                    @elseif($jaringan_kabel_check == '5')
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="jaringan_kabel_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="jaringan_kabel_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="jaringan_kabel_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Pipa-Pipa</td>
                    @if($pipa_pipa_check == '1')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @elseif($pipa_pipa_check == '2')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @elseif($pipa_pipa_check == '3')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @elseif($pipa_pipa_check == '4')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @elseif($pipa_pipa_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pipa_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="pipa_pipa_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Filter, Pipa-Pipa</td>
                    @if($filter_check == '1')
                    <td><input type="checkbox" class="styled" name="filter_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="filter_check" value="5"></td>
                    @elseif($filter_check == '2')
                    <td><input type="checkbox" class="styled" name="filter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="5"></td>
                    @elseif($filter_check == '3')
                    <td><input type="checkbox" class="styled" name="filter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="5"></td>
                    @elseif($filter_check == '4')
                    <td><input type="checkbox" class="styled" name="filter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="5"></td>
                    @elseif($filter_check == '5')
                    <td><input type="checkbox" class="styled" name="filter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="filter_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="filter_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="filter_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="filter_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Pompa Hidrolik</td>
                    @if($pompa_hidrolik_check == '1')
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5"></td>
                    @elseif($pompa_hidrolik_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5"></td>
                    @elseif($pompa_hidrolik_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5"></td>
                    @elseif($pompa_hidrolik_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5"></td>
                    @elseif($pompa_hidrolik_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_hidrolik_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_hidrolik_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pompa_hidrolik_foto" value=""></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpemasokfiller') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitbinfiller') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop