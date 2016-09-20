<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\AHelper;
use Illuminate\Http\Request;

class PerusahaanCtrl extends Controller {

	public function __construct($value=''){
		$this->middleware('auth');
		$this->ahelper = new AHelper();
	}

	public function index()
	{

		$perusahaan = \App\perusahaan::get();
		return view('master.perusahaan')->with('perusahaan',$perusahaan);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kode = $this->ahelper
			->otomatis_kode_perusahaan('P','tbl_perusahaan','kode_perusahaan');
		
		return view('master.perusahaanAdd')->withKode($kode);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\perusahaan::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/perusahaan/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$perusahaan = new \App\perusahaan();

		$perusahaan->kode_perusahaan = $request->kode_perusahaan;
		$perusahaan->nama_perusahaan = $request->nama_perusahaan;
		$perusahaan->pic = $request->pic;
		$perusahaan->telp = $request->telp;
		$perusahaan->alamat = $request->alamat;
		$perusahaan->save();

		return redirect('master/perusahaan/index');
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
		$perusahaan = \App\perusahaan::find($id);

		return view('master.perusahaanEdit')->with('perusahaan',$perusahaan);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$perusahaan = \App\perusahaan::find($id);
		$perusahaan->kode_perusahaan = $request->kode_perusahaan;
		$perusahaan->nama_perusahaan = $request->nama_perusahaan;
		$perusahaan->pic = $request->pic;
		$perusahaan->telp = $request->telp;
		$perusahaan->alamat = $request->alamat;
		$perusahaan->save();

		return redirect('master/perusahaan/index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$perusahaan = \App\perusahaan::find($id);
		$perusahaan->delete();

		return redirect('master/perusahaan/index');
	}

	public function getPerusahaan($kode_perusahaan=''){
		return \App\perusahaan::where('kode_perusahaan',$kode_perusahaan)->first();
	}

}
