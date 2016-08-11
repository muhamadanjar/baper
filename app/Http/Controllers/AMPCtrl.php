<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_dingin as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;

class AMPCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function index(){
		$datpermohonan = \App\Amp::orderBy('no_permohonan','ASC')
		->select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan','tbl_permohonan.kode_perusahaan','=','tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		->get();
		return view('amp.listpemeriksaanamp')
		
		->with('datpermohonan',$datpermohonan);
	}

	public function edit($id){
		session()->forget('no_permohonan');
		$datpermohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->find($id);
		session()->put('no_permohonan', $datpermohonan->no_permohonan);
		return view('amp.pm_1_unit_menu')->with('datpermohonan',$datpermohonan);
	}

	public function show_amp_t2($id)
	{
		$datpermohonan = \App\amp::find($id);

		return view('amp.pm_2_unit_menu')->with('datpermohonan',$datpermohonan);
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}
	
	
	public function pem_amp_1_unit_bin_dingin_cold_bin(){
		
		$no_permohonan = session('no_permohonan');
		$pm_satu_amp_unitbindingin = PMAMP1UBD::find($no_permohonan);
		if (is_null($no_permohonan)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_dingin')
			->with('no_permohonan',$no_permohonan)
			->with('pm_satu_amp_unitbindingin',$pm_satu_amp_unitbindingin);
	}

	public function pem_amp_1_unit_bin_dingin_cold_bin_post(Request $request){
		$file = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		
		
		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pelat_pemisah = $request->pelat_pemisah;
		$pm->dinding_bin = $request->dinding_bin;
		$pm->bukaan_pintu = $request->bukaan_pintu;
		$pm->pintu_pengatur = $request->pintu_pengatur;
		$pm->skala_meter = $request->skala_meter;
		$pm->motor_penggerak = $request->motor_penggerak;
		$pm->penggetar = $request->penggetar;
		$pm->pengatur_kecepatan = $request->pengatur_kecepatan;
		$pm->konstruksi_pendukung = $request->konstruksi_pendukung;
		$pm->pelindung_bin = $request->pelindung_bin;
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_unit_bin_dingin = $request->kesimpulan_unit_bin_dingin;
		if ( !is_null($file) )  {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($file);
		}
		
		
		$pm->save();
		
		
		return redirect('amp/pemeriksaan1/unitbindingin');	
	}
	
	public function pem_amp_1_unit_ban_berjalan(){
		return view('amp.pm_1_unit_ban_berjalan');
	}
	
	public function pem_amp_1_unit_pengering(){
		return view('amp.pm_1_unit_pengering');
	}
	public function pem_amp_1_unit_pemanas(){
		return view('amp.pm_1_unit_pemanas');
	}
	public function pem_amp_1_unit_pengumpul_debu(){
		return view('amp.pm_1_unit_pengumpul_debu');
	}
	public function pem_amp_1_unit_elevator_panas(){
		return view('amp.pm_1_unit_elevator_panas');
	}
	public function pem_amp_1_unit_saringan_bergetar(){
		return view('amp.pm_1_unit_saringan_bergetar');
	}
	public function pem_amp_1_unit_bin_panas(){
		return view('amp.pm_1_unit_bin_panas');
	}
	public function pem_amp_1_unit_timbangan(){
		return view('amp.pm_1_unit_timbangan');
	}
	public function pem_amp_1_unit_pencampur(){
		return view('amp.pm_1_unit_pencampur');
	}
	public function pem_amp_1_unit_pemasok_aspal(){
		return view('amp.pm_1_unit_pemasok_aspal');
	}
	public function pem_amp_1_unit_pemasok_filler(){
		return view('amp.pm_1_unit_pemasok_filler');
	}
	public function pem_amp_1_unit_tenaga_penggerak(){
		return view('amp.pm_1_unit_tenaga_penggerak');
	}
	public function pem_amp_1_unit_bin_filler(){
		return view('amp.pm_1_unit_bin_filler');
	}
	public function pem_amp_1_unit_elevator(){
		return view('amp.pm_1_unit_elevator');
	}
	public function pem_amp_1_unit_silo(){
		return view('amp.pm_1_unit_silo');
	}


	public function pem_amp_2_unit_bin_dingin_cold_bin(){
		return view('amp.pm_2_unit_bin_dingin');
	}
	public function pem_amp_2_unit_ban_berjalan(){
		return view('amp.pm_2_unit_ban_berjalan');
	}
	public function pem_amp_2_unit_pengering(){
		return view('amp.pm_2_unit_pengering');
	}
	public function pem_amp_2_unit_pemanas(){
		return view('amp.pm_2_unit_pemanas');
	}
	public function pem_amp_2_unit_pengumpul_debu(){
		return view('amp.pm_2_unit_pengumpul_debu');
	}
	public function pem_amp_2_unit_elevator_panas(){
		return view('amp.pm_2_unit_elevator_panas');
	}
	public function pem_amp_2_unit_saringan_bergetar(){
		return view('amp.pm_2_unit_saringan_bergetar');
	}
	public function pem_amp_2_unit_bin_panas(){
		return view('amp.pm_2_unit_bin_panas');
	}
	public function pem_amp_2_unit_timbangan(){
		return view('amp.pm_2_unit_timbangan');
	}
	public function pem_amp_2_unit_pencampur(){
		return view('amp.pm_2_unit_pencampur');
	}
	public function pem_amp_2_unit_pemasok_aspal(){
		return view('amp.pm_2_unit_pemasok_aspal');
	}
	public function pem_amp_2_unit_pemasok_filler(){
		return view('amp.pm_2_unit_pemasok_filler');
	}
	public function pem_amp_2_unit_tenaga_penggerak(){
		return view('amp.pm_2_unit_tenaga_penggerak');
	}
	public function pem_amp_2_unit_bin_filler(){
		return view('amp.pm_2_unit_bin_filler');
	}
	public function pem_amp_2_unit_elevator(){
		return view('amp.pm_2_unit_elevator');
	}
	public function pem_amp_2_unit_silo(){
		return view('amp.pm_2_unit_silo');
	}
	
	

}
