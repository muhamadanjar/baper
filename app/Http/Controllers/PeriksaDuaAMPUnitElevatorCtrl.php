<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitElevator as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitElevatorCtrl extends Controller {
	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}
	public function periksaDuaAMPUnitElevator(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_elevator = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_elevator')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_elevator);
	}

	public function periksaDuaAMPUnitElevatorPost(Request $request){
		$rantai_pemutar_foto  = $request->file('rantai_pemutar_foto');
		$sprocket_pemutar_foto  = $request->file('sprocket_pemutar_foto');
		$sprocket_pembantu_foto  = $request->file('sprocket_pembantu_foto');
		$roll_pemutar_foto  = $request->file('roll_pemutar_foto');
		
		$ban_berjalan_foto  = $request->file('ban_berjalan_foto');
		$bearing_foto  = $request->file('bearing_foto');
		$roller_foto  = $request->file('roller_foto');
		$sprocket_foto  = $request->file('sprocket_foto');
		$vbelt_foto  = $request->file('vbelt_foto');
		
		$mekanisme_penggerak_foto  = $request->file('pelindung_elevator_foto');
		$motor_pemutar_foto  = $request->file('motor_pemutar_foto');
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

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

		if ($request->sprocket_pembatu_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pembatu_check) {
				$kesimpulan_check = $request->sprocket_pembatu_check;
			}
		}

		
		if ($request->ban_berjalan_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_check) {
				$kesimpulan_check = $request->ban_berjalan_check;
			}
		}

		if ($request->roll_pemutar_check < '4') {
			if ($kesimpulan_check < $request->roll_pemutar_check) {
				$kesimpulan_check = $request->roll_pemutar_check;
			}
		}

		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}

		if ($request->roller_check < '4') {
			if ($kesimpulan_check < $request->roller_check) {
				$kesimpulan_check = $request->roller_check;
			}
		}

		
		if ($request->vbelt_check < '4') {
			if ($kesimpulan_check < $request->vbelt_check) {
				$kesimpulan_check = $request->vbelt_check;
			}
		}

		if ($request->mekanisme_penggerak_check < '4') {
			if ($kesimpulan_check < $request->mekanisme_penggerak_check) {
				$kesimpulan_check = $request->mekanisme_penggerak_check;
			}
		}

		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}

		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitElevator() : \App\PeriksaDuaAMPUnitElevator::find($request->no_id) ;
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		
		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;

		if ( !is_null($sprocket_foto) )  {
			$fileName_sprocket_foto = str_random(20) . '.' . $sprocket_foto->getClientOriginalExtension();	
			$pm->sprocket_foto = $fileName_sprocket_foto;
			$this->_s->UploadFile($sprocket_foto,$fileName_sprocket_foto);
		}

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

		$pm->ban_berjalan_check = $request->ban_berjalan_check;
		$pm->ban_berjalan_ket = $request->ban_berjalan_ket;

		if ( !is_null($ban_berjalan_foto) )  {
			$fileName_ban_berjalan_foto = str_random(20) . '.' . $ban_berjalan_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_foto = $fileName_ban_berjalan_foto;
			$this->_s->UploadFile($ban_berjalan_foto,$fileName_ban_berjalan_foto);
		}

		$pm->roll_pemutar_check = $request->roll_pemutar_check;
		$pm->roll_pemutar_ket = $request->roll_pemutar_ket;

		if ( !is_null($roll_pemutar_foto) )  {
			$fileName_roll_pemutar_foto = str_random(20) . '.' . $roll_pemutar_foto->getClientOriginalExtension();	
			$pm->roll_pemutar_foto = $fileName_roll_pemutar_foto;
			$this->_s->UploadFile($roll_pemutar_foto,$fileName_roll_pemutar_foto);
		}

		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		
		if ( !is_null($bearing_foto) )  {
			$fileName_bearing_foto = str_random(20) . '.' . $bearing_foto->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}

		$pm->roller_check = $request->roller_check;
		$pm->roller_ket = $request->roller_ket;

		if ( !is_null($roller_foto) )  {
			$fileName_roller_foto = str_random(20) . '.' . $roller_foto->getClientOriginalExtension();	
			$pm->roller_foto = $fileName_roller_foto;
			$this->_s->UploadFile($roller_foto,$fileName_roller_foto);
		}

		

		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		

		if ( !is_null($vbelt_foto) )  {
			$fileName_vbelt_foto = str_random(20) . '.' . $vbelt_foto->getClientOriginalExtension();	
			$pm->vbelt_foto = $fileName_vbelt_foto;
			$this->_s->UploadFile($vbelt_foto,$fileName_vbelt_foto);
		}

		$pm->mekanisme_penggerak_check = $request->mekanisme_penggerak_check;
		$pm->mekanisme_penggerak_ket = $request->mekanisme_penggerak_ket;

		if ( !is_null($mekanisme_penggerak_foto) )  {
			$fileName_mekanisme_penggerak_foto = str_random(20) . '.' . $mekanisme_penggerak_foto->getClientOriginalExtension();	
			$pm->mekanisme_penggerak_foto = $fileName_mekanisme_penggerak_foto;
			$this->_s->UploadFile($mekanisme_penggerak_foto,$fileName_mekanisme_penggerak_foto);
		}

		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->motor_pemutar_ket = $request->motor_pemutar_ket;

		if ( !is_null($motor_pemutar_foto) )  {
			$fileName_motor_pemutar_foto = str_random(20) . '.' . $motor_pemutar_foto->getClientOriginalExtension();	
			$pm->motor_pemutar_foto = $fileName_motor_pemutar_foto;
			$this->_s->UploadFile($motor_pemutar_foto,$fileName_motor_pemutar_foto);
		}

		
		
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		$pm->id_periksa2 = $request->id_periksa2;
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitelevator');	
	}


	
	
	

}
