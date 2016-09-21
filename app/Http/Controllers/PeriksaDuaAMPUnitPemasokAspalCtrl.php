<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitPemasokAspal as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitPemasokAspalCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}

	public function periksaDuaAMPUnitPemasokAspal(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_pemasokaspal = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_pemasok_aspal')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_pemasokaspal);
	}

	public function periksaDuaAMPUnitPemasokAspalPost(Request $request){
		$termometer_foto = $request->file('termometer_foto');
		$pompa_penyemprot_foto = $request->file('pompa_penyemprot_foto');
		$pompa_transfer_foto = $request->file('pompa_transfer_foto');
		$pompa_oli_foto = $request->file('pompa_oli_foto');
		$flow_meter_foto = $request->file('flow_meter_foto');
		$pressure_meter_foto = $request->file('pressure_meter_foto');
		$valve_valve_foto = $request->file('valve_valve_foto');
		$penyembur_api_foto = $request->file('penyembur_api_foto');
		$blower_burner_foto = $request->file('blower_burner_foto');
		$pipa_pipa_aspal_foto = $request->file('pipa_pipa_aspal_foto');
		
		$penggerak_pompa_foto= $request->file('penggerak_pompa_check');
		
		$ketel_penimbang_foto = $request->file('ketel_penimbang_foto');
		

		$foto_unit = $request->file('foto_unit');
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

		if ($request->penggerak_pompa_check < '4') {
			if ($kesimpulan_check < $request->penggerak_pompa_check) {
				$kesimpulan_check = $request->penggerak_pompa_check;
			}
		}

		
		if ($request->ketel_penimbang_check < '4') {
			if ($kesimpulan_check < $request->ketel_penimbang_check) {
				$kesimpulan_check = $request->ketel_penimbang_check;
			}
		}

		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitPemasokAspal() : \App\PeriksaDuaAMPUnitPemasokAspal::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;

		$pm->termometer_check = $request->termometer_check;
		$pm->termometer_ket = $request->termometer_ket;

		if ( !is_null($termometer_foto) )  {
			$fileName_termometer_foto = str_random(20) . '.' . $termometer_foto->getClientOriginalExtension();	
			$pm->termometer_foto = $fileName_termometer_foto;
			$this->_s->UploadFile($termometer_foto,$fileName_termometer_foto);
		}

		$pm->pompa_penyemprot_check = $request->pompa_penyemprot_check;
		$pm->pompa_penyemprot_ket = $request->pompa_penyemprot_ket;
		
		if ( !is_null($pompa_penyemprot_foto) )  {
			$fileName_pompa_penyemprot_foto = str_random(20) . '.' . $pompa_penyemprot_foto->getClientOriginalExtension();	
			$pm->pompa_penyemprot_foto = $fileName_pompa_penyemprot_foto;
			$this->_s->UploadFile($pompa_penyemprot_foto,$fileName_pompa_penyemprot_foto);
		}

		$pm->pompa_transfer_check = $request->pompa_transfer_check;
		$pm->pompa_transfer_ket = $request->pompa_transfer_ket;

		if ( !is_null($pompa_transfer_foto) )  {
			$fileName_pompa_transfer_foto = str_random(20) . '.' . $pompa_transfer_foto->getClientOriginalExtension();	
			$pm->pompa_transfer_foto = $fileName_pompa_transfer_foto;
			$this->_s->UploadFile($pompa_transfer_foto,$fileName_pompa_transfer_foto);
		}

		$pm->pompa_oli_check = $request->pompa_oli_check;
		$pm->pompa_oli_ket = $request->pompa_oli_ket;

		if ( !is_null($pompa_oli_foto) )  {
			$fileName_pompa_oli_foto = str_random(20) . '.' . $pompa_oli_foto->getClientOriginalExtension();	
			$pm->pompa_oli_foto = $fileName_pompa_oli_foto;
			$this->_s->UploadFile($pompa_oli_foto,$fileName_pompa_oli_foto);
		}

		$pm->flow_meter_check = $request->flow_meter_check;
		$pm->flow_meter_ket = $request->flow_meter_ket;
		

		if ( !is_null($flow_meter_foto) )  {
			$fileName_flow_meter_foto = str_random(20) . '.' . $flow_meter_foto->getClientOriginalExtension();	
			$pm->flow_meter_foto = $fileName_flow_meter_foto;
			$this->_s->UploadFile($flow_meter_foto,$fileName_flow_meter_foto);
		}

		$pm->pressure_meter_check = $request->pressure_meter_check;
		$pm->pressure_meter_ket = $request->pressure_meter_ket;
		
		if ( !is_null($pressure_meter_foto) )  {
			$fileName_pressure_meter_foto = str_random(20) . '.' . $pressure_meter_foto->getClientOriginalExtension();	
			$pm->pressure_meter_foto = $fileName_pressure_meter_foto;
			$this->_s->UploadFile($pressure_meter_foto,$fileName_pressure_meter_foto);
		}

		$pm->valve_valve_check = $request->valve_valve_check;
		$pm->valve_valve_ket = $request->valve_valve_ket;

		if ( !is_null($valve_valve_foto) )  {
			$fileName_valve_valve_foto = str_random(20) . '.' . $valve_valve_foto->getClientOriginalExtension();	
			$pm->valve_valve_foto = $fileName_valve_valve_foto;
			$this->_s->UploadFile($valve_valve_foto,$fileName_valve_valve_foto);
		}

		$pm->penyembur_api_check = $request->penyembur_api_check;
		$pm->penyembur_api_ket = $request->penyembur_api_ket;

		if ( !is_null($penyembur_api_foto) )  {
			$fileName_penyembur_api_foto = str_random(20) . '.' . $penyembur_api_foto->getClientOriginalExtension();	
			$pm->penyembur_api_foto = $fileName_penyembur_api_foto;
			$this->_s->UploadFile($penyembur_api_foto,$fileName_penyembur_api_foto);
		}

		$pm->blower_burner_check = $request->blower_burner_check;
		$pm->blower_burner_ket = $request->blower_burner_ket;

		if ( !is_null($blower_burner_foto) )  {
			$fileName_blower_burner_foto = str_random(20) . '.' . $blower_burner_foto->getClientOriginalExtension();	
			$pm->blower_burner_foto = $fileName_blower_burner_foto;
			$this->_s->UploadFile($blower_burner_foto,$fileName_blower_burner_foto);
		}

		$pm->pipa_pipa_aspal_check = $request->pipa_pipa_aspal_check;
		$pm->pipa_pipa_aspa_ket = $request->pipa_pipa_aspa_ket;

		if ( !is_null($pipa_pipa_aspal_foto) )  {
			$fileName_pipa_pipa_aspal_foto = str_random(20) . '.' . $pipa_pipa_aspal_foto->getClientOriginalExtension();	
			$pm->pipa_pipa_aspal_foto = $fileName_pipa_pipa_aspal_foto;
			$this->_s->UploadFile($pipa_pipa_aspal_foto,$fileName_pipa_pipa_aspal_foto);
		}

		$pm->penggerak_pompa_check = $request->penggerak_pompa_check;
		$pm->penggerak_pompa_ket = $request->penggerak_pompa_ket;

		if ( !is_null($penggerak_pompa_foto) )  {
			$fileName_penggerak_pompa_foto = str_random(20) . '.' . $penggerak_pompa_foto->getClientOriginalExtension();	
			$pm->penggerak_pompa_foto = $fileName_penggerak_pompa_foto;
			$this->_s->UploadFile($penggerak_pompa_foto,$fileName_penggerak_pompa_foto);
		}

		

		$pm->ketel_penimbang_check = $request->ketel_penimbang_check;
		$pm->ketel_penimbang_ket = $request->ketel_penimbang_ket;

		if ( !is_null($ketel_penimbang_foto) )  {
			$fileName_ketel_penimbang_foto = str_random(20) . '.' . $ketel_penimbang_foto->getClientOriginalExtension();	
			$pm->ketel_penimbang_foto = $fileName_ketel_penimbang_foto;
			$this->_s->UploadFile($ketel_penimbang_foto,$fileName_ketel_penimbang_foto);
		}

		
								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		$pm->id_periksa2 = \Session::get('id_periksa2');
		
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitpemasokaspal');	
	}


	
	
	

}
