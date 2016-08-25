<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitPemanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitPemanasCtrl extends Controller {

	public function periksaSatuAMPUnitPemanas(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_unitpemanas = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pemanas')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_unitpemanas',$pm_satu_amp_unitpemanas);
	}

	public function periksaSatuAMPUnitPemanasPost(Request $request){
		$tangki_bahan_bakar_foto = $request->file('tangki_bahan_bakar_foto');
		$pompa_bahan_bakar_foto = $request->file('pompa_bahan_bakar_foto');
		$pipa_pipa_foto = $request->file('pipa_pipa_foto');
		$blower_udara_foto = $request->file('blower_udara_foto');
		$alat_ukur_foto = $request->file('alat_ukur_foto');
		$penyemprot_foto = $request->file('penyemprot_foto');
		$batu_tahan_api_foto = $request->file('batu_tahan_api_foto');
		$konstruksi_foto = $request->file('konstruksi_foto');

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->tangki_bahan_bakar_check < '4') {
			if ($kesimpulan_check < $request->tangki_bahan_bakar_check) {
				$kesimpulan_check = $request->tangki_bahan_bakar_check;
			}
		}

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

		if ($request->batu_tahan_api_check < '4') {
			if ($kesimpulan_check < $request->batu_tahan_api_check) {
				$kesimpulan_check = $request->batu_tahan_api_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}

		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitPemanas() : \App\PeriksaSatuAMPUnitPemanas::find($request->no_id);
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->tangki_bahan_bakar_check = $request->tangki_bahan_bakar_check;
		$pm->tangki_bahan_bakar_ket = $request->tangki_bahan_bakar_ket;

		if ( !is_null($tangki_bahan_bakar_foto) )  {
			$fileName_tangki_bahan_bakar_foto = str_random(20) . '.' . $tangki_bahan_bakar_foto->getClientOriginalExtension();	
			$pm->tangki_bahan_bakar_foto = $fileName_tangki_bahan_bakar_foto;
			$this->_s->UploadFile($tangki_bahan_bakar_foto,$fileName_tangki_bahan_bakar_foto);
		}

		$pm->pompa_bahan_bakar_check = $request->pompa_bahan_bakar_check;
		$pm->pompa_bahan_bakar_ket = $request->pompa_bahan_bakar_ket;
		
		if ( !is_null($pompa_bahan_bakar_foto) )  {
			$fileName_pompa_bahan_bakar_foto = str_random(20) . '.' . $pompa_bahan_bakar_foto->getClientOriginalExtension();	
			$pm->pompa_bahan_bakar_foto = $fileName_pompa_bahan_bakar_foto;
			$this->_s->UploadFile($pompa_bahan_bakar_foto,$fileName_pompa_bahan_bakar_foto);
		}

		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;

		if ( !is_null($pipa_pipa_foto) )  {
			$fileName_pipa_pipa_foto = str_random(20) . '.' . $pipa_pipa_foto->getClientOriginalExtension();	
			$pm->pipa_pipa_foto = $fileName_pipa_pipa_foto;
			$this->_s->UploadFile($pipa_pipa_foto,$fileName_pipa_pipa_foto);
		}

		$pm->blower_udara_check = $request->blower_udara_check;
		$pm->blower_udara_ket = $request->blower_udara_ket;
		
		if ( !is_null($blower_udara_foto) )  {
			$fileName_blower_udara_foto = str_random(20) . '.' . $blower_udara_foto->getClientOriginalExtension();	
			$pm->blower_udara_foto = $fileName_blower_udara_foto;
			$this->_s->UploadFile($blower_udara_foto,$fileName_blower_udara_foto);
		}

		$pm->alat_ukur_check = $request->alat_ukur_check;
		$pm->alat_ukur_ket = $request->alat_ukur_ket;
		
		if ( !is_null($alat_ukur_foto) )  {
			$fileName_alat_ukur_foto = str_random(20) . '.' . $alat_ukur_foto->getClientOriginalExtension();	
			$pm->alat_ukur_foto = $fileName_alat_ukur_foto;
			$this->_s->UploadFile($alat_ukur_foto,$fileName_alat_ukur_foto);
		}

		$pm->penyemprot_check = $request->penyemprot_check;
		$pm->penyemprot_ket = $request->penyemprot_ket;
		
		if ( !is_null($penyemprot_foto) )  {
			$fileName_penyemprot_foto = str_random(20) . '.' . $penyemprot_foto->getClientOriginalExtension();	
			$pm->penyemprot_foto = $fileName_penyemprot_foto;
			$this->_s->UploadFile($penyemprot_foto,$fileName_penyemprot_foto);
		}

		$pm->batu_tahan_api_check = $request->batu_tahan_api_check;
		$pm->batu_tahan_api_ket = $request->batu_tahan_api_ket;

		if ( !is_null($batu_tahan_api_foto) )  {
			$fileName_batu_tahan_api_foto = str_random(20) . '.' . $batu_tahan_api_foto->getClientOriginalExtension();	
			$pm->batu_tahan_api_foto = $fileName_batu_tahan_api_foto;
			$this->_s->UploadFile($batu_tahan_api_foto,$fileName_batu_tahan_api_foto);
		}

		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;

		if ( !is_null($konstruksi_foto) )  {
			$fileName_konstruksi_foto = str_random(20) . '.' . $konstruksi_foto->getClientOriginalExtension();	
			$pm->konstruksi_foto = $fileName_konstruksi_foto;
			$this->_s->UploadFile($konstruksi_foto,$fileName_konstruksi_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitpemanas');	
	}


	
	
	

}
