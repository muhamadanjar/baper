<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitSilo as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitSiloCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}

	public function periksaDuaAMPUnitSilo(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_silo = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_silo')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_silo);
	}

	public function periksaDuaAMPUnitSiloPost(Request $request){
		$pintu_keluaran_foto = $request->file('pintu_keluaran_foto');
		$sistem_hidrolik_foto = $request->file('sistem_hidrolik_foto');
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		
		if ($request->pintu_keluaran_check < '4') {
			if ($kesimpulan_check < $request->pintu_keluaran_check) {
				$kesimpulan_check = $request->pintu_keluaran_check;
			}
		}

		if ($request->sistem_hidrolik_check < '4') {
			if ($kesimpulan_check < $request->sistem_hidrolik_check) {
				$kesimpulan_check = $request->sistem_hidrolik_check;
			}
		}

				
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitSilo() : \App\PeriksaDuaAMPUnitSilo::find($request->no_id) ;
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pintu_keluaran_check = $request->pintu_keluaran_check;
		$pm->pintu_keluaran_ket = $request->pintu_keluaran_ket;
		
		if ( !is_null($pintu_keluaran_foto) )  {
			$fileName_pintu_keluaran_foto = str_random(20) . '.' . $pintu_keluaran_foto->getClientOriginalExtension();	
			$pm->pintu_keluaran_foto = $fileName_pintu_keluaran_foto;
			$this->_s->UploadFile($pintu_keluaran_foto,$fileName_pintu_keluaran_foto);
		}
		$pm->sistem_hidrolik_check = $request->sistem_hidrolik_check;
		$pm->sistem_hidrolik_ket = $request->sistem_hidrolik_ket;
		

		if ( !is_null($sistem_hidrolik_foto) )  {
			$fileName_sistem_hidrolik_foto = str_random(20) . '.' . $sistem_hidrolik_foto->getClientOriginalExtension();	
			$pm->sistem_hidrolik_foto = $fileName_sistem_hidrolik_foto;
			$this->_s->UploadFile($sistem_hidrolik_foto,$fileName_sistem_hidrolik_foto);
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
	
		
		return redirect('amp/pemeriksaan2/unitsilo');	
	}


	
	
	

}
