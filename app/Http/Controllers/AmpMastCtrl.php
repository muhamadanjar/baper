<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AmpMastCtrl extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}
	
	public function index()
	{

		$amp = \App\AmpMast::get();
		return view('master.amp')->with('amp',$amp);
	}

	public function getAMP($id=''){
		if(empty($id) or $id=='null') {
			$isi = \App\AmpMast::get();
		}else{
			$isi = \App\AmpMast::where('kode_amp',$id)->first();
		}
		return $isi;
	}

	public function getAmpMap($merk='',$kapasitas='',$kode_provinsi='',$kondisi=''){
		$text = '';
		$arraytext = array();

		if ($merk != 'all') {
			$text = 'UPPER(merk) = ?';
			array_push($arraytext, strtoupper($merk));
		}
		if ($kapasitas != 'all') {
			$text = (empty($text)) ? '(kapasitas) = ?' : $text.' AND (kapasitas) = ?' ;
			array_push($arraytext, strtoupper($kapasitas));	
		}
		if ($kode_provinsi != 'all') {
			$text = (empty($text)) ? 'UPPER(tbl_amp.kode_provinsi) = ?' : $text.' AND UPPER(tbl_amp.kode_provinsi) = ?' ;
			array_push($arraytext, strtoupper($kode_provinsi));			
		}

		if ($kondisi != 'all') {
			$text = (empty($text)) ? 'UPPER(kondisi) = ?' : $text.' AND UPPER(kondisi) = ?' ;
			array_push($arraytext, strtoupper($kondisi));			
		}
		
		if ($arraytext) {
			
			$dbquery = \App\AmpMast::select('tbl_amp.*','tbl_perusahaan.nama_perusahaan','tbl_provinsi.nama_provinsi','tbl_kabupaten.nama_kabupaten')
			->join('tbl_provinsi',function($join){
				$join->on('tbl_amp.kode_provinsi', '=', 'tbl_provinsi.kode_provinsi');
			})
			->join('tbl_kabupaten',function($join){
				$join->on('tbl_amp.kode_kabupaten', '=', 'tbl_kabupaten.kode_kabupaten');
			})
			->join('tbl_perusahaan',function($join){
				$join->on('tbl_amp.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan');
			})
			->orderBy('kode_amp','ASC')
			->whereRaw($text,
				$arraytext
			)->get();


		}else{
			$dbquery = \App\AmpMast::select('tbl_amp.*','tbl_perusahaan.nama_perusahaan','tbl_provinsi.nama_provinsi','tbl_kabupaten.nama_kabupaten')
			->join('tbl_provinsi',function($join){
				$join->on('tbl_amp.kode_provinsi', '=', 'tbl_provinsi.kode_provinsi');
			})
			->join('tbl_kabupaten',function($join){
				$join->on('tbl_amp.kode_kabupaten', '=', 'tbl_kabupaten.kode_kabupaten');
			})
			->join('tbl_perusahaan',function($join){
				$join->on('tbl_amp.kode_perusahaan', '=', 'tbl_perusahaan.kode_perusahaan');
			})
			->orderBy('kode_amp','ASC')
			->get();
		}
		
		session()->put('store_data_map',$dbquery);
			
			
			//->whereRaw('UPPER(kode_provinsi) LIKE ?',array(strtoupper('%'.$kode_provinsi.'%')),'OR')
			//->whereRaw('UPPER(kode_kabupaten) LIKE ?',array(strtoupper('%'.$kode_kabupaten.'%')),'OR')
			//->whereRaw('UPPER(kode_perusahaan) LIKE ?',array(strtoupper('%'.$kode_perusahaan.'%')),'OR')
			//->whereRaw('UPPER(kondisi) LIKE ?',array(strtoupper('%'.$kondisi.'%')),'OR')
			
		//return $dbquery;
		return json_encode( $dbquery, JSON_NUMERIC_CHECK );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$provinsi = \App\Provinsi::orderBy('kode_provinsi','ASC')->get();
		$perusahaan = \App\Perusahaan::get();
		return view('master.ampAdd')->with('provinsi',$provinsi)->with('perusahaan',$perusahaan);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$validator = \Validator::make($request->all(), \App\ampMast::$rules);
		/**
		 if(!$validator->passes()) {
			return \Redirect::to('master/amp/index')
			->with('message', \AHelper::format_message('Error,Coba lagi','cancel'))
			->withErrors($validator)
			->withInput();
		}
		*/

		$amp = new \App\ampMast();

		$amp->kode_amp = $request->kode_amp;
		$amp->merk = $request->merk;
		$amp->tipe = $request->tipe;
		$amp->tahun_buat = $request->tahun_buat;
		$amp->kapasitas = $request->kapasitas;
		$amp->lokasi = $request->lokasi;
		$amp->longtitude = $request->longtitude;
		$amp->latitude = $request->latitude;
		$amp->kode_provinsi = $request->kode_provinsi;
		$amp->kode_kabupaten = $request->kode_kabupaten;
		$amp->kode_perusahaan = $request->kode_perusahaan;
		$amp->save();

		return redirect('master/amp/index');
	}

	
	public function edit($id)
	{
		$amp = \App\AmpMast::find($id);
		$provinsi = \App\Provinsi::orderBy('kode_provinsi','ASC')->get();

		$kabupaten = \App\Kabupaten::where('kode_provinsi',$amp->kode_provinsi)->get();
		
		$perusahaan = \App\Perusahaan::get();
		return view('master.ampEdit')->with('amp',$amp)
			->with('provinsi',$provinsi)->with('kabupaten',$kabupaten)
			->with('perusahaan',$perusahaan);
	}

	
	public function update($id,Request $request)
	{
		$amp = \App\ampMast::find($id);
		$amp->kode_amp = $request->kode_amp;
		$amp->merk = $request->merk;
		$amp->tipe = $request->tipe;
		$amp->tahun_buat = $request->tahun_buat;
		$amp->kapasitas = $request->kapasitas;
		$amp->lokasi = $request->lokasi;
		$amp->longtitude = $request->longtitude;
		$amp->latitude = $request->latitude;
		$amp->kode_provinsi = $request->kode_provinsi;
		$amp->kode_kabupaten = $request->kode_kabupaten;
		$amp->kode_perusahaan = $request->kode_perusahaan;
		$amp->save();

		return redirect('master/amp/index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
		$amp = \App\ampMast::find($id);
		$amp->delete();

		return redirect('master/amp/index');
	}

	

}
