<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitTimbangan as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitTimbanganCtrl extends Controller {
	public function __construct(){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}
	public function periksaDuaAMPUnitTimbangan(){
		$id_periksa = session('id_periksa');
		$pm_Dua_amp_timbangan = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_timbangan')
			->with('id_periksa',$id_periksa)
			->with('data',$pm_Dua_amp_timbangan);
	}

	public function periksaDuaAMPUnitTimbanganPost(Request $request){
		$bak_penimbang_foto = $request->file('bak_penimbang_foto');
		$penunjuk_skala_foto = $request->file('penunjuk_skala_foto');
		$unit_hidrolis_foto = $request->file('unit_hidrolis_foto');
		$bukaan_timbangan_foto = $request->file('bukaan_timbangan_foto');
		$metal_penggantung_foto = $request->file('metal_penggantung_foto');
		
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->bak_penimbang_check < '4') {
			if ($kesimpulan_check < $request->bak_penimbang_check) {
				$kesimpulan_check = $request->bak_penimbang_check;
			}
		}

		if ($request->penunjuk_skala_check < '4') {
			if ($kesimpulan_check < $request->penunjuk_skala_check) {
				$kesimpulan_check = $request->penunjuk_skala_check;
			}
		}

		if ($request->unit_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->unit_hidrolis_check) {
				$kesimpulan_check = $request->unit_hidrolis_check;
			}
		}

		if ($request->bukaan_timbangan_check < '4') {
			if ($kesimpulan_check < $request->bukaan_timbangan_check) {
				$kesimpulan_check = $request->bukaan_timbangan_check;
			}
		}

		if ($request->metal_penggantung_check < '4') {
			if ($kesimpulan_check < $request->metal_penggantung_check) {
				$kesimpulan_check = $request->metal_penggantung_check;
			}
		}
		$q = \App\PeriksaDuaAMPUnitTimbangan::find($request->no_id);
		if(is_null($q))
		{
			$q = new \App\PeriksaDuaAMPUnitTimbangan();
			
		}
		$pm = $q;
	
		$pm->kode_periksa = $request->kode_periksa;
		
		
		$pm->bak_penimbang_check = $request->bak_penimbang_check;
		$pm->bak_penimbang_ket = $request->bak_penimbang_ket;
		
		if ( !is_null($bak_penimbang_foto) )  {
			$fileName_bak_penimbang_foto = str_random(20) . '.' . $bak_penimbang_foto->getClientOriginalExtension();	
			$pm->bak_penimbang_foto = $fileName_bak_penimbang_foto;
			$this->_s->UploadFile($bak_penimbang_foto,$fileName_bak_penimbang_foto);
		}

		$pm->penunjuk_skala_check = $request->penunjuk_skala_check;
		$pm->penunjuk_skala_ket = $request->penunjuk_skala_ket;
		

		if ( !is_null($penunjuk_skala_foto) )  {
			$fileName_penunjuk_skala_foto = str_random(20) . '.' . $penunjuk_skala_foto->getClientOriginalExtension();	
			$pm->penunjuk_skala_foto = $fileName_penunjuk_skala_foto;
			$this->_s->UploadFile($penunjuk_skala_foto,$fileName_penunjuk_skala_foto);
		}

		$pm->unit_hidrolis_check = $request->unit_hidrolis_check;
		$pm->unit_hidrolis_ket = $request->unit_hidrolis_ket;
		if ( !is_null($unit_hidrolis_foto) )  {
			$fileName_unit_hidrolis_foto = str_random(20) . '.' . $unit_hidrolis_foto->getClientOriginalExtension();	
			$pm->unit_hidrolis_foto = $fileName_unit_hidrolis_foto;
			$this->_s->UploadFile($unit_hidrolis_foto,$fileName_unit_hidrolis_foto);
		}

		$pm->bukaan_timbangan_check = $request->bukaan_timbangan_check;
		$pm->bukaan_timbangan_ket = $request->bukaan_timbangan_ket;
		
		if ( !is_null($bukaan_timbangan_foto) )  {
			$fileName_bukaan_timbangan_foto = str_random(20) . '.' . $bukaan_timbangan_foto->getClientOriginalExtension();	
			$pm->bukaan_timbangan_foto = $fileName_bukaan_timbangan_foto;
			$this->_s->UploadFile($bukaan_timbangan_foto,$fileName_bukaan_timbangan_foto);
		}

		
		$pm->metal_penggantung_check = $request->metal_penggantung_check;
		$pm->metal_penggantung_ket = $request->metal_penggantung_ket;
		

		if ( !is_null($metal_penggantung_foto) )  {
			$filemetal_penggantung_foto = str_random(20) . '.' . $metal_penggantung_foto->getClientOriginalExtension();	
			$pm->metal_penggantung_foto = $filemetal_penggantung_foto;
			$this->_s->UploadFile($metal_penggantung_foto,$filemetal_penggantung_foto);
		}
								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->id_periksa2 = \Session::get('id_periksa2');
		$pm->id_periksa = $request->id_periksa;
		$pm->tgl_periksa = Carbon::now();
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unittimbangan');	
	}


	
	
	

}
