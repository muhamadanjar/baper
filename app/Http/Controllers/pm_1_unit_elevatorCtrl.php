<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_elevator as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_elevatorCtrl extends Controller {

	public function pem_amp_1_unit_elevator(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_elevator = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_elevator')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_elevator',$pm_satu_amp_elevator);
	}

	public function pem_amp_1_unit_elevator_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->mangkok_check < '4') {
			if ($kesimpulan_check < $request->mangkok_check) {
				$kesimpulan_check = $request->mangkok_check;
			}
		}

		if ($request->rantai_pemutar_check < '4') {
			if ($kesimpulan_check < $request->rantai_pemutar_check) {
				$kesimpulan_check = $request->rantai_pemutar_check;
			}
		}

		if ($request->sprocket_pemutar_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pemutar_check) {
				$kesimpulan_check = $request->sprocket_pemutar_check;
			}
		}

		if ($request->sprocket_pembatu_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pembatu_check) {
				$kesimpulan_check = $request->sprocket_pembatu_check;
			}
		}

		
		if ($request->ban_berjalan_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_check) {
				$kesimpulan_check = $request->ban_berjalan_check;
			}
		}

		if ($request->roll_pemutar_check < '4') {
			if ($kesimpulan_check < $request->roll_pemutar_check) {
				$kesimpulan_check = $request->roll_pemutar_check;
			}
		}

		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}

		if ($request->roller_check < '4') {
			if ($kesimpulan_check < $request->roller_check) {
				$kesimpulan_check = $request->roller_check;
			}
		}

		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}

		if ($request->vbelt_check < '4') {
			if ($kesimpulan_check < $request->vbelt_check) {
				$kesimpulan_check = $request->vbelt_check;
			}
		}

		if ($request->pelindung_elevator_check < '4') {
			if ($kesimpulan_check < $request->pelindung_elevator_check) {
				$kesimpulan_check = $request->pelindung_elevator_check;
			}
		}

		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}

		if ($request->konstruksi_pelindung_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pelindung_check) {
				$kesimpulan_check = $request->konstruksi_pelindung_check;
			}
		}

		
		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->mangkok_check = $request->mangkok_check;
		$pm->mangkok_ket = $request->mangkok_ket;
		$pm->mangkok_foto = $request->mangkok_foto;
		$pm->rantai_pemutar_check = $request->rantai_pemutar_check;
		$pm->rantai_pemutar_ket = $request->rantai_pemutar_ket;
		$pm->rantai_pemutar_foto = $request->rantai_pemutar_foto;
		$pm->sprocket_pemutar_check = $request->sprocket_pemutar_check;
		$pm->sprocket_pemutar_ket = $request->sprocket_pemutar_ket;
		$pm->sprocket_pemutar_foto = $request->sprocket_pemutar_foto;
		$pm->sprocket_pembantu_check = $request->sprocket_pembantu_check;
		$pm->sprocket_pembantu_ket = $request->sprocket_pembantu_ket;
		$pm->sprocket_pembantu_foto = $request->sprocket_pembantu_foto;
		$pm->ban_berjalan_check = $request->ban_berjalan_check;
		$pm->ban_berjalan_ket = $request->ban_berjalan_ket;
		$pm->ban_berjalan_foto = $request->ban_berjalan_foto;
		$pm->roll_pemutar_check = $request->roll_pemutar_check;
		$pm->roll_pemutar_ket = $request->roll_pemutar_ket;
		$pm->roll_pemutar_foto = $request->roll_pemutar_foto;
		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;
		$pm->bearing_foto = $request->bearing_foto;
		$pm->roller_check = $request->roller_check;
		$pm->roller_ket = $request->roller_ket;
		$pm->roller_foto = $request->roller_foto;
		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;
		$pm->chain_foto = $request->chain_foto;
		$pm->vbelt_check = $request->vbelt_check;
		$pm->vbelt_ket = $request->vbelt_ket;
		$pm->vbelt_foto = $request->vbelt_foto;
		$pm->pelindung_elevator_check = $request->pelindung_elevator_check;
		$pm->pelindung_elevator_ket = $request->pelindung_elevator_ket;
		$pm->pelindung_elevator_foto = $request->pelindung_elevator_foto;
		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->motor_pemutar_ket = $request->motor_pemutar_ket;
		$pm->motor_pemutar_foto = $request->motor_pemutar_foto;
		$pm->konstruksi_pelindung_check = $request->konstruksi_pelindung_check;
		$pm->konstruksi_pelindung_ket = $request->konstruksi_pelindung_ket;
		$pm->konstruksi_pelindung_foto = $request->konstruksi_pelindung_foto;
		
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
	
		
		return redirect('amp/pemeriksaan1/unitelevator');	
	}


	
	
	

}
