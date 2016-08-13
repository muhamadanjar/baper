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
		$amp = \App\AmpMast::get();
		$tipe = \App\AmpMast::select('tipe')->distinct('tipe')->get();
		$merk = \App\AmpMast::select('merk')->distinct('merk')->get();
		$bp = \App\BpMast::get();
		$quary = \App\Quary::get();
		$_provinsi = $this->_provinsi->provinsi_get();
		return view('map.google')->with('amp',$amp)->with('bp',$bp)->with('quary',$quary)
		->with('tipe',$tipe)->with('merk',$merk)->with('provinsi',$_provinsi);
	}

}
