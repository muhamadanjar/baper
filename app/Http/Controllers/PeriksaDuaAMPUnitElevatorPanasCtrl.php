<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitElevatorPanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitElevatorPanasCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaDuaAMPUnitElevatorPanas(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_elevatorpanas = \App\PeriksaDuaAMPUnitElevatorPanas::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_elevator_panas')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_elevatorpanas);
	}

	public function periksaDuaAMPUnitElevatorPanasPost(Request $request){
		$rantai_pemutar_foto = $request->file('rantai_pemutar_foto');
		$sprocket_pemutar_foto = $request->file('sprocket_pemutar_foto');
		$sprocket_pembantu_foto = $request->file('sprocket_pembantu_foto');
		$motor_pemutar_foto = $request->file('motor_pemutar_foto');
		$bearing_foto = $request->file('bearing_foto');
	
		$foto_unit = $request->file('foto_unit');
		
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->rantai_pemutar_check < '4') {
			if ($kesimpulan_check < $request->rantai_pemutar_check) {
				$kesimpulan_check = $request->rantai_pemutar_check;
			}
		}
		if ($request->sprocket_pemutar_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pemutar_check) {
				$kesimpulan_check = $request->sprocket_pemutar_check;
			}
		}
		if ($request->sprocket_pembantu_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pembantu_check) {
				$kesimpulan_check = $request->sprocket_pembantu_check;
			}
		}
		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}
		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}
	
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitElevatorPanas() : \App\PeriksaDuaAMPUnitElevatorPanas::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		
		$pm->rantai_pemutar_check = $request->rantai_pemutar_check;
		$pm->rantai_pemutar_ket = $request->rantai_pemutar_ket;
		
		if ( !is_null($rantai_pemutar_foto) )  {
			$fileName_rantai_pemutar_foto = str_random(20) . '.' . $rantai_pemutar_foto->getClientOriginalExtension();	
			$pm->rantai_pemutar_foto = $fileName_rantai_pemutar_foto;
			$this->_s->UploadFile($rantai_pemutar_foto,$fileName_rantai_pemutar_foto);
		}

		$pm->sprocket_pemutar_check = $request->sprocket_pemutar_check;
		$pm->sprocket_pemutar_ket = $request->sprocket_pemutar_ket;
		
		if ( !is_null($sprocket_pemutar_foto) )  {
			$fileName_sprocket_pemutar_foto = str_random(20) . '.' . $sprocket_pemutar_foto->getClientOriginalExtension();	
			$pm->sprocket_pemutar_foto = $fileName_sprocket_pemutar_foto;
			$this->_s->UploadFile($sprocket_pemutar_foto,$fileName_sprocket_pemutar_foto);
		}

		$pm->sprocket_pembantu_check = $request->sprocket_pembantu_check;
		$pm->sprocket_pembantu_ket = $request->sprocket_pembantu_ket;
		
		if ( !is_null($sprocket_pembantu_foto) )  {
			$fileName_sprocket_pembantu_foto = str_random(20) . '.' . $sprocket_pembantu_foto->getClientOriginalExtension();	
			$pm->sprocket_pembantu_foto = $fileName_sprocket_pembantu_foto;
			$this->_s->UploadFile($sprocket_pembantu_foto,$fileName_sprocket_pembantu_foto);
		}

		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->motor_pemutar_ket = $request->motor_pemutar_ket;
		
		if ( !is_null($motor_pemutar_foto) )  {
			$fileName_motor_pemutar_foto = str_random(20) . '.' . $motor_pemutar_foto->getClientOriginalExtension();	
			$pm->motor_pemutar_foto = $fileName_motor_pemutar_foto;
			$this->_s->UploadFile($motor_pemutar_foto,$fileName_motor_pemutar_foto);
		}

		
		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		
		if ( !is_null($bearing_foto) )  {
			$fileNamebearing_foto = str_random(20) . '.' . $bearing_foto->getClientOriginalExtension();
			$pm->bearing_foto = $fileNamebearing_foto ;
			$this->_s->UploadFile($bearing_foto,$fileNamebearing_foto);
		}
						
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->id_periksa = $request->id_periksa;
		$pm->id_periksa2 = \Session::get('id_periksa2');
		$pm->tgl_periksa = Carbon::now();
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitelevatorpanas');	
	}


	
	
	

}
