<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitBinFiller as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitBinFillerCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}
	
	public function periksaSatuAMPUnitBinFiller(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_binfiller = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_filler')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_binfiller',$pm_satu_amp_binfiller);
	}

	public function periksaSatuAMPUnitBinFillerPost(Request $request){
		$pintu_bukaan_foto = $request->file('pintu_bukaan_foto');
		$konstruksi_rangka_foto = $request->file('pintu_bukaan_foto');
		$hopper_bin_foto = $request->file('hopper_bin_foto');
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pintu_bukaan_check < '4') {
			if ($kesimpulan_check < $request->pintu_bukaan_check) {
				$kesimpulan_check = $request->pintu_bukaan_check;
			}
		}

		if ($request->konstruksi_rangka_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_rangka_check) {
				$kesimpulan_check = $request->konstruksi_rangka_check;
			}
		}

		if ($request->hopper_bin_check < '4') {
			if ($kesimpulan_check < $request->hopper_bin_check) {
				$kesimpulan_check = $request->hopper_bin_check;
			}
		}

		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitBinFiller() : \App\PeriksaSatuAMPUnitBinFiller::find($request->no_id) ;
		$pm = $q;

		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->pintu_bukaan_check = $request->pintu_bukaan_check;
		$pm->pintu_bukaan_ket = $request->pintu_bukaan_ket;
		
		if ( !is_null($pintu_bukaan_foto) )  {
			$fileName_pintu_bukaan_foto = str_random(20) . '.' . $pintu_bukaan_foto->getClientOriginalExtension();	
			$pm->pintu_bukaan_foto = $fileName_pintu_bukaan_foto;
			$this->_s->UploadFile($pintu_bukaan_foto,$fileName_pintu_bukaan_foto);
		}

		$pm->konstruksi_rangka_check = $request->konstruksi_rangka_check;
		$pm->konstruksi_rangka_ket = $request->konstruksi_rangka_ket;
		
		if ( !is_null($konstruksi_rangka_foto) )  {
			$fileName_konstruksi_rangka_foto = str_random(20) . '.' . $konstruksi_rangka_foto->getClientOriginalExtension();	
			$pm->konstruksi_rangka_foto = $fileName_konstruksi_rangka_foto;
			$this->_s->UploadFile($konstruksi_rangka_foto,$fileName_konstruksi_rangka_foto);
		}

		$pm->hopper_bin_check = $request->hopper_bin_check;
		$pm->hopper_bin_ket = $request->hopper_bin_ket;
		
		if ( !is_null($hopper_bin_foto) )  {
			$fileName_hopper_bin_foto = str_random(20) . '.' . $hopper_bin_foto->getClientOriginalExtension();	
			$pm->hopper_bin_foto = $fileName_hopper_bin_foto;
			$this->_s->UploadFile($hopper_bin_foto,$fileName_hopper_bin_foto);
		}
												
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitbinfiller');	
	}


	
	
	

}
