<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class PeriksaDuaAMPUnitPengeringCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaDuaAMPUnitPengering(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_pengering = \App\PeriksaDuaAMPUnitPengering::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa)->first();
		
		if (is_null($id_periksa)) {
			return redirect('/home');
		}

		return view('amp.pm_2_unit_pengering')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_pengering);
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
		
		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitPengering : \App\PeriksaDuaAMPUnitPengering::find($request->no_id);
		$pm = $q;
		
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		
		
		$pm->silinder_pengering_check = $request->silinder_pengering_check;
		$pm->silinder_pengering_ket = $request->silinder_pengering_ket;

		
		$pm->roda_gigi_pemutar_check = $request->roda_gigi_pemutar_check;
		$pm->roda_gigi_pemutar_ket = $request->roda_gigi_pemutar_ket;

		$pm->roda_gigi_ring_check = $request->roda_gigi_ring_check;
		$pm->roda_gigi_ring_ket = $request->roda_gigi_ring_ket;
		
		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		
		$pm->bantalan_rol_check = $request->bantalan_rol_check;
		$pm->bantalan_rol_ket = $request->bantalan_rol_ket;

		$pm->bantalan_rol_penahan_check = $request->bantalan_rol_penahan_check;
		$pm->bantalan_rol_penahan_ket = $request->bantalan_rol_penahan_ket;

		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;

		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		
		
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		$pm->id_periksa = $request->id_periksa;
		$pm->id_periksa2 = $request->id_periksa2;
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		
		
		if ( !is_null($silinder_pengering_foto) )  {
			$fileName_silinder_pengering_foto = str_random(20) . '.' . $silinder_pengering_foto->getClientOriginalExtension();	
			$pm->silinder_pengering_foto = $fileName_silinder_pengering_foto;
			$this->_s->UploadFile($silinder_pengering_foto,$fileName_silinder_pengering_foto);
		}

		
		if ( !is_null($roda_gigi_pemutar_foto) )  {
			$fileName_roda_gigi_pemutar_foto = str_random(20) . '.' . $roda_gigi_pemutar_foto->getClientOriginalExtension();	
			$pm->roda_gigi_pemutar_foto = $fileName_roda_gigi_pemutar_foto;
			$this->_s->UploadFile($roda_gigi_pemutar_foto,$fileName_roda_gigi_pemutar_foto);
		}

		if ( !is_null($roda_gigi_ring_foto) )  {
			$fileName_roda_gigi_ring_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->roda_gigi_ring_foto = $fileName_roda_gigi_ring_foto;
			$this->_s->UploadFile($roda_gigi_ring_foto,$fileName_roda_gigi_ring_foto);
		}

		if ( !is_null($motor_penggerak_foto) )  {
			$fileName_motor_penggerak_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->motor_penggerak_foto = $fileName_motor_penggerak_foto;
			$this->_s->UploadFile($motor_penggerak_foto,$fileName_motor_penggerak_foto);
		}
		
		if ( !is_null($bantalan_rol_foto) )  {
			$fileName_bantalan_rol_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->bantalan_rol_foto = $fileName_bantalan_rol_foto;
			$this->_s->UploadFile($bantalan_rol_foto,$fileName_bantalan_rol_foto);
		}

		if ( !is_null($bantalan_rol_penahan_foto) )  {
			$fileName_bantalan_rol_penahan_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->bantalan_rol_penahan_foto = $fileName_bantalan_rol_penahan_foto;
			$this->_s->UploadFile($bantalan_rol_penahan_foto,$fileName_bantalan_rol_penahan_foto);
		}
		
		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}
		
		if ( !is_null($bearing_foto) )  {
			$fileName_bearing_foto = str_random(20) . '.' . $roda_gigi_ring_foto->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}
		
		
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		$pm->save();
		return redirect('amp/pemeriksaan2/unitpengering');	
		
	}

}
