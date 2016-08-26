<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitElevator as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitElevatorCtrl extends Controller {
	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}
	public function periksaSatuAMPUnitElevator(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_elevator = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_elevator')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_elevator',$pm_satu_amp_elevator);
	}

	public function periksaSatuAMPUnitElevatorPost(Request $request){
		$mangkok_foto  = $request->file('mangkok_foto');
		$rantai_pemutar_foto  = $request->file('rantai_pemutar_foto');
		$sprocket_pemutar_foto  = $request->file('sprocket_pemutar_foto');
		$sprocket_pembantu_foto  = $request->file('sprocket_pembantu_foto');
		
		$ban_berjalan_foto  = $request->file('ban_berjalan_foto');
		$roll_pemutar_foto  = $request->file('roll_pemutar_foto');
		$bearing_foto  = $request->file('bearing_foto');
		$roller_foto  = $request->file('roller_foto');
		$chain_foto  = $request->file('chain_foto');
		$vbelt_foto  = $request->file('vbelt_foto');
		$pelindung_elevator_foto  = $request->file('pelindung_elevator_foto');
		$motor_pemutar_foto  = $request->file('motor_pemutar_foto');
		$konstruksi_pelindung_foto  = $request->file('konstruksi_pelindung_foto');
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->mangkok_check < '4') {
			if ($kesimpulan_check < $request->mangkok_check) {
				$kesimpulan_check = $request->mangkok_check;
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

		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}

		if ($request->vbelt_check < '4') {
			if ($kesimpulan_check < $request->vbelt_check) {
				$kesimpulan_check = $request->vbelt_check;
			}
		}

		if ($request->pelindung_elevator_check < '4') {
			if ($kesimpulan_check < $request->pelindung_elevator_check) {
				$kesimpulan_check = $request->pelindung_elevator_check;
			}
		}

		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}

		if ($request->konstruksi_pelindung_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pelindung_check) {
				$kesimpulan_check = $request->konstruksi_pelindung_check;
			}
		}
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitElevator() : \App\PeriksaSatuAMPUnitElevator::find($request->no_id) ;
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->mangkok_check = $request->mangkok_check;
		$pm->mangkok_ket = $request->mangkok_ket;

		if ( !is_null($mangkok_foto) )  {
			$fileName_mangkok_foto = str_random(20) . '.' . $mangkok_foto->getClientOriginalExtension();	
			$pm->mangkok_foto = $fileName_mangkok_foto;
			$this->_s->UploadFile($mangkok_foto,$fileName_mangkok_foto);
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

		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;
		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20) . '.' . $chain_foto->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}

		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		

		if ( !is_null($vbelt_foto) )  {
			$fileName_vbelt_foto = str_random(20) . '.' . $vbelt_foto->getClientOriginalExtension();	
			$pm->vbelt_foto = $fileName_vbelt_foto;
			$this->_s->UploadFile($vbelt_foto,$fileName_vbelt_foto);
		}

		$pm->pelindung_elevator_check = $request->pelindung_elevator_check;
		$pm->pelindung_elevator_ket = $request->pelindung_elevator_ket;

		if ( !is_null($pelindung_elevator_foto) )  {
			$fileName_pelindung_elevator_foto = str_random(20) . '.' . $pelindung_elevator_foto->getClientOriginalExtension();	
			$pm->pelindung_elevator_foto = $fileName_pelindung_elevator_foto;
			$this->_s->UploadFile($pelindung_elevator_foto,$fileName_pelindung_elevator_foto);
		}

		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->motor_pemutar_ket = $request->motor_pemutar_ket;

		if ( !is_null($motor_pemutar_foto) )  {
			$fileName_motor_pemutar_foto = str_random(20) . '.' . $motor_pemutar_foto->getClientOriginalExtension();	
			$pm->motor_pemutar_foto = $fileName_motor_pemutar_foto;
			$this->_s->UploadFile($motor_pemutar_foto,$fileName_motor_pemutar_foto);
		}

		$pm->konstruksi_pelindung_check = $request->konstruksi_pelindung_check;
		$pm->konstruksi_pelindung_ket = $request->konstruksi_pelindung_ket;

		if ( !is_null($konstruksi_pelindung_foto) )  {
			$fileName_konstruksi_pelindung_foto = str_random(20) . '.' . $konstruksi_pelindung_foto->getClientOriginalExtension();	
			$pm->konstruksi_pelindung_foto = $fileName_konstruksi_pelindung_foto;
			$this->_s->UploadFile($konstruksi_pelindung_foto,$fileName_konstruksi_pelindung_foto);
		}
		
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitelevator');	
	}


	
	
	

}
