<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class jadwal_exposeCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jadwal_expose = \App\jadwal_expose::get();
		return view('jadwal.jadwal_expose')->with('jadwal_expose',$jadwal_expose);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);

		return view('jadwal.jadwal_exposeEdit')->with('jadwal_expose',$jadwal_expose);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$jadwal_expose = \App\jadwal_expose::find($id);
		$jadwal_expose->tanggal_expose = $request->tanggal_expose;
		$jadwal_expose->save();

		return redirect('jadwal/jadwal_expose/index');
	}
}
