<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class PeriksaDuaAMPUnitPengeringCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}

	public function periksaDuaAMPUnitPengering(){
		$id_periksa = session('id_periksa');
		$periksaduapengering = \App\PeriksaDuaAMPUnitPengering::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_pengering')
			->with('id_periksa',$id_periksa)
			->with('periksaduapengering',$periksaduapengering);
	}

	public function periksaDuaAMPUnitPengeringPost(Request $request){
		
		$silinder_pengering_foto = $request->file('silinder_pengering_foto');
		$roda_gigi_pemutar_foto = $request->file('roda_gigi_pemutar_foto');
		$roda_gigi_ring_foto = $request->file('roda_gigi_ring_foto');
		$motor_penggerak_foto = $request->file('motor_penggerak_foto');
		$bantalan_rol_foto = $request->file('bantalan_rol_foto');
		$bantalan_rol_penahan_foto = $request->file('bantalan_rol_penahan_foto');
		$chain_foto = $request->file('chain_foto');
		$bearing_foto = $request->file('bearing_foto');

		$foto_unit = $request->file('foto_unit');

		$kesimpulan_check = '1';
		if ($request->silinder_pengering_check < '4') {
			if ($kesimpulan_check < $request->silinder_pengering_check) {
				$kesimpulan_check = $request->silinder_pengering_check;
			}
		}

		if ($request->roda_gigi_pemutar_check < '4') {
			if ($kesimpulan_check < $request->roda_gigi_pemutar_check) {
				$kesimpulan_check = $request->roda_gigi_pemutar_check;
			}
		}

		if ($request->roda_gigi_ring_check < '4') {
			if ($kesimpulan_check < $request->roda_gigi_ring_check) {
				$kesimpulan_check = $request->roda_gigi_ring_check;
			}
		}

		if ($request->motor_penggerak_check < '4') {
			if ($kesimpulan_check < $request->motor_penggerak_check) {
				$kesimpulan_check = $request->motor_penggerak_check;
			}
		}

		if ($request->bantalan_rol_check < '4') {
			if ($kesimpulan_check < $request->bantalan_rol_check) {
				$kesimpulan_check = $request->bantalan_rol_check;
			}
		}
		
		if ($request->bantalan_rol_penahan_check < '4') {
			if ($kesimpulan_check < $request->bantalan_rol_penahan_check) {
				$kesimpulan_check = $request->bantalan_rol_penahan_check;
			}
		}

		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}

		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}
		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitPengering() : \App\PeriksaDuaAMPUnitPengering::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;

		$pm->silinder_pengering_check = $request->silinder_pengering_ket;
		$pm->silinder_pengering_ket = $request->silinder_pengering_check;
		if ( !is_null($silinder_pengering_foto) )  {
			$fileName_silinder_pengering_foto = str_random(20) . '.' . $silinder_pengering_foto->getClientOriginalExtension();	
			$pm->silinder_pengering_foto = $fileName_silinder_pengering_foto;
			$this->_s->UploadFile($silinder_pengering_foto,$fileName_silinder_pengering_foto);
		}

		$pm->roda_gigi_pemutar_check = $request->roda_gigi_pemutar_check;
		$pm->roda_gigi_pemutar_ket = $request->roda_gigi_pemutar_ket;
		if ( !is_null($roda_gigi_pemutar_foto) )  {
			$fileName_roda_gigi_pemutar_foto = str_random(20) . '.' . $roda_gigi_pemutar_foto->getClientOriginalExtension();	
			$pm->roda_gigi_pemutar_foto = $fileName_roda_gigi_pemutar_foto;
			$this->_s->UploadFile($roda_gigi_pemutar_foto,$fileName_roda_gigi_pemutar_foto);
		}

		$pm->roda_gigi_ring_check = $request->roda_gigi_ring_check;
		$pm->roda_gigi_ring_ket = $request->roda_gigi_ring_ket;
		if ( !is_null($roda_gigi_ring_foto) )  {
			$fileName_roda_gigi_ring_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->roda_gigi_ring_foto = $fileName_roda_gigi_ring_foto;
			$this->_s->UploadFile($roda_gigi_ring_foto,$fileName_roda_gigi_ring_foto);
		}

		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		if ( !is_null($motor_penggerak_foto) )  {
			$fileName_motor_penggerak_foto = str_random(20) . '.' . $motor_penggerak_foto->getClientOriginalExtension();	
			$pm->motor_penggerak_foto = $fileName_motor_penggerak_foto;
			$this->_s->UploadFile($motor_penggerak_foto,$fileName_motor_penggerak_foto);
		}

		$pm->bantalan_rol_check = $request->bantalan_rol_check;
		$pm->bantalan_rol_ket = $request->bantalan_rol_ket;
		if ( !is_null($bantalan_rol_foto) )  {
			$fileName_bantalan_rol_foto = str_random(20) . '.' . $bantalan_rol_foto->getClientOriginalExtension();	
			$pm->bantalan_rol_foto = $fileName_bantalan_rol_foto;
			$this->_s->UploadFile($bantalan_rol_foto,$fileName_bantalan_rol_foto);
		}

		$pm->bantalan_rol_penahan_check = $request->bantalan_rol_penahan_check;
		$pm->bantalan_rol_penahan_ket = $request->bantalan_rol_penahan_ket;
		if ( !is_null($bantalan_rol_penahan_foto) )  {
			$fileName_bantalan_rol_penahan_foto = str_random(20) . '.' . $bantalan_rol_penahan_foto->getClientOriginalExtension();	
			$pm->bantalan_rol_penahan_foto = $fileName_bantalan_rol_penahan_foto;
			$this->_s->UploadFile($bantalan_rol_penahan_foto,$fileName_bantalan_rol_penahan_foto);
		}

		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;
		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20) . '.' . $chain_foto->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}

		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		if ( !is_null($bearing_foto) )  {
			$fileName_bearing_foto = str_random(20) . '.' . $bearing_foto->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}


		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		//$pm->tgl_periksa = Carbon::now();
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		$pm->save();

		return redirect('amp/pemeriksaan2/unitpengering');
	}
	

}
