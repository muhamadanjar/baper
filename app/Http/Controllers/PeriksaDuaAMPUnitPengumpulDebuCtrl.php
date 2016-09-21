<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitPengumpulDebu as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitPengumpulDebuCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}

	public function periksaDuaAMPUnitPengumpulDebu(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_pengumpuldebu = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_pengumpul_debu')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_pengumpuldebu);
	}

	public function periksaDuaAMPUnitPengumpulDebuPost(Request $request){
		$bearing_poto = $request->file('bearing_poto');
		$vbelt_poto = $request->file('vbelt_poto');
		$pipa_pipa_poto = $request->file('pipa_pipa_poto');
		$pompa_air_poto = $request->file('pompa_air_poto');
		$penyemprot_air_poto = $request->file('penyemprot_air_poto');
		$dry_scrubber_poto = $request->file('dry_scrubber_poto');
		$wet_scrubber_poto = $request->file('wet_scrubber_poto');
		$bag_filter_poto = $request->file('bag_filter_poto');
		$exhaust_fan_poto = $request->file('exhaust_fan_poto');
		$motor_penyedot_poto = $request->file('motor_penyedot_poto');
		
		$foto_unit = $request->file('foto_unit');

		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}
		if ($request->vbelt_check < '4') {
			if ($kesimpulan_check < $request->vbelt_check) {
				$kesimpulan_check = $request->vbelt_check;
			}
		}
		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
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
		if ($request->wet_scrubber_check < '4') {
			if ($kesimpulan_check < $request->wet_scrubber_check) {
				$kesimpulan_check = $request->wet_scrubber_check;
			}
		}
		if ($request->bag_filter_check < '4') {
			if ($kesimpulan_check < $request->bag_filter_check) {
				$kesimpulan_check = $request->bag_filter_check;
			}
		}
		if ($request->exhaust_fan_check < '4') {
			if ($kesimpulan_check < $request->exhaust_fan_check) {
				$kesimpulan_check = $request->exhaust_fan_check;
			}
		}
		if ($request->motor_penyedot_check < '4') {
			if ($kesimpulan_check < $request->motor_penyedot_check) {
				$kesimpulan_check = $request->motor_penyedot_check;
			}
		}

		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitPengumpulDebu() : \App\PeriksaDuaAMPUnitPengumpulDebu::find($request->no_id) ;
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		
		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		
		if ( !is_null($bearing_poto) )  {
			$fileName_bearing_poto = str_random(20) . '.' . $bearing_poto->getClientOriginalExtension();	
			$pm->bearing_poto = $fileName_bearing_poto;
			$this->_s->UploadFile($bearing_poto,$fileName_bearing_poto);
		}

		
		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		
		if ( !is_null($vbelt_poto) )  {
			$fileName_vbelt_poto = str_random(20) . '.' . $vbelt_poto->getClientOriginalExtension();	
			$pm->vbelt_poto = $fileName_vbelt_poto;
			$this->_s->UploadFile($vbelt_poto,$fileName_vbelt_poto);
		}
		
		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		
		if ( !is_null($pipa_pipa_poto) )  {
			$fileName_pipa_pipa_poto = str_random(20) . '.' . $pipa_pipa_poto->getClientOriginalExtension();	
			$pm->pipa_pipa_poto = $fileName_pipa_pipa_poto;
			$this->_s->UploadFile($pipa_pipa_poto,$fileName_pipa_pipa_poto);
		}
		
		$pm->pompa_air_check = $request->pompa_air_check;
		$pm->pompa_air_ket = $request->pompa_air_ket;
		
		if ( !is_null($pompa_air_poto) )  {
			$fileName_pompa_air_poto = str_random(20) . '.' . $pompa_air_poto->getClientOriginalExtension();	
			$pm->pompa_air_poto = $fileName_pompa_air_poto;
			$this->_s->UploadFile($pompa_air_poto,$fileName_pompa_air_poto);
		}
		
		$pm->penyemprot_air_check = $request->penyemprot_air_check;
		$pm->penyemprot_air_ket = $request->penyemprot_air_ket;
		
		if ( !is_null($penyemprot_air_poto) )  {
			$fileName_penyemprot_air_poto= str_random(20) . '.' . $penyemprot_air_poto->getClientOriginalExtension();	
			$pm->penyemprot_air_poto = $fileName_penyemprot_air_poto;
			$this->_s->UploadFile($penyemprot_air_poto,$fileName_penyemprot_air_poto);
		}
		
		$pm->dry_scrubber_check = $request->dry_scrubber_check;
		$pm->dry_scrubber_ket = $request->dry_scrubber_ket;
		
		if ( !is_null($dry_scrubber_poto) )  {
			$fileName_dry_scrubber_poto= str_random(20) . '.' . $dry_scrubber_poto->getClientOriginalExtension();	
			$pm->dry_scrubber_poto = $fileName_dry_scrubber_poto;
			$this->_s->UploadFile($dry_scrubber_poto,$fileName_penyemprot_air_poto);
		}
		
		$pm->dry_scrubber_check = $request->dry_scrubber_check;
		$pm->dry_scrubber_ket = $request->dry_scrubber_ket;
		
		if ( !is_null($dry_scrubber_poto) )  {
			$fileName_dry_scrubber_poto= str_random(20) . '.' . $dry_scrubber_poto->getClientOriginalExtension();	
			$pm->dry_scrubber_poto = $fileName_dry_scrubber_poto;
			$this->_s->UploadFile($dry_scrubber_poto,$fileName_penyemprot_air_poto);
		}
		
		
		$pm->wet_scrubber_check = $request->wet_scrubber_check;
		$pm->wet_scrubber_ket = $request->wet_scrubber_ket;
		
		if ( !is_null($wet_scrubber_poto) )  {
			$fileName_wet_scrubber_poto= str_random(20) . '.' . $wet_scrubber_poto->getClientOriginalExtension();	
			$pm->wet_scrubber_poto = $fileName_wet_scrubber_poto;
			$this->_s->UploadFile($wet_scrubber_poto,$fileName_wet_scrubber_poto);
		}
		
		$pm->bag_filter_check = $request->bag_filter_check;
		$pm->bag_filter_ket = $request->bag_filter_ket;
		
		if ( !is_null($bag_filter_poto) )  {
			$fileName_bag_filter_poto= str_random(20) . '.' . $bag_filter_poto->getClientOriginalExtension();	
			$pm->bag_filter_poto = $fileName_bag_filter_poto;
			$this->_s->UploadFile($bag_filter_poto,$fileName_bag_filter_poto);
		}
		
		$pm->exhaust_fan_check = $request->exhaust_fan_check;
		$pm->exhaust_fan_ket = $request->exhaust_fan_ket;
		
		if ( !is_null($exhaust_fan_poto) )  {
			$fileName_exhaust_fan_poto= str_random(20) . '.' . $exhaust_fan_poto->getClientOriginalExtension();	
			$pm->exhaust_fan_poto = $fileName_exhaust_fan_poto;
			$this->_s->UploadFile($exhaust_fan_poto,$fileName_exhaust_fan_poto);
		}
		
		$pm->motor_penyedot_check = $request->motor_penyedot_check;
		$pm->motor_penyedot_ket = $request->motor_penyedot_ket;
		
		if ( !is_null($motor_penyedot_poto) )  {
			$fileName_motor_penyedot_poto= str_random(20) . '.' . $motor_penyedot_poto->getClientOriginalExtension();	
			$pm->motor_penyedot_poto = $fileName_motor_penyedot_poto;
			$this->_s->UploadFile($motor_penyedot_poto,$fileName_motor_penyedot_poto);
		}
		
		if ( !is_null($foto_unit) )  {
			$fileName_foto_unit= str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName_foto_unit;
			$this->_s->UploadFile($foto_unit,$fileName_foto_unit);
		}
		
				
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->id_periksa = $request->id_periksa;
		$pm->id_periksa2 = $request->id_periksa2;
		$pm->tgl_periksa = Carbon::now();
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		

		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitpengumpuldebu');	
	}


	
	
	

}
