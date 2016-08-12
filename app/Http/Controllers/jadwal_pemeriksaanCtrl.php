<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class jadwal_pemeriksaanCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
	}
	
	public function index(){
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::get();
		return view('jadwal.jadwal_pemeriksaan')->with('jadwal_pemeriksaan',$jadwal_pemeriksaan);
	}

	public function edit($id){
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::find($id);

		return view('jadwal.jadwal_pemeriksaanEdit')->with('jadwal_pemeriksaan',$jadwal_pemeriksaan);
	}

	
	public function update($id,Request $request){
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::find($id);
		$jadwal_pemeriksaan->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
		$jadwal_pemeriksaan->save();

		return redirect('jadwal/jadwal_pemeriksaan/index');
	}

}
