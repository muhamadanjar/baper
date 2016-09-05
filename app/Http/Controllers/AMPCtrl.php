<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_dingin as PMAMP1UBD;
use App\pm_amp_1_unit_ban_berjalan as PMAMP1UBB;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class AMPCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
	}
	public function index(){
		$datpermohonan = \App\Amp::orderBy('no_permohonan','ASC')
		->select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi','tbl_amp_1_periksa.kesimpulan as status_terakhir')
		->join('tbl_perusahaan','tbl_permohonan.kode_perusahaan','=','tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		->leftjoin('tbl_amp_1_periksa','tbl_permohonan.no_permohonan','=','tbl_amp_1_periksa.kode_periksa')
		->get();
		return view('amp.listpemeriksaanamp')
		
		->with('datpermohonan',$datpermohonan);
	}

	public function edit($id){
		$periksa_utama = \App\AmpPeriksaSatu::orderBy('id_periksa','ASC')->where('id_periksa',$id)->first();
		$datpermohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		->find($periksa_utama->kode_periksa);
		
		session()->put('no_permohonan', $datpermohonan->no_permohonan);
		if (!is_null($periksa_utama)) {
			session()->put('id_periksa', $id);
		}
		
		return view('amp.pm_1_unit_menu')->with('datpermohonan',$datpermohonan);
	}

	public function show_amp_t2($id)
	{
		$datpermohonan = \App\amp::find($id);

		return view('amp.pm_2_unit_menu')->with('datpermohonan',$datpermohonan);
	}


	public function pem_amp_1_unit_bin_dingin_cold_bin(){
		
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

	public function pem_amp_1_unit_bin_dingin_cold_bin_post(Request $request){
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
	
	public function pem_amp_1_unit_ban_berjalan(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_banberjalan = PMAMP1UBB::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}

		return view('amp.pm_1_unit_ban_berjalan')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_banberjalan',$pm_satu_amp_banberjalan);
	}

	public function pem_amp_1_unit_ban_berjalan_post(){


		$kesimpulan_check = '1';
		if ($request->ban_berjalan_penampung_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_penampung_check) {
				$kesimpulan_check = $request->ban_berjalan_penampung_check;
			}
		}

		if ($request->ban_berjalan_colector_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_colector_check) {
				$kesimpulan_check = $request->ban_berjalan_colector_check;
			}
		}

		if ($request->ban_berjalan_dryer_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_dryer_check) {
				$kesimpulan_check = $request->ban_berjalan_dryer_check;
			}
		}

		if ($request->ban_berjalan_feeder_check < '4') {
			if ($kesimpulan_check < $request->ban_berjalan_feeder_check) {
				$kesimpulan_check = $request->ban_berjalan_feeder_check;
			}
		}

		
		if ($request->alat_penimbang_check < '4') {
			if ($kesimpulan_check < $request->alat_penimbang_check) {
				$kesimpulan_check = $request->alat_penimbang_check;
			}
		}

		if ($request->rol_pemutar_check < '4') {
			if ($kesimpulan_check < $request->rol_pemutar_check) {
				$kesimpulan_check = $request->rol_pemutar_check;
			}
		}

		if ($request->bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_check) {
				$kesimpulan_check = $request->bearing_check;
			}
		}

		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

		if ($request->roller_check < '4') {
			if ($kesimpulan_check < $request->roller_check) {
				$kesimpulan_check = $request->roller_check;
			}
		}

		if ($request->gear_check < '4') {
			if ($kesimpulan_check < $request->gear_check) {
				$kesimpulan_check = $request->gear_check;
			}
		}

		$q = ($request->no_id == null) ? new PMAMP1UBB() : PMAMP1UBB::find($request->no_id);
		$pm = $q;

		$pm->kode_periksa = $request->kode_periksa;
		
		$pm->ban_berjalan_penampung_check = $request->ban_berjalan_penampung_check;
		$pm->ban_berjalan_penampung_ket = $request->ban_berjalan_penampung_ket;
		$pm->ban_berjalan_penampung_foto = $request->ban_berjalan_penampung_foto;
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

		return 'Sedang Dalam Perbaikan';
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
