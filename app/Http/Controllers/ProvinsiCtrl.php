<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProvinsiCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function provinsi_get($value=''){
		return \App\Provinsi::orderBy('kode_provinsi','ASC')->get();
	}
	public function index()
	{

		$provinsi = \App\Provinsi::get();
		return view('master.provinsi')->with('provinsi',$provinsi);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('master.provinsiAdd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\Provinsi::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/provinsi/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$provinsi = new \App\Provinsi();

		$provinsi->kode_provinsi = $request->kode_provinsi;
		$provinsi->nama_provinsi = $request->nama_provinsi;
		$provinsi->save();

		return redirect('master/provinsi/index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$provinsi = \App\Provinsi::find($id);

		return view('master.provinsiEdit')->with('provinsi',$provinsi);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$provinsi = \App\Provinsi::find($id);
		$provinsi->kode_provinsi = $request->kode_provinsi;
		$provinsi->nama_provinsi = $request->nama_provinsi;
		$provinsi->save();

		return redirect('master/provinsi/index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$provinsi = \App\Provinsi::find($id);
		$provinsi->delete();

		return redirect('master/provinsi/index');
	}

}
