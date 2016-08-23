<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_pencampur as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_pencampurCtrl extends Controller {

	public function pem_amp_1_unit_pencampur(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_pencampur = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pencampur')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_pencampur',$pm_satu_amp_pencampur);
	}

	public function pem_amp_1_unit_pencampur_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->pedal_pugmil_check < '4') {
			if ($kesimpulan_check < $request->pedal_pugmil_check) {
				$kesimpulan_check = $request->pedal_pugmil_check;
			}
		}

		if ($request->pintu_bukaan_check < '4') {
			if ($kesimpulan_check < $request->pintu_bukaan_check) {
				$kesimpulan_check = $request->pintu_bukaan_check;
			}
		}

		if ($request->poros_pugmil_check < '4') {
			if ($kesimpulan_check < $request->poros_pugmil_check) {
				$kesimpulan_check = $request->poros_pugmil_check;
			}
		}

		if ($request->roda_gigi_check < '4') {
			if ($kesimpulan_check < $request->roda_gigi_check) {
				$kesimpulan_check = $request->roda_gigi_check;
			}
		}

		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}

		if ($request->penggerak_pugmil_check < '4') {
			if ($kesimpulan_check < $request->penggerak_pugmil_check) {
				$kesimpulan_check = $request->penggerak_pugmil_check;
			}
		}

		if ($request->seal_seal_check < '4') {
			if ($kesimpulan_check < $request->seal_seal_check) {
				$kesimpulan_check = $request->seal_seal_check;
			}
		}

		if ($request->bearing_bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_bearing_check) {
				$kesimpulan_check = $request->bearing_bearing_check;
			}
		}

		if ($request->sistem_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->sistem_hidrolis_check) {
				$kesimpulan_check = $request->sistem_hidrolis_check;
			}
		}

		if ($request->liner_check < '4') {
			if ($kesimpulan_check < $request->liner_check) {
				$kesimpulan_check = $request->liner_check;
			}
		}

		if ($request->konstruksi_pugmil_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pugmil_check) {
				$kesimpulan_check = $request->konstruksi_pugmil_check;
			}
		}

		if ($request->konstruksi_rangka_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_rangka_check) {
				$kesimpulan_check = $request->konstruksi_rangka_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pedal_pugmil_check = $request->pedal_pugmil_check;
		$pm->pedal_pugmil_ket = $request->pedal_pugmil_ket;
		$pm->pedal_pugmil_foto = $request->pedal_pugmil_foto;
		$pm->pintu_bukaan_check = $request->pintu_bukaan_check;
		$pm->pintu_bukaan_ket = $request->pintu_bukaan_ket;
		$pm->pintu_bukaan_foto = $request->pintu_bukaan_foto;
		$pm->poros_pugmil_check = $request->poros_pugmil_check;
		$pm->poros_pugmil_ket = $request->poros_pugmil_ket;
		$pm->poros_pugmil_foto = $request->poros_pugmil_foto;
		$pm->roda_gigi_check = $request->roda_gigi_check;
		$pm->roda_gigi_ket = $request->roda_gigi_ket;
		$pm->roda_gigi_foto = $request->roda_gigi_foto;
		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;
		$pm->sprocket_foto = $request->sprocket_foto;
		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;
		$pm->chain_foto = $request->chain_foto;
		$pm->penggerak_pugmil_check = $request->penggerak_pugmil_check;
		$pm->penggerak_pugmil_ket = $request->penggerak_pugmil_ket;
		$pm->penggerak_pugmil_foto = $request->penggerak_pugmil_foto;
		$pm->seal_seal_check = $request->seal_seal_check;
		$pm->seal_seal_ket = $request->seal_seal_ket;
		$pm->seal_seal_foto = $request->seal_seal_foto;
		$pm->bearing_bearing_check = $request->bearing_bearing_check;
		$pm->bearing_bearing_ket = $request->bearing_bearing_ket;
		$pm->bearing_bearing_foto = $request->bearing_bearing_foto;
		$pm->sistem_hidrolis_check = $request->sistem_hidrolis_check;
		$pm->sistem_hidrolis_ket = $request->sistem_hidrolis_ket;
		$pm->sistem_hidrolis_foto = $request->sistem_hidrolis_foto;
		$pm->liner_check = $request->liner_check;
		$pm->liner_ket = $request->liner_ket;
		$pm->liner_foto = $request->liner_foto;
		$pm->konstruksi_pugmil_check = $request->konstruksi_pugmil_check;
		$pm->konstruksi_pugmil_ket = $request->konstruksi_pugmil_ket;
		$pm->konstruksi_pugmil_foto = $request->konstruksi_pugmil_foto;
		$pm->konstruksi_rangka_check = $request->konstruksi_rangka_check;
		$pm->konstruksi_rangka_ket = $request->konstruksi_rangka_ket;
		$pm->konstruksi_rangka_foto = $request->konstruksi_rangka_foto;
								
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
	
		
		return redirect('amp/pemeriksaan1/unitpencampur');	
	}


	
	
	

}
