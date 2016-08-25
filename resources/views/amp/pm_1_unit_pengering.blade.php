@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>3. Unit Pengering Atau Dryer</h3>
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
                    <li class="active">Unit Pengering - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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
    $corong_pengisi_check = '';
    $corong_pengisi_ket = '';
    $corong_pengisi_foto = '';
    $corong_pengeluaran_check = '';
    $corong_pengeluaran_ket = '';
    $corong_pengeluaran_foto = '';
    $silinder_pengering_check = '';
    $silinder_pengering_ket = '';
    $silinder_pengering_foto = '';
    $sudu_sudu_check = '';
    $ban_berjalan_ket = '';
    $ban_berjalan_foto = '';
    $roda_gigi_pemutar_check = '';
    $roda_gigi_pemutar_ket = '';
    $roda_gigi_pemutar_foto = '';
    $roda_gigi_ring_check = '';
    $roda_gigi_ring_ket = '';
    $roda_gigi_ring_foto = '';
    $motor_penggerak_check = '';
    $motor_penggerak_ket = '';
    $motor_penggerak_foto = '';
    $bantalan_rol_check = '';
    $bantalan_rol_ket = '';
    $bantalan_rol_foto = '';
    $bantalan_rol_penahan_check = '';
    $bantalan_rol_penahan_ket = '';
    $bantalan_rol_penahan_foto = '';
    $chain_check = '';
    $chain_ket = '';
    $chain_foto = '';
    $bearing_check = '';
    $bearing_ket = '';
    $bearing_foto = '';
    $konstruksi_rangka_check = '';
    $konstruksi_rangka_ket = '';
    $konstruksi_rangka_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_pengering)) {
    if($pm_satu_amp_pengering->kode_periksa){
        $no_id = $pm_satu_amp_pengering->no_id;
        $kode_periksa = $pm_satu_amp_pengering->kode_periksa;
        
        $corong_pengisi_check = $pm_satu_amp_pengering->corong_pengisi_check;
        $corong_pengisi_ket = $pm_satu_amp_pengering->corong_pengisi_ket;
        $corong_pengisi_foto = $pm_satu_amp_pengering->corong_pengisi_foto;
        $corong_pengeluaran_check = $pm_satu_amp_pengering->corong_pengeluaran_check;
        $corong_pengeluaran_ket = $pm_satu_amp_pengering->corong_pengeluaran_ket;
        $corong_pengeluaran_foto = $pm_satu_amp_pengering->corong_pengeluaran_foto;
        $silinder_pengering_check = $pm_satu_amp_pengering->silinder_pengering_check;
        $silinder_pengering_ket = $pm_satu_amp_pengering->silinder_pengering_ket;
        $silinder_pengering_foto = $pm_satu_amp_pengering->silinder_pengering_foto;
        $sudu_sudu_check = $pm_satu_amp_pengering->sudu_sudu_check;
        $sudu_sudu_ket = $pm_satu_amp_pengering->sudu_sudu_ket;
        $sudu_sudu_foto = $pm_satu_amp_pengering->sudu_sudu_foto;
        $roda_gigi_pemutar_check = $pm_satu_amp_pengering->roda_gigi_pemutar_check;
        $roda_gigi_pemutar_ket = $pm_satu_amp_pengering->roda_gigi_pemutar_ket;
        $roda_gigi_pemutar_foto = $pm_satu_amp_pengering->roda_gigi_pemutar_foto;
        $roda_gigi_ring_check = $pm_satu_amp_pengering->roda_gigi_ring_check;
        $roda_gigi_ring_ket = $pm_satu_amp_pengering->roda_gigi_ring_ket;
        $roda_gigi_ring_foto = $pm_satu_amp_pengering->roda_gigi_ring_foto;
        $motor_penggerak_check = $pm_satu_amp_pengering->motor_penggerak_check;
        $motor_penggerak_ket = $pm_satu_amp_pengering->motor_penggerak_ket;
        $motor_penggerak_foto = $pm_satu_amp_pengering->motor_penggerak_foto;
        $bantalan_rol_check = $pm_satu_amp_pengering->bantalan_rol_check;
        $bantalan_rol_ket = $pm_satu_amp_pengering->bantalan_rol_ket;
        $bantalan_rol_foto = $pm_satu_amp_pengering->bantalan_rol_foto;
        $bantalan_rol_penahan_check = $pm_satu_amp_pengering->bantalan_rol_penahan_check;
        $bantalan_rol_penahan_ket = $pm_satu_amp_pengering->bantalan_rol_penahan_ket;
        $bantalan_rol_penahan_foto = $pm_satu_amp_pengering->bantalan_rol_penahan_foto;
        $chain_check = $pm_satu_amp_pengering->chain_check;
        $chain_ket = $pm_satu_amp_pengering->chain_ket;
        $chain_foto = $pm_satu_amp_pengering->chain_foto;
        $bearing_check = $pm_satu_amp_pengering->bearing_check;
        $bearing_ket = $pm_satu_amp_pengering->bearing_ket;
        $bearing_foto = $pm_satu_amp_pengering->bearing_foto;
        $konstruksi_rangka_check = $pm_satu_amp_pengering->konstruksi_rangka_check;
        $konstruksi_rangka_ket = $pm_satu_amp_pengering->konstruksi_rangka_ket;
        $konstruksi_rangka_foto = $pm_satu_amp_pengering->konstruksi_rangka_foto;
        
        $catatan_pemeriksa = $pm_satu_amp_pengering->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_pengering->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_pengering->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_pengering->foto_unit;
        $kesimpulan_check = $pm_satu_amp_pengering->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_pengering->kesimpulan_ket;

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
                    
					<td>1</td>
                    <td>Corong Pengisi (Charging Cute)</td>
                    @if($corong_pengisi_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>	
                    @elseif($corong_pengisi_check == '2')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '3')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '4')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                    @elseif($corong_pengisi_check == '5')
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengisi_check" value="5"></td>
                                        

                    @endif
                    <td><input type="text" size="50" name="corong_pengisi_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="corong_pengisi_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Corong Pengeluaran (Discharging Cute)</td>
                    @if($corong_pengeluaran_check == '1')
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5"></td>
                    @elseif($corong_pengeluaran_check == '2')
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5"></td>
                    @elseif($corong_pengeluaran_check == '3')
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5"></td>
                    @elseif($corong_pengeluaran_check == '4')
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5"></td>
                    @elseif($corong_pengeluaran_check == '5')
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="corong_pengeluaran_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="corong_pengeluaran_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="corong_pengeluaran_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Silinder Pengering (Drum Dryer)</td>
                    @if($silinder_pengering_check == '1')
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5"></td>
                    @elseif($silinder_pengering_check == '2')
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5"></td>
                    @elseif($silinder_pengering_check == '3')
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5"></td>
                    @elseif($silinder_pengering_check == '4')
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="silinder_pengering_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5"></td>
                    @elseif($silinder_pengering_check == '5')
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="silinder_pengering_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="silinder_pengering_ket" class="form-control"
                    value="{{ $silinder_pengering_ket }}"></td>

                    <td><input type="file" class="styled" name="silinder_pengering_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Sudu-Sudu (Flight Cup)</td>
                    @if($sudu_sudu_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="sudu_sudu_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5"></td>
                    @elseif($sudu_sudu_check == '2')
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5"></td>
                    @elseif($sudu_sudu_check == '3')
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5"></td>
                    @elseif($sudu_sudu_check == '4')
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5"></td>
                    @elseif($sudu_sudu_check == '5')
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sudu_sudu_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sudu_sudu_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="sudu_sudu_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Roda Gigi Pemutar (bantalan_rol Wheel)</td>
                    @if($roda_gigi_pemutar_check == '1')
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5"></td>
                    @elseif($roda_gigi_pemutar_check == '2')
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5"></td>
                    @elseif($roda_gigi_pemutar_check == '3')
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5"></td>
                    @elseif($roda_gigi_pemutar_check == '4')
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5"></td>
                    @elseif($roda_gigi_pemutar_check == '5')
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_pemutar_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="roda_gigi_pemutar_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="roda_gigi_pemutar_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
                    <td>Roda Gigi Ring (Ring bearing)</td>
                    @if($roda_gigi_ring_check == '1')
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5"></td>
                    @elseif($roda_gigi_ring_check == '2')
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5"></td>
                    @elseif($roda_gigi_ring_check == '3')
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"  checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5"></td>
                    @elseif($roda_gigi_ring_check == '4')
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5"></td>
                    @elseif($roda_gigi_ring_check == '5')
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="roda_gigi_ring_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="roda_gigi_ring_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="roda_gigi_ring_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Motor Penggerak (Pemutar)</td>
                    @if($motor_penggerak_check == '1')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '2')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '3')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '4')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @elseif($motor_penggerak_check == '5')
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="motor_penggerak_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="motor_penggerak_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="motor_penggerak_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Bantalan Rol (Turnmion Roler Bearing)</td>
                    @if($bantalan_rol_check == '1')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5"></td>
                    @elseif($bantalan_rol_check == '2')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5"></td>
                    @elseif($bantalan_rol_check == '3')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5"></td>
                    @elseif($bantalan_rol_check == '4')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5"></td>
                    @elseif($bantalan_rol_check == '5')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bantalan_rol_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bantalan_rol_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Bantalan Rol Penahan (Trust Roller Bearing)</td>
                    @if($bantalan_rol_penahan_check == '1')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5"></td>
                    @elseif($bantalan_rol_penahan_check == '2')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5"></td>
                    @elseif($bantalan_rol_penahan_check == '3')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5"></td>
                    @elseif($bantalan_rol_penahan_check == '4')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5"></td>
                    @elseif($bantalan_rol_penahan_check == '5')
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bantalan_rol_penahan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bantalan_rol_penahan_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bantalan_rol_penahan_foto" value=""></td>
                </tr>
                <tr class="10_check">
					<td>10</td>
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
                <tr class="11_check">
                    <td>11</td>
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
                    <td><input type="text" size="50" name="bearing_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bearing_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
                    <td>Kontruksi / Rangka</td>
                    @if($konstruksi_rangka_check == '1')
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5"></td>
                    @elseif($konstruksi_rangka_check == '2')
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5"></td>
                    @elseif($konstruksi_rangka_check == '3')
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5"></td>
                    @elseif($konstruksi_rangka_check == '4')
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5"></td>
                    @elseif($konstruksi_rangka_check == '5')
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_rangka_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_rangka_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="konstruksi_rangka_foto" value=""></td>
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
					<td colspan="5"><input type="text" size="110%" name="harus_diperbaiki" class="form-control"
                    value="{{ $harus_diperbaiki }}" /></td>
				</tr>
				<tr>
					<td>Siap Pemeriksaan Tahap II</td>
					<td colspan="5"><input type="text" class="form-control" size="110%" name="pemeriksaan_tahap_2" value="{{ $pemeriksaan_tahap_2 }}"></td>
				</tr>
			</table>
		</div>		
				
		<div class="table-responsive">
			<table class="table table-bordered" fixed-header> 	
				
				<tr>
					<td width=360>Kesimpulan</td>
                    @if($kesimpulan_check == '1')
					<td><input type="checkbox" name="kesimpulan_check" value="1" checked="checked"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="2"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="3"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="4"></td>
					<td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '2')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '3')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '4')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
                    @elseif($kesimpulan_check == '5')
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" name="kesimpulan_check" value="1"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="2"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="3"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="4"></td>
                    <td><input type="checkbox" name="kesimpulan_check" value="5"></td>
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
                <a href="{{ url('amp/pemeriksaan1/unitbanberjalan') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpemanas') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop