@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>10. Unit Pencampur Atau Pugmill (Mixer)</h3>
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
                    <li class="active">Unit Pencampu - {{ \Session::get('no_permohonan')}} - {{ \Session::get('id_periksa')}}</li>
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

    $pedal_pugmil_check = '';
    $pedal_pugmil_ket = '';
    $pedal_pugmil_foto = '';
    $pintu_bukaan_check = '';
    $pintu_bukaan_ket = '';
    $pintu_bukaan_foto = '';
    $poros_pugmil_check = '';
    $poros_pugmil_ket = '';
    $poros_pugmil_foto = '';
    $roda_gigi_check = '';
    $roda_gigi_ket = '';
    $roda_gigi_foto = '';
    $sprocket_check = '';
    $sprocket_ket = '';
    $sprocket_foto = '';
    $chain_check = '';
    $chain_ket = '';
    $chain_foto = '';
    $penggerak_pugmil_check = '';
    $penggerak_pugmil_ket = '';
    $penggerak_pugmil_foto = '';
    $seal_seal_check = '';
    $seal_seal_ket = '';
    $seal_seal_foto = '';
    $bearing_bearing_check = '';
    $bearing_bearing_ket = '';
    $bearing_bearing_foto = '';
    $liner_check = '';
    $liner_ket = '';
    $liner_foto = '';
    $sistem_hidrolis_check = '';
    $sistem_hidrolis_ket = '';
    $sistem_hidrolis_foto = '';
    $konstruksi_pugmil_check = '';
    $konstruksi_pugmil_ket = '';
    $konstruksi_pugmil_foto = '';
    $konstruksi_rangka_check = '';
    $konstruksi_rangka_ket = '';
    $konstruksi_rangka_foto = '';
    
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_pencampur)) {
    if($pm_satu_amp_pencampur->kode_periksa){
        $no_id = $pm_satu_amp_pencampur->no_id;
        $kode_periksa = $pm_satu_amp_pencampur->kode_periksa;

        $pedal_pugmil_check = $pm_satu_amp_pencampur->pedal_pugmil_check;
        $pedal_pugmil_ket = $pm_satu_amp_pencampur->pedal_pugmil_ket;
        $pedal_pugmil_foto = $pm_satu_amp_pencampur->pedal_pugmil_foto;
        $pintu_bukaan_check = $pm_satu_amp_pencampur->pintu_bukaan_check;
        $pintu_bukaan_ket = $pm_satu_amp_pencampur->pintu_bukaan_ket;
        $pintu_bukaan_foto = $pm_satu_amp_pencampur->pintu_bukaan_foto;
        $poros_pugmil_check = $pm_satu_amp_pencampur->poros_pugmil_check;
        $poros_pugmil_ket = $pm_satu_amp_pencampur->poros_pugmil_ket;
        $poros_pugmil_foto = $pm_satu_amp_pencampur->poros_pugmil_foto;
        $roda_gigi_check = $pm_satu_amp_pencampur->roda_gigi_check;
        $roda_gigi_ket = $pm_satu_amp_pencampur->roda_gigi_ket;
        $roda_gigi_foto = $pm_satu_amp_pencampur->roda_gigi_foto;
        $sprocket_check = $pm_satu_amp_pencampur->sprocket_check;
        $sprocket_ket = $pm_satu_amp_pencampur->sprocket_ket;
        $sprocket_foto = $pm_satu_amp_pencampur->sprocket_foto;
        $chain_check = $pm_satu_amp_pencampur->chain_check;
        $chain_ket = $pm_satu_amp_pencampur->chain_ket;
        $chain_foto = $pm_satu_amp_pencampur->chain_foto;
        $penggerak_pugmil_check = $pm_satu_amp_pencampur->penggerak_pugmil_check;
        $penggerak_pugmil_ket = $pm_satu_amp_pencampur->penggerak_pugmil_ket;
        $penggerak_pugmil_foto = $pm_satu_amp_pencampur->penggerak_pugmil_foto;
        $seal_seal_check = $pm_satu_amp_pencampur->seal_seal_check;
        $seal_seal_ket = $pm_satu_amp_pencampur->seal_seal_ket;
        $seal_seal_foto = $pm_satu_amp_pencampur->seal_seal_foto;
        $bearing_bearing_check = $pm_satu_amp_pencampur->bearing_bearing_check;
        $bearing_bearing_ket = $pm_satu_amp_pencampur->bearing_bearing_ket;
        $bearing_bearing_foto = $pm_satu_amp_pencampur->bearing_bearing_foto;
        $liner_check = $pm_satu_amp_pencampur->liner_check;
        $liner_ket = $pm_satu_amp_pencampur->liner_ket;
        $liner_foto = $pm_satu_amp_pencampur->liner_foto;
        $sistem_hidrolis_check = $pm_satu_amp_pencampur->sistem_hidrolis_check;
        $sistem_hidrolis_ket = $pm_satu_amp_pencampur->sistem_hidrolis_ket;
        $sistem_hidrolis_foto = $pm_satu_amp_pencampur->sistem_hidrolis_foto;
        $konstruksi_pugmil_check = $pm_satu_amp_pencampur->konstruksi_pugmil_check;
        $konstruksi_pugmil_ket = $pm_satu_amp_pencampur->konstruksi_pugmil_ket;
        $konstruksi_pugmil_foto = $pm_satu_amp_pencampur->konstruksi_pugmil_foto;
        $konstruksi_rangka_check = $pm_satu_amp_pencampur->konstruksi_rangka_check;
        $konstruksi_rangka_ket = $pm_satu_amp_pencampur->konstruksi_rangka_ket;
        $konstruksi_rangka_foto = $pm_satu_amp_pencampur->konstruksi_rangka_foto;
        
        $catatan_pemeriksa = $pm_satu_amp_pencampur->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_pencampur->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_pencampur->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_pencampur->foto_unit;
        $kesimpulan_check = $pm_satu_amp_pencampur->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_pencampur->kesimpulan_ket;

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
                    <td>Pedal Pugmil</td>
                    @if($pedal_pugmil_check == '1')
                   
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5"></td>	
                    @elseif($pedal_pugmil_check == '2')
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5"></td>
                    @elseif($pedal_pugmil_check == '3')
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5"></td>
                    @elseif($pedal_pugmil_check == '4')
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5"></td>
                    @elseif($pedal_pugmil_check == '5')
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5" checked="checked"></td>
                    @else
                    
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pedal_pugmil_check" value="5"></td>                  

                    @endif
                    <td><input type="text" size="50" name="pedal_pugmil_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pedal_pugmil_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Pintu Bukaan Mixer</td>
                    @if($pintu_bukaan_check == '1')
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5"></td>
                    @elseif($pintu_bukaan_check == '2')
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5"></td>
                    @elseif($pintu_bukaan_check == '3')
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5"></td>
                    @elseif($pintu_bukaan_check == '4')
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5"></td>
                    @elseif($pintu_bukaan_check == '5')
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="pintu_bukaan_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="pintu_bukaan_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="pintu_bukaan_foto" value=""></td>
                </tr>
                <tr class="3_check">
					<td>3</td>
                    <td>Poros Pugmil</td>
                    @if($poros_pugmil_check == '1')
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5"></td>
                    @elseif($poros_pugmil_check == '2')
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5"></td>
                    @elseif($poros_pugmil_check == '3')
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5"></td>
                    @elseif($poros_pugmil_check == '4')
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled"name="poros_pugmil_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5"></td>
                    @elseif($poros_pugmil_check == '5')
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="poros_pugmil_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="poros_pugmil_ket" class="form-control"
                    value="{{ $poros_pugmil_ket }}"></td>

                    <td><input type="file" class="styled" name="poros_pugmil_foto" 
                    ></td>
                </tr>
                <tr class="4_check">
					<td>4</td>
                    <td>Roda Gigi (Gear)</td>
                    @if($roda_gigi_check == '1')
                    <td style="text-align: center;"><input type="checkbox" class="styled" name="roda_gigi_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="roda_gigi_check" value="5"></td>
                    @elseif($roda_gigi_check == '2')
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="5"></td>
                    @elseif($roda_gigi_check == '3')
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="5"></td>
                    @elseif($roda_gigi_check == '4')
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="5"></td>
                    @elseif($roda_gigi_check == '5')
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="roda_gigi_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="roda_gigi_ketn" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="roda_gigi_foto"></td>
                </tr>
                <tr class="5_check">
					<td>5</td>
                    <td>Sprocket</td>
                    @if($sprocket_check == '1')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '2')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '3')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '4')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @elseif($sprocket_check == '5')
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sprocket_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sprocket_check_keteranganket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="sprocket_foto"></td>
                </tr>
                <tr class="6_check">
					<td>6</td>
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
                    <td><input type="checkbox" class="styled" name="chain_check" value="3"  checked="checked"></td>
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
                    <td><input type="file" class="styled" name="chain_foto"></td>
                </tr>
                <tr class="7_check">
				    <td>7</td>
                    <td>Penggerak Pugmil</td>
                    @if($penggerak_pugmil_check == '1')
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5"></td>
                    @elseif($penggerak_pugmil_check == '2')
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5"></td>
                    @elseif($penggerak_pugmil_check == '3')
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5"></td>
                    @elseif($penggerak_pugmil_check == '4')
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5"></td>
                    @elseif($penggerak_pugmil_check == '5')
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="4"></td>
				    <td><input type="checkbox" class="styled" name="penggerak_pugmil_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="penggerak_pugmil_ket" class="form-control"></td>
                    <td><input type="file" class="styled" name="penggerak_pugmil_foto"></td>
                </tr>
                <tr class="8_check">
					<td>8</td>
                    <td>Seal-Seal</td>
                    @if($seal_seal_check == '1')
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="seal_seal_check" value="5"></td>
                    @elseif($seal_seal_check == '2')
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="5"></td>
                    @elseif($seal_seal_check == '3')
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="5"></td>
                    @elseif($seal_seal_check == '4')
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="5"></td>
                    @elseif($seal_seal_check == '5')
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="seal_seal_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="seal_seal_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="seal_seal_foto"></td>
                </tr>
                <tr class="9_check">
					<td>9</td>
                    <td>Bearing-bearing</td>
                    @if($bearing_bearing_check == '1')
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5"></td>
                    @elseif($bearing_bearing_check == '2')
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5"></td>
                    @elseif($bearing_bearing_check == '3')
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5"></td>
                    @elseif($bearing_bearing_check == '4')
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5"></td>
                    @elseif($bearing_bearing_check == '5')
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="bearing_bearing_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="bearing_bearing_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="bearing_bearing_foto" value=""></td>
                </tr>
                <tr class="10_check">
					<td>10</td>
                    <td>Sistem Hidrolis / Pneumatik Bukaan Pengeluaran</td>
                    @if($sistem_hidrolis_check == '1')
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5"></td>
                    @elseif($sistem_hidrolis_check == '2')
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5"></td>
                    @elseif($sistem_hidrolis_check == '3')
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5"></td>
                    @elseif($sistem_hidrolis_check == '4')
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5"></td>
                    @elseif($sistem_hidrolis_check == '5')
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="4"></td>
					<td><input type="checkbox" class="styled" name="sistem_hidrolis_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="sistem_hidrolis_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="sistem_hidrolis_foto" value=""></td>
                </tr>
                <tr class="11_check">
                    <td>11</td>
                    <td>Liner</td>
                    @if($liner_check == '1')
                    <td><input type="checkbox" class="styled" name="liner_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5"></td>
                    @elseif($liner_check == '2')
                    <td><input type="checkbox" class="styled" name="liner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5"></td>
                    @elseif($liner_check == '3')
                    <td><input type="checkbox" class="styled" name="liner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5"></td>
                    @elseif($liner_check == '4')
                    <td><input type="checkbox" class="styled" name="liner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5"></td>
                    @elseif($liner_check == '5')
                    <td><input type="checkbox" class="styled" name="liner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="liner_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="liner_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="liner_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="liner_foto" value=""></td>
                </tr>
                <tr class="12_check">
                    <td>12</td>
                    <td>Konstruksi Pugmil / Mixer</td>
                    @if($konstruksi_pugmil_check == '1')
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5"></td>
                    @elseif($konstruksi_pugmil_check == '2')
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5"></td>
                    @elseif($konstruksi_pugmil_check == '3')
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5"></td>
                    @elseif($konstruksi_pugmil_check == '4')
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5"></td>
                    @elseif($konstruksi_pugmil_check == '5')
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="konstruksi_pugmil_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="konstruksi_pugmil_ket" class="form-control" value=""></td>
                    <td><input type="file" class="styled" name="konstruksi_pugmil_foto" value=""></td>
                </tr>
                <tr class="13_check">
                    <td>13</td>
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
                <a href="{{ url('amp/pemeriksaan1/unittimbangan') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitpemasokaspal') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop