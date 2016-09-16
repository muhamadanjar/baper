<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class permohonanCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
		$this->ahelper = new AHelper();
	}
	
	public function index(){

		$permohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->get();
		return view('permohonan.permohonan')->with('permohonan',$permohonan);
	}
	
	public function create(){
		$kode_peralatan = \App\AmpMast::get();
		$kode_otomatis = $this->ahelper
			->otomatis_kode_permohonan(date('Y'),'tbl_permohonan','no_permohonan');
		
		$perusahaan = \App\perusahaan::get();
		return view('permohonan.permohonanAdd')
		->with('kode_otomatis',$kode_otomatis)
		->with('perusahaan',$perusahaan);
	}

	
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\Permohonan::$rules);
		
		if($validator->fails()) {
			return \Redirect::to('permohonan/permohonan/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
			//dd($validator);
		}else{
			\DB::beginTransaction();
			try {
				$permohonan = new \App\Permohonan();
				$pemeriksaan_ulang = ($request->pemeriksaan_ulang == null) ? 0 : 1 ;
				
				$permohonan->no_permohonan = $request->no_permohonan;
				$permohonan->no_surat = $request->no_surat;
				$permohonan->tgl_surat = $request->tgl_surat;
				
				$permohonan->tanggal_permohonan = $request->tanggal_permohonan;
				$permohonan->pemeriksaan_ulang = $pemeriksaan_ulang;
				$permohonan->kode_perusahaan = $request->kode_perusahaan;
				$permohonan->nama_pemohon = $request->nama_pemohon;
				$permohonan->jabatan = $request->jabatan;
				$permohonan->jenis_peralatan = $request->jenis_peralatan;
				$permohonan->kode_peralatan = $request->kode_peralatan;
			
				$permohonan->kondisi = $request->kondisi;
				$permohonan->save();
			} catch (Exception $e) {
				\DB::rollback();
			    throw $e;
			}

			try {
				$amp = \App\AmpMast::find($request->kode_peralatan);
				$amp->kondisi = 2;
				$amp->save();

			} catch (Exception $e) {
				\DB::rollback();
			    throw $e;
			}
			\DB::commit();
			return redirect('permohonan/permohonan/index');
		}
	}

	

	
	public function edit($id){
		$permohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->find($id);
		
		$kode_peralatan = \App\AmpMast::get();
		
		$perusahaan = \App\perusahaan::get();

		return view('permohonan.permohonanEdit')->with('permohonan',$permohonan)
		->with('perusahaan',$perusahaan)->with('kode_peralatan',$kode_peralatan);
	}

	
	public function update($id,Request $request)
	{
		$permohonan = \App\permohonan::find($id);
		$pemeriksaan_ulang = ($request->pemeriksaan_ulang == null) ? 0 : 1 ;
		
		$permohonan->no_permohonan = $request->no_permohonan;
		$permohonan->no_surat = $request->no_surat;
		$permohonan->tgl_surat = $request->tgl_surat;
		
		$permohonan->tanggal_permohonan = $request->tanggal_permohonan;
		$permohonan->pemeriksaan_ulang = $pemeriksaan_ulang;
		$permohonan->kode_perusahaan = $request->kode_perusahaan;
		$permohonan->nama_pemohon = $request->nama_pemohon;
		$permohonan->jabatan = $request->jabatan;
		$permohonan->jenis_peralatan = $request->jenis_peralatan;
		$permohonan->kode_peralatan = $request->kode_peralatan;
	
		$permohonan->kondisi = $request->kondisi;
		$permohonan->save();

		return redirect('permohonan/permohonan/index');
	}

	
	public function destroy($id)
	{
		$permohonan = \App\permohonan::find($id);
		$permohonan->delete();

		return redirect('permohonan/permohonan/index');
	}


	public function getKodeperalatan($jenis_peralatan='',$kode_perusahaan = 'all'){
		$text = '';
		$arraytext = array();

		if ($kode_perusahaan != 'all') {
			$text = 'UPPER(kode_perusahaan) = ?';
			array_push($arraytext, strtoupper($kode_perusahaan));
		}
	if ($arraytext) {
		if ($jenis_peralatan == 'amp') {
			$isi = \App\AmpMast::orderBy('kode_amp','ASC')->whereRaw($text,$arraytext)->get();
		}elseif ($jenis_peralatan == 'bp') {
			$isi = \App\BpMast::orderBy('kode_bp','ASC')->whereRaw($text,$arraytext)->get();
		}elseif ($jenis_peralatan == 'quary') {
			$isi = \App\Quary::orderBy('kode_quary','ASC')->whereRaw($text,$arraytext)->get();
		}
	}else{
		if ($jenis_peralatan == 'amp') {
			$isi = \App\AmpMast::orderBy('kode_amp','ASC')->get();
		}elseif ($jenis_peralatan == 'bp') {
			$isi = \App\BpMast::orderBy('kode_bp','ASC')->get();
		}elseif ($jenis_peralatan == 'quary') {
			$isi = \App\Quary::orderBy('kode_quary','ASC')->get();
		}
	}
		

		return $isi;
	}


	public function tgl_periksa_post(Request $request){
		
	}

}
