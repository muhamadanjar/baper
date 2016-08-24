<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\AHelper;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PeriksaSatuAMPUnitBanBerjalanCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
	}

	public function periksaSatuAMPUnitBanBerjalan(){
		$id_periksa = session('id_periksa');
		
		$amp_banberjalan = \App\PeriksaSatuAMPUnitBanBerjalan::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		

		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_ban_berjalan')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_unitbanberjalan',$amp_banberjalan);
	}

	public function periksaSatuAMPUnitBanBerjalanPost(Request $request){
		$ban_berjalan_penampung_foto = $request->file('ban_berjalan_penampung_foto');
		$ban_berjalan_colector_foto = $request->file('ban_berjalan_colector_foto');
		$ban_berjalan_dryer_foto = $request->file('ban_berjalan_dryer_foto');
		$ban_berjalan_feeder_foto = $request->file('ban_berjalan_feeder_foto');
		$alat_penimbang_foto = $request->file('alat_penimbang_foto');
		$rol_pemutar_foto = $request->file('rol_pemutar_foto');
		$bearing_foto = $request->file('bearing_foto');
		$sprocket_foto = $request->file('sprocket_foto');
		$roller_foto = $request->file('roller_foto');
		$gear_foto = $request->file('gear_foto');
		$chain_foto = $request->file('chain_foto');
		$vbelt_foto = $request->file('vbelt_foto');
		$kontruksi_pendukung_foto = $request->file('kontruksi_pendukung_foto');
		$pelindung_kontruksi_foto = $request->file('pelindung_kontruksi_foto');
		$motor_pemutar_foto = $request->file('motor_pemutar_foto');
		$foto_unit = $request->file('foto_unit');

		$kesimpulan_check = '1';
		if ($request->ban_berjalan_penampung_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_penampung_check) {
				$kesimpulan_check = $request->ban_berjalan_penampung_check;
			}
		}

		if ($request->ban_berjalan_colector_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_colector_check) {
				$kesimpulan_check = $request->ban_berjalan_colector_check;
			}
		}

		if ($request->ban_berjalan_dryer_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_dryer_check) {
				$kesimpulan_check = $request->ban_berjalan_dryer_check;
			}
		}

		if ($request->ban_berjalan_feeder_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_feeder_check) {
				$kesimpulan_check = $request->ban_berjalan_feeder_check;
			}
		}

		
		if ($request->alat_penimbang_check < '4') {
			if ($kesimpulan_check < $request->alat_penimbang_check) {
				$kesimpulan_check = $request->alat_penimbang_check;
			}
		}

		if ($request->rol_pemutar_check < '4') {
			if ($kesimpulan_check < $request->rol_pemutar_check) {
				$kesimpulan_check = $request->rol_pemutar_check;
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

		if ($request->kontruksi_pendukung_check < '4') {
			if ($kesimpulan_check < $request->kontruksi_pendukung_check) {
				$kesimpulan_check = $request->kontruksi_pendukung_check;
			}
		}

		if ($request->pelindung_kontruksi_check < '4') {
			if ($kesimpulan_check < $request->pelindung_kontruksi_check) {
				$kesimpulan_check = $request->pelindung_kontruksi_check;
			}
		}

		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}

		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitBanBerjalan() : \App\PeriksaSatuAMPUnitBanBerjalan::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->ban_berjalan_penampung_check = $request->ban_berjalan_penampung_check;
		$pm->ban_berjalan_colector_check = $request->ban_berjalan_colector_check;
		$pm->ban_berjalan_dryer_check = $request->ban_berjalan_dryer_check;
		$pm->ban_berjalan_feeder_check = $request->ban_berjalan_feeder_check;
		$pm->alat_penimbang_check = $request->alat_penimbang_check;
		$pm->rol_pemutar_check = $request->rol_pemutar_check;
		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->bearing_check = $request->bearing_check;
		$pm->sprocket_check = $request->sprocket_check;
		$pm->roller_check = $request->roller_check;
		$pm->gear_check = $request->gear_check;
		$pm->chain_check = $request->chain_check;
		$pm->vbelt_check = $request->vbelt_check;
		$pm->kontruksi_pendukung_check = $request->kontruksi_pendukung_check;
		$pm->pelindung_kontruksi_check = $request->pelindung_kontruksi_check;
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;

		$pm->id_periksa = $request->id_periksa;
		$pm->tgl_periksa = Carbon::now();

		if ( !is_null($ban_berjalan_penampung_foto) )  {
			$fileName_ban_berjalan_penampung_foto = str_random(20) . '.' . $ban_berjalan_penampung_foto->getClientOriginalExtension();	
			$pm->ban_berjalan_penampung_foto = $fileName_ban_berjalan_penampung_foto;
			$this->_s->UploadFile($ban_berjalan_penampung_foto,$fileName_ban_berjalan_penampung_foto);
		}

		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}

		if ( !is_null($ban_berjalan_colector_foto) )  {
			$fileName_ban_berjalan_colector_foto = str_random(20).'.'.$ban_berjalan_colector_foto
			->getClientOriginalExtension();	
			$pm->ban_berjalan_colector_foto = $fileName_ban_berjalan_colector_foto;
			$this->_s->UploadFile($ban_berjalan_colector_foto,$fileName_ban_berjalan_colector_foto);
		}

		if ( !is_null($ban_berjalan_dryer_foto) )  {
			$fileName_ban_berjalan_dryer_foto = str_random(20).'.'.$ban_berjalan_dryer_foto
			->getClientOriginalExtension();	
			$pm->ban_berjalan_dryer_foto = $fileName_ban_berjalan_dryer_foto;
			$this->_s->UploadFile($ban_berjalan_dryer_foto,$fileName_ban_berjalan_dryer_foto);
		}

		if ( !is_null($ban_berjalan_feeder_foto) )  {
			$fileName_ban_berjalan_feeder_foto = str_random(20).'.'.$ban_berjalan_feeder_foto
			->getClientOriginalExtension();	
			$pm->ban_berjalan_feeder_foto = $fileName_ban_berjalan_feeder_foto;
			$this->_s->UploadFile($ban_berjalan_feeder_foto,$fileName_ban_berjalan_feeder_foto);
		}

		if ( !is_null($alat_penimbang_foto) )  {
			$fileName_alat_penimbang_foto = str_random(20).'.'.$alat_penimbang_foto
			->getClientOriginalExtension();	
			$pm->alat_penimbang_foto = $fileName_alat_penimbang_foto;
			$this->_s->UploadFile($alat_penimbang_foto,$fileName_alat_penimbang_foto);
		}
		
		if ( !is_null($rol_pemutar_foto) )  {
			$fileName_rol_pemutar_foto = str_random(20).'.'.$rol_pemutar_foto
			->getClientOriginalExtension();	
			$pm->rol_pemutar_foto = $fileName_alat_penimbang_foto;
			$this->_s->UploadFile($rol_pemutar_foto,$fileName_rol_pemutar_foto);
		}

		if ( !is_null($bearing_foto) )  {
			$fileName_bearing_foto = str_random(20).'.'.$bearing_foto
			->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}

		if ( !is_null($sprocket_foto) )  {
			$fileName_sprocket_foto = str_random(20).'.'.$sprocket_foto
			->getClientOriginalExtension();	
			$pm->sprocket_foto = $fileName_sprocket_foto;
			$this->_s->UploadFile($sprocket_foto,$fileName_sprocket_foto);
		}

		if ( !is_null($roller_foto) )  {
			$fileName_roller_foto = str_random(20).'.'.$roller_foto
			->getClientOriginalExtension();	
			$pm->roller_foto = $fileName_roller_foto;
			$this->_s->UploadFile($roller_foto,$fileName_roller_foto);
		}

		if ( !is_null($gear_foto) )  {
			$fileName_gear_foto = str_random(20).'.'.$gear_foto
			->getClientOriginalExtension();	
			$pm->gear_foto = $fileName_gear_foto;
			$this->_s->UploadFile($gear_foto,$fileName_gear_foto);
		}

		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20).'.'.$chain_foto
			->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}

		if ( !is_null($vbelt_foto) )  {
			$fileName_vbelt_foto = str_random(20).'.'.$vbelt_foto
			->getClientOriginalExtension();	
			$pm->vbelt_foto = $fileName_vbelt_foto;
			$this->_s->UploadFile($vbelt_foto,$fileName_vbelt_foto);
		}

		if ( !is_null($kontruksi_pendukung_foto) )  {
			$fileName_kontruksi_pendukung_foto = str_random(20).'.'.$kontruksi_pendukung_foto
			->getClientOriginalExtension();	
			$pm->kontruksi_pendukung_foto = $fileName_kontruksi_pendukung_foto;
			$this->_s->UploadFile($kontruksi_pendukung_foto,$fileName_kontruksi_pendukung_foto);
		}

		if ( !is_null($pelindung_kontruksi_foto) )  {
			$fileName_pelindung_kontruksi_foto = str_random(20).'.'.$pelindung_kontruksi_foto
			->getClientOriginalExtension();	
			$pm->pelindung_kontruksi_foto = $fileName_pelindung_kontruksi_foto;
			$this->_s->UploadFile($pelindung_kontruksi_foto,$fileName_pelindung_kontruksi_foto);
		}

		if ( !is_null($motor_pemutar_foto) )  {
			$fileName_motor_pemutar_foto = str_random(20).'.'.$motor_pemutar_foto
			->getClientOriginalExtension();	
			$pm->motor_pemutar_foto = $fileName_motor_pemutar_foto;
			$this->_s->UploadFile($motor_pemutar_foto,$fileName_motor_pemutar_foto);
		}
		
		if ( !is_null($foto_unit) )  {
			$fileName_foto_unit = str_random(20).'.'.$foto_unit
			->getClientOriginalExtension();	
			$pm->foto_unit = $fileName_foto_unit;
			$this->_s->UploadFile($foto_unit,$fileName_foto_unit);
		}
		
		

		

		$pm->save();
		
		return redirect('amp/pemeriksaan1/unitbanberjalan');
	}

}
