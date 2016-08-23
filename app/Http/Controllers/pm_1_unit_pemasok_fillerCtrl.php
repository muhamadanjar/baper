<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_pemasok_filler as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_pemasok_fillerCtrl extends Controller {

	public function pem_amp_1_unit_pemasok_filler(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_pemasokfiller = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pemasok_filler')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_pemasokfiller',$pm_satu_amp_pemasokfiller);
	}

	public function pem_amp_1_unit_pemasok_filler_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->rantai_elevator_check < '4') {
			if ($kesimpulan_check < $request->rantai_elevator_check) {
				$kesimpulan_check = $request->rantai_elevator_check;
			}
		}

		if ($request->mangkok_check < '4') {
			if ($kesimpulan_check < $request->mangkok_check) {
				$kesimpulan_check = $request->mangkok_check;
			}
		}

		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}

		if ($request->motor_penggerak_check < '4') {
			if ($kesimpulan_check < $request->motor_penggerak_check) {
				$kesimpulan_check = $request->motor_penggerak_check;
			}
		}

		if ($request->ulir_pengalir_check < '4') {
			if ($kesimpulan_check < $request->ulir_pengalir_check) {
				$kesimpulan_check = $request->ulir_pengalir_check;
			}
		}

		if ($request->pelindung_elevator_check < '4') {
			if ($kesimpulan_check < $request->pelindung_elevator_check) {
				$kesimpulan_check = $request->pelindung_elevator_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}

		if ($request->corong_pengisi_check < '4') {
			if ($kesimpulan_check < $request->corong_pengisi_check) {
				$kesimpulan_check = $request->corong_pengisi_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->rantai_elevator_check = $request->rantai_elevator_check;
		$pm->rantai_elevator_ket = $request->rantai_elevator_ket;
		$pm->rantai_elevator_foto = $request->rantai_elevator_foto;
		$pm->mangkok_check = $request->mangkok_check;
		$pm->mangkok_ket = $request->mangkok_ket;
		$pm->mangkok_foto = $request->mangkok_foto;
		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;
		$pm->sprocket_foto = $request->sprocket_foto;
		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		$pm->bearing_foto = $request->bearing_foto;
		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		$pm->motor_penggerak_foto = $request->motor_penggerak_foto;
		$pm->ulir_pengalir_check = $request->ulir_pengalir_check;
		$pm->ulir_pengalir_ket = $request->ulir_pengalir_ket;
		$pm->ulir_pengalir_foto = $request->ulir_pengalir_foto;
		$pm->pelindung_elevator_check = $request->pelindung_elevator_check;
		$pm->pelindung_elevator_ket = $request->pelindung_elevator_ket;
		$pm->pelindung_elevator_foto = $request->pelindung_elevator_foto;
		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;
		$pm->konstruksi_foto = $request->konstruksi_foto;
		$pm->corong_pengisi_check = $request->corong_pengisi_check;
		$pm->corong_pengisi_ket = $request->corong_pengisi_ket;
		$pm->corong_pengisi_foto = $request->corong_pengisi_foto;
										
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
	
		
		return redirect('amp/pemeriksaan1/unitpemasokfiller');	
	}


	
	
	

}
