@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>9. Unit Timbangan (Weight Bin) Agregat Panas dan Filler</h3>
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
                    <li class="active">Unit Timbangan - {{$no_permohonan}}</li>
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
    $material_penggantung_check = '';
    $material_penggantung_ket = '';
    $material_penggantung_foto = '';
    $penunjuk_skala_check = '';
    $penunjuk_skala_ket = '';
    $penunjuk_skala_foto = '';
    $unit_hidrolis_check = '';
    $unit_hidrolis_ket = '';
    $unit_hidrolis_foto = '';
    $bin_penimbang_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $hook_bolt_check = '';
    $hook_bolt_ket = '';
    $hook_bolt_foto = '';
    $pisau_check = '';
    $pisau_ket = '';
    $pisau_foto = '';
    $karet_peredam_check = '';
    $karet_peredam_ket = '';
    $karet_peredam_foto = '';
    $penutup_antar_bin_check = '';
    $penutup_antar_bin_ket = '';
    $penutup_antar_bin_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_timbangan)) {
    if($pm_satu_amp_timbangan->kode_periksa){
        $kode_periksa = $pm_satu_amp_timbangan->kode_periksa;
        $material_penggantung_check = $pm_satu_amp_timbangan->material_penggantung_check;
        $material_penggantung_ket = $pm_satu_amp_timbangan->material_penggantung_ket;
        $material_penggantung_foto = $pm_satu_amp_timbangan->material_penggantung_foto;
        $penunjuk_skala_check = $pm_satu_amp_timbangan->penunjuk_skala_check;
        $penunjuk_skala_ket = $pm_satu_amp_timbangan->penunjuk_skala_ket;
        $penunjuk_skala_foto = $pm_satu_amp_timbangan->penunjuk_skala_foto;
        $unit_hidrolis_check = $pm_satu_amp_timbangan->unit_hidrolis_check;
        $unit_hidrolis_ket = $pm_satu_amp_timbangan->unit_hidrolis_ket;
        $unit_hidrolis_foto = $pm_satu_amp_timbangan->unit_hidrolis_foto;
        $bin_penimbang_check = $pm_satu_amp_timbangan->bin_penimbang_check;
        $bin_penimbang_ket = $pm_satu_amp_timbangan->bin_penimbang_ket;
        $bin_penimbang_foto = $pm_satu_amp_timbangan->bin_penimbang_foto;
        $hook_bolt_check = $pm_satu_amp_timbangan->hook_bolt_check;
        $hook_bolt_ket = $pm_satu_amp_timbangan->hook_bolt_ket;
        $hook_bolt_foto = $pm_satu_amp_timbangan->hook_bolt_foto;
        $pisau_check = $pm_satu_amp_timbangan->pisau_check;
        $pisau_ket = $pm_satu_amp_timbangan->pisau_ket;
        $pisau_foto = $pm_satu_amp_timbangan->pisau_foto;
        $karet_peredam_check = $pm_satu_amp_timbangan->karet_peredam_check;
        $karet_peredam_ket = $pm_satu_amp_timbangan->karet_peredam_ket;
        $karet_peredam_foto = $pm_satu_amp_timbangan->karet_peredam_foto;
        $penutup_antar_bin_check = $pm_satu_amp_timbangan->penutup_antar_bin_check;
        $penutup_antar_bin_ket = $pm_satu_amp_timbangan->penutup_antar_bin_ket;
        $penutup_antar_bin_foto = $pm_satu_amp_timbangan->penutup_antar_bin_foto;
                               
        $catatan_pemeriksa = $pm_satu_amp_timbangan->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_timbangan->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_timbangan->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_timbangan->foto_unit;
        $kesimpulan_check = $pm_satu_amp_timbangan->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_timbangan->kesimpulan_ket;

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
                    <td>Metal Penggantung</td>
                    @if($material_penggantung_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="material_penggantung_check" value="5"></td>	
                    @elseif($material_penggantung_check == '2')
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="5"></td>
                    @elseif($material_penggantung_check == '3')
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="5"></td>
                    @elseif($material_penggantung_check == '4')
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="5"></td>
                    @elseif($material_penggantung_check == '5')
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="material_penggantung_check" value="5"></td>            

                    @endif
                    <td><input type="text" size="50" name="material_penggantung_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="material_penggantung_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Penunjuk Skala (Dial)</td>
                    @if($penunjuk_skala_check == '1')
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5"></td>
                    @elseif($penunjuk_skala_check == '2')
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5"></td>
                    @elseif($penunjuk_skala_check == '3')
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5"></td>
                    @elseif($penunjuk_skala_check == '4')
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5"></td>
                    @elseif($penunjuk_skala_check == '5')
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="penunjuk_skala_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penunjuk_skala_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="penunjuk_skala_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Unit Hidrolis / Pneumatik Bukaan Timbangann</td>
                    @if($unit_hidrolis_check == '1')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @elseif($unit_hidrolis_check == '2')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @elseif($unit_hidrolis_check == '3')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @elseif($unit_hidrolis_check == '4')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="unit_hidrolis_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @elseif($unit_hidrolis_check == '5')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="unit_hidrolis_ket" class="form-control"
                    value="{{ $unit_hidrolis_ket }}"></td>

                    <td><input type="file" class="styled" name="unit_hidrolis_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Bin (Bak) Penimbang</td>
                    @if($bin_penimbang_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="bin_penimbang_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5"></td>
                    @elseif($bin_penimbang_check == '2')
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5"></td>
                    @elseif($bin_penimbang_check == '3')
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5"></td>
                    @elseif($bin_penimbang_check == '4')
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5"></td>
                    @elseif($bin_penimbang_check == '5')
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bin_penimbang_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bin_penimbang_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bin_penimbang_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Hook Bolt</td>
                    @if($hook_bolt_check == '1')
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="hook_bolt_check" value="5"></td>
                    @elseif($hook_bolt_check == '2')
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="5"></td>
                    @elseif($hook_bolt_check == '3')
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="5"></td>
                    @elseif($hook_bolt_check == '4')
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="5"></td>
                    @elseif($hook_bolt_check == '5')
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hook_bolt_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="hook_bolt_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="hook_bolt_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Pisau</td>
                    @if($pisau_check == '1')
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="5"></td>
                    @elseif($pisau_check == '2')
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="5"></td>
                    @elseif($pisau_check == '3')
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="5"></td>
                    @elseif($pisau_check == '4')
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="5"></td>
                    @elseif($pisau_check == '5')
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pisau_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pisau_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pisau_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pisau_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pisau_foto"></td>
                </tr>
                <tr class="7_check">
                    <td>7</td>
                    <td>Karet Peredam</td>
                    @if($karet_peredam_check == '1')
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5"></td>
                    @elseif($karet_peredam_check == '2')
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5"></td>
                    @elseif($karet_peredam_check == '3')
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5"></td>
                    @elseif($karet_peredam_check == '4')
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5"></td>
                    @elseif($karet_peredam_check == '5')
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="karet_peredam_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="karet_peredam_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="karet_peredam_foto"></td>
                </tr>
                <tr class="8_check">
                    <td>8</td>
                    <td>Penutup Antar Bin</td>
                    @if($penutup_antar_bin_check == '1')
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5"></td>
                    @elseif($penutup_antar_bin_check == '2')
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5"></td>
                    @elseif($penutup_antar_bin_check == '3')
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5"></td>
                    @elseif($penutup_antar_bin_check == '4')
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5"></td>
                    @elseif($penutup_antar_bin_check == '5')
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penutup_antar_bin_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penutup_antar_bin_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="penutup_antar_bin_foto"></td>
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
					<td  width=360>Kesimpulan</td>
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
                <a href="{{ url('amp/pemeriksaan1/unitbinpanas') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpencampur') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop