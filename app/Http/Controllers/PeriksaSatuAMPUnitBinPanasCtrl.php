<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaSatuAMPUnitBinPanas as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPUnitBinPanasCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function periksaSatuAMPUnitBinPanas(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_binpanas = \App\PeriksaSatuAMPUnitBinPanas::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_panas')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_binpanas',$pm_satu_amp_binpanas);
	}

	public function periksaSatuAMPUnitBinPanasPost(Request $request){
		$hopper_bin_foto = $request->file('hopper_bin_foto');
		$pipa_pengeluaran_oversize_foto = $request->file('pipa_pengeluaran_oversize_foto');
		$pintu_pengeluaran_foto = $request->file('pintu_pengeluaran_foto');
		$termometer_foto = $request->file('termometer_foto');
		$unit_hidrolis_foto = $request->file('unit_hidrolis_foto');
		$konstruksi_foto = $request->file('konstruksi_foto');
		$pipa_pengeluaran_overflow_foto = $request->file('pipa_pengeluaran_overflow_foto');

		$foto_unit = $request->file('foto_unit');
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
		$q = ($request->no_id == null) ? new \App\PeriksaSatuAMPUnitBinPanas() : \App\PeriksaSatuAMPUnitBinPanas::find($request->no_id);
		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		$pm->id_periksa = $request->id_periksa;
		$pm->hopper_bin_check = $request->hopper_bin_check;
		$pm->hopper_bin_ket = $request->hopper_bin_ket;
		
		if ( !is_null($hopper_bin_foto) )  {
			$fileName_hopper_bin_foto = str_random(20) . '.' . $hopper_bin_foto->getClientOriginalExtension();	
			$pm->hopper_bin_foto = $fileName_hopper_bin_foto;
			$this->_s->UploadFile($hopper_bin_foto,$fileName_hopper_bin_foto);
		}
		$pm->pipa_pengeluaran_oversize_check = $request->pipa_pengeluaran_oversize_check;
		$pm->pipa_pengeluaran_oversize_ket = $request->pipa_pengeluaran_oversize_ket;
		
		if ( !is_null($pipa_pengeluaran_oversize_foto) )  {
			$fileName_pipa_pengeluaran_oversize_foto = str_random(20) . '.' . $pipa_pengeluaran_oversize_foto->getClientOriginalExtension();	
			$pm->pipa_pengeluaran_oversize_foto = $fileName_pipa_pengeluaran_oversize_foto;
			$this->_s->UploadFile($pipa_pengeluaran_oversize_foto,$fileName_pipa_pengeluaran_oversize_foto);
		}

		$pm->pintu_pengeluaran_check = $request->pintu_pengeluaran_check;
		$pm->pintu_pengeluaran_ket = $request->pintu_pengeluaran_ket;

		if ( !is_null($pintu_pengeluaran_foto) )  {
			$fileName_pintu_pengeluaran_foto = str_random(20) . '.' . $pintu_pengeluaran_foto->getClientOriginalExtension();	
			$pm->pintu_pengeluaran_foto = $fileName_pintu_pengeluaran_foto;
			$this->_s->UploadFile($pintu_pengeluaran_foto,$fileName_pintu_pengeluaran_foto);
		}

		$pm->termometer_check = $request->termometer_check;
		$pm->termometer_ket = $request->termometer_ket;

		if ( !is_null($termometer_foto) )  {
			$fileName_termometer_foto = str_random(20) . '.' . $termometer_foto->getClientOriginalExtension();	
			$pm->termometer_foto = $fileName_termometer_foto;
			$this->_s->UploadFile($termometer_foto,$fileName_termometer_foto);
		}

		$pm->unit_hidrolis_check = $request->unit_hidrolis_check;
		$pm->unit_hidrolis_ket = $request->unit_hidrolis_ket;

		if ( !is_null($unit_hidrolis_foto) )  {
			$fileName_unit_hidrolis_foto = str_random(20) . '.' . $unit_hidrolis_foto->getClientOriginalExtension();	
			$pm->unit_hidrolis_foto = $fileName_unit_hidrolis_foto;
			$this->_s->UploadFile($unit_hidrolis_foto,$fileName_unit_hidrolis_foto);
		}

		$pm->konstruksi_check = $request->konstruksi_check;
		$pm->konstruksi_ket = $request->konstruksi_ket;

		if ( !is_null($konstruksi_foto) )  {
			$fileName_konstruksi_foto = str_random(20) . '.' . $konstruksi_foto->getClientOriginalExtension();	
			$pm->konstruksi_foto = $fileName_konstruksi_foto;
			$this->_s->UploadFile($konstruksi_foto,$fileName_konstruksi_foto);
		}

		$pm->pipa_pengeluaran_overflow_check = $request->pipa_pengeluaran_overflow_check;
		$pm->pipa_pengeluaran_overflow_ket = $request->pipa_pengeluaran_overflow_ket;
		$pm->pipa_pengeluaran_overflow_foto = $request->pipa_pengeluaran_overflow_foto;

		if ( !is_null($pipa_pengeluaran_overflow_foto) )  {
			$fileName_pipa_pengeluaran_overflow_foto = str_random(20) . '.' . $pipa_pengeluaran_overflow_foto->getClientOriginalExtension();	
			$pm->pipa_pengeluaran_overflow_foto = $fileName_pipa_pengeluaran_overflow_foto;
			$this->_s->UploadFile($pipa_pengeluaran_overflow_foto,$fileName_pipa_pengeluaran_overflow_foto);
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
	
		
		return redirect('amp/pemeriksaan1/unitbinpanas');	
	}


	
	
	

}
