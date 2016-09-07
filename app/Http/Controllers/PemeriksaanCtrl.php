<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PemeriksaanCtrl extends Controller {

	public function getPemeriksaan1AMP($kode_periksa=''){
		if ($kode_periksa != 'all') {
			$data =  \DB::table('tbl_amp_1_periksa')->where('kode_periksa',$kode_periksa)->get();
		}else{
			$data =  \DB::table('tbl_amp_1_periksa')->get();
		}
		$baru = array();
		$no = 1;
		foreach ($data as $key => $value) {
			/*$baru[$key]['id_periksa'] = $value->id_periksa;
			$baru[$key]['tgl_periksa'] = $value->tgl_periksa;
			$baru[$key]['periksake'] = $no;
			$baru[$key]['kode_periksa'] = $value->kode_periksa;*/
			$baru[$key] = $value;
			$no++;
		}

		array_unshift($baru,array("id_periksa" => "ID Periksa","kode_periksa" => "Kode Periksa","tgl_periksa" => "Tanggal Periksa","kesimpulan" => "Status"));
		return $baru;
	}	
	public function store(Request $request){
		$validator = \Validator::make($request->all(), [
            'tgl_periksa' => 'required',
            'kode_periksa' => 'required',
        ]);
		$tahap = $request->tahap;
		if ($tahap == 2) {
			if ($validator->fails()) {
	            return redirect('/amp/listpemeriksaanamp/index')
	                        ->withErrors($validator)
	                        ->withInput();
	        }else{
	        	session()->forget('id_periksa');
	        	$periksasatuamp = new \App\AmpPeriksaDua();
	        	$periksasatuamp->kode_periksa = $request->kode_periksa;
	        	$periksasatuamp->tgl_periksa = $request->tgl_periksa;
				$periksasatuamp->save();

				session()->put('id_periksa', $periksasatuamp->id_periksa);
				return redirect('amp/listpemeriksaanamp2/ubah-'.$periksasatuamp->id_periksa);
	        }
		}else{
			if ($validator->fails()) {
	            return redirect('/amp/listpemeriksaanamp/index')
	                        ->withErrors($validator)
	                        ->withInput();
	        }else{
	        	session()->forget('id_periksa');
	        	$periksasatuamp = new \App\AmpPeriksaSatu();
	        	$periksasatuamp->kode_periksa = $request->kode_periksa;
	        	$periksasatuamp->tgl_periksa = $request->tgl_periksa;
				$periksasatuamp->save();

				session()->put('id_periksa', $periksasatuamp->id_periksa);
				return redirect('amp/listpemeriksaanamp/ubah-'.$periksasatuamp->id_periksa);
	        }	
		}
        

		
		//return 'Data Berhasil di tambah';
	}
	public function getPemeriksaan2AMP($kode_periksa=''){
		if ($kode_periksa != 'all') {
			$data =  \DB::table('tbl_amp_2_periksa')->where('kode_periksa',$kode_periksa)->get();
		}else{
			$data =  \DB::table('tbl_amp_2_periksa')->get();
		}
		$baru = array();
		$no = 1;
		foreach ($data as $key => $value) {
			/*$baru[$key]['id_periksa'] = $value->id_periksa;
			$baru[$key]['tgl_periksa'] = $value->tgl_periksa;
			$baru[$key]['periksake'] = $no;
			$baru[$key]['kode_periksa'] = $value->kode_periksa;*/
			$baru[$key] = $value;
			$no++;
		}

		array_unshift($baru,array("id_periksa" => "ID Periksa","kode_periksa" => "Kode Periksa","tgl_periksa" => "Tanggal Periksa","kesimpulan" => "Status"));
		return $baru;
	}

	public function store2(Request $request){
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
        	$periksasatuamp = new \App\AmpPeriksaDua();
        	$periksasatuamp->kode_periksa = $request->kode_periksa;
        	$periksasatuamp->tgl_periksa = $request->tgl_periksa;
			$periksasatuamp->save();

			session()->put('id_periksa', $periksasatuamp->id_periksa);
			return redirect('amp/listpemeriksaanamp2/ubah-'.$periksasatuamp->id_periksa);
        }

		
		//return 'Data Berhasil di tambah';
	}
	

}
