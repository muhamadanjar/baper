<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_pemanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_pemanasCtrl extends Controller {

	public function pem_amp_1_unit_pemanas(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_unitpemanas = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pemanas')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_unitpemanas',$pm_satu_amp_unitpemanas);
	}

	public function pem_amp_1_unit_pemanas_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->tangki_bahan_bakar_check < '4') {
			if ($kesimpulan_check < $request->tangki_bahan_bakar_check) {
				$kesimpulan_check = $request->tangki_bahan_bakar_check;
			}
		}

		if ($request->pompa_bahan_bakar_check < '4') {
			if ($kesimpulan_check < $request->pompa_bahan_bakar_check) {
				$kesimpulan_check = $request->pompa_bahan_bakar_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->blower_udara_check < '4') {
			if ($kesimpulan_check < $request->blower_udara_check) {
				$kesimpulan_check = $request->blower_udara_check;
			}
		}

		if ($request->alat_ukur_check < '4') {
			if ($kesimpulan_check < $request->alat_ukur_check) {
				$kesimpulan_check = $request->alat_ukur_check;
			}
		}

		if ($request->penyemprot_check < '4') {
			if ($kesimpulan_check < $request->penyemprot_check) {
				$kesimpulan_check = $request->penyemprot_check;
			}
		}

		if ($request->batu_tahan_api_check < '4') {
			if ($kesimpulan_check < $request->batu_tahan_api_check) {
				$kesimpulan_check = $request->batu_tahan_api_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->tangki_bahan_bakar_check = $request->tangki_bahan_bakar_check;
		$pm->tangki_bahan_bakar_ket = $request->tangki_bahan_bakar_ket;
		$pm->tangki_bahan_bakar_foto = $request->tangki_bahan_bakar_foto;
		$pm->pompa_bahan_bakar_check = $request->pompa_bahan_bakar_check;
		$pm->pompa_bahan_bakar_ket = $request->pompa_bahan_bakar_ket;
		$pm->pompa_bahan_bakar_foto = $request->pompa_bahan_bakar_foto;
		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		$pm->pipa_pipa_foto = $request->pipa_pipa_foto;
		$pm->blower_udara_check = $request->blower_udara_check;
		$pm->blower_udara_ket = $request->blower_udara_ket;
		$pm->blower_udara_foto = $request->blower_udara_foto;
		$pm->alat_ukur_check = $request->alat_ukur_check;
		$pm->alat_ukur_ket = $request->alat_ukur_ket;
		$pm->alat_ukur_foto = $request->alat_ukur_foto;
		$pm->penyemprot_check = $request->penyemprot_check;
		$pm->penyemprot_ket = $request->penyemprot_ket;
		$pm->penyemprot_foto = $request->penyemprot_foto;
		$pm->batu_tahan_api_check = $request->batu_tahan_api_check;
		$pm->batu_tahan_api_ket = $request->batu_tahan_api_ket;
		$pm->batu_tahan_api_foto = $request->batu_tahan_api_foto;
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
	
		
		return redirect('amp/pemeriksaan1/unitpemanas');	
	}


	
	
	

}
