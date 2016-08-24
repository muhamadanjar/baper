<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PeriksaSatuAMPUnitPengering extends Controller {

	public function periksaSatuAMPUnitPengering(){
		$id_periksa = session('id_periksa');
		$pm_satu_amp_pengering = \App\PeriksaSatuAMPUnitPengering::orderBy('tgl_periksa','DESC')
		->where('id_periksa',$id_periksa)->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}

		return view('amp.pm_1_unit_pengering')
			->with('id_periksa',$id_periksa)
			->with('pm_satu_amp_pengering',$pm_satu_amp_pengering);
	}

}
