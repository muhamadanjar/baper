<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_silo as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_siloCtrl extends Controller {

	public function pem_amp_1_unit_silo(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_silo = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_silo')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_silo',$pm_satu_amp_silo);
	}

	public function pem_amp_1_unit_silo_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->silo_penampung_check < '4') {
			if ($kesimpulan_check < $request->silo_penampung_check) {
				$kesimpulan_check = $request->silo_penampung_check;
			}
		}

		if ($request->pintu_pengeluaran_check < '4') {
			if ($kesimpulan_check < $request->pintu_pengeluaran_check) {
				$kesimpulan_check = $request->pintu_pengeluaran_check;
			}
		}

		if ($request->sistem_hidrolik_check < '4') {
			if ($kesimpulan_check < $request->sistem_hidrolik_check) {
				$kesimpulan_check = $request->sistem_hidrolik_check;
			}
		}

		if ($request->konstruksi_rangka_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_rangka_check) {
				$kesimpulan_check = $request->konstruksi_rangka_check;
			}
		}
				
		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->silo_penampung_check = $request->silo_penampung_check;
		$pm->silo_penampung_ket = $request->silo_penampung_ket;
		$pm->silo_penampung_foto = $request->silo_penampung_foto;
		$pm->pintu_pengeluaran_check = $request->pintu_pengeluaran_check;
		$pm->pintu_pengeluaran_ket = $request->pintu_pengeluaran_ket;
		$pm->pintu_pengeluaran_foto = $request->pintu_pengeluaran_foto;
		$pm->sistem_hidrolik_check = $request->sistem_hidrolik_check;
		$pm->sistem_hidrolik_ket = $request->sistem_hidrolik_ket;
		$pm->sistem_hidrolik_foto = $request->sistem_hidrolik_foto;
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
	
		
		return redirect('amp/pemeriksaan1/unitsilo');	
	}


	
	
	

}
