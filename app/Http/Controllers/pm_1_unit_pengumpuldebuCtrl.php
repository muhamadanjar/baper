<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_pengumpul_debu as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_pengumpuldebuCtrl extends Controller {

	public function pem_amp_1_unit_pengumpul_debu(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_pengumpuldebu = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pengumpul_debu')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_pengumpuldebu',$pm_satu_amp_pengumpuldebu);
	}

	public function pem_amp_1_unit_pengumpul_debu_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pemutar_check < '4') {
			if ($kesimpulan_check < $request->pemutar_check) {
				$kesimpulan_check = $request->pemutar_check;
			}
		}

		if ($request->exhaust_fan_check < '4') {
			if ($kesimpulan_check < $request->exhaust_fan_check) {
				$kesimpulan_check = $request->exhaust_fan_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->cerobong_check < '4') {
			if ($kesimpulan_check < $request->cerobong_check) {
				$kesimpulan_check = $request->cerobong_check;
			}
		}

		if ($request->tangki_air_check < '4') {
			if ($kesimpulan_check < $request->tangki_air_check) {
				$kesimpulan_check = $request->tangki_air_check;
			}
		}

		if ($request->pompa_air_check < '4') {
			if ($kesimpulan_check < $request->pompa_air_check) {
				$kesimpulan_check = $request->pompa_air_check;
			}
		}

		if ($request->penyemprot_air_check < '4') {
			if ($kesimpulan_check < $request->penyemprot_air_check) {
				$kesimpulan_check = $request->penyemprot_air_check;
			}
		}

		if ($request->dry_scrubber_check < '4') {
			if ($kesimpulan_check < $request->dry_scrubber_check) {
				$kesimpulan_check = $request->dry_scrubber_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pemutar_check = $request->pemutar_check;
		$pm->pemutar_ket = $request->pemutar_ket;
		$pm->pemutar_foto = $request->pemutar_foto;
		$pm->exhaust_fan_check = $request->exhaust_fan_check;
		$pm->exhaust_fan_ket = $request->exhaust_fan_ket;
		$pm->exhaust_fan_foto = $request->exhaust_fan_foto;
		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		$pm->pipa_pipa_foto = $request->pipa_pipa_foto;
		$pm->cerobong_check = $request->cerobong_check;
		$pm->cerobong_ket = $request->cerobong_ket;
		$pm->cerobong_foto = $request->cerobong_foto;
		$pm->tangki_air_check = $request->tangki_air_check;
		$pm->tangki_air_ket = $request->tangki_air_ket;
		$pm->tangki_air_foto = $request->tangki_air_foto;
		$pm->pompa_air_check = $request->pompa_air_check;
		$pm->pompa_air_ket = $request->pompa_air_ket;
		$pm->pompa_air_foto = $request->pompa_air_foto;
		$pm->penyemprot_air_check = $request->penyemprot_air_check;
		$pm->penyemprot_air_ket = $request->penyemprot_air_ket;
		$pm->penyemprot_air_foto = $request->penyemprot_air_foto;
		$pm->dry_scrubber_check = $request->dry_scrubber_check;
		$pm->dry_scrubber_ket = $request->dry_scrubber_ket;
		$pm->dry_scrubber_foto = $request->dry_scrubber_foto;
		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;
		$pm->konstruksi_foto = $request->konstruksi_foto;
				
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
	
		
		return redirect('amp/pemeriksaan1/unitpengumpuldebu');	
	}


	
	
	

}
