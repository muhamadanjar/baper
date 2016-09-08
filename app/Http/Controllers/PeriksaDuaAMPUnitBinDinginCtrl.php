<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class PeriksaDuaAMPUnitBinDinginCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	
	public function periksaDuaAMPUnitBinDingin(){
		$id_periksa = session('id_periksa');
		$periksaduabindingin = \App\PeriksaDuaAMPUnitBinDingin::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_bin_dingin')
			->with('id_periksa',$id_periksa)
			->with('periksaduabindingin',$periksaduabindingin);
	}

	public function periksaDuaAMPUnitBinDinginPost(Request $request){
		$bukaan_pintu_foto = $request->file('bukaan_pintu_foto');
		$pintu_pengatur_foto = $request->file('pintu_pengatur_foto');
		$skala_meter_foto = $request->file('skala_meter_foto');
		$motor_penggerak_foto = $request->file('motor_penggerak_foto');
		$penggetar_foto = $request->file('penggetar_foto');
		$pengatur_kecepatan_foto = $request->file('pengatur_kecepatan_foto');
		

		$foto_unit = $request->file('foto_unit');

		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->bukaan_pintu_check < '4') {
			if ($kesimpulan_check < $request->bukaan_pintu_check) {
				$kesimpulan_check = $request->bukaan_pintu_check;
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
		
		$q = ($request->no_id == null) ? new \App\PeriksaDuaAMPUnitBinDingin() : \App\PeriksaDuaAMPUnitBinDingin::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;

		$pm->bukaan_pintu_check = $request->bukaan_pintu_check;
		$pm->bukaan_pintu_ket = $request->bukaan_pintu_ket;
		if ( !is_null($bukaan_pintu_foto) )  {
			$fileName_bukaan_pintu_foto = str_random(20) . '.' . $bukaan_pintu_foto->getClientOriginalExtension();	
			$pm->bukaan_pintu_foto = $fileName_bukaan_pintu_foto;
			$this->_s->UploadFile($bukaan_pintu_foto,$fileName_bukaan_pintu_foto);
		}
		
		$pm->pintu_pengatur_check = $request->pintu_pengatur_check;
		$pm->pintu_pengatur_ket = $request->pintu_pengatur_ket;
		if ( !is_null($pintu_pengatur_foto) )  {
			$fileName_pintu_pengatur_foto = str_random(20) . '.' . $pintu_pengatur_foto->getClientOriginalExtension();
			$pm->pintu_pengatur_foto = $fileName_pintu_pengatur_foto;
			$this->_s->UploadFile($pintu_pengatur_foto,$fileName_pintu_pengatur_foto);
		}

		$pm->skala_meter_check = $request->skala_meter_check;
		$pm->skala_meter_ket = $request->skala_meter_ket;
		if ( !is_null($skala_meter_foto) )  {
			$fileName_skala_meter_foto = str_random(20) . '.' . $skala_meter_foto->getClientOriginalExtension();
			$pm->skala_meter_foto = $fileName_skala_meter_foto;
			$this->_s->UploadFile($skala_meter_foto,$fileName_skala_meter_foto);
		}

		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;
		if ( !is_null($motor_penggerak_foto) )  {
			$fileName_motor_penggerak_foto= str_random(20) . '.' . $motor_penggerak_foto->getClientOriginalExtension();
			$pm->motor_penggerak_foto = $fileName_motor_penggerak_foto;
			$this->_s->UploadFile($motor_penggerak_foto,$fileName_motor_penggerak_foto);
		}

		$pm->penggetar_check = $request->penggetar_check;
		$pm->penggetar_ket = $request->penggetar_ket;
		if ( !is_null($penggetar_foto) )  {
			$fileName_penggetar_foto = str_random(20) . '.' . $penggetar_foto->getClientOriginalExtension();
			$pm->penggetar_foto = $fileName_penggetar_foto;
			$this->_s->UploadFile($penggetar_foto,$fileName_penggetar_foto);
		}

		$pm->pengatur_kecepatan_check = $request->pengatur_kecepatan_check;
		$pm->pengatur_kecepatan_ket = $request->pengatur_kecepatan_ket;
		if ( !is_null($pengatur_kecepatan_foto) )  {
			$fileName_pengatur_kecepatan_foto = str_random(20) . '.' . $pengatur_kecepatan_foto->getClientOriginalExtension();
			$pm->pengatur_kecepatan_foto = $fileName_pengatur_kecepatan_foto;
			$this->_s->UploadFile($pengatur_kecepatan_foto,$fileName_pengatur_kecepatan_foto);
		}
		
				
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_1 = $request->pemeriksaan_tahap_1;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		//$pm->tgl_periksa = Carbon::now();
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		$pm->save();

		return redirect('amp/pemeriksaan2/unitbindingin');	
	}

}
