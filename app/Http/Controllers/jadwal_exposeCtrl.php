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

	
	public function datahasil()
	{
		$jadwal_expose = \App\jadwal_expose::select('tbl_permohonan.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.telp','tbl_amp.merk','tbl_amp.tipe','tbl_amp.tahun_buat','tbl_amp.kapasitas','tbl_amp.lokasi')
		->join('tbl_perusahaan', 'tbl_permohonan.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan')
		->join('tbl_amp','tbl_permohonan.kode_peralatan','=','tbl_amp.kode_amp')->get();
		
		return view('jadwal.hasil_expose')->with('jadwal_expose',$jadwal_expose);
	}
	public function postTanggal(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			
			$jadwal_expose = \App\jadwal_expose::find($input['id']);
			$date1 = strtr($input['tanggal'], '/', '-');
			print_r($input);
			exit;
			if(isset($jadwal_expose->id)){
				$jadwal_expose->tanggal_expose = $date1;
			
				if($jadwal_expose->save())
				{
					echo json_encode(array('error'=>false,"message"=>"success"));
					exit;
				}
			}
			
		}
		echo json_encode(array('error'=>true,"message"=>"false"));
		exit;
	}
	/* ---- end jadwal expose dan hasil pemeriksaan */ 

	
	public function edit($id)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);

		return view('jadwal.jadwal_exposeEdit')->with('jadwal_expose',$jadwal_expose);
	}
	public function tanggal($id)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);

		return view('jadwal.jadwal_exposeTanggal')->with('jadwal_expose',$jadwal_expose);
	}
	public function hasil($id)
	{
		$jadwal_expose = \App\jadwal_expose::whereId($id)->first();
		
		return view('jadwal.jadwal_exposehasil')->with('jadwal_expose',$jadwal_expose);
	}
	
	public function update($id,Request $request)
	{
		//$jadwal_expose = \App\jadwal_expose::find($id);
		$jadwal_expose = \App\jadwal_expose::whereId($id)->first();
		$jadwal_expose->no_undangan = $request->no_undangan;
		$jadwal_expose->tgl_undangan = $request->tgl_undangan;
		$jadwal_expose->hasil_expose = $request->hasil_expose;
		$jadwal_expose->kondisi_pemeriksaan = $request->kondisi_pemeriksaan;
		$jadwal_expose->save();

		return redirect('jadwal/jadwal_expose/datahasil');
	}
}
