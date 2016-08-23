<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_saringan_bergetar as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_saringan_bergetarCtrl extends Controller {

	public function pem_amp_1_unit_saringan_bergetar(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_saringanbergetar = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_saringan_bergetar')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_saringanbergetar',$pm_satu_amp_saringanbergetar);
	}

	public function pem_amp_1_unit_saringan_bergetar_post(Request $request){
		$file = $request->file('foto_unit');
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

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->saringan_check = $request->saringan_check;
		$pm->saringan_ket = $request->saringan_ket;
		$pm->saringan_foto = $request->saringan_foto;
		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		$pm->vbelt_foto = $request->vbelt_foto;
		$pm->pegas_penggetar_check = $request->pegas_penggetar_check;
		$pm->pegas_penggetar_ket = $request->pegas_penggetar_ket;
		$pm->pegas_penggetar_foto = $request->pegas_penggetar_foto;
		$pm->motor_penggetar_check = $request->motor_penggetar_check;
		$pm->motor_penggetar_ket = $request->motor_penggetar_ket;
		$pm->motor_penggetar_foto = $request->motor_penggetar_foto;
		$pm->mekanisme_penggetar_check = $request->mekanisme_penggetar_check;
		$pm->mekanisme_penggetar_ket = $request->mekanisme_penggetar_ket;
		$pm->mekanisme_penggetar_foto = $request->mekanisme_penggetar_foto;
		$pm->tutup_belt_check = $request->tutup_belt_check;
		$pm->tutup_belt_ket = $request->tutup_belt_ket;
		$pm->tutup_belt_foto = $request->tutup_belt_foto;
		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;
		$pm->konstruksi_foto = $request->konstruksi_foto;
								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		if ( !is_null($file) )  {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($file);
		}else{
			$pm->foto_unit = $request->foto_unit_;
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitsaringanbergetar');	
	}


	
	
	

}
