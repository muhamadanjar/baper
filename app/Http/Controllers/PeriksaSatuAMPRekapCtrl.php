<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_silo as PMAMP1UBD_SILO;
use App\pm_amp_1_unit_ban_berjalan as PMAMP1UBD_BAN_BERJALAN;
use App\pm_amp_1_unit_pengering as PMAMP1UBD_PENGERING;
use App\pm_amp_1_unit_pemanas as PMAMP1UBD_PEMANAS;
use App\pm_amp_1_unit_pengumpul_debu as PMAMP1UBD_PENGUMPUL_DEBU;
use App\pm_amp_1_unit_elevator_panas as PMAMP1UBD_ELEVATOR_PANAS;
use App\pm_amp_1_unit_saringan_bergetar as PMAMP1UBD_SARINGAN_BERGETAR;
use App\pm_amp_1_unit_bin_panas as PMAMP1UBD_BIN_PANAS;
use App\pm_amp_1_unit_timbangan as PMAMP1UBD_TIMBANGAN;
use App\pm_amp_1_unit_pencampur as PMAMP1UBD_PENCAMPUR;
use App\pm_amp_1_unit_pemasok_aspal as PMAMP1UBD_PEMASOK_ASPAL;
use App\pm_amp_1_unit_pemasok_filler as PMAMP1UBD_PEMASOK_FILLER;
use App\pm_amp_1_unit_tenaga_penggerak as PMAMP1UBD_TENAGA_PENGGERAK;
use App\pm_amp_1_unit_bin_filler as PMAMP1UBD_BIN_FILLER;
use App\pm_amp_1_unit_elevator as PMAMP1UBD_ELEVATOR;
use App\pm_amp_1_unit_bin_dingin as PMAMP1UBD_BAN_DINGIN;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaSatuAMPRekapCtrl extends Controller {

	public function periksaSatuAMPRekap(){
		$PeriksaSatuAMPRekapCtrl = session('PeriksaSatuAMPRekapCtrl');
		$pm_satu_amp_silo = PMAMP1UBD_SILO::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		$pm_satu_amp_ban_berjalan = PMAMP1UBD_BAN_BERJALAN::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pengering = PMAMP1UBD_PENGERING::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pemanas = PMAMP1UBD_PEMANAS::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pengumpul_debu = PMAMP1UBD_PENGUMPUL_DEBU::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_elevator_panas = PMAMP1UBD_ELEVATOR_PANAS::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_saringan_bergetar = PMAMP1UBD_SARINGAN_BERGETAR::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_bin_panas = PMAMP1UBD_BIN_PANAS::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_timbangan = PMAMP1UBD_TIMBANGAN::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pencampur = PMAMP1UBD_PENCAMPUR::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pemasok_aspal = PMAMP1UBD_PEMASOK_ASPAL::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_pemasok_filler = PMAMP1UBD_PEMASOK_FILLER::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_tenaga_penggerak = PMAMP1UBD_TENAGA_PENGGERAK::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_bin_filler = PMAMP1UBD_BIN_FILLER::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		$pm_satu_amp_elevator = PMAMP1UBD_ELEVATOR::orderBy('tgl_periksa','DESC')->find($no_permohonan);
		
		return view('amp.pm_1_unit_rekap')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_ban_berjalan',$pm_satu_amp_ban_berjalan)
			->with('pm_satu_amp_pengering',$pm_satu_amp_pemanas)
			->with('pm_satu_amp_pemanas',$pm_satu_amp_pemanas)
			->with('pm_satu_amp_pengumpul_debu',$pm_satu_amp_pengumpul_debu)
			->with('pm_satu_amp_elevator_panas',$pm_satu_amp_elevator_panas)
			->with('pm_satu_amp_saringan_bergetar',$pm_satu_amp_saringan_bergetar)
			->with('pm_satu_amp_bin_panas',$pm_satu_amp_bin_panas)
			->with('pm_satu_amp_timbangan',$pm_satu_amp_timbangan)
			->with('pm_satu_amp_pencampur',$pm_satu_amp_pencampur)
			->with('pm_satu_amp_pemasok_aspal',$pm_satu_amp_pemasok_aspal)
			->with('pm_satu_amp_pemasok_filler',$pm_satu_amp_pemasok_filler)
			->with('pm_satu_amp_tenaga_penggerak',$pm_satu_amp_tenaga_penggerak)
			->with('pm_satu_amp_bin_filler',$pm_satu_amp_bin_filler)
			->with('pm_satu_amp_elevator',$pm_satu_amp_elevator)
			->with('pm_satu_amp_silo',$pm_satu_amp_silo);
	}

	public function periksaSatuAMPRekapCtrlPost(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		if ($request->generator_check < '4') {
			if ($kesimpulan_check < $request->generator_check) {
				$kesimpulan_check = $request->generator_check;
			}
		}

		if ($request->mesin_check < '4') {
			if ($kesimpulan_check < $request->mesin_check) {
				$kesimpulan_check = $request->mesin_check;
			}
		}

		if ($request->compressor_check < '4') {
			if ($kesimpulan_check < $request->compressor_check) {
				$kesimpulan_check = $request->compressor_check;
			}
		}

		if ($request->silinder_udara_check < '4') {
			if ($kesimpulan_check < $request->silinder_udara_check) {
				$kesimpulan_check = $request->silinder_udara_check;
			}
		}

		if ($request->kontrol_panel_check < '4') {
			if ($kesimpulan_check < $request->kontrol_panel_check) {
				$kesimpulan_check = $request->kontrol_panel_check;
			}
		}

		if ($request->jaringan_kabel_check < '4') {
			if ($kesimpulan_check < $request->jaringan_kabel_check) {
				$kesimpulan_check = $request->jaringan_kabel_check;
			}
		}

		if ($request->pipa_pipa_check < '4') {
			if ($kesimpulan_check < $request->pipa_pipa_check) {
				$kesimpulan_check = $request->pipa_pipa_check;
			}
		}

		if ($request->filter_check < '4') {
			if ($kesimpulan_check < $request->filter_check) {
				$kesimpulan_check = $request->filter_check;
			}
		}

		if ($request->pompa_hidrolik_check < '4') {
			if ($kesimpulan_check < $request->pompa_hidrolik_check) {
				$kesimpulan_check = $request->pompa_hidrolik_check;
			}
		}

		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->generator_check = $request->generator_check;
		$pm->generator_ket = $request->generator_ket;
		$pm->generator_foto = $request->generator_foto;
		$pm->mesin_check = $request->mesin_check;
		$pm->mesin_ket = $request->mesin_ket;
		$pm->mesin_foto = $request->mesin_foto;
		$pm->compressor_check = $request->compressor_check;
		$pm->compressor_ket = $request->compressor_ket;
		$pm->compressor_foto = $request->compressor_foto;
		$pm->silinder_udara_check = $request->silinder_udara_check;
		$pm->silinder_udara_ket = $request->silinder_udara_ket;
		$pm->silinder_udara_foto = $request->silinder_udara_foto;
		$pm->kontrol_panel_check = $request->kontrol_panel_check;
		$pm->kontrol_panel_ket = $request->kontrol_panel_ket;
		$pm->kontrol_panel_foto = $request->kontrol_panel_foto;
		$pm->jaringan_kabel_check = $request->jaringan_kabel_check;
		$pm->jaringan_kabel_ket = $request->jaringan_kabel_ket;
		$pm->jaringan_kabel_foto = $request->jaringan_kabel_foto;
		$pm->pipa_pipa_check = $request->pipa_pipa_check;
		$pm->pipa_pipa_ket = $request->pipa_pipa_ket;
		$pm->pipa_pipa_foto = $request->pipa_pipa_foto;
		$pm->filter_check = $request->filter_check;
		$pm->filter_ket = $request->filter_ket;
		$pm->filter_foto = $request->filter_foto;
		$pm->pompa_hidrolik_check = $request->pompa_hidrolik_check;
		$pm->pompa_hidrolik_ket = $request->pompa_hidrolik_ket;
		$pm->pompa_hidrolik_foto = $request->pompa_hidrolik_foto;
										
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
	
		
		return redirect('amp/pemeriksaan1/unittenagapenggerak');	
	}


	
	
	

}
