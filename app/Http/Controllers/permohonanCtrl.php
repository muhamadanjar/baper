<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class permohonanCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
	}
	
	public function index(){

		$permohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->get();
		return view('permohonan.permohonan')->with('permohonan',$permohonan);
	}

	
	public function create()
	{
		$kode_peralatan = \App\AmpMast::get();
		
		$perusahaan = \App\perusahaan::get();
		return view('permohonan.permohonanAdd')->with('perusahaan',$perusahaan);
	}

	
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\permohonan::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('permohonan/permohonan/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$permohonan = new \App\permohonan();

		
		$permohonan->no_permohonan = $request->no_permohonan;
		$permohonan->tanggal_permohonan = $request->tanggal_permohonan;
		$permohonan->pemeriksaan_ulang = $request->pemeriksaan_ulang;
		$permohonan->kode_perusahaan = $request->kode_perusahaan;
		$permohonan->nama_pemohon = $request->nama_pemohon;
		$permohonan->jabatan = $request->jabatan;
		$permohonan->jenis_peralatan = $request->jenis_peralatan;
		if ($request->jenis_peralatan == 'amp') {
			$permohonan->kode_peralatan = $request->kode_peralatan;
		}else{
			$permohonan->kode_peralatan = $request->kode_peralatan;
		}
		$permohonan->kondisi = $request->kondisi;
		$permohonan->save();

		return redirect('permohonan/permohonan/index');
	}

	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		$permohonan = \App\permohonan::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_amp','=','tbl_amp.kode_amp')->find($id);
		
		$kode_peralatan = \App\AmpMast::get();
		
		$perusahaan = \App\perusahaan::get();

		return view('permohonan.permohonanEdit')->with('permohonan',$permohonan)
		->with('perusahaan',$perusahaan)->with('kode_peralatan',$kode_peralatan);
	}

	
	public function update($id,Request $request)
	{
		$permohonan = \App\permohonan::find($id);
		$permohonan->no_permohonan = $request->no_permohonan;
		$permohonan->tanggal_permohonan = $request->tanggal_permohonan;
		$permohonan->pemeriksaan_ulang = $request->pemeriksaan_ulang;
		$permohonan->kode_perusahaan = $request->kode_perusahaan;
		$permohonan->nama_pemohon = $request->nama_pemohon;
		$permohonan->jabatan = $request->jabatan;
		$permohonan->jenis_peralatan = $request->jenis_peralatan;
		if ($request->jenis_peralatan == 'amp') {
			$permohonan->kode_amp = $request->kode_peralatan;
		}else{
			$permohonan->kode_bp = $request->kode_peralatan;
		}
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


	public function getKodeperalatan($jenis_peralatan=''){
		
		if ($jenis_peralatan == 'amp') {
			$isi = \App\AmpMast::orderBy('kode_amp','ASC')->get();
		}elseif ($jenis_peralatan == 'bp') {
			$isi = \App\BpMast::orderBy('kode_bp','ASC')->get();
		}elseif ($jenis_peralatan == 'quary') {
			$isi = \App\Quary::orderBy('kode_quary','ASC')->get();
		}

		return $isi;
	}

}
