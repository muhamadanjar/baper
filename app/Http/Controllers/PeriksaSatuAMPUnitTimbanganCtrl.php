<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitTimbangan as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitTimbanganCtrl extends Controller {
	public function __construct(){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}
	public function periksaSatuAMPUnitTimbangan(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_timbangan = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_timbangan')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_timbangan',$pm_satu_amp_timbangan);
	}

	public function periksaSatuAMPUnitTimbanganPost(Request $request){
		$material_penggantung_foto = $request->file('material_penggantung_foto');
		$penunjuk_skala_foto = $request->file('penunjuk_skala_foto');
		$unit_hidrolis_foto = $request->file('unit_hidrolis_foto');
		$bin_penimbang_foto = $request->file('bin_penimbang_foto');
		$hook_bolt_foto = $request->file('hook_bolt_foto');
		$pisau_foto = $request->file('pisau_foto');
		$karet_peredam_foto = $request->file('karet_peredam_foto');
		$penutup_antar_bin_foto = $request->file('penutup_antar_bin_foto');

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->material_penggantung_check < '4') {
			if ($kesimpulan_check < $request->material_penggantung_check) {
				$kesimpulan_check = $request->material_penggantung_check;
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

		if ($request->bin_penimbang_check < '4') {
			if ($kesimpulan_check < $request->bin_penimbang_check) {
				$kesimpulan_check = $request->bin_penimbang_check;
			}
		}

		if ($request->hook_bolt_check < '4') {
			if ($kesimpulan_check < $request->hook_bolt_check) {
				$kesimpulan_check = $request->hook_bolt_check;
			}
		}

		if ($request->pisau_check < '4') {
			if ($kesimpulan_check < $request->pisau_check) {
				$kesimpulan_check = $request->pisau_check;
			}
		}

		if ($request->karet_peredam_check < '4') {
			if ($kesimpulan_check < $request->karet_peredam_check) {
				$kesimpulan_check = $request->karet_peredam_check;
			}
		}

		if ($request->penutup_antar_bin_check < '4') {
			if ($kesimpulan_check < $request->penutup_antar_bin_check) {
				$kesimpulan_check = $request->penutup_antar_bin_check;
			}
		}
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitTimbangan() : \App\PeriksaSatuAMPUnitTimbangan::find($request->no_id);

		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		
		$pm->material_penggantung_check = $request->material_penggantung_check;
		$pm->material_penggantung_ket = $request->material_penggantung_ket;
		
		if ( !is_null($material_penggantung_foto) )  {
			$fileName_material_penggantung_foto = str_random(20) . '.' . $material_penggantung_foto->getClientOriginalExtension();	
			$pm->material_penggantung_foto = $fileName_material_penggantung_foto;
			$this->_s->UploadFile($material_penggantung_foto,$fileName_material_penggantung_foto);
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
		$pm->unit_hidrolis_foto = $request->unit_hidrolis_foto;

		if ( !is_null($unit_hidrolis_foto) )  {
			$fileName_unit_hidrolis_foto = str_random(20) . '.' . $unit_hidrolis_foto->getClientOriginalExtension();	
			$pm->unit_hidrolis_foto = $fileName_unit_hidrolis_foto;
			$this->_s->UploadFile($unit_hidrolis_foto,$fileName_unit_hidrolis_foto);
		}

		$pm->bin_penimbang_check = $request->bin_penimbang_check;
		$pm->bin_penimbang_ket = $request->bin_penimbang_ket;
		
		if ( !is_null($bin_penimbang_foto) )  {
			$fileName_bin_penimbang_foto = str_random(20) . '.' . $bin_penimbang_foto->getClientOriginalExtension();	
			$pm->bin_penimbang_foto = $fileName_bin_penimbang_foto;
			$this->_s->UploadFile($bin_penimbang_foto,$fileName_bin_penimbang_foto);
		}

		$pm->hook_bolt_check = $request->hook_bolt_check;
		$pm->hook_bolt_ket = $request->hook_bolt_ket;
		
		if ( !is_null($hook_bolt_foto) )  {
			$fileName_hook_bolt_foto = str_random(20) . '.' . $hook_bolt_foto->getClientOriginalExtension();	
			$pm->hook_bolt_foto = $fileName_hook_bolt_foto;
			$this->_s->UploadFile($hook_bolt_foto,$fileName_hook_bolt_foto);
		}

		$pm->pisau_check = $request->pisau_check;
		$pm->pisau_ket = $request->pisau_ket;
		
		if ( !is_null($pisau_foto) )  {
			$fileName_pisau_foto = str_random(20) . '.' . $pisau_foto->getClientOriginalExtension();	
			$pm->pisau_foto = $fileName_pisau_foto;
			$this->_s->UploadFile($pisau_foto,$fileName_pisau_foto);
		}

		$pm->karet_peredam_check = $request->karet_peredam_check;
		$pm->karet_peredam_ket = $request->karet_peredam_ket;
		
		if ( !is_null($karet_peredam_foto) )  {
			$fileName_karet_peredam_foto = str_random(20) . '.' . $karet_peredam_foto->getClientOriginalExtension();	
			$pm->karet_peredam_foto = $fileName_karet_peredam_foto;
			$this->_s->UploadFile($karet_peredam_foto,$fileName_karet_peredam_foto);
		}

		$pm->penutup_antar_bin_check = $request->penutup_antar_bin_check;
		$pm->penutup_antar_bin_ket = $request->penutup_antar_bin_ket;
		

		if ( !is_null($penutup_antar_bin_foto) )  {
			$fileName_penutup_antar_bin_foto = str_random(20) . '.' . $penutup_antar_bin_foto->getClientOriginalExtension();	
			$pm->penutup_antar_bin_foto = $fileName_penutup_antar_bin_foto;
			$this->_s->UploadFile($penutup_antar_bin_foto,$fileName_penutup_antar_bin_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unittimbangan');	
	}


	
	
	

}
