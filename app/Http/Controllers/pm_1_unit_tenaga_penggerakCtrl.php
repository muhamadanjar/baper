<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_tenaga_penggerak as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_tenaga_penggerakCtrl extends Controller {

	public function pem_amp_1_unit_tenaga_penggerak(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_tenagapenggerak = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_tenaga_penggerak')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_tenagapenggerak',$pm_satu_amp_tenagapenggerak);
	}

	public function pem_amp_1_unit_tenaga_penggerak_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->generator_check < '4') {
			if ($kesimpulan_check < $request->generator_check) {
				$kesimpulan_check = $request->generator_check;
			}
		}

		if ($request->mesin_check < '4') {
			if ($kesimpulan_check < $request->mesin_check) {
				$kesimpulan_check = $request->mesin_check;
			}
		}

		if ($request->compressor_check < '4') {
			if ($kesimpulan_check < $request->compressor_check) {
				$kesimpulan_check = $request->compressor_check;
			}
		}

		if ($request->silinder_udara_check < '4') {
			if ($kesimpulan_check < $request->silinder_udara_check) {
				$kesimpulan_check = $request->silinder_udara_check;
			}
		}

		if ($request->kontrol_panel_check < '4') {
			if ($kesimpulan_check < $request->kontrol_panel_check) {
				$kesimpulan_check = $request->kontrol_panel_check;
			}
		}

		if ($request->jaringan_kabel_check < '4') {
			if ($kesimpulan_check < $request->jaringan_kabel_check) {
				$kesimpulan_check = $request->jaringan_kabel_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->filter_check < '4') {
			if ($kesimpulan_check < $request->filter_check) {
				$kesimpulan_check = $request->filter_check;
			}
		}

		if ($request->pompa_hidrolik_check < '4') {
			if ($kesimpulan_check < $request->pompa_hidrolik_check) {
				$kesimpulan_check = $request->pompa_hidrolik_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->generator_check = $request->generator_check;
		$pm->generator_ket = $request->generator_ket;
		$pm->generator_foto = $request->generator_foto;
		$pm->mesin_check = $request->mesin_check;
		$pm->mesin_ket = $request->mesin_ket;
		$pm->mesin_foto = $request->mesin_foto;
		$pm->compressor_check = $request->compressor_check;
		$pm->compressor_ket = $request->compressor_ket;
		$pm->compressor_foto = $request->compressor_foto;
		$pm->silinder_udara_check = $request->silinder_udara_check;
		$pm->silinder_udara_ket = $request->silinder_udara_ket;
		$pm->silinder_udara_foto = $request->silinder_udara_foto;
		$pm->kontrol_panel_check = $request->kontrol_panel_check;
		$pm->kontrol_panel_ket = $request->kontrol_panel_ket;
		$pm->kontrol_panel_foto = $request->kontrol_panel_foto;
		$pm->jaringan_kabel_check = $request->jaringan_kabel_check;
		$pm->jaringan_kabel_ket = $request->jaringan_kabel_ket;
		$pm->jaringan_kabel_foto = $request->jaringan_kabel_foto;
		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		$pm->pipa_pipa_foto = $request->pipa_pipa_foto;
		$pm->filter_check = $request->filter_check;
		$pm->filter_ket = $request->filter_ket;
		$pm->filter_foto = $request->filter_foto;
		$pm->pompa_hidrolik_check = $request->pompa_hidrolik_check;
		$pm->pompa_hidrolik_ket = $request->pompa_hidrolik_ket;
		$pm->pompa_hidrolik_foto = $request->pompa_hidrolik_foto;
										
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
	
		
		return redirect('amp/pemeriksaan1/unittenagapenggerak');	
	}


	
	
	

}
