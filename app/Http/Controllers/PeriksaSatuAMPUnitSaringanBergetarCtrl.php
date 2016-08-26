<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitSaringanBergetar as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitSaringanBergetarCtrl extends Controller {

	public function __construct(){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}
	public function periksaSatuAMPUnitSaringanBergetar(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_saringanbergetar = \App\PeriksaSatuAMPUnitSaringanBergetar::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)
		->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_saringan_bergetar')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_saringanbergetar',$pm_satu_amp_saringanbergetar);
	}

	public function periksaSatuAMPUnitSaringanBergetarPost(Request $request){
		$saringan_foto = $request->file('saringan_foto');
		$vbelt_foto = $request->file('vbelt_foto');
		$pegas_penggetar_foto = $request->file('pegas_penggetar_foto');
		$motor_penggetar_foto = $request->file('motor_penggetar_foto');
		$mekanisme_penggetar_foto = $request->file('mekanisme_penggetar_foto');
		$tutup_belt_foto = $request->file('tutup_belt_foto');
		$konstruksi_foto = $request->file('konstruksi_foto');

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->saringan_check < '4') {
			if ($kesimpulan_check < $request->saringan_check) {
				$kesimpulan_check = $request->saringan_check;
			}
		}

		if ($request->vbelt_check < '4') {
			if ($kesimpulan_check < $request->vbelt_check) {
				$kesimpulan_check = $request->vbelt_check;
			}
		}

		if ($request->pegas_penggetar_check < '4') {
			if ($kesimpulan_check < $request->pegas_penggetar_check) {
				$kesimpulan_check = $request->pegas_penggetar_check;
			}
		}

		if ($request->motor_penggetar_check < '4') {
			if ($kesimpulan_check < $request->motor_penggetar_check) {
				$kesimpulan_check = $request->motor_penggetar_check;
			}
		}

		if ($request->mekanisme_penggetar_check < '4') {
			if ($kesimpulan_check < $request->mekanisme_penggetar_check) {
				$kesimpulan_check = $request->mekanisme_penggetar_check;
			}
		}

		if ($request->tutup_belt_check < '4') {
			if ($kesimpulan_check < $request->tutup_belt_check) {
				$kesimpulan_check = $request->tutup_belt_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitSaringanBergetar() : \App\PeriksaSatuAMPUnitSaringanBergetar::find($request->no_id);

		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;

		$pm->saringan_check = $request->saringan_check;
		$pm->saringan_ket = $request->saringan_ket;
		
		if ( !is_null($saringan_foto) )  {
			$fileName_saringan_foto = str_random(20) . '.' . $saringan_foto->getClientOriginalExtension();	
			$pm->saringan_foto = $fileName_saringan_foto;
			$this->_s->UploadFile($saringan_foto,$fileName_saringan_foto);
		}

		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		
		if ( !is_null($vbelt_foto) )  {
			$fileName_vbelt_foto = str_random(20) . '.' . $vbelt_foto->getClientOriginalExtension();	
			$pm->vbelt_foto = $fileName_vbelt_foto;
			$this->_s->UploadFile($vbelt_foto,$fileName_vbelt_foto);
		}

		$pm->pegas_penggetar_check = $request->pegas_penggetar_check;
		$pm->pegas_penggetar_ket = $request->pegas_penggetar_ket;
		
		if ( !is_null($pegas_penggetar_foto) )  {
			$fileName_pegas_penggetar_foto = str_random(20) . '.' . $pegas_penggetar_foto->getClientOriginalExtension();	
			$pm->pegas_penggetar_foto = $fileName_pegas_penggetar_foto;
			$this->_s->UploadFile($pegas_penggetar_foto,$fileName_pegas_penggetar_foto);
		}

		$pm->motor_penggetar_check = $request->motor_penggetar_check;
		$pm->motor_penggetar_ket = $request->motor_penggetar_ket;
		
		if ( !is_null($motor_penggetar_foto) )  {
			$fileName_motor_penggetar_foto = str_random(20) . '.' . $motor_penggetar_foto->getClientOriginalExtension();	
			$pm->motor_penggetar_foto = $fileName_motor_penggetar_foto;
			$this->_s->UploadFile($motor_penggetar_foto,$fileName_motor_penggetar_foto);
		}

		$pm->mekanisme_penggetar_check = $request->mekanisme_penggetar_check;
		$pm->mekanisme_penggetar_ket = $request->mekanisme_penggetar_ket;
		
		if ( !is_null($mekanisme_penggetar_foto) )  {
			$fileName_mekanisme_penggetar_foto = str_random(20) . '.' . $mekanisme_penggetar_foto->getClientOriginalExtension();	
			$pm->mekanisme_penggetar_foto = $fileName_mekanisme_penggetar_foto;
			$this->_s->UploadFile($mekanisme_penggetar_foto,$fileName_mekanisme_penggetar_foto);
		}

		$pm->tutup_belt_check = $request->tutup_belt_check;
		$pm->tutup_belt_ket = $request->tutup_belt_ket;
		
		if ( !is_null($tutup_belt_foto) )  {
			$fileName_tutup_belt_foto = str_random(20) . '.' . $tutup_belt_foto->getClientOriginalExtension();	
			$pm->tutup_belt_foto = $fileName_tutup_belt_foto;
			$this->_s->UploadFile($tutup_belt_foto,$fileName_tutup_belt_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitsaringanbergetar');	
	}


	
	
	

}
