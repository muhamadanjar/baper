<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitBinPanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitBinPanasCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaDuaAMPUnitBinPanas(){
		$id_periksa = session('id_periksa');
		$pm_Dua_amp_binpanas = \App\PeriksaDuaAMPUnitBinPanas::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_bin_panas')
			->with('id_periksa',$id_periksa)
			->with('data',$pm_Dua_amp_binpanas);
	}

	public function periksaDuaAMPUnitBinPanasPost(Request $request){
		$pintu_pengeluaran_foto = $request->file('pintu_pengeluaran_foto');
		$termometer_foto = $request->file('termometer_foto');
		$unit_hidrolis_foto = $request->file('unit_hidrolis_foto');
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		
		if ($request->pintu_pengeluaran_check < '4') {
			if ($kesimpulan_check < $request->pintu_pengeluaran_check) {
				$kesimpulan_check = $request->pintu_pengeluaran_check;
			}
		}

		if ($request->termometer_check < '4') {
			if ($kesimpulan_check < $request->termometer_check) {
				$kesimpulan_check = $request->termometer_check;
			}
		}

		if ($request->unit_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->unit_hidrolis_check) {
				$kesimpulan_check = $request->unit_hidrolis_check;
			}
		}

		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitBinPanas() : \App\PeriksaDuaAMPUnitBinPanas::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		
		$pm->pintu_pengeluaran_check = $request->pintu_pengeluaran_check;
		$pm->pintu_pengeluaran_ket = $request->pintu_pengeluaran_ket;

		if ( !is_null($pintu_pengeluaran_foto) )  {
			$fileName_pintu_pengeluaran_foto = str_random(20) . '.' . $pintu_pengeluaran_foto->getClientOriginalExtension();	
			$pm->pintu_pengeluaran_foto = $fileName_pintu_pengeluaran_foto;
			$this->_s->UploadFile($pintu_pengeluaran_foto,$fileName_pintu_pengeluaran_foto);
		}

		$pm->termometer_check = $request->termometer_check;
		$pm->termometer_ket = $request->termometer_ket;

		if ( !is_null($termometer_foto) )  {
			$fileName_termometer_foto = str_random(20) . '.' . $termometer_foto->getClientOriginalExtension();	
			$pm->termometer_foto = $fileName_termometer_foto;
			$this->_s->UploadFile($termometer_foto,$fileName_termometer_foto);
		}

		$pm->unit_hidrolis_check = $request->unit_hidrolis_check;
		$pm->unit_hidrolis_ket = $request->unit_hidrolis_ket;

		if ( !is_null($unit_hidrolis_foto) )  {
			$fileName_unit_hidrolis_foto = str_random(20) . '.' . $unit_hidrolis_foto->getClientOriginalExtension();	
			$pm->unit_hidrolis_foto = $fileName_unit_hidrolis_foto;
			$this->_s->UploadFile($unit_hidrolis_foto,$fileName_unit_hidrolis_foto);
		}

								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		$pm->id_periksa = $request->id_periksa;
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
	
		
		return redirect('amp/pemeriksaan2/unitbinpanas');	
	}


	
	
	

}
