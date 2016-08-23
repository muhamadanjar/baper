<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_panas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_bin_panasCtrl extends Controller {

	public function pem_amp_1_unit_bin_panas(){
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_binpanas = PMAMP1UBD::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_panas')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_binpanas',$pm_satu_amp_binpanas);
	}

	public function pem_amp_1_unit_bin_panas_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->hopper_bin_check < '4') {
			if ($kesimpulan_check < $request->hopper_bin_check) {
				$kesimpulan_check = $request->hopper_bin_check;
			}
		}

		if ($request->pipa_pengeluaran_oversize_check < '4') {
			if ($kesimpulan_check < $request->pipa_pengeluaran_oversize_check) {
				$kesimpulan_check = $request->pipa_pengeluaran_oversize_check;
			}
		}

		if ($request->pintu_pengeluaran_check < '4') {
			if ($kesimpulan_check < $request->pintu_pengeluaran_check) {
				$kesimpulan_check = $request->pintu_pengeluaran_check;
			}
		}

		if ($request->termometer_check < '4') {
			if ($kesimpulan_check < $request->termometer_check) {
				$kesimpulan_check = $request->termometer_check;
			}
		}

		if ($request->unit_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->unit_hidrolis_check) {
				$kesimpulan_check = $request->unit_hidrolis_check;
			}
		}

		if ($request->konstruksi_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_check) {
				$kesimpulan_check = $request->konstruksi_check;
			}
		}

		if ($request->pipa_pengeluaran_overflow_check < '4') {
			if ($kesimpulan_check < $request->pipa_pengeluaran_overflow_check) {
				$kesimpulan_check = $request->pipa_pengeluaran_overflow_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->hopper_bin_check = $request->hopper_bin_check;
		$pm->hopper_bin_ket = $request->hopper_bin_ket;
		$pm->hopper_bin_foto = $request->hopper_bin_foto;
		$pm->pipa_pengeluaran_oversize_check = $request->pipa_pengeluaran_oversize_check;
		$pm->pipa_pengeluaran_oversize_ket = $request->pipa_pengeluaran_oversize_ket;
		$pm->pipa_pengeluaran_oversize_foto = $request->pipa_pengeluaran_oversize_foto;
		$pm->pintu_pengeluaran_check = $request->pintu_pengeluaran_check;
		$pm->pintu_pengeluaran_ket = $request->pintu_pengeluaran_ket;
		$pm->pintu_pengeluaran_foto = $request->pintu_pengeluaran_foto;
		$pm->termometer_check = $request->termometer_check;
		$pm->termometer_ket = $request->termometer_ket;
		$pm->termometer_foto = $request->termometer_foto;
		$pm->unit_hidrolis_check = $request->unit_hidrolis_check;
		$pm->unit_hidrolis_ket = $request->unit_hidrolis_ket;
		$pm->unit_hidrolis_foto = $request->unit_hidrolis_foto;
		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;
		$pm->konstruksi_foto = $request->konstruksi_foto;
		$pm->pipa_pengeluaran_overflow_check = $request->pipa_pengeluaran_overflow_check;
		$pm->pipa_pengeluaran_overflow_ket = $request->pipa_pengeluaran_overflow_ket;
		$pm->pipa_pengeluaran_overflow_foto = $request->pipa_pengeluaran_overflow_foto;
								
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
	
		
		return redirect('amp/pemeriksaan1/unitbinpanas');	
	}


	
	
	

}
