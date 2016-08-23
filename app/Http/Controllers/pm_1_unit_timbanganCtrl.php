<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_timbangan as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_timbanganCtrl extends Controller {

	public function pem_amp_1_unit_timbangan(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_timbangan = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_timbangan')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_timbangan',$pm_satu_amp_timbangan);
	}

	public function pem_amp_1_unit_timbangan_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->material_penggantung_check < '4') {
			if ($kesimpulan_check < $request->material_penggantung_check) {
				$kesimpulan_check = $request->material_penggantung_check;
			}
		}

		if ($request->penunjuk_skala_check < '4') {
			if ($kesimpulan_check < $request->penunjuk_skala_check) {
				$kesimpulan_check = $request->penunjuk_skala_check;
			}
		}

		if ($request->unit_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->unit_hidrolis_check) {
				$kesimpulan_check = $request->unit_hidrolis_check;
			}
		}

		if ($request->bin_penimbang_check < '4') {
			if ($kesimpulan_check < $request->bin_penimbang_check) {
				$kesimpulan_check = $request->bin_penimbang_check;
			}
		}

		if ($request->hook_bolt_check < '4') {
			if ($kesimpulan_check < $request->hook_bolt_check) {
				$kesimpulan_check = $request->hook_bolt_check;
			}
		}

		if ($request->pisau_check < '4') {
			if ($kesimpulan_check < $request->pisau_check) {
				$kesimpulan_check = $request->pisau_check;
			}
		}

		if ($request->karet_peredam_check < '4') {
			if ($kesimpulan_check < $request->karet_peredam_check) {
				$kesimpulan_check = $request->karet_peredam_check;
			}
		}

		if ($request->penutup_antar_bin_check < '4') {
			if ($kesimpulan_check < $request->penutup_antar_bin_check) {
				$kesimpulan_check = $request->penutup_antar_bin_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->material_penggantung_check = $request->material_penggantung_check;
		$pm->material_penggantung_ket = $request->material_penggantung_ket;
		$pm->material_penggantung_foto = $request->material_penggantung_foto;
		$pm->penunjuk_skala_check = $request->penunjuk_skala_check;
		$pm->penunjuk_skala_ket = $request->penunjuk_skala_ket;
		$pm->penunjuk_skala_foto = $request->penunjuk_skala_foto;
		$pm->unit_hidrolis_check = $request->unit_hidrolis_check;
		$pm->unit_hidrolis_ket = $request->unit_hidrolis_ket;
		$pm->unit_hidrolis_foto = $request->unit_hidrolis_foto;
		$pm->bin_penimbang_check = $request->bin_penimbang_check;
		$pm->bin_penimbang_ket = $request->bin_penimbang_ket;
		$pm->bin_penimbang_foto = $request->bin_penimbang_foto;
		$pm->hook_bolt_check = $request->hook_bolt_check;
		$pm->hook_bolt_ket = $request->hook_bolt_ket;
		$pm->hook_bolt_foto = $request->hook_bolt_foto;
		$pm->pisau_check = $request->pisau_check;
		$pm->pisau_ket = $request->pisau_ket;
		$pm->pisau_foto = $request->pisau_foto;
		$pm->karet_peredam_check = $request->karet_peredam_check;
		$pm->karet_peredam_ket = $request->karet_peredam_ket;
		$pm->karet_peredam_foto = $request->karet_peredam_foto;
		$pm->penutup_antar_bin_check = $request->penutup_antar_bin_check;
		$pm->penutup_antar_bin_ket = $request->penutup_antar_bin_ket;
		$pm->penutup_antar_bin_foto = $request->penutup_antar_bin_foto;
								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		if ( !is_null($file) )  {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($file);
		}else{
			$pm->foto_unit = $request->foto_unit_;
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unittimbangan');	
	}


	
	
	

}
