<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitBinFiller as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitBinFillerCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}
	
	public function periksaDuaAMPUnitBinFiller(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_binfiller = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_bin_filler')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_binfiller);
	}

	public function periksaDuaAMPUnitBinFillerPost(Request $request){
		$pintu_bukaan_foto = $request->file('pintu_bukaan_foto');
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pintu_bukaan_check < '4') {
			if ($kesimpulan_check < $request->pintu_bukaan_check) {
				$kesimpulan_check = $request->pintu_bukaan_check;
			}
		}

		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitBinFiller() : \App\PeriksaDuaAMPUnitBinFiller::find($request->no_id) ;
		$pm = $q;

		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->pintu_bukaan_check = $request->pintu_bukaan_check;
		$pm->pintu_bukaan_ket = $request->pintu_bukaan_ket;
		
		if ( !is_null($pintu_bukaan_foto) )  {
			$fileName_pintu_bukaan_foto = str_random(20) . '.' . $pintu_bukaan_foto->getClientOriginalExtension();	
			$pm->pintu_bukaan_foto = $fileName_pintu_bukaan_foto;
			$this->_s->UploadFile($pintu_bukaan_foto,$fileName_pintu_bukaan_foto);
		}

		
												
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		$pm->id_periksa2 = \Session::get('id_periksa2');
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitbinfiller');	
	}


	
	
	

}
