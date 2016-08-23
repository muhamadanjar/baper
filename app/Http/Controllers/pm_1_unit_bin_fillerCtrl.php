<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_filler as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_bin_fillerCtrl extends Controller {

	public function pem_amp_1_unit_bin_filler(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_binfiller = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_filler')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_binfiller',$pm_satu_amp_binfiller);
	}

	public function pem_amp_1_unit_bin_filler_post(Request $request){
		$file = $request->file('foto_unit');
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

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pintu_bukaan_check = $request->pintu_bukaan_check;
		$pm->pintu_bukaan_ket = $request->pintu_bukaan_ket;
		$pm->pintu_bukaan_foto = $request->pintu_bukaan_foto;
		$pm->konstruksi_rangka_check = $request->konstruksi_rangka_check;
		$pm->konstruksi_rangka_ket = $request->konstruksi_rangka_ket;
		$pm->konstruksi_rangka_foto = $request->konstruksi_rangka_foto;
		$pm->hopper_bin_check = $request->hopper_bin_check;
		$pm->hopper_bin_ket = $request->hopper_bin_ket;
		$pm->hopper_bin_foto = $request->hopper_bin_foto;
												
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
	
		
		return redirect('amp/pemeriksaan1/unitbinfiller');	
	}


	
	
	

}
