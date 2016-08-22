@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>5. Unit Pengumpul Debu Atau Dust Collector</h3>
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
                    <li class="active">Unit Pengumpul Debu - {{$no_permohonan}}</li>
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
    $pemutar_check = '';
    $pemutar_ket = '';
    $pemutar_foto = '';
    $exhaust_fan_check = '';
    $exhaust_fan_ket = '';
    $exhaust_fan_foto = '';
    $pipa_pipa_check = '';
    $pipa_pipa_ket = '';
    $pipa_pipa_foto = '';
    $cerobong_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $tangki_air_check = '';
    $tangki_air_ket = '';
    $tangki_air_foto = '';
    $pompa_air_check = '';
    $pompa_air_ket = '';
    $pompa_air_foto = '';
    $penyemprot_air_check = '';
    $penyemprot_air_ket = '';
    $penyemprot_air_foto = '';
    $dry_scrubber_check = '';
    $dry_scrubber_ket = '';
    $dry_scrubber_foto = '';
    $konstruksi_check = '';
    $konstruksi_ket = '';
    $konstruksi_foto = '';
        
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_pengumpuldebu)) {
    if($pm_satu_amp_pengumpuldebu->kode_periksa){
        $kode_periksa = $pm_satu_amp_pengumpuldebu->kode_periksa;
        $pemutar_check = $pm_satu_amp_pengumpuldebu->pemutar_check;
        $pemutar_ket = $pm_satu_amp_pengumpuldebu->pemutar_ket;
        $pemutar_foto = $pm_satu_amp_pengumpuldebu->pemutar_foto;
        $exhaust_fan_check = $pm_satu_amp_pengumpuldebu->exhaust_fan_check;
        $exhaust_fan_ket = $pm_satu_amp_pengumpuldebu->exhaust_fan_ket;
        $exhaust_fan_foto = $pm_satu_amp_pengumpuldebu->exhaust_fan_foto;
        $pipa_pipa_check = $pm_satu_amp_pengumpuldebu->pipa_pipa_check;
        $pipa_pipa_ket = $pm_satu_amp_pengumpuldebu->pipa_pipa_ket;
        $pipa_pipa_foto = $pm_satu_amp_pengumpuldebu->pipa_pipa_foto;
        $cerobong_check = $pm_satu_amp_pengumpuldebu->cerobong_check;
        $cerobong_ket = $pm_satu_amp_pengumpuldebu->cerobong_ket;
        $cerobong_foto = $pm_satu_amp_pengumpuldebu->cerobong_foto;
        $tangki_air_check = $pm_satu_amp_pengumpuldebu->tangki_air_check;
        $tangki_air_ket = $pm_satu_amp_pengumpuldebu->tangki_air_ket;
        $tangki_air_foto = $pm_satu_amp_pengumpuldebu->tangki_air_foto;
        $pompa_air_check = $pm_satu_amp_pengumpuldebu->pompa_air_check;
        $pompa_air_ket = $pm_satu_amp_pengumpuldebu->pompa_air_ket;
        $pompa_air_foto = $pm_satu_amp_pengumpuldebu->pompa_air_foto;
        $penyemprot_air_check = $pm_satu_amp_pengumpuldebu->penyemprot_air_check;
        $penyemprot_air_ket = $pm_satu_amp_pengumpuldebu->penyemprot_air_ket;
        $penyemprot_air_foto = $pm_satu_amp_pengumpuldebu->penyemprot_air_foto;
        $dry_scrubber_check = $pm_satu_amp_pengumpuldebu->dry_scrubber_check;
        $dry_scrubber_ket = $pm_satu_amp_pengumpuldebu->dry_scrubber_ket;
        $dry_scrubber_foto = $pm_satu_amp_pengumpuldebu->dry_scrubber_foto;
        $konstruksi_check = $pm_satu_amp_pengumpuldebu->konstruksi_check;
        $konstruksi_ket = $pm_satu_amp_pengumpuldebu->konstruksi_ket;
        $konstruksi_foto = $pm_satu_amp_pengumpuldebu->konstruksi_foto;
                
        $catatan_pemeriksa = $pm_satu_amp_pengumpuldebu->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_pengumpuldebu->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_pengumpuldebu->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_pengumpuldebu->foto_unit;
        $kesimpulan_check = $pm_satu_amp_pengumpuldebu->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_pengumpuldebu->kesimpulan_ket;

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
                    <td>Pemutar (Cyclort)</td>
                    @if($pemutar_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pemutar_check" value="5"></td>	
                    @elseif($pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="5"></td>
                    @elseif($pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="5"></td>
                    @elseif($pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="5"></td>
                    @elseif($pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pemutar_check" value="5"></td>
                                        

                    @endif
                    <td><input type="text" size="50" name="pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pemutar_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Exhaust Fan</td>
                    @if($exhaust_fan_check == '1')
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5"></td>
                    @elseif($exhaust_fan_check == '2')
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5"></td>
                    @elseif($exhaust_fan_check == '3')
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5"></td>
                    @elseif($exhaust_fan_check == '4')
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5"></td>
                    @elseif($exhaust_fan_check == '5')
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="exhaust_fan_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="exhaust_fan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="exhaust_fan_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="exhaust_fan_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Pipa-Pipa Penyalur</td>
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
                    <td><input type="checkbox" class="styled"name="pipa_pipa_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @elseif($pipa_pipa_check == '5')
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pipa_pipa_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pipa_pipa_ket" class="form-control"
                    value="{{ $pipa_pipa_ket }}"></td>

                    <td><input type="file" class="styled" name="pipa_pipa_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Cerobong</td>
                    @if($cerobong_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="cerobong_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="cerobong_check" value="5"></td>
                    @elseif($cerobong_check == '2')
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="5"></td>
                    @elseif($cerobong_check == '3')
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="5"></td>
                    @elseif($cerobong_check == '4')
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="5"></td>
                    @elseif($cerobong_check == '5')
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="cerobong_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="cerobong_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="cerobong_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Tangki Air</td>
                    @if($tangki_air_check == '1')
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="tangki_air_check" value="5"></td>
                    @elseif($tangki_air_check == '2')
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="5"></td>
                    @elseif($tangki_air_check == '3')
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="5"></td>
                    @elseif($tangki_air_check == '4')
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="5"></td>
                    @elseif($tangki_air_check == '5')
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_air_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="tangki_air_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="tangki_air_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Pompa Air</td>
                    @if($pompa_air_check == '1')
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="5"></td>
                    @elseif($pompa_air_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="5"></td>
                    @elseif($pompa_air_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="5"></td>
                    @elseif($pompa_air_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="5"></td>
                    @elseif($pompa_air_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_air_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_air_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_air_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pompa_air_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Penyemprot Air</td>
                    @if($penyemprot_air_check == '1')
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5"></td>
                    @elseif($penyemprot_air_check == '2')
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5"></td>
                    @elseif($penyemprot_air_check == '3')
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5"></td>
                    @elseif($penyemprot_air_check == '4')
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5"></td>
                    @elseif($penyemprot_air_check == '5')
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="penyemprot_air_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penyemprot_air_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="penyemprot_air_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Dry Scrubber</td>
                    @if($dry_scrubber_check == '1')
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5"></td>
                    @elseif($dry_scrubber_check == '2')
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5"></td>
                    @elseif($dry_scrubber_check == '3')
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5"></td>
                    @elseif($dry_scrubber_check == '4')
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5"></td>
                    @elseif($dry_scrubber_check == '5')
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="dry_scrubber_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="dry_scrubber_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="dry_scrubber_foto"></td>
                </tr>
                <tr class="9_check">
                    <td>9</td>
                    <td>Kontruksi / Rangka</td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpemanas') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitelevatorpanas') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop