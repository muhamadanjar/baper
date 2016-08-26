<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitPengumpulDebu as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitPengumpulDebuCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}

	public function periksaSatuAMPUnitPengumpulDebu(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_pengumpuldebu = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pengumpul_debu')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_pengumpuldebu',$pm_satu_amp_pengumpuldebu);
	}

	public function periksaSatuAMPUnitPengumpulDebuPost(Request $request){
		$pemutar_foto = $request->file('pemutar_foto');
		$exhaust_fan_foto = $request->file('exhaust_fan_foto');
		$pipa_pipa_foto = $request->file('pipa_pipa_foto');
		$cerobong_foto = $request->file('cerobong_foto');
		$tangki_air_foto = $request->file('tangki_air_foto');
		$pompa_air_foto = $request->file('pompa_air_foto');
		$penyemprot_air_foto = $request->file('penyemprot_air_foto');
		$dry_scrubber_foto = $request->file('dry_scrubber_foto');
		$konstruksi_foto = $request->file('konstruksi_foto');
		$foto_unit = $request->file('foto_unit');

		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pemutar_check < '4') {
			if ($kesimpulan_check < $request->pemutar_check) {
				$kesimpulan_check = $request->pemutar_check;
			}
		}

		if ($request->exhaust_fan_check < '4') {
			if ($kesimpulan_check < $request->exhaust_fan_check) {
				$kesimpulan_check = $request->exhaust_fan_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->cerobong_check < '4') {
			if ($kesimpulan_check < $request->cerobong_check) {
				$kesimpulan_check = $request->cerobong_check;
			}
		}

		if ($request->tangki_air_check < '4') {
			if ($kesimpulan_check < $request->tangki_air_check) {
				$kesimpulan_check = $request->tangki_air_check;
			}
		}

		if ($request->pompa_air_check < '4') {
			if ($kesimpulan_check < $request->pompa_air_check) {
				$kesimpulan_check = $request->pompa_air_check;
			}
		}

		if ($request->penyemprot_air_check < '4') {
			if ($kesimpulan_check < $request->penyemprot_air_check) {
				$kesimpulan_check = $request->penyemprot_air_check;
			}
		}

		if ($request->dry_scrubber_check < '4') {
			if ($kesimpulan_check < $request->dry_scrubber_check) {
				$kesimpulan_check = $request->dry_scrubber_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitPengumpulDebu() : \App\PeriksaSatuAMPUnitPengumpulDebu::find($request->no_id) ;
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->pemutar_check = $request->pemutar_check;
		$pm->pemutar_ket = $request->pemutar_ket;

		if ( !is_null($pemutar_foto) )  {
			$fileName_pemutar_foto = str_random(20) . '.' . $pemutar_foto->getClientOriginalExtension();	
			$pm->pemutar_foto = $fileName_pemutar_foto;
			$this->_s->UploadFile($pemutar_foto,$fileName_pemutar_foto);
		}

		$pm->exhaust_fan_check = $request->exhaust_fan_check;
		$pm->exhaust_fan_ket = $request->exhaust_fan_ket;

		if ( !is_null($exhaust_fan_foto) )  {
			$fileName_exhaust_fan_foto = str_random(20) . '.' . $exhaust_fan_foto->getClientOriginalExtension();	
			$pm->exhaust_fan_foto = $fileName_exhaust_fan_foto;
			$this->_s->UploadFile($exhaust_fan_foto,$fileName_exhaust_fan_foto);
		}

		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;

		if ( !is_null($pipa_pipa_foto) )  {
			$fileName_pipa_pipa_foto = str_random(20) . '.' . $pipa_pipa_foto->getClientOriginalExtension();	
			$pm->pipa_pipa_foto = $fileName_pipa_pipa_foto;
			$this->_s->UploadFile($pipa_pipa_foto,$fileName_pipa_pipa_foto);
		}

		$pm->cerobong_check = $request->cerobong_check;
		$pm->cerobong_ket = $request->cerobong_ket;

		if ( !is_null($cerobong_foto) )  {
			$fileName_pipa_pipa_foto = str_random(20) . '.' . $cerobong_foto->getClientOriginalExtension();	
			$pm->cerobong_foto = $fileName_pipa_pipa_foto;
			$this->_s->UploadFile($cerobong_foto,$fileName_pipa_pipa_foto);
		}

		$pm->tangki_air_check = $request->tangki_air_check;
		$pm->tangki_air_ket = $request->tangki_air_ket;

		if ( !is_null($tangki_air_foto) )  {
			$fileName_tangki_air_foto = str_random(20) . '.' . $tangki_air_foto->getClientOriginalExtension();	
			$pm->tangki_air_foto = $fileName_tangki_air_foto;
			$this->_s->UploadFile($tangki_air_foto,$fileName_tangki_air_foto);
		}

		$pm->pompa_air_check = $request->pompa_air_check;
		$pm->pompa_air_ket = $request->pompa_air_ket;
		
		if ( !is_null($pompa_air_foto) )  {
			$fileName_pompa_air_foto = str_random(20) . '.' . $pompa_air_foto->getClientOriginalExtension();	
			$pm->pompa_air_foto = $fileName_pompa_air_foto;
			$this->_s->UploadFile($pompa_air_foto,$fileName_pompa_air_foto);
		}

		$pm->penyemprot_air_check = $request->penyemprot_air_check;
		$pm->penyemprot_air_ket = $request->penyemprot_air_ket;

		if ( !is_null($penyemprot_air_foto) )  {
			$fileName_penyemprot_air_foto = str_random(20) . '.' . $penyemprot_air_foto->getClientOriginalExtension();	
			$pm->penyemprot_air_foto = $fileName_penyemprot_air_foto;
			$this->_s->UploadFile($penyemprot_air_foto,$fileName_penyemprot_air_foto);
		}

		$pm->dry_scrubber_check = $request->dry_scrubber_check;
		$pm->dry_scrubber_ket = $request->dry_scrubber_ket;

		if ( !is_null($dry_scrubber_foto) )  {
			$fileName_dry_scrubber_foto = str_random(20) . '.' . $dry_scrubber_foto->getClientOriginalExtension();	
			$pm->dry_scrubber_foto = $fileName_dry_scrubber_foto;
			$this->_s->UploadFile($dry_scrubber_foto,$fileName_dry_scrubber_foto);
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
		

		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitpengumpuldebu');	
	}


	
	
	

}
