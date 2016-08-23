<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_dingin as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class pm_1_unit_bin_dinginCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function pem_amp_1_unit_bin_dingin(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_bindingin = PMAMP1UBD::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_dingin')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_bindingin',$pm_satu_amp_bindingin);
	}

	public function pem_amp_1_unit_bin_dingin_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$pelat_pemisah_foto = $request->file('pelat_pemisah_foto');

		$kesimpulan_check = '1';
		if ($request->pelat_pemisah_check < '4') {
			if ($kesimpulan_check < $request->pelat_pemisah_check) {
				$kesimpulan_check = $request->pelat_pemisah_check;
			}
		}

		if ($request->dinding_bin_check < '4') {
			if ($kesimpulan_check < $request->dinding_bin_check) {
				$kesimpulan_check = $request->dinding_bin_check;
			}
		}

		if ($request->bukaan_pintu_check < '4') {
			if ($kesimpulan_check < $request->bukaan_pintu_check) {
				$kesimpulan_check = $request->bukaan_pintu_check;
			}
		}

		if ($request->pintu_pengatur_check < '4') {
			if ($kesimpulan_check < $request->pintu_pengatur_check) {
				$kesimpulan_check = $request->pintu_pengatur_check;
			}
		}

		
		if ($request->skala_meter_check < '4') {
			if ($kesimpulan_check < $request->skala_meter_check) {
				$kesimpulan_check = $request->skala_meter_check;
			}
		}

		if ($request->motor_penggerak_check < '4') {
			if ($kesimpulan_check < $request->motor_penggerak_check) {
				$kesimpulan_check = $request->motor_penggerak_check;
			}
		}

		if ($request->penggetar_check < '4') {
			if ($kesimpulan_check < $request->penggetar_check) {
				$kesimpulan_check = $request->penggetar_check;
			}
		}

		if ($request->pengatur_kecepatan_check < '4') {
			if ($kesimpulan_check < $request->pengatur_kecepatan_check) {
				$kesimpulan_check = $request->pengatur_kecepatan_check;
			}
		}

		if ($request->konstruksi_pendukung_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pendukung_check) {
				$kesimpulan_check = $request->konstruksi_pendukung_check;
			}
		}

		if ($request->pelindung_bin_check < '4') {
			if ($kesimpulan_check < $request->pelindung_bin_check) {
				$kesimpulan_check = $request->pelindung_bin_check;
			}
		}

		
		$q = ($request->no_id == null) ? new PMAMP1UBD() : PMAMP1UBD::find($request->no_id);
		$pm = $q;

		$pm->kode_periksa = $request->kode_periksa;
		$pm->pelat_pemisah_check = $request->pelat_pemisah_check;
		$pm->pelat_pemisah_ket = $request->pelat_pemisah_ket;
		$pm->pelat_pemisah_foto = $request->pelat_pemisah_foto;
		$pm->dinding_bin_check = $request->dinding_bin_check;
		$pm->dinding_bin_ket = $request->dinding_bin_ket;
		$pm->dinding_bin_foto = $request->dinding_bin_foto;
		$pm->bukaan_pintu_check = $request->bukaan_pintu_check;
		$pm->bukaan_pintu_ket = $request->bukaan_pintu_ket;
		$pm->bukaan_pintu_foto = $request->bukaan_pintu_foto;
		$pm->skala_meter_check = $request->skala_meter_check;
		$pm->skala_meter_ket = $request->skala_meter_ket;
		$pm->skala_meter_foto = $request->skala_meter_foto;
		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		$pm->motor_penggerak_foto = $request->motor_penggerak_foto;
		$pm->penggetar_check = $request->penggetar_check;
		$pm->penggetar_ket = $request->penggetar_ket;
		$pm->penggetar_foto = $request->penggetar_foto;
		$pm->pengatur_kecepatan_check = $request->pengatur_kecepatan_check;
		$pm->pengatur_kecepatan_ket = $request->pengatur_kecepatan_ket;
		$pm->pengatur_kecepatan_foto = $request->pengatur_kecepatan_foto;
		$pm->konstruksi_pendukung_check = $request->konstruksi_pendukung_check;
		$pm->konstruksi_pendukung_ket = $request->konstruksi_pendukung_ket;
		$pm->konstruksi_pendukung_foto = $request->konstruksi_pendukung_foto;
		$pm->pelindung_bin_check = $request->pelindung_bin_check;
		$pm->pelindung_bin_ket = $request->pelindung_bin_ket;
		$pm->pelindung_bin_foto = $request->pelindung_bin_foto;
				
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->id_periksa = $request->id_periksa;
		$pm->tgl_periksa = Carbon::now();

		
		if ( !is_null($pelat_pemisah_foto) )  {
			$fileName_pelat_pemisah_foto = str_random(20) . '.' . $pelat_pemisah_foto->getClientOriginalExtension();	
			$pm->pelat_pemisah_foto = $fileName_pelat_pemisah_foto;
			$this->_s->UploadFile($pelat_pemisah_foto,$fileName_pelat_pemisah_foto);
		}else{
			$pm->pelat_pemisah_foto = $request->pelat_pemisah_foto_;
		}

		if ( !is_null($file) )  {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($file,$fileName);
		}else{
			$pm->foto_unit = $request->foto_unit_;
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitbindingin');	
	}


	
	
	

}
