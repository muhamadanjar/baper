@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>14. Unit Bin Filler</h3>
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
                    <li class="active">Unit Bin Filler - {{$no_permohonan}}</li>
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
    $pintu_bukaan_check = '';
    $pintu_bukaan_ket = '';
    $pintu_bukaan_foto = '';
    $konstruksi_rangka_check = '';
    $konstruksi_rangka_ket = '';
    $konstruksi_rangka_foto = '';
    $hopper_bin_check = '';
    $hopper_bin_ket = '';
    $hopper_bin_foto = '';
            
    $catatan_pemeriksa = '';
    $harus_diperbaiki = '';
    $pemeriksaan_tahap_2 = '';
    $kesimpulan_check = '';
    $kesimpulan_ket = '';
    $foto_unit = ''; 

if (isset($pm_satu_amp_binfiller)) {
    if($pm_satu_amp_binfiller->kode_periksa){
        $kode_periksa = $pm_satu_amp_binfiller->kode_periksa;
        $pintu_bukaan_check = $pm_satu_amp_binfiller->pintu_bukaan_check;
        $pintu_bukaan_ket = $pm_satu_amp_binfiller->pintu_bukaan_ket;
        $pintu_bukaan_foto = $pm_satu_amp_binfiller->pintu_bukaan_foto;
        $konstruksi_rangka_check = $pm_satu_amp_binfiller->konstruksi_rangka_check;
        $konstruksi_rangka_ket = $pm_satu_amp_binfiller->konstruksi_rangka_ket;
        $konstruksi_rangka_foto = $pm_satu_amp_binfiller->konstruksi_rangka_foto;
        $hopper_bin_check = $pm_satu_amp_binfiller->hopper_bin_check;
        $hopper_bin_ket = $pm_satu_amp_binfiller->hopper_bin_ket;
        $hopper_bin_foto = $pm_satu_amp_binfiller->hopper_bin_foto;
                        
        $catatan_pemeriksa = $pm_satu_amp_binfiller->catatan_pemeriksa;
        $harus_diperbaiki = $pm_satu_amp_binfiller->harus_diperbaiki;
        $pemeriksaan_tahap_2 = $pm_satu_amp_binfiller->pemeriksaan_tahap_2;
        $foto_unit = $pm_satu_amp_binfiller->foto_unit;
        $kesimpulan_check = $pm_satu_amp_binfiller->kesimpulan_check;
        $kesimpulan_ket = $pm_satu_amp_binfiller->kesimpulan_ket;

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
                    <td>Pintu Bukaan Filler</td>
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
                    <td><input type="file" class="styled" name="pintu_bukaan_foto" value="">

                    </td>
                </tr>
                <tr class="2_check">
					<td>2</td>
                    <td>Konstruksi / Rangka</td>
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
                <tr class="3_check">
					<td>3</td>
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
                    <td><input type="checkbox" class="styled"name="hopper_bin_check" value="4" checked="checked"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>
                    @elseif($hopper_bin_check == '5')
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5" checked="checked"></td>
                    @else
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="1"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="2" ></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="3"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="4"></td>
                    <td><input type="checkbox" class="styled" name="hopper_bin_check" value="5"></td>
                    @endif
                    <td><input type="text" size="50" name="hopper_bin_ket" class="form-control"
                    value="{{ $hopper_bin_ket }}"></td>

                    <td><input type="file" class="styled" name="hopper_bin_foto" 
                    ></td>
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
                <a href="{{ url('amp/pemeriksaan1/unittenagapenggerak') }}" class="btn btn-info">Balik</a>
                <a href="{{ url('amp/pemeriksaan1/unitelevator') }}" class="btn btn-info">Lanjut</a>
            </div>
		</div>
	</form>
	
@stop