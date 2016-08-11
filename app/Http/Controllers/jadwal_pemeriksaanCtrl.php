<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class jadwal_pemeriksaanCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::get();
		return view('jadwal.jadwal_pemeriksaan')->with('jadwal_pemeriksaan',$jadwal_pemeriksaan);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	
	public function edit($id)
	{
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::find($id);

		return view('jadwal.jadwal_pemeriksaanEdit')->with('jadwal_pemeriksaan',$jadwal_pemeriksaan);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$jadwal_pemeriksaan = \App\jadwal_pemeriksaan::find($id);
		$jadwal_pemeriksaan->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
		$jadwal_pemeriksaan->save();

		return redirect('jadwal/jadwal_pemeriksaan/index');
	}

}
