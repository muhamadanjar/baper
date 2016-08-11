<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BpMastCtrl extends Controller {

	
	public function getBP(){
		return \App\BpMast::get();
	}
	
	public function index()
	{

		$bp = \App\BpMast::get();
		return view('master.bp')->with('bp',$bp);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('master.bpAdd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\bpMast::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/bp/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$bp = new \App\BpMast();

		$bp->kode_bp = $request->kode_bp;
		$bp->merk = $request->merk;
		$bp->tipe = $request->tipe;
		$bp->tahun_buat = $request->tahun_buat;
		$bp->kapasitas = $request->kapasitas;
		$bp->lokasi = $request->lokasi;
		$bp->longtitude = $request->longtitude;
		$bp->latitude = $request->latitude;
		$bp->save();

		return redirect('master/bp/index');
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
		$bp = \App\bpMast::find($id);

		return view('master.bpEdit')->with('bp',$bp);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$bp = \App\bpMast::find($id);
		$bp->kode_bp = $request->kode_bp;
		$bp->merk = $request->merk;
		$bp->tipe = $request->tipe;
		$bp->tahun_buat = $request->tahun_buat;
		$bp->kapasitas = $request->kapasitas;
		$bp->lokasi = $request->lokasi;
		$bp->longtitude = $request->longtitude;
		$bp->latitude = $request->latitude;
		$bp->save();

		return redirect('master/bp/index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$bp = \App\bpMast::find($id);
		$bp->delete();

		return redirect('master/bp/index');
	}

}
