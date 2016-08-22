@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>8. Unit Bin Panas Atau Hot Bin</h3>
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
                    <li class="active">Unit Bin Panas - {{$no_permohonan}}</li>
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
    $hopper_bin_check = '';
    $hopper_bin_ket = '';
    $hopper_bin_foto = '';
    $pipa_pengeluaran_oversize_check = '';
    $pipa_pengeluaran_oversize_ket = '';
    $pipa_pengeluaran_oversize_foto = '';
    $pintu_pengeluaran_check = '';
    $pintu_pengeluaran_ket = '';
    $pintu_pengeluaran_foto = '';
    $termometer_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $unit_hidrolis_check = '';
    $unit_hidrolis_ket = '';
    $unit_hidrolis_foto = '';
    $konstruksi_check = '';
    $konstruksi_ket = '';
    $konstruksi_foto = '';
    $pipa_pengeluaran_overflow_check = '';
    $pipa_pengeluaran_overflow_ket = '';
    $pipa_pengeluaran_overflow_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_binpanas)) {
    if($pm_satu_amp_binpanas->kode_periksa){
        $kode_periksa = $pm_satu_amp_binpanas->kode_periksa;
        $hopper_bin_check = $pm_satu_amp_binpanas->hopper_bin_check;
        $hopper_bin_ket = $pm_satu_amp_binpanas->hopper_bin_ket;
        $hopper_bin_foto = $pm_satu_amp_binpanas->hopper_bin_foto;
        $pipa_pengeluaran_oversize_check = $pm_satu_amp_binpanas->pipa_pengeluaran_oversize_check;
        $pipa_pengeluaran_oversize_ket = $pm_satu_amp_binpanas->pipa_pengeluaran_oversize_ket;
        $pipa_pengeluaran_oversize_foto = $pm_satu_amp_binpanas->pipa_pengeluaran_oversize_foto;
        $pintu_pengeluaran_check = $pm_satu_amp_binpanas->pintu_pengeluaran_check;
        $pintu_pengeluaran_ket = $pm_satu_amp_binpanas->pintu_pengeluaran_ket;
        $pintu_pengeluaran_foto = $pm_satu_amp_binpanas->pintu_pengeluaran_foto;
        $termometer_check = $pm_satu_amp_binpanas->termometer_check;
        $termometer_ket = $pm_satu_amp_binpanas->termometer_ket;
        $termometer_foto = $pm_satu_amp_binpanas->termometer_foto;
        $unit_hidrolis_check = $pm_satu_amp_binpanas->unit_hidrolis_check;
        $unit_hidrolis_ket = $pm_satu_amp_binpanas->unit_hidrolis_ket;
        $unit_hidrolis_foto = $pm_satu_amp_binpanas->unit_hidrolis_foto;
        $konstruksi_check = $pm_satu_amp_binpanas->konstruksi_check;
        $konstruksi_ket = $pm_satu_amp_binpanas->konstruksi_ket;
        $konstruksi_foto = $pm_satu_amp_binpanas->konstruksi_foto;
        $pipa_pengeluaran_overflow_check = $pm_satu_amp_binpanas->pipa_pengeluaran_overflow_check;
        $pipa_pengeluaran_overflow_ket = $pm_satu_amp_binpanas->pipa_pengeluaran_overflow_ket;
        $pipa_pengeluaran_overflow_foto = $pm_satu_amp_binpanas->pipa_pengeluaran_overflow_foto;
                               
        $catatan_pemeriksa = $pm_satu_amp_binpanas->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_binpanas->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_binpanas->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_binpanas->foto_unit;
        $kesimpulan_check = $pm_satu_amp_binpanas->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_binpanas->kesimpulan_ket;

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
                    <td>Hopper Bin</td>
                    @if($hopper_bin_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>	
                    @elseif($hopper_bin_check == '2')
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>
                    @elseif($hopper_bin_check == '3')
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>
                    @elseif($hopper_bin_check == '4')
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>
                    @elseif($hopper_bin_check == '5')
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>            

                    @endif
                    <td><input type="text" size="50" name="hopper_bin_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="hopper_bin_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Pipa Pengeluaran Material Oversize</td>
                    @if($pipa_pengeluaran_oversize_check == '1')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5"></td>
                    @elseif($pipa_pengeluaran_oversize_check == '2')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5"></td>
                    @elseif($pipa_pengeluaran_oversize_check == '3')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5"></td>
                    @elseif($pipa_pengeluaran_oversize_check == '4')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5"></td>
                    @elseif($pipa_pengeluaran_oversize_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pipa_pengeluaran_oversize_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pengeluaran_oversize_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pipa_pengeluaran_oversize_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Pintu Pengeluaran</td>
                    @if($pintu_pengeluaran_check == '1')
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5"></td>
                    @elseif($pintu_pengeluaran_check == '2')
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5"></td>
                    @elseif($pintu_pengeluaran_check == '3')
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5"></td>
                    @elseif($pintu_pengeluaran_check == '4')
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="pintu_pengeluaran_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5"></td>
                    @elseif($pintu_pengeluaran_check == '5')
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_pengeluaran_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pintu_pengeluaran_ket" class="form-control"
                    value="{{ $pintu_pengeluaran_ket }}"></td>

                    <td><input type="file" class="styled" name="pintu_pengeluaran_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Termometer</td>
                    @if($termometer_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="termometer_check" value="1" checked="checked"></td>
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
                    <td><input type="text" size="50" name="termometer_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="termometer_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Unit Hidrolis Bukaan Pintu</td>
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
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @elseif($unit_hidrolis_check == '5')
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="unit_hidrolis_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="unit_hidrolis_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="unit_hidrolis_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
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
                    <td><input type="checkbox" class="styled" name="konstruksi_check" value="3"  checked="checked"></td>
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
                <tr class="7_check">
				    <td>7</td>
                    <td>Pipa Pengeluaran Material Overflow</td>
                    @if($pipa_pengeluaran_overflow_check == '1')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5"></td>
                    @elseif($pipa_pengeluaran_overflow_check == '2')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5"></td>
                    @elseif($pipa_pengeluaran_overflow_check == '3')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5"></td>
                    @elseif($pipa_pengeluaran_overflow_check == '4')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5"></td>
                    @elseif($pipa_pengeluaran_overflow_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="pipa_pengeluaran_overflow_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pengeluaran_overflow_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="pipa_pengeluaran_overflow_foto"></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitsaringanbergetar') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unittimbangan') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop