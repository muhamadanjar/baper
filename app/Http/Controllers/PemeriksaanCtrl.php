<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PemeriksaanCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), [
            'tgl_periksa' => 'required',
            'kode_periksa' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/amp/listpemeriksaanamp/index')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        	session()->forget('id_periksa');
			$id = \DB::table('tbl_amp_1_periksa')->insert(
				['kode_periksa' => $request->kode_periksa, 'tgl_periksa' => $request->tgl_periksa]
			);
			session()->put('id_periksa', $id);
			return redirect('amp/listpemeriksaanamp/ubah-'.$request->kode_periksa);
        }

		
		//return 'Data Berhasil di tambah';
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
