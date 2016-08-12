<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KabupatenCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
	}

	public function index(){
		$provinsi = \App\Provinsi::get();
		$kabupaten = \App\Kabupaten::get();
		return view('master.kabupaten')->with('provinsi',$provinsi)->with('kabupaten',$kabupaten);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('master.kabupatenAdd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\Kabupaten::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/provinsi/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$kabupaten = new \App\Kabupaten();

		$kabupaten->kode_kabupaten = $request->kode_kabupaten;
		$kabupaten->nama_kabupaten = $request->nama_kabupaten;
		$kabupaten->save();

		return redirect('master/kabupaten/index');
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

	public function show_kabupaten($kode_provinsi){
		return \App\Kabupaten::where('kode_provinsi',$kode_provinsi)->get();
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$kabupaten = \App\Kabupaten::find($id);

		return view('master.kabupatenEdit')->with('kabupaten',$kabupaten);
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
