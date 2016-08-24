<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class jadwal_exposeCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
	}
	
	public function index()
	{
		$jadwal_expose = \App\jadwal_expose::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->get();
		return view('jadwal.jadwal_expose')->with('jadwal_expose',$jadwal_expose);
	}

	
	public function edit($id)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);

		return view('jadwal.jadwal_exposeEdit')->with('jadwal_expose',$jadwal_expose);
	}

	
	public function update($id,Request $request)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);
		$jadwal_expose->tanggal_expose = $request->tanggal_expose;
		$jadwal_expose->save();

		return redirect('jadwal/jadwal_expose/index');
	}
}
