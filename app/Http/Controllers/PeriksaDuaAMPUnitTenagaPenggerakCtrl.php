<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitTenagaPenggerak as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitTenagaPenggerakCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}

	public function periksaDuaAMPUnitTenagaPenggerak(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_tenagapenggerak = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa2',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_tenaga_penggerak')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_tenagapenggerak);
	}

	public function periksaDuaAMPUnitTenagaPenggerakPost(Request $request){
		$generator_foto = $request->file('generator_foto');
		$mesin_foto = $request->file('mesin_foto');
		$compressor_foto = $request->file('compressor_foto');
		$silinder_udara_foto = $request->file('silinder_udara_foto');
		$kontrol_panel_foto = $request->file('kontrol_panel_foto');
		$jaringan_kabel_foto = $request->file('jaringan_kabel_foto');
		$pipa_pipa_foto = $request->file('pipa_pipa_foto');
		$filter_foto = $request->file('filter_foto');
		$pompa_hidrolik_foto = $request->file('pompa_hidrolik_foto');

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->generator_check < '4') {
			if ($kesimpulan_check < $request->generator_check) {
				$kesimpulan_check = $request->generator_check;
			}
		}

		if ($request->mesin_check < '4') {
			if ($kesimpulan_check < $request->mesin_check) {
				$kesimpulan_check = $request->mesin_check;
			}
		}

		if ($request->compressor_check < '4') {
			if ($kesimpulan_check < $request->compressor_check) {
				$kesimpulan_check = $request->compressor_check;
			}
		}

		if ($request->silinder_udara_check < '4') {
			if ($kesimpulan_check < $request->silinder_udara_check) {
				$kesimpulan_check = $request->silinder_udara_check;
			}
		}

		if ($request->kontrol_panel_check < '4') {
			if ($kesimpulan_check < $request->kontrol_panel_check) {
				$kesimpulan_check = $request->kontrol_panel_check;
			}
		}

		if ($request->jaringan_kabel_check < '4') {
			if ($kesimpulan_check < $request->jaringan_kabel_check) {
				$kesimpulan_check = $request->jaringan_kabel_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->filter_check < '4') {
			if ($kesimpulan_check < $request->filter_check) {
				$kesimpulan_check = $request->filter_check;
			}
		}

		if ($request->pompa_hidrolik_check < '4') {
			if ($kesimpulan_check < $request->pompa_hidrolik_check) {
				$kesimpulan_check = $request->pompa_hidrolik_check;
			}
		}

		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitTenagaPenggerak() : \App\PeriksaDuaAMPUnitTenagaPenggerak::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->generator_check = $request->generator_check;
		$pm->generator_ket = $request->generator_ket;

		if ( !is_null($generator_foto) )  {
			$fileName = str_random(20) . '.' . $generator_foto->getClientOriginalExtension();	
			$pm->generator_foto = $fileName;
			$this->_s->UploadFile($generator_foto,$fileName);
		}

		$pm->mesin_check = $request->mesin_check;
		$pm->mesin_ket = $request->mesin_ket;

		if ( !is_null($mesin_foto) )  {
			$fileName = str_random(20) . '.' . $mesin_foto->getClientOriginalExtension();	
			$pm->mesin_foto = $fileName;
			$this->_s->UploadFile($mesin_foto,$fileName);
		}

		$pm->compressor_check = $request->compressor_check;
		$pm->compressor_ket = $request->compressor_ket;

		if ( !is_null($compressor_foto) )  {
			$fileName_compressor_foto = str_random(20) . '.' . $compressor_foto->getClientOriginalExtension();	
			$pm->compressor_foto = $fileName_compressor_foto;
			$this->_s->UploadFile($compressor_foto,$fileName_compressor_foto);
		}

		$pm->silinder_udara_check = $request->silinder_udara_check;
		$pm->silinder_udara_ket = $request->silinder_udara_ket;

		if ( !is_null($silinder_udara_foto) )  {
			$fileName_silinder_udara_foto = str_random(20) . '.' . $silinder_udara_foto->getClientOriginalExtension();	
			$pm->silinder_udara_foto = $fileName_silinder_udara_foto;
			$this->_s->UploadFile($silinder_udara_foto,$fileName_silinder_udara_foto);
		}

		$pm->kontrol_panel_check = $request->kontrol_panel_check;
		$pm->kontrol_panel_ket = $request->kontrol_panel_ket;

		if ( !is_null($kontrol_panel_foto) )  {
			$fileName_kontrol_panel_foto = str_random(20) . '.' . $kontrol_panel_foto->getClientOriginalExtension();	
			$pm->kontrol_panel_foto = $fileName_kontrol_panel_foto;
			$this->_s->UploadFile($kontrol_panel_foto,$fileName_kontrol_panel_foto);
		}

		$pm->jaringan_kabel_check = $request->jaringan_kabel_check;
		$pm->jaringan_kabel_ket = $request->jaringan_kabel_ket;

		if ( !is_null($jaringan_kabel_foto) )  {
			$fileName_jaringan_kabel_foto = str_random(20) . '.' . $jaringan_kabel_foto->getClientOriginalExtension();	
			$pm->jaringan_kabel_foto = $fileName_jaringan_kabel_foto;
			$this->_s->UploadFile($jaringan_kabel_foto,$fileName_jaringan_kabel_foto);
		}

		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		
		if ( !is_null($pipa_pipa_foto) )  {
			$fileName_pipa_pipa_foto = str_random(20) . '.' . $pipa_pipa_foto->getClientOriginalExtension();	
			$pm->pipa_pipa_foto = $fileName_pipa_pipa_foto;
			$this->_s->UploadFile($pipa_pipa_foto,$fileName_pipa_pipa_foto);
		}

		$pm->filter_check = $request->filter_check;
		$pm->filter_ket = $request->filter_ket;

		if ( !is_null($filter_foto) )  {
			$fileName_filter_foto = str_random(20) . '.' . $filter_foto->getClientOriginalExtension();	
			$pm->filter_foto = $fileName_filter_foto;
			$this->_s->UploadFile($filter_foto,$fileName_filter_foto);
		}

		$pm->pompa_hidrolik_check = $request->pompa_hidrolik_check;
		$pm->pompa_hidrolik_ket = $request->pompa_hidrolik_ket;

		if ( !is_null($pompa_hidrolik_foto) )  {
			$fileName_pompa_hidrolik_foto = str_random(20) . '.' . $pompa_hidrolik_foto->getClientOriginalExtension();	
			$pm->pompa_hidrolik_foto = $fileName_pompa_hidrolik_foto;
			$this->_s->UploadFile($pompa_hidrolik_foto,$fileName_pompa_hidrolik_foto);
		}
										
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->mesin_daya_tersedia = $request->mesin_daya_tersedia;
		$pm->mesin_total_kebutuhan = $request->mesin_total_kebutuhan;
		$pm->generator_total_kebutuhan = $request->generator_total_kebutuhan;
		$pm->generator_daya_tersedia = $request->generator_daya_tersedia;
		
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
	
		
		return redirect('amp/pemeriksaan2/unittenagapenggerak');	
	}


	
	
	

}
