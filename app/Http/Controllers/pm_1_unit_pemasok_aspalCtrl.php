<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_pemasok_aspal as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_pemasok_aspalCtrl extends Controller {

	public function pem_amp_1_unit_pemasok_aspal(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_pemasokaspal = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pemasok_aspal')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_pemasokaspal',$pm_satu_amp_pemasokaspal);
	}

	public function pem_amp_1_unit_pemasok_aspal_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->termometer_check < '4') {
			if ($kesimpulan_check < $request->termometer_check) {
				$kesimpulan_check = $request->termometer_check;
			}
		}

		if ($request->pompa_penyemprot_check < '4') {
			if ($kesimpulan_check < $request->pompa_penyemprot_check) {
				$kesimpulan_check = $request->pompa_penyemprot_check;
			}
		}

		if ($request->pompa_transfer_check < '4') {
			if ($kesimpulan_check < $request->pompa_transfer_check) {
				$kesimpulan_check = $request->pompa_transfer_check;
			}
		}

		if ($request->pompa_oli_check < '4') {
			if ($kesimpulan_check < $request->pompa_oli_check) {
				$kesimpulan_check = $request->pompa_oli_check;
			}
		}

		if ($request->flow_meter_check < '4') {
			if ($kesimpulan_check < $request->flow_meter_check) {
				$kesimpulan_check = $request->flow_meter_check;
			}
		}

		if ($request->pressure_meter_check < '4') {
			if ($kesimpulan_check < $request->pressure_meter_check) {
				$kesimpulan_check = $request->pressure_meter_check;
			}
		}

		if ($request->valve_valve_check < '4') {
			if ($kesimpulan_check < $request->valve_valve_check) {
				$kesimpulan_check = $request->valve_valve_check;
			}
		}

		if ($request->penyembur_api_check < '4') {
			if ($kesimpulan_check < $request->penyembur_api_check) {
				$kesimpulan_check = $request->penyembur_api_check;
			}
		}

		if ($request->blower_burner_check < '4') {
			if ($kesimpulan_check < $request->blower_burner_check) {
				$kesimpulan_check = $request->blower_burner_check;
			}
		}

		if ($request->pipa_pipa_aspal_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_aspal_check) {
				$kesimpulan_check = $request->pipa_pipa_aspal_check;
			}
		}

		if ($request->ketel_tangki_aspal_check < '4') {
			if ($kesimpulan_check < $request->ketel_tangki_aspal_check) {
				$kesimpulan_check = $request->ketel_tangki_aspal_check;
			}
		}

		if ($request->ketel_tangki_minyak_check < '4') {
			if ($kesimpulan_check < $request->ketel_tangki_minyak_check) {
				$kesimpulan_check = $request->ketel_tangki_minyak_check;
			}
		}

		if ($request->ketel_penimbang_check < '4') {
			if ($kesimpulan_check < $request->ketel_penimbang_check) {
				$kesimpulan_check = $request->ketel_penimbang_check;
			}
		}

		if ($request->konstruksi_pendukung_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pendukung_check) {
				$kesimpulan_check = $request->konstruksi_pendukung_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->termometer_check = $request->termometer_check;
		$pm->termometer_ket = $request->termometer_ket;
		$pm->termometer_foto = $request->termometer_foto;
		$pm->pompa_penyemprot_check = $request->pompa_penyemprot_check;
		$pm->pompa_penyemprot_ket = $request->pompa_penyemprot_ket;
		$pm->pompa_penyemprot_foto = $request->pompa_penyemprot_foto;
		$pm->pompa_transfer_check = $request->pompa_transfer_check;
		$pm->pompa_transfer_ket = $request->pompa_transfer_ket;
		$pm->pompa_transfer_foto = $request->pompa_transfer_foto;
		$pm->pompa_oli_check = $request->pompa_oli_check;
		$pm->pompa_oli_ket = $request->pompa_oli_ket;
		$pm->pompa_oli_foto = $request->pompa_oli_foto;
		$pm->flow_meter_check = $request->flow_meter_check;
		$pm->flow_meter_ket = $request->flow_meter_ket;
		$pm->flow_meter_foto = $request->flow_meter_foto;
		$pm->pressure_meter_check = $request->pressure_meter_check;
		$pm->pressure_meter_ket = $request->pressure_meter_ket;
		$pm->pressure_meter_foto = $request->pressure_meter_foto;
		$pm->valve_valve_check = $request->valve_valve_check;
		$pm->valve_valve_ket = $request->valve_valve_ket;
		$pm->valve_valve_foto = $request->valve_valve_foto;
		$pm->penyembur_api_check = $request->penyembur_api_check;
		$pm->penyembur_api_ket = $request->penyembur_api_ket;
		$pm->penyembur_api_foto = $request->penyembur_api_foto;
		$pm->blower_burner_check = $request->blower_burner_check;
		$pm->blower_burner_ket = $request->blower_burner_ket;
		$pm->blower_burner_foto = $request->blower_burner_foto;
		$pm->pipa_pipa_aspal_check = $request->pipa_pipa_aspal_check;
		$pm->pipa_pipa_aspal_ket = $request->pipa_pipa_aspal_ket;
		$pm->pipa_pipa_aspal_foto = $request->pipa_pipa_aspal_foto;
		$pm->ketel_tangki_aspal_check = $request->ketel_tangki_aspal_check;
		$pm->ketel_tangki_aspal_ket = $request->ketel_tangki_aspal_ket;
		$pm->ketel_tangki_aspal_foto = $request->ketel_tangki_aspal_foto;
		$pm->ketel_tangki_minyak_check = $request->ketel_tangki_minyak_check;
		$pm->ketel_tangki_minyak_ket = $request->ketel_tangki_minyak_ket;
		$pm->ketel_tangki_minyak_foto = $request->ketel_tangki_minyak_foto;
		$pm->ketel_penimbang_check = $request->ketel_penimbang_check;
		$pm->ketel_penimbang_ket = $request->ketel_penimbang_ket;
		$pm->ketel_penimbang_foto = $request->ketel_penimbang_foto;
		$pm->konstruksi_pendukung_check = $request->konstruksi_pendukung_check;
		$pm->konstruksi_pendukung_ket = $request->konstruksi_pendukung_ket;
		$pm->konstruksi_pendukung_foto = $request->konstruksi_pendukung_foto;
								
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
	
		
		return redirect('amp/pemeriksaan1/unitpemasokaspal');	
	}


	
	
	

}
