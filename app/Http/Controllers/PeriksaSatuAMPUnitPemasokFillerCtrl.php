<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitPemasokFiller as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitPemasokFillerCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}
	
	public function periksaSatuAMPUnitPemasokFiller(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_pemasokfiller = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_pemasok_filler')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_pemasokfiller',$pm_satu_amp_pemasokfiller);
	}

	public function periksaSatuAMPUnitPemasokFillerPost(Request $request){
		$rantai_elevator_foto = $request->file('rantai_elevator_foto');
		$mangkok_foto = $request->file('mangkok_foto');
		$sprocket_foto = $request->file('sprocket_foto');
		$bearing_foto = $request->file('bearing_foto');
		$motor_penggerak_foto = $request->file('motor_penggerak_foto');
		$ulir_pengalir_foto = $request->file('ulir_pengalir_foto');
		$pelindung_elevator_foto = $request->file('pelindung_elevator_foto');
		$konstruksi_foto = $request->file('konstruksi_foto');
		$corong_pengisi_foto = $request->file('corong_pengisi_foto');

		$foto_unit = $request->file('foto_unit');
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

		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitPemasokFiller() : \App\PeriksaSatuAMPUnitPemasokFiller::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->rantai_elevator_check = $request->rantai_elevator_check;
		$pm->rantai_elevator_ket = $request->rantai_elevator_ket;
		
		if ( !is_null($rantai_elevator_foto) )  {
			$fileName_rantai_elevator_foto = str_random(20) . '.' . $rantai_elevator_foto->getClientOriginalExtension();	
			$pm->rantai_elevator_foto = $fileName_rantai_elevator_foto;
			$this->_s->UploadFile($rantai_elevator_foto,$fileName_rantai_elevator_foto);
		}

		$pm->mangkok_check = $request->mangkok_check;
		$pm->mangkok_ket = $request->mangkok_ket;

		if ( !is_null($mangkok_foto) )  {
			$fileName_mangkok_foto = str_random(20) . '.' . $mangkok_foto->getClientOriginalExtension();	
			$pm->mangkok_foto = $fileName_mangkok_foto;
			$this->_s->UploadFile($mangkok_foto,$fileName_mangkok_foto);
		}

		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;

		if ( !is_null($sprocket_foto) )  {
			$fileName_sprocket_foto = str_random(20) . '.' . $sprocket_foto->getClientOriginalExtension();	
			$pm->sprocket_foto = $fileName_sprocket_foto;
			$this->_s->UploadFile($sprocket_foto,$fileName_sprocket_foto);
		}

		$pm->bearing_check = $request->bearing_check;
		$pm->bearing_ket = $request->bearing_ket;

		if ( !is_null($bearing_foto) )  {
			$fileName_bearing_foto = str_random(20) . '.' . $bearing_foto->getClientOriginalExtension();	
			$pm->bearing_foto = $fileName_bearing_foto;
			$this->_s->UploadFile($bearing_foto,$fileName_bearing_foto);
		}

		$pm->motor_penggerak_check = $request->motor_penggerak_check;
		$pm->motor_penggerak_ket = $request->motor_penggerak_ket;

		if ( !is_null($motor_penggerak_foto) )  {
			$fileName_motor_penggerak_foto = str_random(20) . '.' . $motor_penggerak_foto->getClientOriginalExtension();	
			$pm->motor_penggerak_foto = $fileName_motor_penggerak_foto;
			$this->_s->UploadFile($motor_penggerak_foto,$fileName_motor_penggerak_foto);
		}

		$pm->ulir_pengalir_check = $request->ulir_pengalir_check;
		$pm->ulir_pengalir_ket = $request->ulir_pengalir_ket;

		if ( !is_null($ulir_pengalir_foto) )  {
			$fileName_ulir_pengalir_foto = str_random(20) . '.' . $ulir_pengalir_foto->getClientOriginalExtension();	
			$pm->ulir_pengalir_foto = $fileName_ulir_pengalir_foto;
			$this->_s->UploadFile($ulir_pengalir_foto,$fileName_ulir_pengalir_foto);
		}

		$pm->pelindung_elevator_check = $request->pelindung_elevator_check;
		$pm->pelindung_elevator_ket = $request->pelindung_elevator_ket;

		if ( !is_null($pelindung_elevator_foto) )  {
			$fileName_pelindung_elevator_foto = str_random(20) . '.' . $pelindung_elevator_foto->getClientOriginalExtension();	
			$pm->pelindung_elevator_foto = $fileName_pelindung_elevator_foto;
			$this->_s->UploadFile($pelindung_elevator_foto,$fileName_pelindung_elevator_foto);
		}

		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;
		
		if ( !is_null($konstruksi_foto) )  {
			$fileName_konstruksi_foto = str_random(20) . '.' . $konstruksi_foto->getClientOriginalExtension();	
			$pm->konstruksi_foto = $fileName_konstruksi_foto;
			$this->_s->UploadFile($konstruksi_foto,$fileName_konstruksi_foto);
		}

		$pm->corong_pengisi_check = $request->corong_pengisi_check;
		$pm->corong_pengisi_ket = $request->corong_pengisi_ket;

		if ( !is_null($corong_pengisi_foto) )  {
			$fileName_corong_pengisi_foto = str_random(20) . '.' . $corong_pengisi_foto->getClientOriginalExtension();	
			$pm->corong_pengisi_foto = $fileName_corong_pengisi_foto;
			$this->_s->UploadFile($corong_pengisi_foto,$fileName_corong_pengisi_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitpemasokfiller');	
	}


	
	
	

}
