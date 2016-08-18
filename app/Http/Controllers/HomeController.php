<?php namespace App\Http\Controllers;

use App\Http\Controllers\ProvinsiCtrl;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	
	
	public function __construct(){
		//$this->middleware('auth');
		$this->_provinsi = new ProvinsiCtrl();
	
	}

	
	public function index()
	{
		$amp = \App\AmpMast::select('tbl_amp.*','tbl_perusahaan.nama_perusahaan','tbl_provinsi.nama_provinsi','tbl_kabupaten.nama_kabupaten')
		->join('tbl_perusahaan','tbl_perusahaan.kode_perusahaan','=','tbl_amp.kode_perusahaan')
		->join('tbl_provinsi','tbl_provinsi.kode_provinsi','=','tbl_amp.kode_provinsi')
		->join('tbl_kabupaten','tbl_kabupaten.kode_kabupaten','=','tbl_amp.kode_kabupaten')
		->get();
		$kapasitas = \App\AmpMast::select('kapasitas')->distinct('kapasitas')->get();
		$merk = \App\AmpMast::select('merk')->distinct('merk')->get();
		$bp = \App\BpMast::get();
		$quary = \App\Quary::get();
		$_provinsi = $this->_provinsi->provinsi_get();
		return view('map.google')->with('amp',$amp)->with('bp',$bp)->with('quary',$quary)
		->with('kapasitas',$kapasitas)->with('merk',$merk)->with('provinsi',$_provinsi);
	}

}
