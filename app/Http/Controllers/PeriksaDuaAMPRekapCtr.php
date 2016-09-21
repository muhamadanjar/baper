<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaDuaAMPUnitSilo as PMAMP1UBD_SILO;
use App\PeriksaDuaAMPUnitBanBerjalan as PMAMP1UBD_BAN_BERJALAN;
use App\PeriksaDuaAMPUnitPengering as PMAMP1UBD_PENGERING;
use App\PeriksaDuaAMPUnitPemanas as PMAMP1UBD_PEMANAS;
use App\PeriksaDuaAMPUnitPengumpulDebu as PMAMP1UBD_PENGUMPUL_DEBU;
use App\PeriksaDuaAMPUnitElevatorPanas as PMAMP1UBD_ELEVATOR_PANAS;
use App\PeriksaDuaAMPUnitSaringanBergetar as PMAMP1UBD_SARINGAN_BERGETAR;
use App\PeriksaDuaAMPUnitBinPanas as PMAMP1UBD_BIN_PANAS;
use App\PeriksaDuaAMPUnitTimbangan as PMAMP1UBD_TIMBANGAN;
use App\PeriksaAMPDuaAMPUnitPencampur as PMAMP1UBD_PENCAMPUR;
use App\PeriksaDuaAMPUnitPemasokAspal as PMAMP1UBD_PEMASOK_ASPAL;
use App\PeriksaDuaAMPUnitPemasokFiller as PMAMP1UBD_PEMASOK_FILLER;
use App\PeriksaDuaAMPUnitTenagaPenggerak as PMAMP1UBD_TENAGA_PENGGERAK;
use App\PeriksaDuaAMPUnitBinFiller as PMAMP1UBD_BIN_FILLER;
use App\PeriksaDuaAMPUnitElevator as PMAMP1UBD_ELEVATOR;
use App\PeriksaDuaAMPUnitBanDingin as PMAMP1UBD_BAN_DINGIN;
use App\AmpPeriksaDua as amp2p;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaDuaAMPRekapCtr extends Controller {

	public function periksaDuaAMPRekap(){
		$id_periksa2 = session('id_periksa2');
		$id_periksa = session('id_periksa');
		if (is_null($id_periksa2)) {
			return redirect('/home');
		}
		$periksa2 = amp2p::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		
		
		$bin_dingin = \App\PeriksaDuaAMPUnitBinDingin::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$ban_berjalan = \App\PeriksaDuaAMPUnitBanBerjalan::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pengering = PMAMP1UBD_PENGERING::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pemanas = PMAMP1UBD_PEMANAS::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pengumpul_debu = PMAMP1UBD_PENGUMPUL_DEBU::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$elevator_panas = PMAMP1UBD_ELEVATOR_PANAS::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$saringan_bergetar = PMAMP1UBD_SARINGAN_BERGETAR::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$bin_panas = PMAMP1UBD_BIN_PANAS::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$timbangan = PMAMP1UBD_TIMBANGAN::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pencampur = PMAMP1UBD_PENCAMPUR::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pemasok_aspal = PMAMP1UBD_PEMASOK_ASPAL::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$pemasok_filler = PMAMP1UBD_PEMASOK_FILLER::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$tenaga_penggerak = PMAMP1UBD_TENAGA_PENGGERAK::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$bin_filler = PMAMP1UBD_BIN_FILLER::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$elevator = PMAMP1UBD_ELEVATOR::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		$silo = PMAMP1UBD_SILO::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa2)->first();
		
		
		
		
		return view('amp.pm_2_unit_rekap')
			->with('periksa',$periksa2)
			->with('id_periksa2',$id_periksa2)
			->with('id_periksa',$id_periksa)
			->with('bin_dingin',$bin_dingin)
			->with('ban_berjalan',$ban_berjalan)
			->with('pengering',$pengering)
			->with('pemanas',$pemanas)
			->with('pengumpul_debu',$pengumpul_debu)
			->with('elevator_panas',$elevator_panas)
			->with('saringan_bergetar',$saringan_bergetar)
			->with('bin_panas',$bin_panas)
			->with('timbangan',$timbangan)
			->with('pencampur',$pencampur)
			->with('pemasok_aspal',$pemasok_aspal)
			->with('pemasok_filler',$pemasok_filler)
			->with('tenaga_penggerak',$tenaga_penggerak)
			->with('bin_filler',$bin_filler)
			->with('elevator',$elevator)
			->with('silo',$silo);
	}

	public function periksaDuaAMPRekapPost(Request $request){
			

		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->kesimpulan_01_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_01_check) {
				$kesimpulan_check = $request->kesimpulan_01_check;
			}
		}

		if ($request->kesimpulan_02_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_02_check) {
				$kesimpulan_check = $request->kesimpulan_02_check;
			}
		}

		if ($request->kesimpulan_03_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_03_check) {
				$kesimpulan_check = $request->kesimpulan_03_check;
			}
		}

		if ($request->kesimpulan_04_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_04_check) {
				$kesimpulan_check = $request->kesimpulan_04_check;
			}
		}

		if ($request->kesimpulan_05_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_05_check) {
				$kesimpulan_check = $request->kesimpulan_05_check;
			}
		}

		if ($request->kesimpulan_06_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_06_check) {
				$kesimpulan_check = $request->kesimpulan_06_check;
			}
		}

		if ($request->kesimpulan_07_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_07_check) {
				$kesimpulan_check = $request->kesimpulan_07_check;
			}
		}

		if ($request->kesimpulan_08_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_08_check) {
				$kesimpulan_check = $request->kesimpulan_08_check;
			}
		}

		if ($request->kesimpulan_09_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_09_check) {
				$kesimpulan_check = $request->kesimpulan_09_check;
			}
		}

		if ($request->kesimpulan_10_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_10_check) {
				$kesimpulan_check = $request->kesimpulan_10_check;
			}
		}

		if ($request->kesimpulan_11_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_11_check) {
				$kesimpulan_check = $request->kesimpulan_11_check;
			}
		}

		if ($request->kesimpulan_12_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_12_check) {
				$kesimpulan_check = $request->kesimpulan_12_check;
			}
		}

		if ($request->kesimpulan_13_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_13_check) {
				$kesimpulan_check = $request->kesimpulan_13_check;
			}
		}

		if ($request->kesimpulan_14_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_14_check) {
				$kesimpulan_check = $request->kesimpulan_14_check;
			}
		}

		if ($request->kesimpulan_15_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_15_check) {
				$kesimpulan_check = $request->kesimpulan_15_check;
			}
		}

		if ($request->kesimpulan_16_check < '4') {
			if ($kesimpulan_check < $request->kesimpulan_16_check) {
				$kesimpulan_check = $request->kesimpulan_16_check;
			}
		}

		$out = array();
		//['kesimpulan' => $kesimpulan_check]
		$out['catatan_pemeriksa'] = $request->catatan_pemeriksa;
		$out['harus_diperbaiki'] = $request->harus_diperbaiki;
		$out['pemeriksaan_tahap_2'] = $request->pemeriksaan_tahap_2;
		$out['kesimpulan'] =$kesimpulan_check;
		
		\DB::table('tbl_amp_2_periksa')
            ->where('id_periksa2', session('id_periksa2'))
            ->update($out);

		
		return redirect('amp/listpemeriksaanamp2/ubah-'.session('id_periksa2'));	
	}


	
	
	

}
