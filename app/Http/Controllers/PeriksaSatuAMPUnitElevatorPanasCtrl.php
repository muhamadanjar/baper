<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitElevatorPanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitElevatorPanasCtrl extends Controller {

	public function periksaSatuAMPUnitElevatorPanas(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_elevatorpanas = \App\PeriksaSatuAMPUnitElevatorPanas::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_elevator_panas')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_elevatorpanas',$pm_satu_amp_elevatorpanas);
	}

	public function periksaSatuAMPUnitElevatorPanasPost(Request $request){
		$mangkok_foto = $request->file('mangkok_foto');
		$rantai_pemutar_foto = $request->file('rantai_pemutar_foto');
		$sprocket_pemutar_foto = $request->file('sprocket_pemutar_foto');
		$sprocket_pembantu_foto = $request->file('sprocket_pembantu_foto');
		$motor_pemutar_foto = $request->file('motor_pemutar_foto');
		$pelindung_elevator_foto = $request->file('pelindung_elevator_foto');
		$konstruksi_pendukung_foto = $request->file('konstruksi_pendukung_foto');
		$pipa_pengeluaran_foto = $request->file('pipa_pengeluaran_foto');
		$foto_unit = $request->file('foto_unit');
		
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

		if ($request->sprocket_pembantu_check < '4') {
			if ($kesimpulan_check < $request->sprocket_pembantu_check) {
				$kesimpulan_check = $request->sprocket_pembantu_check;
			}
		}

		if ($request->motor_pemutar_check < '4') {
			if ($kesimpulan_check < $request->motor_pemutar_check) {
				$kesimpulan_check = $request->motor_pemutar_check;
			}
		}

		if ($request->pelindung_elevator_check < '4') {
			if ($kesimpulan_check < $request->pelindung_elevator_check) {
				$kesimpulan_check = $request->pelindung_elevator_check;
			}
		}

		if ($request->konstruksi_pendukung_check < '4') {
			if ($kesimpulan_check < $request->konstruksi_pendukung_check) {
				$kesimpulan_check = $request->konstruksi_pendukung_check;
			}
		}

		if ($request->pipa_pengeluaran_check < '4') {
			if ($kesimpulan_check < $request->pipa_pengeluaran_check) {
				$kesimpulan_check = $request->pipa_pengeluaran_check;
			}
		}
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitElevatorPanas() : \App\PeriksaSatuAMPUnitElevatorPanas::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->mangkok_check = $request->mangkok_check;
		$pm->mangkok_ket = $request->mangkok_ket;
		
		if ( !is_null($mangkok_foto) )  {
			$fileName_mangkok_foto = str_random(20) . '.' . $mangkok_foto->getClientOriginalExtension();	
			$pm->mangkok_foto = $fileName_mangkok_foto;
			$this->_s->UploadFile($mangkok_foto,$fileName_mangkok_foto);
		}

		$pm->rantai_pemutar_check = $request->rantai_pemutar_check;
		$pm->rantai_pemutar_ket = $request->rantai_pemutar_ket;
		
		if ( !is_null($rantai_pemutar_foto) )  {
			$fileName_rantai_pemutar_foto = str_random(20) . '.' . $rantai_pemutar_foto->getClientOriginalExtension();	
			$pm->rantai_pemutar_foto = $fileName_rantai_pemutar_foto;
			$this->_s->UploadFile($rantai_pemutar_foto,$fileName_rantai_pemutar_foto);
		}

		$pm->sprocket_pemutar_check = $request->sprocket_pemutar_check;
		$pm->sprocket_pemutar_ket = $request->sprocket_pemutar_ket;
		
		if ( !is_null($sprocket_pemutar_foto) )  {
			$fileName_sprocket_pemutar_foto = str_random(20) . '.' . $sprocket_pemutar_foto->getClientOriginalExtension();	
			$pm->sprocket_pemutar_foto = $fileName_sprocket_pemutar_foto;
			$this->_s->UploadFile($sprocket_pemutar_foto,$fileName_sprocket_pemutar_foto);
		}

		$pm->sprocket_pembantu_check = $request->sprocket_pembantu_check;
		$pm->sprocket_pembantu_ket = $request->sprocket_pembantu_ket;
		
		if ( !is_null($sprocket_pembantu_foto) )  {
			$fileName_sprocket_pembantu_foto = str_random(20) . '.' . $sprocket_pembantu_foto->getClientOriginalExtension();	
			$pm->sprocket_pembantu_foto = $fileName_sprocket_pembantu_foto;
			$this->_s->UploadFile($sprocket_pembantu_foto,$fileName_sprocket_pembantu_foto);
		}

		$pm->motor_pemutar_check = $request->motor_pemutar_check;
		$pm->motor_pemutar_ket = $request->motor_pemutar_ket;
		
		if ( !is_null($motor_pemutar_foto) )  {
			$fileName_motor_pemutar_foto = str_random(20) . '.' . $motor_pemutar_foto->getClientOriginalExtension();	
			$pm->motor_pemutar_foto = $fileName_motor_pemutar_foto;
			$this->_s->UploadFile($motor_pemutar_foto,$fileName_motor_pemutar_foto);
		}

		$pm->pelindung_elevator_check = $request->pelindung_elevator_check;
		$pm->pelindung_elevator_ket = $request->pelindung_elevator_ket;
		
		if ( !is_null($pelindung_elevator_foto) )  {
			$fileName_pelindung_elevator_foto = str_random(20) . '.' . $pelindung_elevator_foto->getClientOriginalExtension();	
			$pm->pelindung_elevator_foto = $fileName_pelindung_elevator_foto;
			$this->_s->UploadFile($pelindung_elevator_foto,$fileName_pelindung_elevator_foto);
		}

		$pm->konstruksi_pendukung_check = $request->konstruksi_pendukung_check;
		$pm->konstruksi_pendukung_ket = $request->konstruksi_pendukung_ket;

		if ( !is_null($konstruksi_pendukung_foto) )  {
			$fileName_konstruksi_pendukung_foto = str_random(20) . '.' . $konstruksi_pendukung_foto->getClientOriginalExtension();
			$pm->konstruksi_pendukung_foto = $fileName_konstruksi_pendukung_foto;
			$this->_s->UploadFile($konstruksi_pendukung_foto,$fileName_konstruksi_pendukung_foto);
		}

		$pm->pipa_pengeluaran_check = $request->pipa_pengeluaran_check;
		$pm->pipa_pengeluaran_ket = $request->pipa_pengeluaran_ket;
		
		if ( !is_null($pipa_pengeluaran_foto) )  {
			$fileName_pipa_pengeluaran_foto = str_random(20) . '.' . $pipa_pengeluaran_foto->getClientOriginalExtension();
			$pm->pipa_pengeluaran_foto = $fileName_pipa_pengeluaran_foto;
			$this->_s->UploadFile($pipa_pengeluaran_foto,$fileName_pipa_pengeluaran_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitelevatorpanas');	
	}


	
	
	

}
