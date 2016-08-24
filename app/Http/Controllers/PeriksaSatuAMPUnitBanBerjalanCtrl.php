<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PeriksaSatuAMPUnitBanBerjalanCtrl extends Controller {

	public function __construct($value=''){
		$this->_s = new AHelper();
	}

	public function periksaSatuAMPUnitBanBerjalan(){
		$id_periksa = session('id_periksa');
		
		$amp_banberjalan = \App\PeriksaSatuAMPUnitBanBerjalan::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		//dd($pm_satu_amp_bindingin);

		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_1_unit_bin_dingin')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_bindingin',$pm_satu_amp_bindingin);
	}

}
