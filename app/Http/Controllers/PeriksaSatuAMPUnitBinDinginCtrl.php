<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitBinDingin as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitBinDinginCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaSatuAMPUnitBinDingin(){
		$id_periksa = session('id_periksa');
		
		$pm_satu_amp_bindingin = PMAMP1UBD::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		//dd($pm_satu_amp_bindingin);

		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_dingin')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_bindingin',$pm_satu_amp_bindingin);
	}

	public function periksaSatuAMPUnitBinDinginPost(Request $request){
		$pelat_pemisah_foto = $request->file('pelat_pemisah_foto');
		$dinding_bin_foto = $request->file('dinding_bin_foto');
		$bukaan_pintu_foto = $request->file('bukaan_pintu_foto');
		$pintu_pengatur_foto = $request->file('pintu_pengatur_foto');
		$skala_meter_foto = $request->file('skala_meter_foto');
		$motor_penggerak_foto = $request->file('motor_penggerak_foto');
		$penggetar_foto = $request->file('penggetar_foto');
		$pengatur_kecepatan_foto = $request->file('pengatur_kecepatan_foto');
		$konstruksi_pendukung_foto = $request->file('konstruksi_pendukung_foto');
		$pelindung_bin_foto = $request->file('pelindung_bin_foto');
		

		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
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
		
		$pm->dinding_bin_check = $request->dinding_bin_check;
		$pm->dinding_bin_ket = $request->dinding_bin_ket;
		
		$pm->bukaan_pintu_check = $request->bukaan_pintu_check;
		$pm->bukaan_pintu_ket = $request->bukaan_pintu_ket;
		
		$pm->skala_meter_check = $request->skala_meter_check;
		$pm->skala_meter_ket = $request->skala_meter_ket;
		
		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		
		$pm->penggetar_check = $request->penggetar_check;
		$pm->penggetar_ket = $request->penggetar_ket;
		
		$pm->pengatur_kecepatan_check = $request->pengatur_kecepatan_check;
		$pm->pengatur_kecepatan_ket = $request->pengatur_kecepatan_ket;
		
		$pm->konstruksi_pendukung_check = $request->konstruksi_pendukung_check;
		$pm->konstruksi_pendukung_ket = $request->konstruksi_pendukung_ket;
		
		$pm->pelindung_bin_check = $request->pelindung_bin_check;
		$pm->pelindung_bin_ket = $request->pelindung_bin_ket;
				
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->id_periksa = $request->id_periksa;
		$pm->tgl_periksa = Carbon::now();

		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}

		if ( !is_null($pelat_pemisah_foto) )  {
			$fileName_pelat_pemisah_foto = str_random(20) . '.' . $pelat_pemisah_foto->getClientOriginalExtension();	
			$pm->pelat_pemisah_foto = $fileName_pelat_pemisah_foto;
			$this->_s->UploadFile($pelat_pemisah_foto,$fileName_pelat_pemisah_foto);
		}

		if ( !is_null($dinding_bin_foto) )  {
			$fileName_dinding_bin_foto = str_random(20) . '.' . $dinding_bin_foto->getClientOriginalExtension();	
			$pm->dinding_bin_foto = $fileName_dinding_bin_foto;
			$this->_s->UploadFile($dinding_bin_foto,$fileName_dinding_bin_foto);
		}

		if ( !is_null($bukaan_pintu_foto) )  {
			$fileName_bukaan_pintu_foto = str_random(20) . '.' . $bukaan_pintu_foto->getClientOriginalExtension();	
			$pm->bukaan_pintu_foto = $fileName_bukaan_pintu_foto;
			$this->_s->UploadFile($bukaan_pintu_foto,$fileName_bukaan_pintu_foto);
		}

		if ( !is_null($pintu_pengatur_foto) )  {
			$fileName_pintu_pengatur_foto = str_random(20) . '.' . $pintu_pengatur_foto->getClientOriginalExtension();	
			$pm->pintu_pengatur_foto = $fileName_pintu_pengatur_foto;
			$this->_s->UploadFile($pintu_pengatur_foto,$fileName_pintu_pengatur_foto);
		}

		if ( !is_null($skala_meter_foto) )  {
			$fileName_skala_meter_foto = str_random(20) . '.' . $skala_meter_foto->getClientOriginalExtension();	
			$pm->skala_meter_foto = $fileName_skala_meter_foto;
			$this->_s->UploadFile($skala_meter_foto,$fileName_skala_meter_foto);
		}

		if ( !is_null($motor_penggerak_foto) )  {
			$fileName_motor_penggerak_foto = str_random(20) . '.' . $motor_penggerak_foto->getClientOriginalExtension();	
			$pm->motor_penggerak_foto = $fileName_motor_penggerak_foto;
			$this->_s->UploadFile($motor_penggerak_foto,$fileName_motor_penggerak_foto);
		}

		if ( !is_null($penggetar_foto) )  {
			$fileName_penggetar_foto = str_random(20) . '.' . $penggetar_foto->getClientOriginalExtension();	
			$pm->penggetar_foto = $fileName_penggetar_foto;
			$this->_s->UploadFile($penggetar_foto,$fileName_penggetar_foto);
		}

		if ( !is_null($pengatur_kecepatan_foto) )  {
			$fileName_pengatur_kecepatan_foto = str_random(20) . '.' . $pengatur_kecepatan_foto->getClientOriginalExtension();	
			$pm->pengatur_kecepatan_foto = $fileName_pengatur_kecepatan_foto;
			$this->_s->UploadFile($pengatur_kecepatan_foto,$fileName_pengatur_kecepatan_foto);
		}

		if ( !is_null($konstruksi_pendukung_foto) )  {
			$fileName_konstruksi_pendukung_foto = str_random(20) . '.' . $konstruksi_pendukung_foto->getClientOriginalExtension();	
			$pm->konstruksi_pendukung_foto = $fileName_konstruksi_pendukung_foto;
			$this->_s->UploadFile($konstruksi_pendukung_foto,$fileName_konstruksi_pendukung_foto);
		}

		if ( !is_null($pelindung_bin_foto) )  {
			$fileName_pelindung_bin_foto = str_random(20) . '.' . $pelindung_bin_foto->getClientOriginalExtension();	
			$pm->pelindung_bin_foto = $fileName_pelindung_bin_foto;
			$this->_s->UploadFile($pelindung_bin_foto,$fileName_pelindung_bin_foto);
		}

		

		$pm->save();
	
		
		return redirect('amp/pemeriksaan1/unitbindingin');	
	}


	
	
	

}
