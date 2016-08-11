<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuaryCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function getQUARY(){
		return \App\Quary::get();
	}

	public function index()
	{

		$quary = \App\quary::get();
		return view('master.quary')->with('quary',$quary);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('master.quaryAdd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\quary::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/quary/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$quary = new \App\quary();

		$quary->kode_quary = $request->kode_quary;
		$quary->jenis_quary = $request->jenis_quary;
		$quary->save();

		return redirect('master/quary/index');
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
		$quary = \App\quary::find($id);

		return view('master.quaryEdit')->with('quary',$quary);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$quary = \App\quary::find($id);
		$quary->kode_quary = $request->kode_quary;
		$quary->jenis_quary = $request->jenis_quary;
		$quary->save();

		return redirect('master/quary/index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$quary = \App\quary::find($id);
		$quary->delete();

		return redirect('master/quary/index');
	}

}
