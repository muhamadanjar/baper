<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitPemanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPUnitPemanasCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaDuaAMPUnitPemanas(){
		$id_periksa = session('id_periksa');
		$pm_Dua_amp_unitpemanas = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_pemanas')
			->with('id_periksa',$id_periksa)
			->with('data',$pm_Dua_amp_unitpemanas);
	}

	public function periksaDuaAMPUnitPemanasPost(Request $request){
		$pompa_bahan_bakar_foto = $request->file('pompa_bahan_bakar_foto');
		$pipa_pipa_foto = $request->file('pipa_pipa_foto');
		$blower_udara_foto = $request->file('blower_udara_foto');
		$alat_ukur_foto = $request->file('alat_ukur_foto');
		$penyemprot_foto = $request->file('penyemprot_foto');

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pompa_bahan_bakar_check < '4') {
			if ($kesimpulan_check < $request->pompa_bahan_bakar_check) {
				$kesimpulan_check = $request->pompa_bahan_bakar_check;
			}
		}
		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}
		if ($request->blower_udara_check < '4') {
			if ($kesimpulan_check < $request->blower_udara_check) {
				$kesimpulan_check = $request->blower_udara_check;
			}
		}
		if ($request->alat_ukur_check < '4') {
			if ($kesimpulan_check < $request->alat_ukur_check) {
				$kesimpulan_check = $request->alat_ukur_check;
			}
		}
		if ($request->penyemprot_check < '4') {
			if ($kesimpulan_check < $request->penyemprot_check) {
				$kesimpulan_check = $request->penyemprot_check;
			}
		}

		

		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitPemanas() : \App\PeriksaDuaAMPUnitPemanas::find($request->no_id);
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pompa_bahan_bakar_check = $request->pompa_bahan_bakar_check;
		$pm->pompa_bahan_bakar_ket = $request->pompa_bahan_bakar_ket;

		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		
		$pm->blower_udara_check = $request->blower_udara_check;
		$pm->blower_udara_ket = $request->blower_udara_ket;
		
		$pm->alat_ukur_check = $request->alat_ukur_check;
		$pm->alat_ukur_ket = $request->alat_ukur_ket;
		
		$pm->penyemprot_check = $request->penyemprot_check;
		$pm->penyemprot_ket = $request->penyemprot_ket;
		
		if ( !is_null($pompa_bahan_bakar_foto) )  {
			$fileName_pompa_bahan_bakar_foto = str_random(20) . '.' . $pompa_bahan_bakar_foto->getClientOriginalExtension();	
			$pm->pompa_bahan_bakar_foto = $fileName_pompa_bahan_bakar_foto;
			$this->_s->UploadFile($pompa_bahan_bakar_foto,$fileName_pompa_bahan_bakar_foto);
		}
		if ( !is_null($pipa_pipa_foto) )  {
			$fileName_pipa_pipa_foto = str_random(20) . '.' . $pipa_pipa_foto->getClientOriginalExtension();	
			$pm->pipa_pipa_foto = $fileName_pipa_pipa_foto;
			$this->_s->UploadFile($pipa_pipa_foto,$fileName_pipa_pipa_foto);
		}
		if ( !is_null($blower_udara_foto) )  {
			$fileName_blower_udara_foto = str_random(20) . '.' . $blower_udara_foto->getClientOriginalExtension();	
			$pm->blower_udara_foto = $fileName_blower_udara_foto;
			$this->_s->UploadFile($blower_udara_foto,$fileName_blower_udara_foto);
		}
		if ( !is_null($alat_ukur_foto) )  {
			$fileName_alat_ukur_foto = str_random(20) . '.' . $alat_ukur_foto->getClientOriginalExtension();	
			$pm->alat_ukur_foto = $fileName_alat_ukur_foto;
			$this->_s->UploadFile($alat_ukur_foto,$fileName_alat_ukur_foto);
		}
		
		if ( !is_null($penyemprot_foto) )  {
			$fileName_penyemprot_foto = str_random(20) . '.' . $penyemprot_foto->getClientOriginalExtension();	
			$pm->penyemprot_foto = $fileName_penyemprot_foto;
			$this->_s->UploadFile($penyemprot_foto,$fileName_penyemprot_foto);
		}
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
				
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

		
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitpemanas');	
	}


	
	
	

}
