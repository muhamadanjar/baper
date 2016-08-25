@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>4. Unit Pemanas Atau Burner</h3>
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
                    <li class="active">Unit Pemanas - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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

    $tangki_bahan_bakar_check = '';
    $tangki_bahan_bakar_ket = '';
    $tangki_bahan_bakar_foto = '';
    $pompa_bahan_bakar_check = '';
    $pompa_bahan_bakar_ket = '';
    $pompa_bahan_bakar_foto = '';
    $pipa_pipa_check = '';
    $pipa_pipa_ket = '';
    $pipa_pipa_foto = '';
    $blower_udara_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $alat_ukur_check = '';
    $alat_ukur_ket = '';
    $alat_ukur_foto = '';
    $penyemprot_check = '';
    $penyemprot_ket = '';
    $penyemprot_foto = '';
    $batu_tahan_api_check = '';
    $batu_tahan_api_ket = '';
    $batu_tahan_api_foto = '';
    $konstruksi_check = '';
    $konstruksi_ket = '';
    $konstruksi_foto = '';
        
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_unitpemanas)) {
    if($pm_satu_amp_unitpemanas->kode_periksa){
        $no_id = $pm_satu_amp_unitpemanas->no_id;
        $kode_periksa = $pm_satu_amp_unitpemanas->kode_periksa;
        $id_periksa = $pm_satu_amp_unitpemanas->id_periksa;

        $tangki_bahan_bakar_check = $pm_satu_amp_unitpemanas->tangki_bahan_bakar_check;
        $tangki_bahan_bakar_ket = $pm_satu_amp_unitpemanas->tangki_bahan_bakar_ket;
        $tangki_bahan_bakar_foto = $pm_satu_amp_unitpemanas->tangki_bahan_bakar_foto;
        $pompa_bahan_bakar_check = $pm_satu_amp_unitpemanas->pompa_bahan_bakar_check;
        $pompa_bahan_bakar_ket = $pm_satu_amp_unitpemanas->pompa_bahan_bakar_ket;
        $pompa_bahan_bakar_foto = $pm_satu_amp_unitpemanas->pompa_bahan_bakar_foto;
        $pipa_pipa_check = $pm_satu_amp_unitpemanas->pipa_pipa_check;
        $pipa_pipa_ket = $pm_satu_amp_unitpemanas->pipa_pipa_ket;
        $pipa_pipa_foto = $pm_satu_amp_unitpemanas->pipa_pipa_foto;
        $blower_udara_check = $pm_satu_amp_unitpemanas->blower_udara_check;
        $blower_udara_ket = $pm_satu_amp_unitpemanas->blower_udara_ket;
        $blower_udara_foto = $pm_satu_amp_unitpemanas->blower_udara_foto;
        $alat_ukur_check = $pm_satu_amp_unitpemanas->alat_ukur_check;
        $alat_ukur_ket = $pm_satu_amp_unitpemanas->alat_ukur_ket;
        $alat_ukur_foto = $pm_satu_amp_unitpemanas->alat_ukur_foto;
        $penyemprot_check = $pm_satu_amp_unitpemanas->penyemprot_check;
        $penyemprot_ket = $pm_satu_amp_unitpemanas->penyemprot_ket;
        $penyemprot_foto = $pm_satu_amp_unitpemanas->penyemprot_foto;
        $batu_tahan_api_check = $pm_satu_amp_unitpemanas->batu_tahan_api_check;
        $batu_tahan_api_ket = $pm_satu_amp_unitpemanas->batu_tahan_api_ket;
        $batu_tahan_api_foto = $pm_satu_amp_unitpemanas->batu_tahan_api_foto;
        $konstruksi_check = $pm_satu_amp_unitpemanas->konstruksi_check;
        $konstruksi_ket = $pm_satu_amp_unitpemanas->konstruksi_ket;
        $konstruksi_foto = $pm_satu_amp_unitpemanas->konstruksi_foto;
                
        $catatan_pemeriksa = $pm_satu_amp_unitpemanas->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_unitpemanas->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_unitpemanas->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_unitpemanas->foto_unit;
        $kesimpulan_check = $pm_satu_amp_unitpemanas->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_unitpemanas->kesimpulan_ket;

    }
}
?>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                    <input type="hidden" name="kode_periksa" value="{{ $kode_periksa }}">
					<td>1</td>
                    <td>Tangki Bahan Bakar</td>
                    @if($tangki_bahan_bakar_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5"></td>	
                    @elseif($tangki_bahan_bakar_check == '2')
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5"></td>
                    @elseif($tangki_bahan_bakar_check == '3')
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5"></td>
                    @elseif($tangki_bahan_bakar_check == '4')
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5"></td>
                    @elseif($tangki_bahan_bakar_check == '5')
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="tangki_bahan_bakar_check" value="5"></td>
                                        

                    @endif
                    <td><input type="text" size="50" name="tangki_bahan_bakar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="tangki_bahan_bakar_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Pompa Bahan Bakar</td>
                    @if($pompa_bahan_bakar_check == '1')
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5"></td>
                    @elseif($pompa_bahan_bakar_check == '2')
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5"></td>
                    @elseif($pompa_bahan_bakar_check == '3')
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5"></td>
                    @elseif($pompa_bahan_bakar_check == '4')
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5"></td>
                    @elseif($pompa_bahan_bakar_check == '5')
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pompa_bahan_bakar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pompa_bahan_bakar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pompa_bahan_bakar_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
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
                    <td>Blower Udara</td>
                    @if($blower_udara_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="blower_udara_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="blower_udara_check" value="5"></td>
                    @elseif($blower_udara_check == '2')
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="5"></td>
                    @elseif($blower_udara_check == '3')
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="5"></td>
                    @elseif($blower_udara_check == '4')
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="5"></td>
                    @elseif($blower_udara_check == '5')
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="blower_udara_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="blower_udara_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="blower_udara_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Alat Ukur (Flow Meter)</td>
                    @if($alat_ukur_check == '1')
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="alat_ukur_check" value="5"></td>
                    @elseif($alat_ukur_check == '2')
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="5"></td>
                    @elseif($alat_ukur_check == '3')
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="5"></td>
                    @elseif($alat_ukur_check == '4')
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="5"></td>
                    @elseif($alat_ukur_check == '5')
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="alat_ukur_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="alat_ukur_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="alat_ukur_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Penyemprot (Burner)</td>
                    @if($penyemprot_check == '1')
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="5"></td>
                    @elseif($penyemprot_check == '2')
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="5"></td>
                    @elseif($penyemprot_check == '3')
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="5"></td>
                    @elseif($penyemprot_check == '4')
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="5"></td>
                    @elseif($penyemprot_check == '5')
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penyemprot_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="penyemprot_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penyemprot_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="penyemprot_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Batu Tahan Api</td>
                    @if($batu_tahan_api_check == '1')
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5"></td>
                    @elseif($batu_tahan_api_check == '2')
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5"></td>
                    @elseif($batu_tahan_api_check == '3')
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5"></td>
                    @elseif($batu_tahan_api_check == '4')
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5"></td>
                    @elseif($batu_tahan_api_check == '5')
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="batu_tahan_api_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="batu_tahan_api_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="batu_tahan_api_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
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
                <a href="{{ url('amp/pemeriksaan1/unitpengering') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpengumpuldebu') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop