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
		->select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan','tbl_permohonan.kode_perusahaan','=','tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		
		->get();
		return view('amp.listpemeriksaanamp')
		
		->with('datpermohonan',$datpermohonan);
	}

	public function edit($id){
		$periksa_utama = \App\AmpPeriksaSatu::orderBy('id_periksa','ASC')->where('id_periksa',$id)->first();
		$datpermohonan = \App\Permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		->find($periksa_utama->kode_periksa);
		
		session()->put('no_permohonan', $datpermohonan->no_permohonan);
		if (!is_null($periksa_utama)) {
			session()->put('id_periksa', $id);
		}
		
		return view('amp.pm_1_unit_menu')->with('datpermohonan',$datpermohonan);
	}

	public function pemeriksaan_dua(){
		$sql = "select tbl_permohonan.*,tbl_amp_1_periksa.id_periksa, tbl_perusahaan.nama_perusahaan, tbl_perusahaan.alamat, tbl_perusahaan.telp, tbl_amp.merk, tbl_amp.tipe, tbl_amp.tahun_buat, tbl_amp.kapasitas, tbl_amp.lokasi, tbl_amp_1_periksa.kesimpulan as status_terakhir from tbl_permohonan inner join tbl_perusahaan on tbl_permohonan.kode_perusahaan = tbl_perusahaan.kode_perusahaan inner join tbl_amp on tbl_permohonan.kode_peralatan = tbl_amp.kode_amp inner join tbl_amp_1_periksa on tbl_permohonan.no_permohonan = tbl_amp_1_periksa.kode_periksa where tbl_amp_1_periksa.kesimpulan='1'";
		$datpermohonan = \DB::select($sql);

		$pemeriksaan_dua = \App\Permohonan::select('tbl_permohonan.*')
		->join('tbl_perusahaan','tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan', '=', 'tbl_amp.kode_amp')
		->join('tbl_amp_1_periksa','tbl_permohonan.no_permohonan', '=', 'tbl_amp_1_periksa.kode_periksa')
		->where('tbl_amp_1_periksa.kesimpulan',1)
		->get();
		return view('amp.listpemeriksaanamp2')
		->with('datpermohonan',$pemeriksaan_dua);
	}

	public function edit2($id){
		$periksa_utama = \App\AmpPeriksaDua::orderBy('id_periksa','ASC')->where('id_periksa',$id)->first();
		$datpermohonan = \App\Permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')
		->find($periksa_utama->kode_periksa);
		
		session()->put('no_permohonan', $datpermohonan->no_permohonan);
		if (!is_null($periksa_utama)) {
			session()->put('id_periksa', $id);
		}
		
		return view('amp.pm_2_unit_menu')->with('datpermohonan',$datpermohonan);
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
