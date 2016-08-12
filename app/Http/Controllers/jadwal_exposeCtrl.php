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
		$jadwal_expose = \App\jadwal_expose::get();
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
