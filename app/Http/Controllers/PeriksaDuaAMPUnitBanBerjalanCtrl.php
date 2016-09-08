<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class PeriksaDuaAMPUnitBanBerjalanCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}

	public function periksaDuaAMPUnitBanBerjalan(){
		$id_periksa = session('id_periksa');
		$periksaduabanberjalan = \App\PeriksaDuaAMPUnitBanBerjalan::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_ban_berjalan')
			->with('id_periksa',$id_periksa)
			->with('periksaduabanberjalan',$periksaduabanberjalan);
	}
	public function periksaDuaAMPUnitBanBerjalanPost(Request $request){
		$ban_berjalan_penampung_foto = $request->file('ban_berjalan_penampung_foto');
		$alat_penimbang_foto = $request->file('alat_penimbang_foto');
		$ban_berjalan_colector_foto = $request->file('ban_berjalan_colector_foto');
		$ban_berjalan_foto = $request->file('ban_berjalan_foto');
		$ban_berjalan_feeder_foto = $request->file('ban_berjalan_feeder_foto');
		$rol_pemutar_foto = $request->file('rol_pemutar_foto');
		$motor_pemutar_foto = $request->file('motor_pemutar_foto');
		$bearing_foto = $request->file('bearing_foto');
		$sprocket_foto = $request->file('sprocket_foto');
		$roller_foto = $request->file('roller_foto');
		$gear_foto = $request->file('gear_foto');
		$v_belt_foto = $request->file('v_belt_foto');
		$chain_foto = $request->file('chain_foto');
		
		$foto_unit = $request->file('foto_unit');

		$kesimpulan_check = '1';
		if ($request->ban_berjalan_penampung_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_penampung_check) {
				$kesimpulan_check = $request->ban_berjalan_penampung_check;
			}
		}

		if ($request->alat_penimbang_check < '4') {
			if ($kesimpulan_check < $request->alat_penimbang_check) {
				$kesimpulan_check = $request->alat_penimbang_check;
			}
		}

		if ($request->ban_berjalan_colector_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_colector_check) {
				$kesimpulan_check = $request->ban_berjalan_colector_check;
			}
		}

		if ($request->ban_berjalan_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_check) {
				$kesimpulan_check = $request->ban_berjalan_check;
			}
		}

		if ($request->ban_berjalan_feeder_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_feeder_check) {
				$kesimpulan_check = $request->ban_berjalan_feeder_check;
			}
		}

		if ($request->rol_pemutar_check < '4') {
			if ($kesimpulan_check < $request->rol_pemutar_check) {
				$kesimpulan_check = $request->rol_pemutar_check;
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

		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

		if ($request->roller_check < '4') {
			if ($kesimpulan_check < $request->roller_check) {
				$kesimpulan_check = $request->roller_check;
			}
		}

		if ($request->gear_check < '4') {
			if ($kesimpulan_check < $request->gear_check) {
				$kesimpulan_check = $request->gear_check;
			}
		}
		
		if ($request->v_belt_check < '4') {
			if ($kesimpulan_check < $request->v_belt_check) {
				$kesimpulan_check = $request->v_belt_check;
			}
		}
		
		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}
		

		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitBanBerjalan() : \App\PeriksaDuaAMPUnitBanBerjalan::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;

		$pm->ban_berjalan_penampung_check = $request->ban_berjalan_penampung_check;
		$pm->ban_berjalan_penampung_ket = $request->ban_berjalan_penampung_ket;
		if ( !is_null($ban_berjalan_penampung_foto) )  {
			$fileName_ban_berjalan_penampung_foto = str_random(20) . '.' . $ban_berjalan_penampung_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_penampung_foto = $fileName_ban_berjalan_penampung_foto;
			$this->_s->UploadFile($ban_berjalan_penampung_foto,$fileName_ban_berjalan_penampung_foto);
		}

		$pm->alat_penimbang_check = $request->alat_penimbang_check;
		$pm->alat_penimbang_ket = $request->alat_penimbang_ket;
		if ( !is_null($alat_penimbang_foto) )  {
			$fileName_alat_penimbang_foto = str_random(20) . '.' . $alat_penimbang_foto->getClientOriginalExtension();	
			$pm->alat_penimbang_foto = $fileName_alat_penimbang_foto;
			$this->_s->UploadFile($alat_penimbang_foto,$fileName_alat_penimbang_foto);
		}
		
		$pm->ban_berjalan_colector_check = $request->ban_berjalan_colector_check;
		$pm->ban_berjalan_colector_ket = $request->ban_berjalan_colector_ket;
		if ( !is_null($ban_berjalan_colector_foto) )  {
			$fileName_ban_berjalan_colector_foto = str_random(20) . '.' . $ban_berjalan_colector_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_colector_foto = $fileName_ban_berjalan_colector_foto;
			$this->_s->UploadFile($ban_berjalan_colector_foto,$fileName_ban_berjalan_colector_foto);
		}

		$pm->ban_berjalan_check = $request->ban_berjalan_check;
		$pm->ban_berjalan_ket = $request->ban_berjalan_ket;
		if ( !is_null($ban_berjalan_foto) )  {
			$fileName_ban_berjalan_foto = str_random(20) . '.' . $ban_berjalan_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_foto = $fileName_ban_berjalan_foto;
			$this->_s->UploadFile($ban_berjalan_foto,$fileName_ban_berjalan_foto);
		}
		$pm->ban_berjalan_feeder_check = $request->ban_berjalan_feeder_check;
		$pm->ban_berjalan_feeder_ket = $request->ban_berjalan_feeder_ket;
		if ( !is_null($ban_berjalan_feeder_foto) )  {
			$fileName_ban_berjalan_feeder_foto = str_random(20) . '.' . $ban_berjalan_feeder_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_feeder_foto = $fileName_ban_berjalan_feeder_foto;
			$this->_s->UploadFile($ban_berjalan_feeder_foto,$fileName_ban_berjalan_feeder_foto);
		}
		$pm->rol_pemutar_check = $request->rol_pemutar_check;
		$pm->rol_pemutar_ket = $request->rol_pemutar_ket;
		if ( !is_null($rol_pemutar_foto) )  {
			$fileName_rol_pemutar_foto = str_random(20) . '.' . $rol_pemutar_foto->getClientOriginalExtension();	
			$pm->rol_pemutar_foto = $fileName_rol_pemutar_foto;
			$this->_s->UploadFile($rol_pemutar_foto,$fileName_rol_pemutar_foto);
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
			$fileName_bearing_foto = str_random(20) . '.' . $bearing_foto->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}

		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;
		if ( !is_null($sprocket_foto) )  {
			$fileName_sprocket_foto = str_random(20) . '.' . $sprocket_foto->getClientOriginalExtension();	
			$pm->sprocket_foto = $fileName_sprocket_foto;
			$this->_s->UploadFile($sprocket_foto,$fileName_sprocket_foto);
		}

		$pm->roller_check = $request->roller_check;
		$pm->roller_ket = $request->roller_ket;
		if ( !is_null($roller_foto) )  {
			$fileName_roller_foto = str_random(20) . '.' . $roller_foto->getClientOriginalExtension();	
			$pm->roller_foto = $fileName_roller_foto;
			$this->_s->UploadFile($roller_foto,$fileName_roller_foto);
		}
		
		$pm->gear_check = $request->gear_check;
		$pm->gear_ket = $request->gear_ket;
		if ( !is_null($gear_foto) )  {
			$fileName_roller_foto = str_random(20) . '.' . $gear_foto->getClientOriginalExtension();	
			$pm->gear_foto = $fileName_roller_foto;
			$this->_s->UploadFile($gear_foto,$fileName_roller_foto);
		}
		
		$pm->v_belt_check = $request->v_belt_check;
		$pm->v_belt_ket = $request->v_belt_ket;
		if ( !is_null($v_belt_foto) )  {
			$fileName_v_belt_foto = str_random(20) . '.' . $v_belt_foto->getClientOriginalExtension();	
			$pm->v_belt_foto = $fileName_v_belt_foto;
			$this->_s->UploadFile($v_belt_foto,$fileName_v_belt_foto);
		}
		
		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;
		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20) . '.' . $chain_foto->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}
		

		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_1 = $request->pemeriksaan_tahap_1;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		//$pm->tgl_periksa = Carbon::now();
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		$pm->save();

		return redirect('amp/pemeriksaan2/unitbanberjalan');	


	}

}
