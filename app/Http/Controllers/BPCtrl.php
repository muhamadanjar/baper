<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pm_amp_1_unit_bin_dingin as PMAMP1UBD;
use Illuminate\Http\Request;

class BPCtrl extends Controller {


	

	public function index()
	{
		//
	}

	
	public function create()
	{
		//
	}


	public function store()
	{
		//
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}
	
	
	public function pem_pm_1_unit_persediaan(){
		return view('bp.pm_1_unit_persediaan');
	}
	public function pem_pm_1_unit_penimbangan(){
		return view('bp.pm_1_unit_penimbangan');
	}
	public function pem_pm_1_unit_pencampuran(){
		return view('bp.pm_1_unit_pencampuran');
	}
	public function pem_pm_1_unit_transport(){
		return view('bp.pm_1_unit_transport');
	}
	
	public function pem_pm_1_unit_perediaan_post(Request $request){
		$destinationPath = public_path('images');
		$fileName = str_random(20) . '.' . $request->file('foto_unit')->getClientOriginalExtension();	
		
		$pm = new PMAMP1UBD();
		$pm->kode_periksa = $request->kode_periksa;
		$pm->pelat_pemisah = $request->pelat_pemisah;
		$pm->dinding_bin = $request->dinding_bin;
		$pm->bukaan_pintu = $request->bukaan_pintu;
		$pm->pintu_pengatur = $request->pintu_pengatur;
		$pm->skala_meter = $request->skala_meter;
		$pm->motor_penggerak = $request->motor_penggerak;
		$pm->penggetar = $request->penggetar;
		$pm->pengatur_kecepatan = $request->pengatur_kecepatan;
		$pm->konstruksi_pendukung = $request->konstruksi_pendukung;
		$pm->pelindung_bin = $request->pelindung_bin;
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->kesimpulan_unit_bin_dingin = $request->kesimpulan_unit_bin_dingin;
		$pm->foto_unit = $fileName;

		$pm->save();
		
		return redirect('amp/pemeriksa');	
	}

}
