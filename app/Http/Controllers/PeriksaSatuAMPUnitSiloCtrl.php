<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitSilo as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitSiloCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->_s = new AHelper();
	}

	public function periksaSatuAMPUnitSilo(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_silo = PMAMP1UBD::orderBy('tgl_periksa','DESC')->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_silo')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_silo',$pm_satu_amp_silo);
	}

	public function periksaSatuAMPUnitSiloPost(Request $request){
		$silo_penampung_foto = $request->file('silo_penampung_foto');
		$pintu_pengeluaran_foto = $request->file('pintu_pengeluaran_foto');
		$sistem_hidrolik_foto = $request->file('sistem_hidrolik_foto');
		$konstruksi_rangka_foto = $request->file('konstruksi_rangka_foto');
		$foto_unit = $request->file('foto_unit');
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
				
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitSilo() : \App\PeriksaSatuAMPUnitSilo::find($request->no_id) ;
		$pm = $q;
		$pm->id_periksa = $request->id_periksa;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->silo_penampung_check = $request->silo_penampung_check;
		$pm->silo_penampung_ket = $request->silo_penampung_ket;

		if ( !is_null($silo_penampung_foto) )  {
			$fileName_silo_penampung_foto = str_random(20) . '.' . $silo_penampung_foto->getClientOriginalExtension();	
			$pm->silo_penampung_foto = $fileName_silo_penampung_foto;
			$this->_s->UploadFile($silo_penampung_foto,$fileName_silo_penampung_foto);
		}
		$pm->pintu_pengeluaran_check = $request->pintu_pengeluaran_check;
		$pm->pintu_pengeluaran_ket = $request->pintu_pengeluaran_ket;
		
		if ( !is_null($pintu_pengeluaran_foto) )  {
			$fileName_pintu_pengeluaran_foto = str_random(20) . '.' . $pintu_pengeluaran_foto->getClientOriginalExtension();	
			$pm->pintu_pengeluaran_foto = $fileName_pintu_pengeluaran_foto;
			$this->_s->UploadFile($pintu_pengeluaran_foto,$fileName_pintu_pengeluaran_foto);
		}
		$pm->sistem_hidrolik_check = $request->sistem_hidrolik_check;
		$pm->sistem_hidrolik_ket = $request->sistem_hidrolik_ket;
		

		if ( !is_null($sistem_hidrolik_foto) )  {
			$fileName_sistem_hidrolik_foto = str_random(20) . '.' . $sistem_hidrolik_foto->getClientOriginalExtension();	
			$pm->sistem_hidrolik_foto = $fileName_sistem_hidrolik_foto;
			$this->_s->UploadFile($sistem_hidrolik_foto,$fileName_sistem_hidrolik_foto);
		}

		$pm->konstruksi_rangka_check = $request->konstruksi_rangka_check;
		$pm->konstruksi_rangka_ket = $request->konstruksi_rangka_ket;
		
		if ( !is_null($konstruksi_rangka_foto) )  {
			$fileName_konstruksi_rangka_foto = str_random(20) . '.' . $konstruksi_rangka_foto->getClientOriginalExtension();	
			$pm->konstruksi_rangka_foto = $fileName_konstruksi_rangka_foto;
			$this->_s->UploadFile($konstruksi_rangka_foto,$fileName_konstruksi_rangka_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitsilo');	
	}


	
	
	

}
