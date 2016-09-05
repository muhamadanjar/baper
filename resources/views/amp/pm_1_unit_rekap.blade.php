@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Rekapitulasi Pemeriksaan Tahap I</h3>
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
                    <li class="active">Rekapitulasi - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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
    
    $kesimpulan_01_check = '';
    $kesimpulan_01_ket = '';
    $kesimpulan_01_foto = '';

    $kesimpulan_02_check = '';
    $kesimpulan_02_ket = '';
    $kesimpulan_02_foto = '';

    $kesimpulan_03_check = '';
    $kesimpulan_03_ket = '';
    $kesimpulan_03_foto = '';

    $kesimpulan_04_check = '';
    $kesimpulan_04_ket = '';
    $kesimpulan_04_foto = '';

    $kesimpulan_05_check = '';
    $kesimpulan_05_ket = '';
    $kesimpulan_05_foto = '';

    $kesimpulan_06_check = '';
    $kesimpulan_06_ket = '';
    $kesimpulan_06_foto = '';

    $kesimpulan_07_check = '';
    $kesimpulan_07_ket = '';
    $kesimpulan_07_foto = '';

    $kesimpulan_08_check = '';
    $kesimpulan_08_ket = '';
    $kesimpulan_08_foto = '';

    $kesimpulan_09_check = '';
    $kesimpulan_09_ket = '';
    $kesimpulan_09_foto = '';

    $kesimpulan_10_check = '';
    $kesimpulan_10_ket = '';
    $kesimpulan_10_foto = '';

    $kesimpulan_11_check = '';
    $kesimpulan_11_ket = '';
    $kesimpulan_11_foto = '';

    $kesimpulan_12_check = '';
    $kesimpulan_12_ket = '';
    $kesimpulan_12_foto = '';

    $kesimpulan_13_check = '';
    $kesimpulan_13_ket = '';
    $kesimpulan_13_foto = '';

    $kesimpulan_14_check = '';
    $kesimpulan_14_ket = '';
    $kesimpulan_14_foto = '';

    $kesimpulan_15_check = '';
    $kesimpulan_15_ket = '';
    $kesimpulan_15_foto = '';

    $kesimpulan_16_check = '';
    $kesimpulan_16_ket = '';
    $kesimpulan_16_foto = '';

    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 


if (isset($bin_dingin)) {
    if($bin_dingin->kode_periksa){
        $kesimpulan_01_check = $bin_dingin->kesimpulan_check;
    }
}

if (isset($ban_berjalan)) {
    if($ban_berjalan->kode_periksa){
        $kesimpulan_02_check = $ban_berjalan->kesimpulan_check;
    }
}
if (isset($pengering)) {
    if($pengering->kode_periksa){
        $kesimpulan_03_check = $pengering->kesimpulan_check;

    }
}
if (isset($pemanas)) {
    if($pemanas->kode_periksa){
        $kesimpulan_04_check = $pemanas->kesimpulan_check;

    }
}
if (isset($pengumpul_debu)) {
    if($pengumpul_debu->kode_periksa){
        $kesimpulan_05_check = $pengumpul_debu->kesimpulan_check;

    }
}
if (isset($elevator_panas)) {
    if($elevator_panas->kode_periksa){
        $kesimpulan_06_check = $elevator_panas->kesimpulan_check;

    }
}
if (isset($saringan_bergetar)) {
    if($saringan_bergetar->kode_periksa){
        $kesimpulan_07_check = $saringan_bergetar->kesimpulan_check;

    }
}

if (isset($bin_panas)) {
    if($bin_panas->kode_periksa){
        $kesimpulan_08_check = $bin_panas->kesimpulan_check;

    }
}
if (isset($timbangan)) {
    if($timbangan->kode_periksa){
        $kesimpulan_09_check = $timbangan->kesimpulan_check;

    }
}
if (isset($pencampur)) {
    if($pencampur->kode_periksa){
        $kesimpulan_10_check = $pencampur->kesimpulan_check;

    }
}
if (isset($pemasok_aspal)) {
    if($pemasok_aspal->kode_periksa){
        $kesimpulan_11_check = $pemasok_aspal->kesimpulan_check;

    }
}
if (isset($pemasok_filler)) {
    if($pemasok_filler->kode_periksa){
        $kesimpulan_12_check = $pemasok_filler->kesimpulan_check;

    }
}
if (isset($tenaga_penggerak)) {
    if($tenaga_penggerak->kode_periksa){
        $kesimpulan_13_check = $tenaga_penggerak->kesimpulan_check;

    }
}
if (isset($bin_filler)) {
    if($bin_filler->kode_periksa){
        $kesimpulan_14_check = $bin_filler->kesimpulan_check;

    }
}
if (isset($elevator)) {
    if($elevator->kode_periksa){
        $kesimpulan_15_check = $elevator->kesimpulan_check;

    }
}
if (isset($silo)) {
    if($silo->kode_periksa){
        $kesimpulan_16_check = $silo->kesimpulan_check;

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
                    <th>Unit Yang Diperiksa</th>
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
                    <td>Unit Bin Dingin Atau Cold Bin</td>
                    @if($kesimpulan_01_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5"></td>	
                    @elseif($kesimpulan_01_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5"></td>
                    @elseif($kesimpulan_01_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5"></td>
                    @elseif($kesimpulan_01_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5"></td>
                    @elseif($kesimpulan_01_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_01_check" value="5"></td>                  

                    @endif
                    <td><input type="text" size="50" name="kesimpulan_01_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_01_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Unit Ban Berjalan Agregat Dingin Atau Cold Conveyor</td>
                    @if($kesimpulan_02_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5"></td>
                    @elseif($kesimpulan_02_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5"></td>
                    @elseif($kesimpulan_02_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5"></td>
                    @elseif($kesimpulan_02_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5"></td>
                    @elseif($kesimpulan_02_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_02_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_02_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_02_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Unit Pengering Atau Dryer</td>
                    @if($kesimpulan_03_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5"></td>
                    @elseif($kesimpulan_03_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5"></td>
                    @elseif($kesimpulan_03_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5"></td>
                    @elseif($kesimpulan_03_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="kesimpulan_03_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5"></td>
                    @elseif($kesimpulan_03_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_03_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_03_ket" class="form-control"
                    value="{{ $kesimpulan_03_ket }}"></td>

                    <td><input type="file" class="styled" name="kesimpulan_03_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Unit Pemanas Atau Burner</td>
                    @if($kesimpulan_04_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5"></td>
                    @elseif($kesimpulan_04_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5"></td>
                    @elseif($kesimpulan_04_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5"></td>
                    @elseif($kesimpulan_04_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5"></td>
                    @elseif($kesimpulan_04_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_04_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_04_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_04_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Unit Pengumpul Debu Atau Dust Collector</td>
                    @if($kesimpulan_05_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5"></td>
                    @elseif($kesimpulan_05_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5"></td>
                    @elseif($kesimpulan_05_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5"></td>
                    @elseif($kesimpulan_05_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5"></td>
                    @elseif($kesimpulan_05_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_05_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_05_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_05_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Unit Elevator Panas Atau Hot Elevator</td>
                    @if($kesimpulan_06_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5"></td>
                    @elseif($kesimpulan_06_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5"></td>
                    @elseif($kesimpulan_06_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5"></td>
                    @elseif($kesimpulan_06_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5"></td>
                    @elseif($kesimpulan_06_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_06_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_06_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_06_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Unit Saringan Bergetar Atau Screen</td>
                    @if($kesimpulan_07_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5"></td>
                    @elseif($kesimpulan_07_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5"></td>
                    @elseif($kesimpulan_07_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5"></td>
                    @elseif($kesimpulan_07_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5"></td>
                    @elseif($kesimpulan_07_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="kesimpulan_07_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_07_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="kesimpulan_07_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Unit Bin Panas Atau Hot Bin</td>
                    @if($kesimpulan_08_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5"></td>
                    @elseif($kesimpulan_08_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5"></td>
                    @elseif($kesimpulan_08_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5"></td>
                    @elseif($kesimpulan_08_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5"></td>
                    @elseif($kesimpulan_08_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_08_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_08_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_08_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Unit Timbangan (Weight Bin) Agregat Panas dan Filler</td>
                    @if($kesimpulan_09_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5"></td>
                    @elseif($kesimpulan_09_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5"></td>
                    @elseif($kesimpulan_09_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5"></td>
                    @elseif($kesimpulan_09_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5"></td>
                    @elseif($kesimpulan_09_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_09_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_09_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_09_foto" value=""></td>
                </tr>
                <tr class="10_check">
					<td>10</td>
                    <td>Unit Pencampur Atau Pugmill (Mixer)</td>
                    @if($kesimpulan_10_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5"></td>
                    @elseif($kesimpulan_10_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5"></td>
                    @elseif($kesimpulan_10_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5"></td>
                    @elseif($kesimpulan_10_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5"></td>
                    @elseif($kesimpulan_10_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="kesimpulan_10_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_10_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_10_foto" value=""></td>
                </tr>
                <tr class="11_check">
                    <td>11</td>
                    <td>Unit Pemasok Aspal</td>
                    @if($kesimpulan_11_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5"></td>
                    @elseif($kesimpulan_11_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5"></td>
                    @elseif($kesimpulan_11_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5"></td>
                    @elseif($kesimpulan_11_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5"></td>
                    @elseif($kesimpulan_11_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_11_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_11_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_11_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
                    <td>Unit Pemasok Filler</td>
                    @if($kesimpulan_12_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5"></td>
                    @elseif($kesimpulan_12_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5"></td>
                    @elseif($kesimpulan_12_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5"></td>
                    @elseif($kesimpulan_12_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5"></td>
                    @elseif($kesimpulan_12_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_12_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_12_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_12_foto" value=""></td>
                </tr>
                <tr class="13_check">
                    <td>13</td>
                    <td>Unit Tenaga Penggerak</td>
                    @if($kesimpulan_13_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5"></td>
                    @elseif($kesimpulan_13_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5"></td>
                    @elseif($kesimpulan_13_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5"></td>
                    @elseif($kesimpulan_13_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5"></td>
                    @elseif($kesimpulan_13_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_13_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_13_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_13_foto" value=""></td>
                </tr>
                <tr class="14_check">
                    <td>14</td>
                    <td>Unit Bin Filler</td>
                    @if($kesimpulan_14_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5"></td>
                    @elseif($kesimpulan_14_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5"></td>
                    @elseif($kesimpulan_14_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5"></td>
                    @elseif($kesimpulan_14_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5"></td>
                    @elseif($kesimpulan_14_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_14_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_14_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_14_foto" value=""></td>
                </tr>
                <tr class="15_check">
                    <td>15</td>
                    <td>Unit Elevator / Conveyor Campuran Aspal Panas </td>
                    @if($kesimpulan_15_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5"></td>
                    @elseif($kesimpulan_15_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5"></td>
                    @elseif($kesimpulan_15_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5"></td>
                    @elseif($kesimpulan_15_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5"></td>
                    @elseif($kesimpulan_15_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_15_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_15_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_15_foto" value=""></td>
                </tr>
                <tr class="16_check">
                    <td>16</td>
                    <td>Silo (Bin) Penampung Campuran Aspal Panas</td>
                    @if($kesimpulan_16_check == '1')
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5"></td>
                    @elseif($kesimpulan_16_check == '2')
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5"></td>
                    @elseif($kesimpulan_16_check == '3')
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5"></td>
                    @elseif($kesimpulan_16_check == '4')
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5"></td>
                    @elseif($kesimpulan_16_check == '5')
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="kesimpulan_16_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="kesimpulan_16_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="kesimpulan_16_foto" value=""></td>
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